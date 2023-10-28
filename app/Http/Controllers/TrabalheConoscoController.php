<?php

namespace App\Http\Controllers;

use App\Mail\Sendmail;
use App\Models\TrabalheConosco;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class TrabalheConoscoController extends Controller
{
    public function index()
    {
        return view('trabalhe-conosco');
    }

    public function create()
    {
        // Retorna o formulário para criar um novo recurso
    }

    public function store(Request $request)
{
    $disponibilidadeMensagens = [
        'A' => 'Busco oportunidades para iniciar o trabalho imediatamente',
        'B' => 'Estou empregado mas busco novos desafios',
        'C' => 'Não procuro emprego ativamente, mas estou aberto a avaliar novas oportunidades',
    ];

    $regrasValidacao = [
        'nome' => 'required',
        'email' => 'required|email',
        'telefone' => 'required',
        'carreira' => 'required|array',
        'disponibilidade' => 'required',
        'experiencia' => 'required',
        'habilidades' => 'required',
        'sobre' => 'required',
    ];

    $mensagensValidacao = [
        'email.email' => 'O campo de e-mail deve ser um endereço de e-mail válido.',
        // Adicione outras mensagens de validação personalizadas, se necessário
    ];

    $validador = Validator::make($request->all(), $regrasValidacao, $mensagensValidacao);

    if ($validador->fails()) {
        return redirect()->back()->withErrors($validador)->withInput();
    }

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

    $emailDestino = 'email@exemplo.com';

    $envioDoEmailBemSucedido = false;

    try {
        Mail::to($emailDestino)->send(new Sendmail($data));
        Mail::to($email)->send(new Sendmail($data));
        $envioDoEmailBemSucedido = true;
    } catch (\Exception $e) {
        $envioDoEmailBemSucedido = false;
    }

    $modelo = new TrabalheConosco();
    $modelo->nome = $data['nome'];
    $modelo->email = $data['email'];
    $modelo->telefone = $data['telefone'];
    $modelo->carreira = json_encode($data['carreira']);
    $modelo->disponibilidade = $data['disponibilidade'];
    $modelo->experiencia = $data['experiencia'];
    $modelo->habilidades = $data['habilidades'];
    $modelo->sobre = $data['sobre'];
    $modelo->save();

    if ($envioDoEmailBemSucedido) {
        session()->flash('success', 'O formulário foi enviado com sucesso!');
    } else {
        session()->flash('error', 'Ocorreu um erro ao enviar o formulário.');
    }

    return redirect('/');
}

    

    public function show($id)
    {
        // Lógica para exibir um recurso específico
    }

    public function edit($id)
    {
        // Retorna o formulário para editar um recurso
    }

    public function update(Request $request, $id)
    {
        // Validação e lógica para atualizar um recurso
    }

    public function destroy($id)
    {
        // Lógica para excluir um recurso
    }
}
