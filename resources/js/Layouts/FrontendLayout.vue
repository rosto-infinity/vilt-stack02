<template>
    
    <Navbar :canLogin="canLogin" :canRegister="canRegister"/>
  
    <slot />
</template>

<script setup>
import Navbar from '@/Components/Navbar.vue';
// import useHeads from '@/Composables/useHeads';

// const { canLogin, canRegister } = useHeads();


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

