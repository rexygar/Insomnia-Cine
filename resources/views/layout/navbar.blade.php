<nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="index.html"><img src="{{ asset('assets/images/cropped-fav-32x32.png') }}" alt="Eberlein Logo"
                        class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-align-left"></i></button>
            </div>
        </div>
        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li class="hidden-xs"><a href="javascript:void(0);" id="btnFullscreen" class="icon-menu"><i
                                class="fa fa-arrows-alt"></i></a></li>
                    <li>
                        <form id="salir" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <a href="#" onclick="document.getElementById('salir').submit()" class="icon-menu"><i
                                    class="fa fa-power-off"></i></a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
