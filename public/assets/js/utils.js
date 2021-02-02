function modales(btn){
    id = btn;
    $('#idDelete').val(id);
    $('#myModaldelete').modal("show");
}

function eliminar(){
    id =  $('#idDelete').val();

    var ruta = $('#productos').val();
    let _token   = $('[name="_token"]').val();
    $.ajax({
        url: ruta,
        type:'GET',
        data : {id    : id,
                _token  : _token},
        beforeSend: function(){
        }
    }).done(function(data){
        console.log(data)
        $('#myModaldelete').modal("hide");
        toastr['info']('Se ha eliminado correctamente.')
        $('#tablaVenta').DataTable().ajax.reload()

    }).fail(function(jqXHR, ajaxOptions, thrownError ){
        console.log(jqXHR)
        console.log(ajaxOptions)
        console.log(thrownError)
        toastr['warning']('Ha ocurrido un problema, por favor vuelva a intentarlo')
    })
}