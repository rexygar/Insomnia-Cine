<div id="left-sidebar" class="sidebar">
    <a href="javascript:void(0);" class="menu_toggle"><i class="fa fa-angle-left"></i></a>
    <div class="navbar-brand">
        <a href=""><img src="{{ asset('assets/images/logo.jpg') }}" class="img-fluid logo"></a>
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
                        <a href="{{ route('perfil') }}"><i class="fa fa-address-card"></i><span>Perfil</span></a>
                    </li>
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
                <li class="header">Principal</li>
                <li><a href="/"><i class="fa fa-home"></i> <span>Inicio</span></a></li>

                <li class="header">Modulos</li>
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-film"></i><span>Peliculas</span></a>
                    <ul>
                        <li><a href="{{ route('pelicula.listar') }}">Listar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-newspaper-o"></i><span>Noticias</span></a>
                    <ul>
                        <li><a href="{{ route('noticia.listar') }}">Listar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-file"></i><span>Blog</span></a>
                    <ul>
                        <li><a href="{{ route('blog.listar') }}">Listar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="has-arrow"><i class="fa fa-user"></i><span>Usuarios</span></a>
                    <ul>
                        <li><a href="{{ route('user.listar') }}">Listar</a></li>
                    </ul>
                </li>
                <li class="header">
                    <hr style="width: 100%">
                </li>
                <li>
                    <a href="{{ route('perfil') }}"><i class="fa fa-address-card"></i><span>Perfil</span></a>
                </li>

            </ul>
            <br><br><br><br><br><br>
        </nav>
    </div>
</div>
