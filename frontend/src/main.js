import Vue from 'vue'
import Router from 'vue-router'

import App from './App.vue'

// bootstrap
import 'bootstrap'
import './sass/bloom.scss'

import {routes} from './_routes'

Vue.use(Router);

window.Bloom = new Vue({
    router: new Router({mode: 'history', routes}),
    render: (h) => h(App),
    created() {
      console.log('Bloom started');
    }
}).$mount('bloom');
