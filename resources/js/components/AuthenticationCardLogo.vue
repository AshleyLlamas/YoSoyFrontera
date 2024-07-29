<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';

const logoImage = ref('/img/logo.svg');
</script>

<template>
    <Link :href="'/'">
        <img :src="logoImage" alt="LogoImage" class="max-w-[120px] md:max-w-[150px] lg:max-w-[200px] p-4">
    </Link>
</template>
