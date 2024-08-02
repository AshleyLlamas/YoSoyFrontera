<template>
    <section class="relative flex items-center bg-gray-100 h-10 overflow-hidden">
        <!-- Título en rectángulo azul -->
        <div class="w-1/4 flex-shrink-0 h-full flex items-center justify-center bg-sky-600 text-white text-center trapecio-rectangulo">
          <span class="text-lg font-bold">Noticias</span>
        </div>
    
        <!-- Contenido -->
        <div class="flex-1 flex items-center space-x-4 overflow-x-auto py-2 mx-4 whitespace-nowrap">
        <div v-for="(newsItem, index) in newsItems" :key="index" class="flex items-center">
            <span class="text-sm font-medium">{{ newsItem }}</span>
            <font-awesome-icon v-if="index < newsItems.length - 1" icon="fas fa-circle-arrow-right" class="mx-4 text-sky-600" />
        </div>
        </div>
    </section>
</template>
  
  
<script>
  import { defineComponent } from 'vue';
  
  export default defineComponent({
    setup() {
      const newsItems = [
        'Ayudamiento Tijuana',
        'Amor LGBT',
        'Cultura fronteriza',
        'Nuevo programa de salud',
        'Eventos comunitarios',
      ];
  
      return { newsItems };
    },
  });
</script>

<style scoped>
    section {
        overflow-x: auto;
    }

    .trapecio-rectangulo {
        clip-path: polygon(0 0, 85% 0, 100% 100%, 0% 100%);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.8);
    }
</style>
  