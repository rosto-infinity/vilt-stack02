<template>
    <FrontendLayout :canLogin="canLogin" :canRegister="canRegister">
        <h1>Home page</h1>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
const props = defineProps({
    canLogin: {
        type: Boolean,
        required: true
    },
    canRegister: {
        type: Boolean,
        required: true
    },
});

// Assurez-vous que ces valeurs sont définies correctement
const canLogin = true; // ou false selon votre logique
const canRegister = true; // ou false selon votre logique
</script>