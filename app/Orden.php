<?php

namespace App;
use App\Orden;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    public function storeOrden($request){
      $orden = new Orden();  
      $orden->nombre = $request->nombre;
      $orden->cedula = $request->cedula;
      $orden->correo = $request->correo;
      $orden->celular = $request->celular;
      $orden->departamento = $request->departamento;
      $orden->ciudad = $request->ciudad;
      $orden->direccion = $request->direccion;
      $orden->lugar = $request->lugar;
      $orden->observacion = $request->observacion;
      
      $orden->save();

      return $request;

    }
}
