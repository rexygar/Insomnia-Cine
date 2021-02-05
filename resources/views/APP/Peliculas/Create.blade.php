@extends('layout.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Index')


@section('content')
<style>
    .input-ctrl-bg {
        background-color: aliceblue;
    }

    .input-ctrl-bg:focus {
        background-color: aliceblue;
    }

    .sect-1 {
        margin-top: -50px !important;
    }

</style>
<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container">
            <div class="container-flex content">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h1 style="color: black;
                        font-weight: 500;">Agregar Pelicula</h1>

                            </div>
                            <div class="card-body">
                                <div class="col-md-12">
                                    <form method="POST" action="" enctype="multipart/form-data">
                                        <div class="col-md-11 offset-lg-1">
                                            {{ csrf_field() }}
                                            <div class="form-group col-md-12">
                                                <label for="Titulo">Titulo:</label>
                                                <input required placeholder="ingrese el Titulo de la publicacion"
                                                    type="input" class="form-control input-ctrl-bg" id="Titulo"
                                                    name="Titulo">
                                            </div>
                                            <div class="form-group col-md-12">
                                                <label for="Sinopsis "> Sinopsis:</label>
                                                <textarea required placeholder="ingrese una Sinopsis"
                                                class="form-control input-ctrl-bg" id="Sinopsis" name="Sinopsis"
                                                rows="10" placeholder="Ingrese una Sinopsis"></textarea>
                                            </div>
                                            
                                            <div class="form-group col-md-12">
                                                <label for="Duracion">Duracion:</label>
                                                <input required placeholder="ingrese el Duracion de la publicacion"
                                                    type="input" class="form-control input-ctrl-bg" id="Duracion"
                                                    name="Duracion">
                                            </div>


                                            <div class="container">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="form-group col-md-12">
                                                            <label for="Año_estreno">Año_estreno:</label>
                                                            <input class="form-control input-ctrl-bg" type="date"
                                                                name="Año_estreno" id="Año_estreno">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="Genero">Genero:</label>
                                                            <select class="form-control input-ctrl-bg" name="Genero"
                                                                id="Genero">
                                                                <option value="0">--- Seleccionar Genero ---</option>
                                                                <option value="1000">--- Nuevo Genero ---</option>
                                                                {{-- @foreach ($Genero as $cate)
                                                                    <option value="{{ $cate->idGenero }}">
                                                                {{ $cate ->Genero }}</option>
                                                                <option value="1"> </option>
                                                                {{-- @foreach ($Genero as $cate)
                                                                        <option value="{{ $cate->idGenero }}">
                                                                {{ $cate ->Genero }}</option>
                                                                @endforeach--}}
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-12 Gopcional">
                                                            <form action=""><label for="GeneroNew">Genero:</label>
                                                                <input required
                                                                    placeholder="ingrese el Genero de la publicacion"
                                                                    type="input" class="form-control input-ctrl-bg"
                                                                    id="GeneroNew" name="GeneroNew">
                                                            </form>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="Clasificacion">Clasificacion:</label>
                                                            <select class="form-control input-ctrl-bg" name="Clasificacion"
                                                                id="Clasificacion">
                                                                <option value="0">--- Seleccionar Clasificacion ---
                                                                </option>
                                                                <option value="TE">--- TE (todos los espectadores) ---
                                                                </option>
                                                                <option value="TE+7">--- TE+7 (mayores de 7 años) ---
                                                                </option>
                                                                <option value="14">--- 14 (mayores de 14 años) ---
                                                                </option>
                                                                <option value="18">--- 18 (mayores de 14 años) ---
                                                                </option>
                                                                <option value="1000">--- Nueva Clasificacion ---</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-12 Copcional">
                                                            <form action=""><label for="ClasificacionNew">Clasificacion:</label>
                                                                <input required
                                                                    placeholder="ingrese el Clasificacion de la publicacion"
                                                                    type="input" class="form-control input-ctrl-bg"
                                                                    id="ClasificacionNew" name="ClasificacionNew">
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <!-- <div class="form-group col-md-6">
                                                            <label for="Calificacion">Calificacion:</label>
                                                            <select class="form-control input-ctrl-bg" name="Subcat"
                                                                id="Subcat">
                                                                <option value="0">--- Seleccionar Calificacion ---
                                                                </option>
                                                            </select>
                                                        </div> -->

                                                    </div>
                                                </div>
                                            </div>

                                            {{-- <div class="form-group col-md-6">
                    <input type="hidden" name="Activa" id="Activa" value="1">
                </div> --}}


                                            <div class="row">
                                                <div class="col-md-2  offset-lg-10">
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-success">
                                                            Agregar </button>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group col-md-6">
                        <label class="btn btn-default btn-file">
                            Subir Imagen <input type="file" name="images" style="display: none;">
                        </label>
                    </div> --}}
                                            </div>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        if (jQuery) {
            // jQuery is loaded  
            alert("Yeah!");
        } else {
            // jQuery is not loaded
            alert("Doesn't Work");
        }
    });

</script>
<script defer>
    window.onload = function () {

        $('.Gopcional').hide();
        $('.Copcional').hide();
        $('select[name="Genero"]').on('change', function () {
            var GeneroID = $(this).val();
            if (GeneroID == 1000) {
                $('.Gopcional').show();
            } else {
                $('.Gopcional').hide();
            }
        });
        $('select[name="Clasificacion"]').on('change', function () {
            var GeneroID = $(this).val();
            if (GeneroID == 1000) {
                $('.Copcional').show();
            } else {
                $('.Copcional').hide();
            }
        });
    };

</script>
<!-- <div class="row">
            <div class="input-group control-group increment">
            <div class="form-group ">
                <label class="btn btn-default">
                    Subir Imagen <input type="file" onchange="readURL(this);" name="image[]" multiple
                        class="form-control input-ctrl-bg">
                </label>
            </div>
            </div>
            </div> -->
<!-- <div class="row">
                <div class="col-md-12">
                    <h3>Listing Images</h3>

                    <div class="row">
                        <div class="col">
                            <img id="blah" src="http://placehold.it/180" alt="your image" />
                        </div>
                    </div>
                </div>
            </div> -->

@stop
