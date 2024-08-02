<template>
    <div class="container mx-auto">
      <p class="pl-4 text-2xl font-bold text-blue-500">Artículos de interés</p>
      <div class="items-container flex flex-wrap md:flex-nowrap justify-between overflow-x-auto">
        <div v-for="(item, index) in items" :key="index" class="item-container w-full md:w-1/5 flex-none p-4">
          <div class="h-full">
            <div class="image-wrapper">
              <img :src="item.image" alt="Item Image" class="image">
            </div>
            <p class="text-justify leading-normal mt-2">{{ item.text }}</p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        items: [
          { image: '/img/carousel/ultimas/1.jpg', text: 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.' },
          { image: '/img/carousel/ofertas/1.jpg', text: 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.' },
          { image: '/img/carousel/ultimas/2.jpg', text: 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.' },
          { image: '/img/carousel/tijuana/1.jpg', text: 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?.' },
          { image: '/img/carousel/ofertas/2.png', text: 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?.' },
        ]
      }
    }
  }
  </script>
  
  <style scoped>
  .container {
    max-width: 1200px;
  }
  
  .items-container {
    display: flex;
    flex-wrap: wrap;
  }
  
  .item-container {
    width: 100%;
  }
  
  @media (min-width: 768px) {
    .item-container {
      width: 20%; /* Tamaño de las tarjetas en pantallas más grandes */
    }
  }
  
  .image-wrapper {
    width: 100%;
    height: 150px;
    overflow: hidden;
  }
  
  .image {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  
  @media (max-width: 767px) {
    /* Ajustes para pantallas pequeñas */
    .items-container {
      flex-wrap: nowrap; /* Los elementos no envuelven en pantallas pequeñas */
      overflow-x: auto; /* Habilita el scroll horizontal */
    }
  
    .item-container {
      width: 80%; /* Cada item ocupa el 80% del ancho en pantallas pequeñas */
      padding: 16px;
    }
  
    .image-wrapper {
      height: 250px; /* Aumenta la altura de las imágenes en pantallas pequeñas */
    }
  }
  </style>
  