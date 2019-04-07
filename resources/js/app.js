

require('./bootstrap');

window.Vue = require('vue');
import Router from 'vue-router';


Vue.use(Router);



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('web-tienda', require('./web/Tienda.vue').default);
Vue.component('web-carrito', require('./web/carrito.vue').default);
Vue.component('web-formulario', require('./web/Formulario.vue').default);
Vue.component('admin-productos', require('./admin/productos/Lista.vue').default);
Vue.component('cliente-lista', require('./admin/cliente/Lista.vue').default);
Vue.component('orden-lista', require('./admin/orden/Lista.vue').default);
Vue.component('orden-detail', require('./admin/orden/Detail.vue').default);

let router = new Router({
    routes: [
        {
            path: '/admin/suscripciones',
            component: require('./admin/productos/Lista').default
        },
        {
            path: '/cliente/lista',
            component: require('./admin/cliente/Lista').default
        },
        {
            path: '/orden/lista',
            component: require('./admin/orden/Lista').default
        },
        {
            path: '/orden/detail/:id',
            component: require('./admin/orden/Detail').default
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
