<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{ route('home') }}">
        <i class="fa fa-dashboard"></i>Tableau de bord
    </a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}">
        <i class="fa fa-users"></i>Gestion des utilisateurs
    </a>
</li>
