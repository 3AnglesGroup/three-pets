<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Departamento;
use App\Ciudad;
use App\Orden;
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
        return $orden;
        // merchantId:'508029',
                // accountId:'512321',
                // description:'Test PAYU',
                // referenceCode:'TestPayU',
                // amount:'20000',
                // tax:'0',
                // taxReturnBase:'0',
                // currency:'COP',
                // signature:'7ee7cf808ce6a39b17481c54f2c57acc',
                // test:'',
                // buyerEmail:'test@test.com',
                // responseUrl:'',
                // confirmationUrl:'',
                // shippingAddress:'',
                // shippingCity:'',
                // shippingCountry:''


        //  $signature = md5('oBUN84QFpZ5Oo65YCNDk9CCWRq~731575~'.$referenceCode.'~'.$total.'~COP');
        $signature = md5('oBUN84QFpZ5Oo65YCNDk9CCWRq~731575~COP');
        $payu = [
            'marchantId'=>'508029',
            'accountId'=>'512321',
            'asignature'=>$signature,
            'idorden' => $orden
        ];
        return $orden;
    }
}

