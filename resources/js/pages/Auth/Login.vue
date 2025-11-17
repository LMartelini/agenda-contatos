<script setup>
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => form.reset('password'),
    });
};

const buttonsLogIn = "py-2 w-full rounded shadow-lg text-sm";

</script>

<template>
    <GuestLayout :register="false">
        <Head title="Log in" />

        <div v-if="status" class="mb-4 text-sm font-medium text-green-600">
            {{ status }}
        </div>

        <div class="mb-4 flex flex-col gap-1">
            <h1 class="font-bold text-xl">Welcome back</h1>
            <p class="text-sm text-gray-400">Sign in to manage your contacts</p>
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email Address" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="you@example.com"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                    placeholder=".........."
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4 block">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600"
                        >Remember me</span
                    >
                </label>
            </div>

            <div class="mt-4 flex flex-col gap-2">
                <button
                    :class="[
                        'bg-blue-600 text-white hover:bg-blue-700',
                        buttonsLogIn,
                        form.processing && 'opacity-25'
                    ]"
                    :disabled="form.processing"
                >
                    Sign in
                </button>

                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="rounded-md font-semibold text-sm text-center text-blue-600 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Forgot your password?
                </Link>
            </div>
        </form>
    </GuestLayout>

</template>
