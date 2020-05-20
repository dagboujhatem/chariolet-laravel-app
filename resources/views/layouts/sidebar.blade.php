<aside class="main-sidebar" id="sidebar-wrapper">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://cdn4.iconfinder.com/data/icons/avatars-21/512/avatar-circle-human-male-3-512.png" class="img-circle"
                     alt="User Image" width="150" height="150"/>
            </div>
            <div class="pull-left info">
                @if (Auth::guest())
                <p>Chariolet</p>
                @else
                    <p>{{ Auth::user()->first_name . ' ' . Auth::user()->last_name}}</p>
                @endif
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> En ligne</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"> Menu</li>
            @include('layouts.menu')
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
