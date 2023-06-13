<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
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

    public function portifolio(){
        return view('pages.projetos.portifolio');
    }

    public function cobra(){
        return view('pages.projetos.cobra');
    }
}