<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Frontendcontroller extends Controller
{
    public function index(Request $request){
        return view('dashboard');
    }

    //Entidade Cozinha
     public function cozinha(Request $request){
        return view('pages.cozinha.index');
    }

    //Entidade Menu
    public function menu(Request $request){
        return view('pages.menu.index');
    }

    //Entidade POS
    public function pos(Request $request){
        return view('pages.pos.index');
    }

    // Entidades Reservas
     public function reservas(Request $request){
        return view('pages.reservas.index');
    }

    // Entidade Users
    public function users(Request $request){
        return view('pages.users.index');
    }
   
    public function createUsers (Request $request){
        return view('pages.users.create');
    }
}