// resources/js/app.js
import './bootstrap';
import { createApp } from 'vue';
import Agenda from './components/Agenda.vue';

const app = createApp({});
app.component('agenda', Agenda);
app.mount('#app');