@extends('layouts.app')

@section('titulo', 'Novo usuário')

@section('conteudo')
    <h1 class="h3 mb-3">Novo usuário</h1>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <x-form.input name="name" label="Nome" />

        <x-form.input name="email" label="E-mail" type="email" />

        <x-form.input name="password" label="Senha" type="password" />

        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('users.index') }}" class="btn btn-link">Cancelar</a>
    </form>
@endsection