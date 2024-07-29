<script setup>
import { Head, Link } from '@inertiajs/vue3';
import FrontPage from '../Components/FrontPage.vue';
import Navbar from '../Components/Navbar.vue';
import CarouselComponent from '../Components/Carousel.vue';

defineProps({
  canLogin: {
    type: Boolean,
  },
  canRegister: {
    type: Boolean,
  },
  laravelVersion: {
    type: String,
    required: true,
  },
  phpVersion: {
    type: String,
    required: true,
  },
});
</script>

<template>
  <Head>
    <title>Welcome</title>
  </Head>
  <FrontPage />
  <Navbar />
  <div class="container mx-auto px-4 py-8">
    <CarouselComponent />
  </div>
</template>
