<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    //
    public function index(){
        return view('pages.jogos.index');
    }

    public function cobra(){
        return view('pages.jogos.cobra');
    }

    public function ganso(){
        return view('pages.jogos.tap-ganso');
    }

    public function milhoGrande(){
        return view('pages.jogos.milho-grande');
    }

    public function batalhaNaval(){
        return view('pages.jogos.batalha-naval');
    }
}
