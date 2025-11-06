<script setup>
import { Head } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});

const buttonsLogIn = "py-3 w-96 rounded shadow-lg text-sm";
const features = "border border-solid border-red w-96 py-3 px-3 rounded-md shadow-sm";
const spanFeatures = "font-semibold text-sm";
const paragraphFeatures = "text-gray-500 text-xs mt-1";
const divFeatures = "flex items-center gap-1"

</script>

<template>
    <Head title="Personal contact book" />
    <body class="bg-gray-100 py-8 min-h-dvh flex flex-col justify-center">
        <header class="flex flex-col text-center items-center gap-5">
            <span class="bg-blue-600 py-4 px-4 rounded-lg">
                <i class="fa-solid fa-book-open text-white"></i>
            </span>
            <div>
                <h1 class="font-bold text-2xl">Contact Book</h1>
                <p class="mt-2">Organize and manage your contacts</p>
            </div>
        </header>

        <main class="mt-8">
            <section class="flex flex-col items-center">
                <button :class="buttonsLogIn" class="bg-blue-600 text-white hover:bg-blue-700">
                    <a :href="route('login')">
                        Sign in
                    </a>
                </button>
                <button :class="buttonsLogIn" class="bg-gray-100 hover:bg-gray-200">
                    <a :href="route('register')">
                        Create Account
                    </a>
                </button>
            </section>

            <section class="flex flex-col items-center mt-10 gap-4">
                <div :class="features">
                    <div :class="divFeatures">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            class="w-6 h-6"
                        >
                            <rect x="3" y="3" width="18" height="18" rx="2" fill="#FACC15" /> 
                            <path
                                d="M8 8h8M8 12h8M8 16h5"
                                stroke="#FEF9C3"
                                stroke-width="1.6"
                                stroke-linecap="round"
                            />
                            <rect x="4" y="3" width="2" height="18" fill="#EAB308" />
                        </svg>
                        <span :class="spanFeatures">Organize Contacts</span>
                    </div>
                    <p :class="paragraphFeatures">Keep all your contacts organized and easily accessible</p>
                </div>
                <div :class="features">
                    <div :class="divFeatures">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="#3B82F6"
                            class="w-6 h-6"
                        >
                            <circle cx="10" cy="10" r="6" fill="#60A5FA" />
                            <line x1="14" y1="14" x2="20" y2="20" stroke="#EC4899" stroke-width="2" />
                        </svg>
                        <span :class="spanFeatures">Quick Search</span>
                    </div>
                    <p :class="paragraphFeatures">Find any contact instantly with powerful search</p>
                </div>
                <div :class="features">
                    <div :class="divFeatures">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24"
                            fill="none"
                            class="w-6 h-6"
                        >
                            <rect x="4" y="3" width="16" height="18" rx="2" fill="#6366F1" />
                            <rect x="6" y="5" width="12" height="14" rx="1" fill="#A78BFA" />
                            <circle cx="12" cy="17" r="1.5" fill="#FACC15" />
                        </svg>
                        <span :class="spanFeatures">Always available</span>
                    </div>
                    <p :class="paragraphFeatures">Access your contacts anytime, anywhere</p>
                </div>
            </section>
        </main>
    </body>
</template>
