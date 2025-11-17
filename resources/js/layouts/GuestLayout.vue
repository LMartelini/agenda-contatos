<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    register: {
        type: Boolean,
        required: true
    }
})
</script>

<template>
    <div
        class="flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0 gap-6"
    >
        <Link href="/">
            <div class="flex items-center gap-3">
                <span class="bg-blue-600 py-4 px-4 rounded-lg">
                    <i class="fa-solid fa-book-open text-white fa-lg"></i>
                </span>
                <h1 class="text-3xl font-bold">Contact Book</h1>
            </div>
        </Link>

        <div
            class="w-full overflow-hidden bg-gray-100 px-6 py-4 border border-solid border-gray-300 shadow-sm sm:max-w-md sm:rounded-lg"
        >
            <slot />
        </div>

        <div class="text-sm">
            <p class="text-gray-500" v-if="register">
                Already have an account?
                <button class="text-blue-600 font-semibold hover:text-blue-900">
                    <a :href="route('login')">
                        Sign in
                    </a>
                </button> 
            </p>

            <p class="text-gray-500" v-else>
                Don't have an account?
                <button class="text-blue-600 font-semibold hover:text-blue-900">
                    <a :href="route('register')">
                        Create one
                    </a>
                </button> 
            </p>
        </div>
    </div>
</template>
