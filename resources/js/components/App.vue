<!-- resources/js/components/App.vue -->
<template>
    <div>
      <FrontPage />
      <Navbar />
    </div>
  </template>

  <script>
  import Navbar from './Navbar.vue';
  import FrontPage from './FrontPage.vue';

  export default {
    components: {
      Navbar,
      FrontPage,
    },
  };
  </script>

  <style>
  /* Puedes agregar estilos globales aquí */
  </style>
