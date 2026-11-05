<nav class="navbar navbar-expand navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('users.index') }}">Meu Sistema</a>
        
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('users.index') ? 'active' :
    '' }}" href="{{ route('users.index') }}">Usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('users.create') ? 'active' :
    '' }}" href="{{ route('users.create') }}">Novo usuário</a>
            </li>
        </ul>
    </div>
</nav>