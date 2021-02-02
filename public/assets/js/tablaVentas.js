$(document).ready(function() {
    var ruta = $('#rutaListar').val()
    var table = $('.data-table').DataTable({
        processing: true,
        serverside: true,
        ajax: ruta,
        language: {
            searchPanes: {
                collapse: 'Filtros',
                title: {
                    _: 'Filters Selected - %d',
                    0: 'No Filters Selected',
                    1: 'One Filter Selected'
                }
            }
        },
        searchPanes: {
            viewTotal: true,
            columns: [ 2 ],
            orderable: false
        },
        buttons: [
            { extend: 'searchPanes', className: 'btn btn-primary boton-blanco' },
        ],
        dom: 'Blfrtip',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'rut', name: 'rut'},
            {data: 'nombreCliente', name: 'nombreCliente'},
            {data: 'neto', name: 'neto'},
            {data: 'IVA', name: 'IVA'},
            {data: 'totalVenta', name: 'totalVenta'},
            {data: 'status', name: 'status'},
            {data: 'action', orderable:false, searchable:false},
        ],
        columnDefs: [
            { searchPanes: { show: true }, targets: [0, 1] },
            { searchPanes: { show: false }, targets: [3,4,5] }
        ],
        'rowCallBack': function(row, data){
            if(data['status'] == '1'){
                $($(row['status'])) = 'confirmado';
            }
        }
    });

    
})