<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('users.login');
    }

    public function auth(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email'=>$request->email, 'password' => $request->password])){
            return redirect()->route('clients.index'); // Redirecionar para clients.index
        }else{
            return redirect()->back()->with('danger', 'E-mail ou senha inválidos');
        }
    }
}
