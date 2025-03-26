<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function show(){
        return view('auth.register');
    }

    public function store(){
        $this->validate(request(), [
            'password' => 'required|confirmed',
        ]);
        $user = User::create(request(['name','last_name','password', 'email']));
        auth()->login($user);
        return redirect()->route('home');
    }

    public function store_employee(Request $request){
        $this->validate(request(), [
            'password' => 'required|confirmed',
        ]);
        $emp = new User;
        $emp->name = $request->name;
        $emp->last_name = $request->last_name;
        $emp->password = $request->password;
        $emp->rol = 'employee';
        $emp->email = $request->email;
        $emp->save();
        return redirect()->back();
    }
}
