<template>
    <div>
      <!-- Tab Navigation -->
      <div class="flex border-b border-gray-200">
        <button
          v-for="tab in tabs"
          :key="tab.name"
          :class="[
            'p-4',
            'font-semibold',
            'text-gray-700',
            'hover:text-blue-500',
            'focus:outline-none',
            'transition',
            'duration-150',
            'ease-in-out',
            {
              'border-b-2 border-blue-500 text-blue-500': activeTab === tab.name,
              'text-gray-600': activeTab !== tab.name
            }
          ]"
          @click="activeTab = tab.name"
        >
          <font-awesome-icon :icon="tab.icon" class="mr-2" />
          {{ tab.name }}
        </button>
      </div>
      
      <!-- Tab Content -->
      <div>
        <div v-for="tab in tabs" :key="tab.name">
          <div v-show="activeTab === tab.name">
            <div v-for="(item, index) in tab.content" :key="index" class="flex border m-1 p-2 shadow-md">
              <!-- Image -->
              <img :src="item.img" alt="" class="w-24 h-24 object-cover mr-4">
              
              <!-- Text and Tags -->
              <div class="flex-1">
                <!-- Tags -->
                <div class="mb-2">
                  <span v-for="(tag, i) in item.tags" :key="i" class="inline-block bg-blue-200 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded">
                    {{ tag }}
                  </span>
                </div>
                <!-- Text -->
                <p>{{ item.text }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  import { ref } from 'vue';
  import { faClock, faFire, faBolt } from '@fortawesome/free-solid-svg-icons';
  
  const tabs = [
    { 
      name: 'Últimas', 
      icon: faClock, 
      content: [
        { text: 'Texto1 Ultimas', img: '/img/carousel/ultimas/1.jpg', tags: ['BC', 'Cultura'] },
        { text: 'Texto2 Ultimas', img: '/img/carousel/ultimas/2.jpg', tags: ['BC', 'Cultura', 'Noticia'] },
        { text: 'Texto3 Ultimas', img: '/img/carousel/ultimas/3.jpg', tags: ['BC'] },
        { text: 'Texto4 Ultimas', img: '/img/carousel/ultimas/4.jpg', tags: ['BC', 'Sociales'] },
      ]
    },
    { 
      name: 'Ofertas', 
      icon: faFire, 
      content: [
        { text: 'Texto1 Ofertas', img: '/img/carousel/ofertas/1.jpg', tags: ['BC', 'Cultura'] },
        { text: 'Texto2 Ofertas', img: '/img/carousel/ofertas/2.png', tags: ['BC', 'Cultura'] },
      ]
    },
    { 
      name: 'Tijuana', 
      icon: faBolt, 
      content: [
        { text: 'Texto1 Tijuana', img: '/img/carousel/tijuana/1.jpg', tags: ['BC', 'Cultura'] }
      ]
    }
  ];
  
  const activeTab = ref(tabs[0].name);
  </script>
  
  <style scoped>

  </style>
  