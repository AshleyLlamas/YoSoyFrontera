<template>
    <div class="bg-black shadow-xl text-gray-100 pt-3.5 md:pb-3.5 pb-14 shadow md:flex justify-between items-center relative">
      <!-- Botón de menú móvil -->
      <span @click="toggleMenu" class="absolute md:hidden right-6 cursor-pointer text-4xl z-20">
        <font-awesome-icon :icon="open ? 'fas fa-times' : 'fas fa-bars'"></font-awesome-icon>
      </span>

      <!-- Menú de navegación -->
      <ul class="md:flex md:items-center md:mx-auto md:px-0 px-10 md:pb-0 pb-10 md:static absolute md:w-auto w-full top-14 duration-700 ease-in bg-black z-10"
          :class="{ 'left-0': open, 'left-[-100%]': !open }">
        <li class="md:mx-4">
          <a href="#" class="text-xl hover:text-gray-400">
            <font-awesome-icon icon="fas fa-house"></font-awesome-icon>
          </a>
        </li>
        <li class="md:mx-4" v-for="link in links" :key="link.name">
          <a :href="link.link" class="text-xl hover:text-gray-400">{{ link.name }}</a>
        </li>
      </ul>
    </div>
  </template>

  <script>
  import { ref } from 'vue';

  export default {
    setup() {
      const open = ref(false);
      const links = [
        { name: "Restaurantes y bares", link: "#" },
        { name: "Chamba fronteriza", link: "#" },
        { name: "Salud", link: "#" },
        { name: "Noticias", link: "#" },
        { name: "Hospedaje", link: "#" },
        { name: "Dir comercial", link: "#" },
        { name: "Registrarse", link: "#" },
      ];

      const toggleMenu = () => {
        open.value = !open.value;
      };

      return { links, open, toggleMenu };
    },
  };
  </script>

  <style scoped>
  /* Puedes agregar tus estilos aquí */
  </style>
