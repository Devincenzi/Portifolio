<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function welcome(){
        return view('welcome');
    }

    public function projetos(Request $request, string $id){
        return view ('pages.projetos.index');
    }

    public function portfolio(){
        return view('pages.projetos.portfolio');
    }

    public function cobra(){
        return view('pages.projetos.cobra');
    }

    public function creditos(){
        return view('pages.creditos');
    }
}
