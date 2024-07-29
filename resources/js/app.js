import { createApp } from 'vue';
<<<<<<< HEAD
import Navbar from './components/navbar.vue';
import '@fortawesome/fontawesome-free/css/all.css';

createApp(Navbar).mount('#navbar');
=======
import App from './components/App.vue';
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faBars, faTimes, faHouse } from '@fortawesome/free-solid-svg-icons';

// Añadir los iconos a la biblioteca
library.add(faBars, faTimes, faHouse);

const app = createApp(App);

// Registrar el componente FontAwesomeIcon globalmente
app.component('font-awesome-icon', FontAwesomeIcon);

>>>>>>> 343e10350b4f01b0aea4a03df4f8c9a9e282e566
app.mount('#app');
