<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function index(Request $request) {

        /* REQUESTS
        //Coletar todos os dados da requisição
        $data = $request->all();
        //Coleta o nome do corpo da requisição se não tiver pega da URL (2 parametro adiciona valor padrão)
        $dataInput = $request->input('nome', 'João');
        // Coleta as informações da URL (2 parametro adiciona um valor padrão caso não venha na URL)
        $dataQuery = $request->input('nome', 'teste');
        // coletar apenas os nomes que desejo do formulário
        $dataOnly = $request->only('nome', 'idade');
        // Coletar tudo menos...
        $dataExcept = $request->except('idade');

        // verificar se um campo foi enviado.
        if ($request->has('estado')) echo "Não tem Estado!";
        // verificar se um campo foi preenchido.
        if ($request->filled('estado')) echo "Não tem EStado preenchido!";=
        // verificar se um campo não existe
        if ($request->missing('estado')) echo "Não existe Estado no formulário!";
        */

        // BLADE
        // enviar dados para a view. 
        $nome = 'João';
        $idade = 10;
        $lista = [
            'farinha',
            'ovo',
            'trigo',
            'fermento'
        ];

        $data = [
            'nome' => $nome,
            'idade' => $idade,
            'lista' => $lista
        ];

        
        return view('config', $data);
    }

    public function info() {
        echo "Configuração INFO 3";
    }

    public function permissoes() {
        echo "Configuações Permissões 3";
    }
}
