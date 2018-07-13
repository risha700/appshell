window.Vue = require('vue');

import Vuetify from 'vuetify'
import PortalVue from 'portal-vue'


require('./bootstrap');


Vue.use(Vuetify, {
    theme: {
        primary: '#ff8c1d',
        secondary: '#2398c5',
        accent: '#fff40b',
        error: '#b7424e',
        dark:'#b7424e'
    }
})
Vue.use(PortalVue)

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

require('./password-toggle');
