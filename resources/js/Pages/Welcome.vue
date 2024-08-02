<template>
  <Head>
    <title>Welcome</title>
  </Head>
  <FrontPage />
  <Navbar :auth="auth" />
  <NoticeSection/>
  <NoticeTags/>

  <div class="container mx-auto px-4 py-4 flex flex-col md:flex-row">
    <!-- Carrusel ocupa 2/3 del ancho en pantallas medianas y más grandes, y 100% en pantallas pequeñas -->
    <div class="w-full md:w-2/3 md:pr-4">
      <Carousel />
    </div>
    
    <!-- Tabs ocupa 1/3 del ancho en pantallas medianas y más grandes, y 100% en pantallas pequeñas -->
    <div class="w-full md:w-1/3">
      <Tabs />
    </div>
  </div>
  
  <CarouselMarkButtons />

  <!-- Contenedor de Video y Banner -->
  <div>
    <div class="container mx-auto px-8 sm:px-12 md:px-44 py-12">
      <div class="flex flex-wrap md:flex-nowrap">
        <!-- Video ocupa 2/3 del ancho -->
        <div class="w-full md:w-5/6">
          <Youtube />
        </div>
        
        <!-- Banner ocupa 1/3 del ancho -->
        <div class="w-full md:w-1/6 md:pl-12 mt-12 md:mt-0">
          <img src="/public/img/bannerPublicitario.jpg" alt="Banner Publicitario" class="banner-image w-full h-auto">
        </div>
      </div>
  
      <!-- Banner que ocupa el 100% del ancho -->
      <div class="w-full pt-12">
        <img src="/public/img/bannerPublicitario2.jpg" alt="Banner Publicitario" class="banner-image w-full h-auto">
      </div>
    </div>
  </div>

  <div>
    <NoticeFlexWrap />
  </div>

  <!-- Footer aquí -->
  <Footer />
</template>

<script setup>
import { Head, Link, usePage } from '@inertiajs/vue3';
import FrontPage from '../Components/FrontPage.vue';
import Navbar from '../Components/Navbar.vue';
import NoticeSection from '../Components/NoticeSection.vue';
import NoticeTags from '../Components/NoticeTags.vue';
import Carousel from '../Components/Carousel.vue';
import Tabs from '../Components/Tabs.vue';
import CarouselMarkButtons from '../Components/CarouselMarkButtons.vue';
import Youtube from '../Components/Youtube.vue';
import NoticeFlexWrap from '../Components/NoticeFlexWrap.vue';
import Footer from '../Components/Footer.vue';

const { props } = usePage();
const auth = props.auth;

defineProps({
  canLogin: {
    type: Boolean,
  },
  canRegister: {
    type: Boolean,
  },
  laravelVersion: {
    type: String,
    required: true,
  },
  phpVersion: {
    type: String,
    required: true,
  },
});
</script>
