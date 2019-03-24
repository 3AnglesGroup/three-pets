

require('./bootstrap');

window.Vue = require('vue');
import Router from 'vue-router';


Vue.use(Router);



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('web-tienda', require('./web/Tienda.vue').default);
Vue.component('web-carrito', require('./web/carrito.vue').default);
Vue.component('web-formulario', require('./web/Formulario.vue').default);
Vue.component('admin-productos', require('./admin/productos/Lista.vue').default);

let router = new Router({
    routes: [
        {
            path: '/admin/suscripciones',
            component: require('./admin/productos/Lista').default
        },
        {
            path: '/dashboard',
            component: require('./admin/Dashboard').default
        }
    ],
    linkExactActiveClass: 'active',
    // mode: 'history',
});


const app = new Vue({
    el: '#app',
    router
});
