<template>
    <section class="bg-gray-200 py-12">
      <Carousel ref="carouselRef" :itemsToShow="3.95" :wrapAround="true" :transition="500">
        <Slide v-for="(image, index) in images" :key="index">
          <div class="carousel__item">
            <img :src="image" alt="Slide Image" class="w-full h-auto object-cover p-2 md:p-8"/>
          </div>
        </Slide>
      </Carousel>
    </section>
  </template>
  
<script>
  import { defineComponent, ref } from 'vue';
  import { Carousel, Pagination, Slide } from 'vue3-carousel';
  import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
  
  import 'vue3-carousel/dist/carousel.css';
  
  export default defineComponent({
    name: 'ImageCarousel',
    components: {
      Carousel,
      Slide,
      Pagination,
      FontAwesomeIcon,
    },
    setup() {
      const images = [
        '/img/carousel/botones/talacha.png', 
        '/img/carousel/botones/banquetaco.png', 
        '/img/carousel/botones/vacunamex.png', 
        '/img/carousel/botones/doctor.png'
      ];
  
      const carouselRef = ref(null);
      return { images, carouselRef };
    },
  });
</script>
  
<style scoped>
  .carousel__slide {
    padding: 5px;
  }
  
  .carousel__viewport {
    perspective: 2000px;
  }
  
  .carousel__track {
    transform-style: preserve-3d;
  }
  
  .carousel__slide--sliding {
    transition: 0.5s;
  }
  
  .carousel__slide {
    opacity: 0.9;
    transform: rotateY(-20deg) scale(0.9);
  }
  
  .carousel__slide--active ~ .carousel__slide {
    transform: rotateY(20deg) scale(0.9);
  }
  
  .carousel__slide--prev {
    opacity: 1;
    transform: rotateY(-10deg) scale(0.95);
  }
  
  .carousel__slide--next {
    opacity: 1;
    transform: rotateY(10deg) scale(0.95);
  }
  
  .carousel__slide--active {
    opacity: 1;
    transform: rotateY(0) scale(1.2); /* Escala aumentada para la imagen central */
  }
  
  .carousel-button {
    background-color: rgba(0, 0, 0, 0.5);
    border: none;
    cursor: pointer;
    padding: 10px;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
  }
  
  .prev-button {
    left: 10px;
  }
  
  .next-button {
    right: 10px;
  }
</style>
  