$(document).ready(function () {
    var ruta = $("#rutaListar").val();
    var table = $(".datatable").DataTable({
        processing: true,
        serverside: true,
        ajax: ruta,
        language: {
            searchPanes: {
                collapse: "Filtros",
                title: {
                    _: "Filters Selected - %d",
                    0: "No Filters Selected",
                    1: "One Filter Selected",
                },
            },
        },
        searchPanes: {
            viewTotal: true,
            columns: [2],
            orderable: false,
        },
        buttons: [
            {
                extend: "searchPanes",
                className: "btn btn-primary boton-blanco",
            },
        ],
        dom: "Blfrtip",
        columns: [
            { data: "id", name: "id" },
            { data: "Titulo", name: "Titulo" },
            { data: "publicacion", name: "publicacion" },
            { data: "action", orderable: false, searchable: false },
        ],
        columnDefs: [
            { searchPanes: { show: true }, targets: [1] },
            { searchPanes: { show: false }, targets: [0, 2] },
        ],
    });
});
