$(document).ready(function () {
    var ruta = $("#rutaListar").val();
    var table = $(".data-table").DataTable({
        processing: true,
        serverside: true,
        ajax: ruta,
        columns: [
            { data: "id", name: "id" },
            { data: "nombre", name: "nombre" },
            { data: "action", orderable: false, searchable: false },
        ],
        rowCallBack: function (row) {
            $($(row)).css("text-align", "center");
        },
    });
});
