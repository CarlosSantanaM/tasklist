@extends('layouts.app')

@section('title', 'Pagina Principal')

@section('content')

<a href="{{ Route('tasks.index')}}">Criar Tarefa</a>
<br>
<a href="{{ Route('tasks.view')}}">Ver Tarefas</a>

@endsection
