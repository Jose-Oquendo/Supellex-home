<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('auth.client');
    }

    public function basket(){
        return view('client.basket', []);
    }

    public function profile(){
        return view('client.profile.profile_main', []);
    }
    public function profile_orders(){
        return view('client.profile.profile_orders', []);
    }
    public function profile_addresses(){
        return view('client.profile.profile_addresses', []);
    }
    public function profile_account(){
        return view('client.profile.profile_account', []);
    }
    public function profile_desires(){
        return view('client.profile.profile_desires', []);
    }
}
