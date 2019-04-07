<?php

namespace App;
use App\Orden;
use App\User;
use App\Pedido;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    public function storeOrden($request){
        $user = User::where('email',$request->correo)->first();
        if($user){
            
        }else{
            $user = new User();
            $user->name = $request->nombre;
            $user->email = $request->correo;
            $user->acepto_politicas_de_tratamiento = $request->recibir;
            $user->password = bcrypt($request->cedula);
            $user->tipo = 'Cliente';
            $user->save();
        }
      $orden = new Orden();  
      $orden->nombre = $request->nombre;
      $orden->status = 'Pendiente';
      $orden->total = $request->total;
      $orden->cedula = $request->cedula;
      $orden->correo = $request->correo;
      $orden->celular = $request->celular;
      $orden->departamento = $request->departamento;
      $orden->ciudad = $request->ciudad;
      $orden->direccion = $request->direccion;
      $orden->lugar = $request->lugar;
      $orden->referencia = $request->referencia;
      $orden->observacion = $request->observacion;
      $orden->user_id = $user->id;
      $orden->save();

      foreach ($request->carts as $cart) {
           $pedido = new Pedido();
           $pedido->producto = $cart['name'];
           $pedido->cantidad = $cart['quantity'];
           $pedido->precio = $cart['price'];
           $pedido->orden_id = $orden->id;
           $pedido->save();

      }


      return $orden;
    }
}
