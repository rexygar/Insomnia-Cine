<div id="left-sidebar" class="sidebar">
    <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
    <div class="navbar-brand">
        <a href=""><img src="{{ asset('assets/images/logo.png') }}" class="img-fluid logo"></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="fa fa-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <img src="{{ asset('assets/images/user.png') }}" class="user-photo" alt="User Profile Picture">
            </div>
            <div class="dropdown">
                <span>
                    {{-- @if (isset(Auth::user()->roles[0]['role']) && Auth::user()->roles[0]['role'] != '')
                        {{ Auth::user()->roles[0]['role'] }},
                    @else
                        Invitado,
                    @endif --}}
                </span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name"
                    data-toggle="dropdown"><strong></strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li>
                        <form id="salir" action="" method="POST">
                            @csrf
                            <a href="#" onclick="document.getElementById('salir').submit()"><i
                                    class="fa fa-power-off"></i>Salir</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            {{-- @foreach (Auth::user()->roles as $rol) --}}
            <ul id="main-menu" class="metismenu animation-li-delay">
                <li class="header">Main</li>
                <li><a href="/"><i class="fa fa-home"></i> <span>Inicio</span></a></li>

                <li class="header">Apps</li>
                {{-- @if (($rol['role'] == 'Administrador' && $rol->area[0]->nombre == 'general') || $rol['role'] == 'Vendedor') --}}
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-folder"></i><span>Productos</span></a>
                    <ul>
                        <li><a href="">Listar</a></li>
                    </ul>
                </li>
                {{-- @endif --}}
                {{-- @if ($rol['role'] == 'Administrador' || $rol['role'] == 'Usuario') --}}
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-clone"></i><span>Pendientes</span></a>
                    <ul>
                        {{-- @if ($rol->area[0]->nombre == 'general') --}}
                        <li><a href="">Listar Todo</a></li>
                        {{-- @else --}}
                        <li><a href="">Listar</a></li>
                        {{-- @endif --}}
                    </ul>
                </li>
                {{-- @endif --}}
                {{-- @if ($rol['role'] == 'Administrador' && $rol->area[0]->nombre == 'general') --}}
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-user"></i><span>Usuarios</span></a>
                    <ul>
                        <li><a href="">Listar</a></li>
                    </ul>
                </li>
                {{-- @endif --}}
                {{-- @if (($rol['role'] == 'Administrador' && $rol->area[0]->nombre == 'general') || $rol['role'] == 'Vendedor') --}}
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-clipboard"></i><span>Ventas</span></a>
                    <ul>
                        <li><a href="">Listar</a></li>
                        <li><a href="">Crear</a></li>
                    </ul>
                </li>
                {{-- @endif --}}
                {{-- @if (($rol['role'] == 'Administrador' && $rol->area[0]->nombre == 'general') || $rol['role'] == 'Vendedor') --}}
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-clipboard"></i><span>Cotizacion</span></a>
                    <ul>
                        <li><a href="">Listar</a></li>
                    </ul>
                </li>
                {{-- @endif --}}
                {{-- @if ($rol['role'] == 'Administrador') --}}
                <li class="header">Funciones</li>
                {{-- @if ($rol->area[0]->nombre == 'general') --}}
                <li><a href=""><i class="fa fa-download"></i>
                        <span>Cargar Data</span></a></li>

                <li><a href=""><i class="fa fa-bullhorn"></i><span>Exportar Productos</span></a></li>
                {{-- @endif --}}
                <li><a href=""><i class="fa fa-bullhorn"></i><span>Crear
                            Anuncios</span></a></li>
                {{-- @endif --}}
            </ul>
            <br><br><br><br><br><br>
            {{-- @endforeach --}}
        </nav>
    </div>
</div>
