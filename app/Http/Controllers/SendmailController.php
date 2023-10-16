<?php

namespace App\Http\Controllers;

use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;

class SendmailController extends Controller
{
    public function store(Request $request){

        $disponibilidadeMensagens = [
            'A' => 'Busco oportunidades para iniciar o trabalho imediatamente',
            'B' => 'Estou empregado mas busco novos desafios',
            'C' => 'Não procuro emprego ativamente, mas estou aberto a avaliar novas oportunidades',
            'D' => 'Não estou aberto a novas oportunidades',
        ];

        $nome = $request->nome;
        $email = $request->email;
        $telefone = $request->telefone;
        $carreira = implode(', ', $request->carreira);
        $disponibilidade = $disponibilidadeMensagens[$request->disponibilidade] ?? 'Opção inválida';
        $experiencia = $request->experiencia;
        $habilidades = $request->habilidades;
        $sobre = $request->sobre;

        $data = [
            'nome' => $nome,
            'email' => $email,
            'telefone' => $telefone,
            'carreira' => $carreira,
            'disponibilidade' => $disponibilidade,
            'experiencia' => $experiencia,
            'habilidades' => $habilidades,
            'sobre' => $sobre
        ];

        Mail::to($email)->send(new Sendmail($data));
    }
}
