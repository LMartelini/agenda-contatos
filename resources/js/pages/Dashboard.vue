<script setup>
    import AuthenticatedLayout from '@/layouts/AuthenticatedLayout.vue';
    import { Head } from '@inertiajs/vue3';

    const buttonFilters = "rounded-full py-2 px-4 text-gray-800 bg-gray-200 font-medium hover:text-white";
    const colorsFilter = [
        { background: "hover:bg-blue-600", label: "All Contacts" },
        { background: "hover:bg-yellow-600", label: "Family" },
        { background: "hover:bg-red-600", label: "Work" },
        { background: "hover:bg-green-600", label: "Friends" },
        { background: "hover:bg-orange-600", label: "Other" },
    ];

    const props = defineProps({
       clientes: Object 
    });

</script>

<template>
    <Head title="Contact books" />

    <AuthenticatedLayout>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8 flex flex-col gap-8">
                <div class="flex items-center justify-between">
                    <div className="relative w-2/5">
                        <svg 
                            class="w-6 h-6 absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"
                            viewBox="0 0 30 30"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                            >
                            <path 
                                d="M24 24L20.5001 20.5M23 14.5C23 19.1944 19.1944 23 14.5 23C9.80558 23 6 19.1944 6 14.5C6 9.80558 9.80558 6 14.5 6C19.1944 6 23 9.80558 23 14.5Z" 
                                stroke="currentColor" 
                                stroke-width="2" 
                                stroke-linecap="round" 
                                stroke-linejoin="round"
                            />
                        </svg>
                        <input
                            type="text"
                            placeholder="Search by name, email or phone..."
                            className="w-full rounded-lg border border-transparent px-12 py-3 text-base text-gray-100 placeholder-gray-400 focus:outline-none"
                        />
                    </div>

                    <button class="bg-blue-600 py-3 px-4 text-white flex items-center gap-1 rounded-md">
                        <img src="/assets/icons/plus.svg" alt="" className="w-6 h-6 invert brightness-0" />
                        Add Contact
                    </button>
                </div>

                <div class="flex items-center gap-3 justify-start">
                    <button 
                        v-for="(btn, index) in colorsFilter"
                        :key="index"
                        :class="[btn.background, buttonFilters]"
                    >
                        {{ btn.label }}
                    </button>

                </div>
                
                <div
                    class="grid grid-cols-3 gap-4"
                >
                    <div
                        v-for="cliente in clientes" :key="cliente.id"
                        class="p-4 bg-white border border-solid border-gray-200 shadow-md rounded-md flex flex-col"
                    >
                        <div class="flex justify-between">
                            <p class="font-semibold text-lg">{{ cliente.first_name }}</p>
                            <div class="flex gap-2">
                                <button>Editar</button>
                                <button>Excluir</button>
                            </div>
                        </div>
                        <span class="text-sm">{{ cliente.category.name }}</span>
                        <span>{{ cliente.email }}</span>
                        <span>{{ cliente.phone }}</span>
                        <span v-if="cliente.company_name">{{ cliente.company_name }}</span>
                        <hr>
                        <span>{{ cliente.notes }}</span>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
