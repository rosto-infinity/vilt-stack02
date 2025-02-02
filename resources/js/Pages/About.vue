<template>
    <FrontendLayout :canLogin="canLogin" :canRegister="canRegister">
        <h1>About page</h1>
    </FrontendLayout>
</template>

<script setup>
import FrontendLayout from '@/Layouts/FrontendLayout.vue';
import { defineProps } from 'vue';

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