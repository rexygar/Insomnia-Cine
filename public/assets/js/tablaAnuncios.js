$(document).ready(function() {
    var ruta = $('#rutaListar').val()
    var table = $('.data-table').DataTable({
        processing: true,
        serverside: true,
        ajax: ruta,
        columns: [
            {data: 'vista', name: 'vista'},
            {data: 'actions', orderable:false, searchable:false},
        ],
        'rowCallBack': function(row){
            $($(row)).css("text-align", "center");
        },
    });
})