@extends('layouts.admin')

@section('title', 'Edição de Tarefas')
    

@section('content')
    <h1>Edição</h1>

    
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
            <input type="text" name="titulo" value="{{ $data->titulo }}" /><br/><br/>
            <input type="submit" value="Salvar" />
        </label>
    </form>
    

@endsection