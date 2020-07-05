require('./bootstrap');
import Vue from 'vue';
import router from './router/router';
import App from './layouts/App';


const app = new Vue({
    el: '#app',
    components: {App},
    router
});
