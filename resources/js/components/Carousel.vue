<template>
  <div class="container">
    <div class="row justify-content-center">
      Carousel
      <div class="col-md-8">
        <Carousel>
          <Slide>
            <img class="img-fluid" src="/img/carousel/1.jpg" alt="">
          </Slide>
          <Slide>
            <img class="img-fluid" src="/img/carousel/2.jpg" alt="">
          </Slide>
          <Slide>
            <img class="img-fluid" src="/img/carousel/3.jpg" alt="">
          </Slide>
          <Slide>
            <img class="img-fluid" src="/img/carousel/4.jpg" alt="">
          </Slide>
        </Carousel>
      </div>
    </div>
  </div>
</template>

<script>
import { Carousel, Slide } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';

export default {
  components: { Carousel, Slide },
};
</script>

<style scoped>
/* Estilos adicionales si es necesario */
</style>
