<template>
<div class="row justify-content-md-start">
    <div class="col-12">
        <h2><span class="min">Tu</span> <span class="max">carrito</span></h2>
    </div>

    <div class="col-md-7 items">
        <div class="item" v-for="(cart,i) in carts" :key="i">
            <div class="image">
                <img :src="cart.image">
            </div>
            <div class="info">
                <span class="name">{{cart.name}}</span>
                <span>COD {{cart.code}}</span>
                <span class="price">$ {{cart.price}}</span>
                <span class="buttons"><a href="#" @click.prevent="eliminar(cart)">Eliminar</a></span>
                <div class="quantity">
                <span>Cantidad</span>
                <input type="text"  :value="cart.quantity">
                <a @click="restarQuantity(cart)" class="des"></a>
                <a @click="sumarQuantity(cart)" class="inc"></a>
                
                </div>
            </div>
        </div>
    </div>
<div class="col-md-5 p-0">
    <div class="form-box">
        <form action=""   onsubmit="return pagar()" class="pay">

        <div class="title">Resumen del pedido</div>
        <div class="separator">
        <span class="details-left">Subtotal</span><span class="details-right">$ {{subtotal}}</span>
        </div>
        <div class="separator bottom">
        <span class="details-left">IVA 5%</span><span class="details-right">${{iva}}</span>
        </div>
        <div class="toggle">
        <div class="title">Datos de envío</div>
        <div class="content">
        <input type="text" v-model="form.nombre" placeholder="Nombre completo">
        <input type="text" v-model="form.cedula" placeholder="Cédula">
        <input type="email" v-model="form.correo" placeholder="Correo">
        <input type="text" v-model="form.celular" placeholder="Celular / Tel">

        <select  @change="ciudad">
        <option>-- Departamento --</option>
        <option 
        :value="departamento.id"
        v-for="departamento in departamentos"
        :key="departamento.id" >
        {{departamento.name}}
        </option>  
        </select>

        <select>
        <option>-- Ciudad --</option>
        <option
        v-for="ciudad in ciudades"
        :key="ciudad.id"
        >{{ciudad.name}}</option>                   
        </select>

        <input type="text" v-model="form.direccion" placeholder="Dirección">
        <input type="text" v-model="form.lugar" placeholder="Apartamento / Casa / Oficina">
        <textarea rows="4" v-model="form.observacion" placeholder="Observaciones"></textarea>
        <label class="checkbox subs">
        <input :checked="form.recibir" v-model="form.recibir" type="checkbox"><span class="checkmark"></span>Acepto recibir información de productos, novedades y promociones!</label>
        </div>
        </div>
        <div class="toggle">
        <div class="title">Método de envío</div>
        <div class="content shipping">
        <span class="details-left"><label class="checkbox"><input type="checkbox"><span class="checkmark"></span>Gastos de envío</label></span><span class="details-right">$6.000</span>
        <small>* $6.000 si es en el área metropolitana de Bogotá.<br>$12.000 a otras ciudades del país.<br>Tu pedido se procesará en 24 horas.</small>
        </div>
        </div>
        <div class="separator">
        <span class="details-left">Total</span><span class="details-right">${{totalApagar}}</span>
        </div>
        <div class="separator">
        <input  @click="pagar" class="btn" value="Pagar">
        </div>
        </form>
        <form action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/" id="myform" method="post">
        <span class="phone">Servicio al cliente  310 584 9856</span>
        <input name="merchantId"         type="hidden"  value="508029">
        <input name="accountId"          type="hidden"  value="512321">
        <input name="description"        type="hidden"  :value="form.descripcion">
        <input name="referenceCode"      type="hidden"  :value="form.referencia">
        <input name="amount"             type="hidden"  :value="form.total">
        <input name="tax"                type="hidden"  value="0">
        <input name="taxReturnBase"      type="hidden"  value="0">
        <input name="currency"           type="hidden"  value="COP">
        <input name="signature"          type="hidden"  :value="signature">
        <input name="test"               type="hidden"  value="1">
        <input name="buyerEmail"         type="hidden"  :value="form.correo">
        <input name="responseUrl"        type="hidden"  value="http://www.test.com/response">
        <input name="confirmationUrl"    type="hidden"  value="http://www.test.com/confirmation">       
        </form>
    </div>
