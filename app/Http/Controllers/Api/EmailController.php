<?php

namespace App\Http\Controllers;

use App\Mail\FormularioContato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller{
    public function index(Request $request){
        $nome = $request->nome;
        $email = $request->email;
        $assunto = $request->assunto;
        $mensagem = $request->mensagem;

        Mail::to($email)->send(new FormularioContato($nome, $assunto, $mensagem));
    }
}