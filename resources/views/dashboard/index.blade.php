@extends('layout.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Index')


@section('content')
    <input type="hidden" value="{{ url('/Pendientes/OTpendientes') }}" id="otPendientes">
    <input type="hidden" value="{{ url('/Pendientes/OTlista') }}" id="otLista">
    <input type="hidden" value="{{ url('/Pendientes/NoApobado') }}" id="otNoAprobada">
    <input type="hidden" value="{{ url('/Pendientes/OTPresupuesto') }}" id="otPresupuesto">
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="block-header">
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1>BIENVENIDO AL SISTEMA DE INSOMNIA</h1>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">OT LISTAS
                                        </div>

                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><label for="listo"></label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-check fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">OT PENDIENTES
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><label for="pendiente"></label>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa fa-hourglass-end fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-info shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">OT PRESUPUESTO
                                        </div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><label
                                                for="presupuesto"></label></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pending Requests Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">NO APROBADAS
                                        </div>
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><label
                                                for="noAprobada"></label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Row -->

                <div class="row">

                    <!-- Area Chart -->
                    <div class="col-xl-12 col-lg-12">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Peliculas en Cartelera</h6>
                            </div>

                            <!-- Card Body -->
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Fecha</th>
                                        <th scope="col">llll</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        @stop

        @section('page-styles')
            <link rel="stylesheet" href="{{ asset('assets/vendor/chartist/css/chartist.min.css') }}">
            <link rel="stylesheet"
                href="{{ asset('assets/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/vendor/c3/c3.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/vendor/toastr/toastr.min.css') }}">
            <link rel="stylesheet" href="{{ asset('assets/vendor/jvectormap/jquery-jvectormap-2.0.3.css') }}">
        @stop

        @section('vendor-script')
            <script src="{{ asset('assets/bundles/flotscripts.bundle.js') }}"></script>
            <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
            <script src="{{ asset('assets/bundles/apexcharts.bundle.js') }}"></script>
            <script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>
            <script src="{{ asset('assets/vendor/toastr/toastr.js') }}"></script>
        @stop

        @section('page-script')
            <script src="{{ asset('assets/js/index.js') }}"></script>
        @stop
