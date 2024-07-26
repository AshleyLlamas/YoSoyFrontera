import { createApp } from 'vue';
import App from './components/App.vue';
import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faBars, faTimes, faHouse } from '@fortawesome/free-solid-svg-icons';

// Añadir los iconos a la biblioteca
library.add(faBars, faTimes, faHouse);

const app = createApp(App);

// Registrar el componente FontAwesomeIcon globalmente
app.component('font-awesome-icon', FontAwesomeIcon);

app.mount('#app');
