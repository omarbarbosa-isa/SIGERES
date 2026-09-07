<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
    public function index(Request $request){
        return view('dashboard');
    }

     public function cozinha(Request $request){
        return view('pages.cozinha');
    }

    public function menu(Request $request){
        return view('pages.menu');
    }

    public function pos(Request $request){
        return view('pages.pos');
    }

     public function reservas(Request $request){
        return view('pages.reservas');
    }

    public function users(Request $request){
        return view('pages.users');
    }
   
}