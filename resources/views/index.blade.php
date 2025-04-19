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

<div class="form-group">
    <a href="{{ route('home') }}" class="back-button">← Voltar para Home</a>
</div>


<div class="form-wrapper">
    <h1>Lista de Tarefas</h1>

    <form action="{{ route('tasks.store') }}" method="POST" class="task-form">
        @csrf

        <div class="form-group">
            <label for="tarefa">Etiqueta:</label>
            <input type="text" name="tarefa" placeholder="Digite o nome da tarefa">
        </div>

        <div class="form-group">
            <label for="desc">Descrição:</label>
            <textarea name="descricao" id="desc" cols="30" rows="4" placeholder="Digite a descrição da tarefa"></textarea>
        </div>

        <div class="form-group">
            <label for="data">Data de entrega:</label>
            <input type="date" name="data" id="data">
        </div>

        <div class="form-group">
            <button type="submit">Criar</button>
        </div>
    </form>
</div>

@endsection
