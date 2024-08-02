<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const logoImage = ref('/img/logo.svg');
const circuloImage = ref('/img/circulo.svg');
</script>

<template>
  <Link :href="'/'" class="relative flex justify-center items-center">
    <img 
      :src="logoImage" 
      alt="LogoImage" 
      class="relative max-w-[120px] md:max-w-[150px] lg:max-w-[180px] p-4" 
    />
  </Link>
</template>

<style scoped>
/* Puedes agregar estilos adicionales aquí si es necesario */
</style>
