$(document).ready(function() {
    var ruta = $('#rutaListar').val()
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: ruta,
        columns: [
            {data: 'CodInterno', name: 'CodInterno'},
            {data: 'CodOriginal', name: 'CodOriginal'},
            {data: 'Descripcion', name: 'Descripcion'},
            {data: 'Precio', name: 'Precio'},
            {data: 'Stock', name: 'Stock'},
        ]
    });
    
})