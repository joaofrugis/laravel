@extends('layouts.admin')

@section('title', 'Adição de Tarefas')
    

@section('content')
    <h1>Adição</h1>

    @if ($errors->any())
        @alert
            @foreach ($errors->all() as $error)
                {{ $error }}<br/>
            @endforeach
        @endalert
    @endif

    <form method="POST">
        @csrf

        <label>
            Título:<br/>
            <input type="text" name="titulo" /><br/><br/>
            <input type="submit" value="Adicionar" />
        </label>
    </form>
    

@endsection