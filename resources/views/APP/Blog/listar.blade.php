@extends('layout.master')
@section('parentPageTitle', 'Cargar Data')
@section('title', 'Listar Blogs')

@section('content')
    <input type="hidden" value="{{ route('blog.listar') }}" id="rutaListar">
    <div id="content-wrapper" class="d-flex flex-column" style="margin-top: -70px;">
        <div class="row" style="">
            <div class="col-xl-6">
                <h1 class="page-header" style="margin-top: 20px;">Listar Blogs</h1>
            </div>
        </div>
        <table class="table table-bordered data-table" style="width: 100%">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Titulo</th>
                    <th class="text-center">Publicación</th>
                    <th class="text-center">Acción</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    @endsection

    @section('page-styles')
        <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/searchpanes/1.2.1/css/searchPanes.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet">
    @endsection

    @section('vendor-script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/searchpanes/1.2.1/js/dataTables.searchPanes.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="{{ asset('assets/js/tablaBlog.js') }}"></script>
    @endsection
