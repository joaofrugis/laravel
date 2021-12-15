@extends('layouts.admin')

@section('title', 'Configurações')
@section('content')
    <h1> Configurações </h1>

    Meu nome é {{ $nome }} e minha idade é {{ $idade }}. <br>

    {{-- Condicionais --}}
    {{--@if($idade > 18)
            Eu sou maior de idade.
        @else
            Eu Não sou maior de idade.
        @endif

        @isset($versao)
            Existe uma versão e é a {{$versao}}
        @endisset

        @empty($cidade)
            Não existe uma cidade    
        @endempty --}}
    
    {{--Loops--}}
    {{--@for($q=0;$q<10;$q++)
        o valor é {{$q}}<br/>
    @endfor

    @if(count($lista) > 0)
        Lista do bolo:
        <ul>
            @foreach ($lista as $item)
                <li>{{$item}}</li>    
            @endforeach
        </ul>
    @else
        Não há ingredientes
    @endif
    
    <ul>
        @forelse($lista as $item)
            <li>{{$item}}</li>    
        @empty
            <li> Não ha ingredientes</li>
        @endempty
    </ul>

    @while (...)
        ...
    @endwhile--}}

    {{--Componentes--}}
    {{--@component('alert')
        @slot('type')
            Erro:
        @endslot
        Testando 1,2,3;
    @endcomponent
    <ul>
        @forelse($lista as $item)
            <li>{{$item}}</li>    
        @empty
            <li> Não ha ingredientes</li>
        @endempty
    </ul>--}}
    @alert
        Frase
    @endalert
    <ul>
    @forelse($lista as $item)
        <li>{{$item}}</li>    
    @empty
        <li> Não ha ingredientes</li>
    @endempty
    </ul>
    
    <br/><br/>
    <form method="GET">
        Nome: <br/>
        <input type="text" name="nome" /><br/>
        Idade: <br/>
        <input type="text" name="idade" /><br/>
        Cidade: <br/>
        <input type="text" name="cidade" /><br/>
        Estado: <br/>
        <input type="text" name="estado" /><br/>

        <input type="submit" value="Enviar" /><br/>
    </form>
@endsection