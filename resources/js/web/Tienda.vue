<template>
    <div id="init" class="container-fluid products-box">
        <div class="row justify-content-md-center">
            <div v-for="product in products" :key="product.id" class="col-md-6 col-lg-4 product">
                <img :src="product.image">
                <h2>{{product.name}}</h2>
                <p>{{product.description}}</p>
                <p class="price">${{product.price}}</p>
                <button v-on:click="addCart(product)" >Agregar</button>
            </div> 
        </div>

    </div>
</template>
<script>

import toastr from 'toastr'
toastr.options ={
  "closeButton": true,
  "timeOut": "10000",
//   "positionClass": "toast-top-center",
  // "progressBar": true,
};
import VueSession from 'vue-session'
var options = {
    persist: true
}

Vue.use(VueSession, options)
export default {

    created(){       
        this.getProducts();
        let carrito = JSON.parse(localStorage.getItem('carrito'));
        if(carrito === null){
            this.carts= [];
        }else{
            this.carts = carrito;
        }    
    },
    data(){
        return{
            products:[],
            carts:[],
            product:''
        }
    },
    methods: {
        getProducts(){
            axios.get('/api/get-products').then(res =>{
                this.products = res.data;
            });  
        },
        addCart(product){                
            if(this.verificarCart(product)==false){
                this.carts.push({
                    id:product.id,
                    name: product.name,
                    price: product.price,
                    code: product.code,
                    image: product.image,
                    quantity:1
                });
            localStorage.setItem('carrito',JSON.stringify(this.carts));    
            }   
           let productsLS = JSON.parse(localStorage.getItem('carrito'));
            let count = productsLS.length;
            document.getElementById("count").innerHTML = count; 
      
          toastr.success('Se agregó al carrito!');           
        },
        verificarCart(product){
            let existe = false;
            let productsLS;
            // Obtenemos el arreglo del local Storage
            productsLS =  JSON.parse(localStorage.getItem('carrito'));
                if(productsLS != null){
                // Iteramos comparando el ID del curso borrado con los del LS
                    productsLS.forEach(function(productLS, index) {
                        if(productLS.id === product.id) {
                            existe = true;
                        }
                    });               
                }
            return  existe ;
        }
    }
    
}
</script>