</div>
</div>
</template>
<script>
export default {
    data(){
        return{
            signature:'',
            carts:[],
            subtotal:'',
            departamentos:[],
            ciudades:[],
            iva : '',
            totalApagar:'',
            form:{
                nombre:'',
                cedula:'',
                correo:'',
                celular:'',
                departamento:'',
                ciudad:'',
                direccion:'',
                lugar:'',
                observacion:'',
                recibir:true,
                carts:[],
                // PayU
                total:'',
                referencia:'',
                descripcion:'Tienda Three-pets'
                
                
            },
             
            
     
        }
    },
    created(){
         this.carts = JSON.parse(localStorage.getItem('carrito'));  
         this.total();
         this.departamento(); 
  
    },
    methods:{
        pagar(e){
            let code = Math.floor((Math.random() * 100) + 1);
            this.form.referencia = 'TP'+ code + this.form.cedula;
            this.signature = CryptoJS.MD5("4Vj8eK4rloUd272L48hsrarnUA~508029~"+this.form.referencia+"~"+this.form.total+"~COP");

            this.form.carts = JSON.parse(localStorage.getItem('carrito'));
            
            if(this.form.carts.length < 1){
                e.preventDefault();
            }else{
                
                axios.post('api/payu/pagar',this.form).then(res =>{
                   console.log(res.data);
                   
                    if(res.data){
                        var formulario = document.getElementById("myform");
                      formulario.submit();
                      localStorage.clear();
		            return true;
                    }
                      
                }); 
                 e.preventDefault();
            }
            
           
        },
        ciudad(event){
        axios.get('api/ciudades/'+event.target.value).then(res=>{
            this.ciudades = res.data;
            console.log(event.target.value);
        });
        },
        departamento(){
            axios.get('api/departamentos').then(res =>{
                this.departamentos = res.data;
                
                
            });
        },
        orden(){
            this.form.carts = JSON.parse(localStorage.getItem('carrito'));  
            axios.post('api/orden/',this.form).then(res=>{
                console.log(res.data);
            });
        },
        eliminar(product){ 
                let productsLS;
                // Obtenemos el arreglo de p                roducto
                productsLS =  JSON.parse(localStorage.getItem('carrito'));
            
                // Iteramos comparando el ID del producto borrado con los del LS
                productsLS.forEach(function(productLS, index) {
                    if(productLS.id === product.id) {
                        productsLS.splice(index, 1);
                    }
                });
                // Añadimos el arreglo actual a storage
                localStorage.setItem('carrito', JSON.stringify(productsLS) );
                this.getCart();
                this.total();           
        },
        getCart(){
            this.carts = JSON.parse(localStorage.getItem('carrito'));
            let count = this.carts.length;
            document.getElementById("count").innerHTML = count;
        },
        sumarQuantity(product){
            let productsLS;
            productsLS =  JSON.parse(localStorage.getItem('carrito'));
            productsLS.forEach(function(productLS, index) {
                    if(productLS.id === product.id) {
                        let cantidad = productLS.quantity;
                        productLS.quantity = cantidad +1;
                    }
                });
                 localStorage.setItem('carrito', JSON.stringify(productsLS) );
                 this.total();
                 this.getCart();
        },
        restarQuantity(product){
            let productsLS;
            productsLS =  JSON.parse(localStorage.getItem('carrito'));
            productsLS.forEach(function(productLS, index) {
                    if(productLS.id === product.id) {
                        let cantidad = productLS.quantity;
                        if(cantidad <= 1){
                            
                        }else{
                            productLS.quantity = cantidad -1;
                        }                        
                    }
                });
                 localStorage.setItem('carrito', JSON.stringify(productsLS) );
                 this.total();
                 this.getCart();
        },
        total(){
            let sumaLS;
            var subtotal =0;
            let productsLS;
            productsLS =  JSON.parse(localStorage.getItem('carrito'));
            productsLS.forEach(function(productLS, index) {
                  sumaLS =  parseInt(productLS.price * productLS.quantity);
                  subtotal = subtotal + sumaLS; 
                                            
            });
            this.subtotal = subtotal;
            this.iva = subtotal * 0.05;
            this.totalApagar = this.subtotal + this.iva;
            this.form.total = this.subtotal + this.iva;      
        }
    }
}
</script>
