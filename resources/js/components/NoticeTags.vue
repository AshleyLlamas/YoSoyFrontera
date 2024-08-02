<template>
    <section class="relative flex items-center h-10 overflow-hidden">
        <div class="w-1/8 mx-2 flex-shrink-0 h-full flex items-center justify-cente text-gray-600 text-center">
            <span class="text-lg font-bold"># Etiquetas principales</span>
        </div>
      <!-- Contenido -->
        <div class="flex-1  flex items-center space-x-2 overflow-x-auto py-2 whitespace-nowrap">
            <span v-for="(tag, i) in newsItems" :key="i" class="inline-block bg-blue-200 text-blue-800 text-xs font-medium px-2 py-1 rounded">
                {{ tag }}
            </span>
        </div>
    </section>
  </template>
  
  <script>
    import { defineComponent } from 'vue';
    
    export default defineComponent({
        setup() {
        const newsItems = [
            'Baja California',
            'Deporte',
            'Hidratación',
            'Tijuana',
            'Puntos de Hidratación',
            'Salud',
        ];
    
        return { newsItems };
        },
    });
  </script>
  
  <style scoped>
  /* Asegúrate de que el contenedor de tags tenga overflow-x auto */
  section {
    overflow-x: auto;
  }
  </style>
  