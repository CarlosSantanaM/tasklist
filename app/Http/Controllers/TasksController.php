<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{

    // Rota Home
    public function home(){

        return view('home');

    }

    // Rota Vizualizar Form Tarefas
    public function index(){

        return view('index');

    }

    public function store(Request $request){

        // $request->validate([
        //     'task' => 'required|max:255',
        // ]);

        return redirect()->route('home')->with('success', 'Task created successfully!');
    }
}
