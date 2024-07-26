<template>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <Carousel>
            <Slide>
              <img class="img-fluid" :src="require('@/img/carousel/1.jpg')" alt="">
            </Slide>
            <Slide>
              <img class="img-fluid" :src="require('@/img/carousel/2.jpg')" alt="">
            </Slide>
            <Slide>
              <img class="img-fluid" :src="require('@/img/carousel/3.jpg')" alt="">
            </Slide>
            <Slide>
              <img class="img-fluid" :src="require('@/img/carousel/4.jpg')" alt="">
            </Slide>
          </Carousel>
        </div>
      </div>
    </div>
  </template>

<script>
    import { Carousel } from 'vue3-carousel';
    import 'vue3-carousel/dist/carousel.css';

    export default {
        components: { Carousel },
        mounted() {
            console.log('Component mounted.');
        }
    }
</script>

<style scoped>
    /* Estilos adicionales si es necesario */
</style>
