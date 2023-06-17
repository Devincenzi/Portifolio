<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Mail\FormularioContato;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    public function send(Request $request): RedirectResponse{
        $nome = $request->nome;
        $email = $request->email;
        $assunto = $request->assunto;
        $mensagem = $request->mensagem;

        Mail::to($email)->send(new FormularioContato($nome, $assunto, $mensagem));

        return redirect('/');
    }
}
