function saveProductos() {
    $.ajax({
        url: "http://190.208.55.58:1701/webservice/?query=GetProductos",
        type: "get",
        beforeSend: function () {
            toastr["info"]("Rescatando Datos");
        },
    })
        .done(function (data) {
            callProductos(data);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            toastr["warning"]("Error al Rescatar Datos");
        });
}

function savePendientes() {
    $.ajax({
        url:
            "http://190.208.55.58:1701/webservice/?query=GetOTsPendientesTodo&vars=0;0;0;0;0",
        type: "get",
        beforeSend: function () {
            toastr["info"]("Rescatando Datos");
        },
    })
        .done(function (data) {
            callPendientes(data);
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            toastr["warning"]("Error al Rescatar Datos");
        });
}

function callProductos(info) {
    var ruta = $("#productos").val();
    let _token = $('[name="_token"]').val();
    $.ajax({
        url: ruta,
        type: "POST",
        data: { data: info, _token: _token },
        beforeSend: function () {
            toastr["info"]("Insertando Datos");
        },
    })
        .done(function (data) {
            if (data == "Succes") {
                toastr["info"]("Datos Guardados");
            } else {
                toastr["warning"]("Error al Guardar la Data");
            }
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            toastr["warning"](jqXHR);
            toastr["warning"](ajaxOptions);
            toastr["warning"](thrownError);
        });
}

function callPendientes(info) {
    var ruta = $("#pendientes").val();
    let _token = $('[name="_token"]').val();
    $.ajax({
        url: ruta,
        type: "POST",
        data: { data: info, _token: _token },
        beforeSend: function () {
            toastr["info"]("Insertando Datos");
        },
    })
        .done(function (data) {
            if (data == "Succes") {
                toastr["info"]("Datos Guardados");
            } else {
                toastr["warning"]("Error al Guardar la Data");
            }
        })
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            toastr["warning"](jqXHR);
            toastr["warning"](ajaxOptions);
            toastr["warning"](thrownError);
        });
}
