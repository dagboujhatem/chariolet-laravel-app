<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{ route('home') }}">
        <i class="fa fa-tachometer-alt"></i> Tableau de bord
    </a>
</li>

@role('Administrateur')
    <li class="{{ Request::is('users*') ? 'active' : '' }}">
        <a href="{{ route('users.index') }}">
            <i class="fa fa-users"></i> Gestion des utilisateurs
        </a>
    </li>
@endrole


<li class="{{ Request::is('settings*') ? 'active' : '' }}">
    <a href="{{ route('settings.edit', Auth::user()->id) }}">
        <i class="fa fa-user-cog"></i> Paramètres
    </a>
</li>
