<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email', 'password'])) == false){
            return back()->withErrors([
                'message' => 'El correo o la contraseña con incorrectos',
            ]);
        }
        if(auth()){
            if(auth()->user()->rol != 'client'){
                if(auth()->user()->rol == 'admin'){
                    return redirect()->route('admin.index');
                }else{
                    return redirect()->route('emp.index');
                }
            }else{
                return redirect()->route('home');
            }
        }
    }

    public function destroy(){
        auth()->logout();
        return redirect()->route('login.index');
    }
}
