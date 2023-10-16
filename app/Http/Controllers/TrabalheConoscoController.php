<?php

namespace App\Http\Controllers;

use App\Models\TrabalheConosco;
use Illuminate\Http\Request;

class TrabalheConoscoController extends Controller
{
    public function index()
    {
        // Lógica para listar recursos
    }

    public function create()
    {
        // Retorna o formulário para criar um novo recurso
    }

    public function store(Request $request)
    {
        
        $data = $request->all();

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
