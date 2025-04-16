@extends('layouts.app')

@section('title', 'Página Principal')

@section('content')

<a href="{{ route('tasks.index') }}">Criar Tarefa</a>

@if($tasks->isEmpty())
    <p>Nenhuma tarefa encontrada.</p>
@else
    <ul>
        @foreach ($tasks as $task)
            <li>
                <strong>{{ $task->tarefa }}</strong><br>
                @if($task->descricao)
                    Descrição: {{ $task->descricao }} <br>
                @endif
                Data de entrega: {{ \Carbon\Carbon::parse($task->data_entrega)->format('d/m/Y') }}
            </li>
        @endforeach
    </ul>
@endif

@endsection
