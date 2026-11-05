@extends('layouts.app')
@section('titulo', 'Lista de usuários')
@section('conteudo')
    <h1 class="h3 mb-3">Usuários cadastrados</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Cadastro</th>
                <th>Verificado</th>
                <th>Tempo de cadastro</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $user->name }}

                        @if ($loop->first)
                            <span class="badge bg-warning">Mais antigo</span>
                        @endif
                    </td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a href="{{ route('users.show', $user) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                    </td>
                    <td>
                        @if ($user->email_verified_at)
                            <span class="badge bg-success">Sim</span>
                        @else
                            <span class="badge bg-secondary">Não</span>
                        @endif
                    </td>
                    <td>
                        @switch(true)

                            @case($user->created_at->diffInDays(now()) <= 7)
                                Novo
                                @break

                            @case($user->created_at->diffInDays(now()) <= 30)
                                Recente
                                @break

                            @default
                                Antigo
                        @endswitch
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">
                        Nenhum usuário cadastrado.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

@push('scripts')
    <script>
        console.log('Listagem de usuários carregada');
    </script>
@endpush
