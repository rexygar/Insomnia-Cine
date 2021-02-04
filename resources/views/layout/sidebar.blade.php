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
                   
                </span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name"
                    data-toggle="dropdown"><strong>{{ Auth::user()->name }}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li>
                        <form id="salir" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="#" onclick="document.getElementById('salir').submit()"><i
                                    class="fa fa-power-off"></i>Salir</a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu animation-li-delay">
                <li class="header">Main</li>
                <li><a href="/"><i class="fa fa-home"></i> <span>Inicio</span></a></li>

                <li class="header">Apps</li>
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-film"></i><span>Peliculas</span></a>
                    <ul>
                        <li><a href="">Listar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-newspaper-o"></i><span>Noticias</span></a>
                    <ul>
                        <li><a href="#">Listar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-file"></i><span>Blog</span></a>
                    <ul>
                        <li><a href="#">Listar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-user"></i><span>Usuarios</span></a>
                    <ul>
                        <li><a href="#">Listar</a></li>
                    </ul>
                </li>
                <!--
                <li class="header">Funciones</li>
                <li>
                    <a href="">
                        <i class="fa fa-download"></i>
                        <span>prueba</span>
                    </a>
                </li>
                -->
            </ul>
            <br><br><br><br><br><br>
        </nav>
    </div>
</div>
