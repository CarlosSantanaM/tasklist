@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <h1>Lista de Tarefas:</h1>

    <form action="{{ Route('tasks.store') }}" method="POST">
        @csrf

        <div>
            <label for="">Etiqueta:</label>
            <input type="text" name="tarefa" placeholder="Digite o nome da tarefa">
        </div>

        <div>
            <label for="">Descricao:</label>
            <textarea name="descricao" id="desc" cols="33" rows="5" placeholder="Digite a descricao da sua tarefa"></textarea>
        </div>

        <div>
            <label for="">Data de entrega:</label>
            <input type="date" name="data" id="data">
        </div>

        <div>
            <button type="submit">Criar</button>
        </div>

    </form>

@endsection
