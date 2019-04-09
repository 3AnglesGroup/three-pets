<template>
  <div class="">
      <section class="content-header">
        <h1>
          Detalle de Orden
          <small>Detalle</small>
        </h1>
        <ol class="breadcrumb">
          <li>
            <router-link to="/dashboard">
              <i class="fa fa-dashboard"></i> Dashboard
            </router-link>
          </li>
          <li>
          <router-link to="/orden/lista">
            <i class="fa fa-book" ></i>Ordenes
          </router-link>
          </li>
          <li class="active" ><i class="fa fa-pencil"></i>Detalle</li>
        </ol>
      </section>
      <!-- Main content -->
      <section class="content container-fluid">
        <!-- Main content -->
        <section class="content">
      <form  @submit.prevent="actualizar">
        <div class="row">
          <!-- left column -->
          <div class="col-md-7">
            <!-- /.box -->
            <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Datos de entrega</h3>
              </div>
              <!-- /.box-header -->
              <!-- form start -->
                <div class="box-body">
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Referencia</label>
                    <input type="text" class="form-control" v-model="form.referencia" :disabled="editar"   placeholder="Ingresar nombre completo">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Total</label>
                    <input type="text" class="form-control" v-model="form.total" :disabled="editar"   placeholder="Ingresar nombre completo">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" v-model="form.nombre" :disabled="editar"   placeholder="Ingresar nombre completo">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Cedula</label>
                    <input type="text" class="form-control" v-model="form.cedula" :disabled="editar"   placeholder="Ingresar nombre completo">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Telefono</label>
                    <input type="text" class="form-control" v-model="form.celular" :disabled="editar"   placeholder="Ingresar nombre completo">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Correo</label>
                    <input type="text" class="form-control" v-model="form.correo" :disabled="editar"   placeholder="Ingresar nombre completo">
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Departamento</label>
                    <input type="text" class="form-control" v-model="form.departamento" :disabled="editar"   placeholder="Ingresar estado">
                  </div>
                  
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Ciudad</label>
                    <input type="text" class="form-control" v-model="form.ciudad" :disabled="editar"   placeholder="Ingresar ciudad">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Dirección</label>
                    <input type="text" class="form-control" v-model="form.direccion" :disabled="editar"    placeholder="Ingrese dirección">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputPassword1">Lugar</label>
                    <input type="text" class="form-control" v-model="form.lugar" :disabled="editar"    placeholder="Ingrese dirección">
                  </div>
                  <div class="form-group col-md-12">
                    <label for="exampleInputPassword1">Observación</label>
                    <textarea v-model="form.observacion" class="form-control" :disabled="editar"  rows="5" cols="80"></textarea>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button v-if="!editar" type="submit" :disabled="actualizando" class="btn btn-primary"  >
                    <span v-if="actualizando" >Actualizando...</span>
                    <span v-else>Actualizar</span>
                  </button>
                  <div v-if="editar" class="">
                    <span  class="btn btn-primary" v-on:click="activarEdicion">Editar</span>

                  </div>
                </div>
            </div>
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-5">
              <!-- PRODUCT LIST -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Detalle del Pedido</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                
                <!-- /.item -->
                <li class="item" v-for="pedido in pedidos" :key="pedido.key">
                  <div class="product-img">
                    <img src="/img/three-pets-logo.svg" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">{{pedido.producto}}
                      <span class="label precio label-success pull-right">${{pedido.precio * pedido.cantidad}}</span></a>
                    <span class="product-description">
                          Cantidad: {{pedido.cantidad}}
                        </span>
                  </div>
                </li>
                <!-- /.item -->
              </ul>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">Total Pagado: ${{form.total}}</a>
            </div>
            <!-- /.box-footer -->
          </div>
            <!-- /.box -->
          </div>
          <!--/.col (right) -->
        </div>
      </form>
    </section>
    <!-- /.content -->
    </section>
  </div>
</template>
<script>
import toastr from 'toastr'
toastr.options ={
  "closeButton": true,
  "timeOut": "10000",
  // "progressBar": true,
};
  export default{
    data(){
      return {
        form:{},
        pedidos:[],
        editar:'true',
        actualizando:''
      }
    },
      mounted(){
        axios.get('/api/orden-detail/' + this.$route.params.id).then(res=>{
          this.form = res.data;
        });
        axios.get('/api/pedido/' + this.$route.params.id).then(res=>{
          this.pedidos = res.data;
        });
      },
      methods:{

        activarEdicion(){
          this.editar = false;
          this.actualizando = false;
        },
        actualizar(){
          this.actualizando = false;
         toastr.success('No Habilitada esta función');
        }
      }


  }
</script>

<style>
.precio{
    font-size: 21px;
}
</style>

