@extends('layouts.app')

@section('titulo', $user->name)

@section('conteudo')
    <h1 class="h3 mb-3">{{ $user->name }}</h1>
    <ul class="list-group mb-3">
        <li class="list-group-item">
            <strong>E-mail:</strong> {{ $user->email }}
        </li>
        <li class="list-group-item">
            <strong>Cadastrado em:</strong> {{ $user->created_at->format('d/m/Y H:i')
    }}
        </li>
        <li class="list-group-item">
            <strong>E-mail verificado:</strong>
            @if ($user->email_verified_at)
                <span class="badge bg-success">Sim</span>
            @else
                <span class="badge bg-secondary">Não</span>
            @endif
        </li>
    </ul>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
@endsection