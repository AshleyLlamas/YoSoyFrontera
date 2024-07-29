<template>
  <div class="relative flex items-center h-52">
      <div class="w-full h-full absolute top-0 left-0">
          <img :src="backgroundImage" alt="Background" class="w-full h-full object-cover opacity-50">
      </div>
      <div class="absolute bottom-0 right-0 p-4">
          <h1 class="text-green-500 text-4xl text-outline">Un lugar para todos</h1>
          <h1 class="text-white text-4xl font-bold">www.yosoyfrontera.com</h1>
      </div>
      <div class="relative flex justify-between items-center w-full h-full z-10">
          <div class="w-1/3 relative h-full">
              <div class="trapecio-bg absolute inset-0 bg-sky-600 flex justify-center items-center">
              </div>
              <div class="trapecio absolute inset-0 bg-blue-950 flex justify-center items-center">
                  <img :src="logoImage" alt="LogoImage" class="max-w-[120px] md:max-w-[150px] lg:max-w-[200px] p-4">
              </div>
          </div>
      </div>
  </div>
</template>

<script>
  import { defineComponent } from 'vue';

  export default defineComponent({
  name: 'FrontPage',
  data() {
      return {
          backgroundImage: '/img/fondo.jpg',
          logoImage: '/img/logo.svg',
      };
  },
  });
</script>
