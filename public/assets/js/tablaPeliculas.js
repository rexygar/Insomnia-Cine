$(document).ready(function () {
    var ruta = $("#rutaListar").val();
    var table = $(".datatable").DataTable({
        processing: true,
        serverside: true,
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
        ajax: ruta,
        columns: [
            { data: "id", name: "id" },
            { data: "Titulo", name: "Titulo" },
            { data: "Descripcion", name: "Descripcion" },
            { data: "Clasificacion", name: "Clasificacion" },
            { data: "Duracion", name: "Duracion" },
            { data: "Año_estreno", name: "Año_estreno" },
            { data: "En_Cartelera", name: "En_Cartelera" },
            { data: "action", orderable: false, searchable: false },
        ],
        columnDefs: [
            { searchPanes: { show: true }, targets: [2] },
            { searchPanes: { show: false }, targets: [0, 1, 3, 4, 5, 6] },
        ],
    });
});
