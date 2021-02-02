$(document).ready(function() {
    var ruta = $('#rutaListar').val()
    var table = $('.data-table').DataTable({
        processing: true,
        serverside: true,
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
        ajax: ruta,
        columns: [
            {data: 'NumOT', name: 'NumOT'},
            {data: 'NomCliente', name: 'NomCliente'},
            {data: 'NomTarea', name: 'NomTarea'},
            {data: 'FhoCreacionOT', name: 'FhoCreacionOT'},
            {data: 'FhoAsignacion', name: 'FhoAsignacion'},
            {data: 'NomResponsable', name: 'NomResponsable'},
            {data: 'DiasAsignacion', name: 'DiasAsignacion'},
            {data: 'DiasCreacion', name: 'DiasCreacion'},
        ],
        columnDefs: [
            { searchPanes: { show: true }, targets: [2] },
            { searchPanes: { show: false }, targets: [0,1,3,4,5,6,7] }
        ],
        'rowCallback': function(row, data){
            if(data['NomTarea'] == 'Pendiente de Reparación'){
                $($(row)).css("background-color", "#055EDF");
                $($(row)).css("color", "#FFFFFF");
                $($(row)).css("text-align", "center");
            }else if(data['NomTarea'] == 'Presupuesto Enviado'){
                $($(row)).css("background-color", "#e8fb4d");
                $($(row)).css("color", "#000000");
                $($(row)).css("text-align", "center");
            }else if(data['NomTarea'] == 'Pendiente de Retiro'){
                $($(row)).css("background-color", "#39a045");
                $($(row)).css("color", "#FFFFFF");
                $($(row)).css("text-align", "center");
            }else if(data['NomTarea'] == 'Facturación'){
                $($(row)).css("background-color", "#005a0b");
                $($(row)).css("color", "#FFFFFF");
                $($(row)).css("text-align", "center");
            }else if(data['NomTarea'] == 'Asignar Técnico'){
                    $($(row)).css("background-color", "#1FB6D3");
                    $($(row)).css("color", "#FFFFFF");
                    $($(row)).css("text-align", "center");
            }else if(data['NomTarea'] == 'Aprobado y en espera de repuestos'){
                    $($(row)).css("background-color", "#fb8d4d");
                    $($(row)).css("color", "#FFFFFF");
                    $($(row)).css("text-align", "center");
            }else if(data['NomTarea'] == 'Rechazado'){
                    $($(row)).css("background-color", "#cb3234");
                    $($(row)).css("color", "#FFFFFF");
                    $($(row)).css("text-align", "center");
            }
        }
    });
})