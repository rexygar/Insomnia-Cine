$(document).ready(function () {

    $('#limpiar').on('click', function(){
        $('#endDate').prop( "disabled", true );
        $('#endDate').datepicker("destroy");
        $("#startDate").val('');
        $("#endDate").val('');
    })

    $('#endDate').on('change', function(){
        $('#registros').text('0');
    })
    $('#startDate').on('change', function(){
        $('#registros').text('0');
    })
    $('#select').on('change', function(){
        $('#registros').text('0');
    })

    $('#buscar').on('click', function(){
        ruta = $('#url').val();
        _token   = $('[name="_token"]').val();
        $('#registros').text('0');

        end = $('#endDate').val()
        start  = $('#startDate').val()
        fami = $('#select').val()

        if(start == ''){
            toastr['warning']('Porfavor Seleccione una fecha de Inicio')
            return;
        }
        if(end == ''){
            toastr['warning']('Porfavor Seleccione una fecha de Termino')
            return;
        }

        $.ajax({
            url: ruta,
            type:'GET',
            data : {end    : end, start : start,fami: fami, _token  : _token},
            
        }).done(function(data){
            if(data != 'error'){
                if(data > 0){
                    $('#registros').text(data);

                }else{
                    toastr['info']('Ningun Registro Encontrado')
                }
            }else{
                toastr['warning']('Error en el Servidor')
            }
        }).fail(function (jqXHR, ajaxOptions, thrownError) {
            toastr['warning']('Error en el Servidor')
        })
    });

    $('#export').on('click', function(event){

        url = $('#ulrexport').val();
        end = $('#endDate').val();
        start  = $('#startDate').val();
        fami = $('#select').val();

        if(start == ''){
            toastr['warning']('Porfavor Seleccione una fecha de Inicio')
            event.preventDefault();
            return;
        }
        if(end == ''){
            toastr['warning']('Porfavor Seleccione una fecha de Termino')
            event.preventDefault();
            return;
        }

        registros = $('#registros').text()
        if( registros < 1){
            toastr['warning']('Porfavor Realice Busqueda de Registros')
            event.preventDefault();
            return;
        }

        newurl = url+'/'+fami+'/'+start+'/'+end;
                   
        window.open(newurl, '_blank');

    })

});