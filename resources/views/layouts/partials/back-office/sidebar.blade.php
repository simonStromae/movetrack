<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link ml-3">
{{--        <img src="/master/images/logo-core.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">--}}
{{--        <img src="/images/logo-render.png" alt="AdminLTE Logo" height="46px" style="">--}}
        <span class="brand-text font-weight-light">MOVe Track</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/back-office/dist/img/avatar4.png"
                     alt="profile picture" class="img-circle elevation-2">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library :::: menu-open -->
                <li class="nav-item ">
                    <a href="{{route('backend.dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Besoins
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

{{--                        <div class="dropdown-divider"></div>--}}
                        <li class="nav-item">
{{--                            <a href="{{route('backend.track.create')}}" class="nav-link">--}}
{{--                                --}}{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Nouveau track</p>--}}
{{--                            </a>--}}
                        </li>
                        <li class="nav-item">
                            <a href="{{route('backend.track.list')}}" class="nav-link ">
                                <p>tous les tracks</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('backend.category.list')}}" class="nav-link">
                                {{--                                <i class="far fa-circle nav-icon"></i>--}}
                                <p>Categories</p>
                            </a>
                        </li>
                    </ul>

                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Clients
                        </p>
                    </a>


                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('backend.client.create')}}" class="nav-link ">
                                <p>Ajouter un client</p>
                            </a>
                        </li>
{{--                        <div class="dropdown-divider"></div>--}}
                        <li class="nav-item">
                            <a href="{{route('backend.client.list')}}" class="nav-link">
                                {{--                                <i class="far fa-circle nav-icon"></i>--}}
                                <p>Tous les clients</p>
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Configurations
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <p>Ajouter un compte</p>
                            </a>
                        </li>
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <p>Parametres de track</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <div class="dropdown-divider"></div>

                        <li class="nav-item">
                            <a href="{{route('backend.country.list')}}" class="nav-link">
                                <p>Pays</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('backend.city.list')}}" class="nav-link">
                                <p>Ville</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('backend.quater.list')}}" class="nav-link">
                                <p>Quartier</p>
                            </a>
                        </li>

                    </ul>

                </li>




            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
