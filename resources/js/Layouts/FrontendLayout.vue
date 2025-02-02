<template>
    
    <Navbar :canLogin="canLogin" :canRegister="canRegister"/>
  
    <slot />
</template>

<script setup>
import Navbar from '@/Components/Navbar.vue';
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


