<template>
    <div class="bg-black shadow-xl text-gray-100 md:pb-0 pb-12 md:flex justify-between items-center relative">
        <!-- Logo y título -->
        <!-- <div class="flex items-center md:mr-auto">
            <span class="text-green-500 text-xl mr-1">
                <i class="bi bi-messenger"></i>
            </span>
            <h1 class="text-xl">Designer</h1>
        </div> -->

        <!-- Botón de menú móvil -->
        <span @click="open = !open" class="absolute md:hidden right-6 cursor-pointer text-4xl z-20">
            <i :class="[open ? 'fas fa-times' : 'fas fa-bars']"></i>
        </span>

        <!-- Menú de navegación -->
        <ul class="md:flex md:items-center md:mx-auto md:px-0 px-10 md:pb-0 pb-10 md:static absolute md:w-auto w-full top-14 duration-700 ease-in bg-black z-10"
            :class="{ 'left-0': open, 'left-[-100%]': !open }">
            <li class="md:mx-4">
                <a href="#" class="text-xl hover:text-gray-400"><i class="fa-solid fa-house"></i></a>
            </li>
            <li class="md:mx-4" v-for="link in links" :key="link.name">
                <a :href="link.link" class="text-xl hover:text-gray-400">{{ link.name }}</a>
            </li>
        </ul>
    </div>
</template>

<script>
import { ref } from 'vue';
import Button from './button.vue';

export default {
    components: {
        Button,
    },
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
        return { links, open };
    },
};
</script>

<style scoped>
/* Aquí puedes agregar estilos específicos para tu componente */
</style>
