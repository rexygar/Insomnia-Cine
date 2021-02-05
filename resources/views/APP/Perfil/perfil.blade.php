@extends('layout.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Index')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container">
                <div class="container-flex content">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Pefil</h2>
                                </div>
                                <div class="card-body">
                                    <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="urlUser" value="{{ Route('perfil') }}">
                                    <div class="form-group row">
                                        <label for="Rut" class="col-md-2 col-form-label text-md-center">Rut</label>
                                        <div class="col-md-4">
                                            <input type="text" id="rut" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nombre" class="col-md-2 col-form-label text-md-center">Nombre</label>
                                        <div class="col-md-4">
                                            <input type="text" id="nombre" class="form-control">
                                        </div>
                                        <label for="apellido"
                                            class="col-md-2 col-form-label text-md-center">Apellidos</label>
                                        <div class="col-md-4">
                                            <input type="text" id="apellido" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fecha_nacimiento" class="col-md-2 col-form-label text-md-center">Fecha
                                            de Nacimiento</label>
                                        <div class="col-md-4">
                                            <input type="date" id="fechaNacimiento" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer align-right">
                                    <button id="editar" type="submit" class="btn btn-primary">Editar Perfil</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page-styles')
    <link href="{{ asset('assets/css/pages/listar/custom.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/js/util/jquery.rut.chileno.min.js') }}"></script>
    <script>
        jQuery(document).ready(function($) {
            $('#rut').rut();
        });

    </script>
    <script src="{{ asset('assets/js/usuario.js') }}"></script>
@endsection

@section('vendor-script')
    <script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
@endsection
