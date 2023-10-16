<?php

namespace App\Http\Controllers;

use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class SendmailController extends Controller
{
    public function store(Request $request){

        $nome = $request->nome;
        $email = $request->email;
        $telefone = $request->telefone;
        // $carreira = $request->carreira;
        $disponibilidade = $request->disponibilidade;
        $experiencia = $request->experiencia;
        $habilidades = $request->habilidades;
        $sobre = $request->sobre;

        $data = [
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone,
            // 'carreira' => $carreira,
            'disponibilidade' => $disponibilidade,
            'experiencia' => $experiencia,
            'habilidades' => $habilidades,
            'sobre' => $sobre
        ];

        Mail::to($email)->send(new Sendmail($data));
    }
}
