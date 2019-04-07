<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Yajra\Datatables\Datatables;

class UserController extends Controller
{
    public function login(Request $request){
        if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['pass']])) {
            if (Auth::User()->tipo == 'Admin') {
                return view('admin.index');
            }
          return view('login');
        }
      return back();
    }

    public function logout(){
      Auth::logout();
      return view('login');
    }

    public function registro(){
        // $user = new User();
        // $user->name = 'Administrador';
        // $user->email = 'soporte@three-pets.com';
        // $user->password = bcrypt('silvestre18');
        // $user->save();
        $user = new User();
        $user->name = 'Administrador';
        $user->email = 'ventas@three-pets.com.co';
        $user->password = bcrypt('VentasTP19');
        $user->tipo = 'Admin';
        $user->save();
        return 'OK';
    }

    public function clientes(){
      $users = User::where('tipo','Cliente')->orderBy('id','DESC')->get();
        return Datatables::of($users)
             ->addColumn('btn','admin.partials.botones-cliente')
             ->rawColumns(['btn'])
             ->make(true);
    }

}
