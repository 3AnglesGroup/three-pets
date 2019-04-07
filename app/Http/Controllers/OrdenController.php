<?php

namespace App\Http\Controllers;
use App\Orden;
use App\Pedido;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

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


  //  Api
  public function lista(){
    $ordens = Orden::orderBy('id','DESC');
    return Datatables::of($ordens)
          ->addColumn('btn','admin.partials.botones-orden')
          ->rawColumns(['btn'])
          ->make(true);
  }
  public function detail($id){
    return Orden::find($id);
  }
  public function pedido($id){
    return Pedido::where('orden_id',$id)->get();
  }
}
