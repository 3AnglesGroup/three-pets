<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suscripciones;

class SuscripcionesController extends Controller
{
    public function index(){
        return Suscripciones::all();
    }
}
