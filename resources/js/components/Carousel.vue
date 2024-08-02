<template>
  <section class="carousel-section">
    <Carousel :autoplay="4000" :wrap-around="true">
      <Slide v-for="(image, index) in images" :key="index">
        <div class="relative">
          <img :src="image.src" alt="Carousel Image" class="carousel__image">
          <div class="absolute bottom-0 left-0 right-0 bg-black bg-opacity-60 text-white p-4">
            <h2 class="text-center text-2xl font-bold mb-2">{{ image.title }}</h2>
            <p class="text-justify">{{ image.text }}</p>
          </div>
        </div>
      </Slide>

      <template #addons>
        <Pagination />
      </template>
    </Carousel>
  </section>
</template>

<script>
import { defineComponent } from 'vue'
import { Carousel, Pagination, Slide } from 'vue3-carousel'
import 'vue3-carousel/dist/carousel.css'

export default defineComponent({
  name: 'Autoplay',
  components: {
    Carousel,
    Slide,
    Pagination,
  },
  data() {
    return {
      images: [
        { 
          src: '/img/carousel/ultimas/1.jpg', 
          title: 'Noticia de ultima hora',
          text: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        },
        { 
          src: '/img/carousel/ultimas/2.jpg',
          title: 'Ejemplo de título',
          text: 'Texto para la imagen 2' 
        },
        { 
          src: '/img/carousel/ultimas/3.jpg',
          title: 'Ejemplo',
          text: 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?' 
        },
        { 
          src: '/img/carousel/ultimas/4.jpg',
          title: 'Hora de la verdad',
          text: 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?' 
        },
      ],
    }
  },
})
</script>

<style scoped>
.carousel__image {
  width: 100%;
  height: auto;
  object-fit: cover;
}

.relative {
  position: relative;
}

.absolute {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
}

.bg-black {
  background-color: black;
}

.bg-opacity-60 {
  background-color: rgba(0, 0, 0, 0.8);
}

.text-white {
  color: white;
}

.p-4 {
  padding: 1rem;
}

.text-center {
  text-align: center;
}

.text-justify {
  text-align: justify;
}

.mb-2 {
  margin-bottom: 0.5rem;
}

.text-2xl {
  font-size: 1.5rem;
}

.font-bold {
  font-weight: 700;
}
</style>
