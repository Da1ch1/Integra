<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="logo">
        <a href="" class="simple-text logo-normal">
            {{ __('Integra SA.') }}
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="material-icons">dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </a>
            </li>
            <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="true">
                    <i class="material-icons">account_box</i>
                    <p>{{ __(' Perfiles') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse show" id="laravelExample">
                    <ul class="nav">
                        <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
                            <a class="nav-link" href="{{ route('profile.edit') }}">
                                <i class="material-icons">account_circle</i>
                                <span class="sidebar-normal">{{ __('Perfil de Usuario') }} </span>
                            </a>
                        </li>

                </div>
            </li>
            <!--Icono de sensores-->
            <li class="nav-item{{ $activePage == 'sensors' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('sensors.index') }}">
                    <i class="material-icons">adjust</i>
                    <p>{{ __('Sensores') }}</p>
                </a>
            </li>
            <!--   -->

            <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('typography') }}">
                    <i class="material-icons">camera_alt</i>
                    <p>{{ __('Camaras') }}</p>
                </a>
            </li>

            <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('map') }}">
                    <i class="material-icons">location_ons</i>
                    <p>{{ __('Maps') }}</p>
                </a>
            </li>
            <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
                <a class="nav-link" href="{{ route('notifications') }}">
                    <i class="material-icons">notifications</i>
                    <p>{{ __('Notifications') }}</p>
                </a>
            </li>
            <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
                <a class="nav-link text-white bg-primary" href="{{ route('upgrade') }}">
                    <i class="material-icons text-white">unarchive</i>
                    <p>{{ __('Actualizar a PRO') }}</p>
                </a>
            </li>
        </ul>
    </div>
</div>
