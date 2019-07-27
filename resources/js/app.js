// require('./bootstrap');

import MainApp from './views/MainApp.vue';
import {routes} from './routes';
import VueRouter from 'vue-router';

/* vuetify */ 
import Vuetify from 'vuetify';
import 'vuetify/dist/vuetify.min.css';
import 'material-design-icons-iconfont/dist/material-design-icons.css'

//Swiper

import VueAwesomeSwiper from 'vue-awesome-swiper'
import 'swiper/dist/css/swiper.css'

//AOS

import AOS from 'aos'
import 'aos/dist/aos.css';

//VeeValidate

import VeeValidate from 'vee-validate';

window.Vue = require('vue');

Vue.use(VueRouter);
Vue.use(Vuetify, {
    iconfont: 'md' // 'md' || 'mdi' || 'fa' || 'fa4'
});
Vue.use(VueAwesomeSwiper, /* { default global options } */)
Vue.use(VeeValidate ,{
  fieldsBagName: 'veeFields'
});

const router = new VueRouter({
    routes,
    mode: 'history'
})

const app = new Vue({
    el: '#app',
    router,
    components:{
        MainApp,
    },

    created() {
        AOS.init();
    },
});
