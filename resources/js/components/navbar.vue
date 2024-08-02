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
        <li v-if="user" class="md:mx-4 relative">
          <span @click="toggleDropdown" class="text-xl cursor-pointer hover:text-gray-400">{{ user.name }}</span>
          <ul v-show="dropdownOpen" class="absolute bg-black text-white mt-2 shadow-lg overflow-hidden w-48">
            <li>
              <a href="/user/profile" class="block px-4 py-2 hover:text-gray-400">
                <font-awesome-icon icon="fas fa-user" class="mr-2" /> Mi perfil
              </a>
            </li>
            <li>
              <form method="POST" action="/logout" @submit.prevent="logout">
                <input type="hidden" name="_token" :value="csrfToken">
                <button type="submit" class="block w-full text-left px-4 py-2 hover:text-gray-400">
                  <font-awesome-icon icon="fas fa-sign-out-alt" class="mr-2" /> Cerrar sesión
                </button>
              </form>
            </li>
          </ul>
        </li>
        <li v-else class="md:mx-4">
          <a href="/login" class="text-xl hover:text-gray-400">Iniciar sesión</a>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  import { ref, computed } from 'vue';
  import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
  
  export default {
    props: {
      auth: {
        type: Object,
        required: true,
      },
    },
    components: {
      FontAwesomeIcon,
    },
    setup(props) {
      const open = ref(false);
      const dropdownOpen = ref(false);
      const user = computed(() => props.auth);
  
      const links = [
        { name: "Restaurantes y bares", link: "#" },
        { name: "Chamba fronteriza", link: "#" },
        { name: "Salud", link: "#" },
        { name: "Noticias", link: "#" },
        { name: "Hospedaje", link: "#" },
        { name: "Dir comercial", link: "#" },
      ];
  
      const toggleMenu = () => {
        open.value = !open.value;
      };
  
      const toggleDropdown = () => {
        dropdownOpen.value = !dropdownOpen.value;
      };
  
      const logout = () => {
        fetch('/logout', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': csrfToken.value,
          },
        }).then(() => {
          window.location.reload();
        });
      };
  
      const csrfToken = computed(() => document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
  
      return { links, open, toggleMenu, user, dropdownOpen, toggleDropdown, logout, csrfToken };
    },
  };
  </script>
  
  <style scoped>
  /* Puedes agregar tus estilos aquí */
  </style>
  