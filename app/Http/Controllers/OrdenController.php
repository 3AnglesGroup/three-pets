<?php

namespace App\Http\Controllers;
use App\Orden;

use Illuminate\Http\Request;

class OrdenController extends Controller
{
   public function confirmacion(Request $request){

        if($request['state_pol'] == 4){
          $orden = Orden::where('referencia',$request['reference_pol'])->first(); 
          $orden->estado = true;
          $orden->save();
          return 200;
        }
        return 200;
   }
}
