@extends('layout.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Index')


@section('content')
<style>
.input-ctrl-bg{
    background-color: aliceblue;
}
.input-ctrl-bg:focus {
    background-color: aliceblue;
}

</style>
<div class="container-fluid">
    <div class="row">
        <div class="col offset-1">
            <h1>Agregar Pelicula</h1>
        <br>
        <br>
        </div>
        <div class="col-md-12">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="col-md-10 offset-lg-2">
                    {{ csrf_field() }}
                    <div class="form-group col-md-8">
                        <label for="Titulo">Titulo:</label>
                        <input required placeholder="ingrese el Titulo de la publicacion" type="input"
                        class="form-control input-ctrl-bg" id="Titulo" name="Titulo">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="Sinopsis "> Sinopsis:</label>
                        <input required placeholder="ingrese una Sinopsis" type="input" class="form-control input-ctrl-bg"
                            id="Sinopsis" name="Sinopsis">
                    </div>
                    
                    <div class="form-group col-md-8">
                        <label for="Genero">Genero:</label>
                        <select class="form-control input-ctrl-bg" name="Genero" id="Genero">
                            <option value="0">--- Seleccionar Genero ---</option>
                            {{-- @foreach ($Genero as $cate)
                            <option value="{{ $cate->idGenero }}"> {{ $cate ->Genero }}</option>
                            @endforeach--}}
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="Clasificacion">Clasificacion:</label>
                        <select class="form-control input-ctrl-bg" name="Subcat" id="Subcat">
                            <option value="0">--- Seleccionar Clasificacion ---</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="Calificacion">Calificacion:</label>
                        <select class="form-control input-ctrl-bg" name="Subcat" id="Subcat">
                            <option value="0">--- Seleccionar Calificacion ---</option>
                        </select>
                    </div>
                    <div class="form-group col-md-8">
                        <label for="Año_estreno">Año_estreno:</label>
                        <input type="date" name="Año_estreno" id="Año_estreno">
                    </div>

                    {{-- <div class="form-group col-md-6">
                        <input type="hidden" name="Activa" id="Activa" value="1">
                    </div> --}}


                    <div class="row">
                        <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-success">crear</button>
                        </div>
                        {{-- <div class="form-group col-md-6">
                            <label class="btn btn-default btn-file">
                                Subir Imagen <input type="file" name="images" style="display: none;">
                            </label>
                        </div> --}}
                    </div>
                    <div class="row">
                        <div class="input-group control-group increment">
                            <div class="form-group col-md-2">
                                <label class="btn btn-default btn-file">
                                    Subir Imagen <input type="file" onchange="readURL(this);" name="image[]" multiple
                                        class="form-control input-ctrl-bg">
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Listing Images</h3>

            <div class="row">
                <div class="col">
                    <img id="blah" src="http://placehold.it/180" alt="your image" />
                </div>
            </div>
        </div>
    </div>
</div>

@stop
