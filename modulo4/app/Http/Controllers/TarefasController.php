<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarefa;

class TarefasController extends Controller
{

    public function list() { 
        $list = Tarefa::all();

        return view('tarefas.list', [
            'list' => $list
        ]);
    }

    public function add() { 
        return view('tarefas.add');
    }

    public function addAction(Request $request) { 
        $request->validate([
            'titulo' => ['required', 'string']
        ]);

        $titulo = $request->input('titulo');

        $t = new Tarefa;
        $t->titulo = $titulo;
        $t->save();
        
        return redirect()->route('tarefas.list');
    }

    public function edit($id) {
        $data = Tarefa::find($id);

        if($data) {
            return view('tarefas.edit', [
                'data' => $data
            ]);
        } else {
            return redirect()->round('tarefas.list');
        }
    }

    public function editAction(Request $request, $id) { 
        $request->validate([
            'titulo' => ['required', 'string']
        ]);
        
        $titulo = $request->input('titulo');

        // Fazer assim
        // $t = Tarefa::find($id);
        // $t->titulo = $titulo;
        // $t->save();

        // ou assim
        Tarefa::find($id)->update(['titulo'=>$titulo]);

        return redirect()->route('tarefas.list');

    }
    public function del($id) { 
        Tarefa::find($id)->delete();

        return redirect()->route('tarefas.list');
    }

    public function done($id) { 
        $t = Tarefa::find($id);

        if($t){
            $t->resolvido = 1 - $t->resolvido;
            $t->save();
        }

        return redirect()->route('tarefas.list');
    }
}