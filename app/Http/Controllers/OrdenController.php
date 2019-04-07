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
          $orden = Orden::where('correo',$request['email_buyer'])->first(); 
          $orden->status = 'Aprobada';
          $orden->reference_pol = $request['reference_pol'];
          $orden->reference_sale = $request['reference_sale'];
          $orden->save();
          return 200;
        }
        if($request['state_pol'] == 6){
          $orden = Orden::where('correo',$request['email_buyer'])->first(); 
          $orden->status = 'Declinada';
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
