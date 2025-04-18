@extends('layouts.app')

@section('title', 'Página Principal')

@section('content')

<div class="create-task-wrapper">
    <a href="{{ route('tasks.index') }}" class="create-task-btn">Criar Tarefa</a>    
</div>


@if($tasks->isEmpty())
    <div class="task-not-found">
        <p>Nenhuma tarefa encontrada.</p>
    </div>
@else
    <div class="task-container">
        @foreach ($tasks as $task)
            <div class="task">
                <strong>{{ $task->tarefa }}</strong><br>
                @if($task->descricao)
                    Descrição: {{ $task->descricao }} <br>
                @endif
                Data de entrega: {{ \Carbon\Carbon::parse($task->data_entrega)->format('d/m/Y') }}
            </div>
        @endforeach
    </div>
@endif

@endsection
