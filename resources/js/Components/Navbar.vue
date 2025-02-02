<template>
    <nav v-if="canLogin" class="flex flex-1 justify-end bg-green-600 p-10 text-white">
        <Link :href="route('home')" prefetch
            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
        Home
        </Link>
        <Link :href="route('about')" prefetch
            class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
        A propos
        </Link>
        <Link v-if="$page.props.auth.user" :href="route('dashboard')" prefetch
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">

         Dashboard
        </Link>

        <template v-else>

            <Link :href="route('login')" prefetch
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Log in
            </Link>

            <Link v-if="canRegister" :href="route('register')" prefetch
                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
            Register
            </Link>
        </template>
    </nav>

<h1 class="d">mmmmmmmmmmmmmmmmmmmmmmmmm</h1>
</template>

<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
    canLogin: {
        type: Boolean,
        required: true
    },
    canRegister: {
        type: Boolean,
        required: true
    },
});
</script>


