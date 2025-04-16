<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{

    // Rota Home
    public function home(){

        $tasks = Tasks::orderBy('data_entrega')->get(); // Pegar Task por data de entrega
        return view('home', compact('tasks'));
    }

    // Rota Vizualizar Form Tarefas
    public function index(){

        return view('index');

    }

    public function store(Request $request){

        // Validação

        $validated = $request->validate([
            'tarefa' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:1000',
            'data' =>  'required|date|after_or_equal:today',
        ]);

        //Criar task e salvar no banco
        Tasks::create([
            'tarefa' => $validated['tarefa'],
            'descricao' => $validated['descricao'],
            'data_entrega' => $validated['data'],
        ]);

        return redirect()->route('home')->with('success', 'Task created successfully!');
    }

}
