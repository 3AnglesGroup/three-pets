<template>
<div id="init" class="container-fluid products-box">
            <div class="row justify-content-md-center">
                <div class="col-md-6 col-lg-4 product">
                    <img src="img/tienda-tiritas.png">
                    <h2>Tiritas Ahumadas</h2>
                    <p>Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res. Son ricos en contenido de glucosamina lo que protege las articulaciones de tu perro.</p>
                    <p class="price">$15.250</p>
                    <a href="/carrito">Agregar</a>
                </div>
                <div class="col-md-6 col-lg-4 product">
                    <img src="img/tienda-lonjitas.png">
                    <h2>Lonjitas de Res</h2>
                    <p>Las lonjitas de res de Three Pets son hechas de las mejores rilas de res. Ayudan a la salud dental y mantendrán a tu perro entretenido durante horas.</p>
                    <p class="price">$15.250</p>
                    <a href="#">Agregar</a>
                </div>
                <div class="col-md-6 col-lg-4 product">
                    <img src="img/tienda-solomito.png">
                    <h2>Solomito Asado</h2>
                    <p>Las lonjitas de res de Three Pets son hechas de las mejores rilas de res. Ayudan a la salud dental y mantendrán a tu perro entretenido durante horas.</p>
                    <p class="price">$15.250</p>
                    <a href="#">Agregar</a>
                </div>
                <div class="col-md-6 col-lg-4 product">
                    <img src="img/tienda-rollito.png">
                    <h2>Rollitos de Res</h2>
                    <p>Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res. Son ricos en contenido de glucosamina lo que protege las articulaciones de tu perro.</p>
                    <p class="price">$15.250</p>
                    <a href="#">Agregar</a>
                </div>
                <div class="col-md-6 col-lg-4 product">
                    <img src="img/tienda-pernil.png">
                    <h2>Pernil de Cerdo</h2>
                    <p>Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res. Son ricos en contenido de glucosamina lo que protege las articulaciones de tu perro.</p>
                    <p class="price">$15.250</p>
                    <a href="#">Agregar</a>
                </div>
                <div class="col-md-6 col-lg-4 product">
                    <img src="img/tienda-trocitos.png">
                    <h2>Trocitos Mix</h2>
                    <p>Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res. Son ricos en contenido de glucosamina lo que protege las articulaciones de tu perro.</p>
                    <p class="price">$15.250</p>
                    <a href="#">Agregar</a>
                </div>
                <div class="col-md-6 col-lg-4 product">
                    <img src="img/bombonera_rollitos.jpg">
                    <h2>Rollitos de Res</h2>
                    <p>Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res. Son ricos en contenido de glucosamina lo que protege las articulaciones de tu perro.</p>
                    <p class="price">$15.250</p>
                    <a href="#">Agregar</a>
                </div>
                <div class="col-md-6 col-lg-4 product">
                    <img src="img/bombonera_pernil.jpg">
                    <h2>Pernil de Cerdo</h2>
                    <p>Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res. Son ricos en contenido de glucosamina lo que protege las articulaciones de tu perro.</p>
                    <p class="price">$15.250</p>
                    <a href="#">Agregar</a>
                </div>
                <div class="col-md-6 col-lg-4 product">
                    <img src="img/bombonera_trocitos.jpg">
                    <h2>Trocitos Mix</h2>
                    <p>Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res. Son ricos en contenido de glucosamina lo que protege las articulaciones de tu perro.</p>
                    <p class="price">$15.250</p>
                    <a href="#">Agregar</a>
                </div>
                <!-- <div class="col-12 product full">
                    <img src="img/tienda-bomboneras.png">
                </div>
                <div class="col-md-4 product">
                    <h2>Rollitos de Res</h2>
                    <p>Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res. Son ricos en contenido de glucosamina lo que protege las articulaciones de tu perro.</p>
                    <p class="price">$15.250</p>
                    <a href="#">Agregar</a>
                </div>
                <div class="col-md-4 product">
                    <h2>Pernil de Cerdo</h2>
                    <p>Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res. Son ricos en contenido de glucosamina lo que protege las articulaciones de tu perro.</p>
                    <p class="price">$15.250</p>
                    <a href="#">Agregar</a>
                </div>
                <div class="col-md-4 product">
                    <h2>Trocitos Mix</h2>
                    <p>Las tiritas ahumadas de Three Pets son hechas de los mejores esófagos de res. Son ricos en contenido de glucosamina lo que protege las articulaciones de tu perro.</p>
                    <p class="price">$15.250</p>
                    <a href="#">Agregar</a>
                </div> -->
            </div>
        </div>
    
</template>
<script>
import toastr from 'toastr'
toastr.options ={
  "closeButton": true,
  "timeOut": "10000",
  "positionClass": "toast-top-center",
  // "progressBar": true,
};
export default {

    created(){
        toastr.success('Se agregó al carrito!');
    }
    
}
</script>
