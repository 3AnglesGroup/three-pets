<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Departamento;
use App\Ciudad;
use App\Orden;
use App\User;
class CartController extends Controller
{
    public function orden(Request $request){

        
        return $request;
    }
    public function departamentos(){
        return Departamento::all();
    }
    public function ciudades($id){
        return Ciudad::where('departamento_id',$id)->get();
    }

    public function pagar(Request $request){
        $orden = new Orden();
        $orden->storeOrden($request);
        return $request;
    }
}

