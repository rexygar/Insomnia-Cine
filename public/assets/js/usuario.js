$(document).ready(function () {
    $("#editar").on("click", function () {
        var url = $("#urlUser").val();
        var rut = $("#rut").val();
        var nombre = $("#nombre").val();
        var apellidos = $("#apellido").val();
        var fecha = $("#fechaNacimiento").val();

        if (rut == "") {
            toastr["warning"]("Por favor ingresar RUT");
            return false;
        }
        var id = $("#id_user").val();
        $.ajax({
            url: url,
            type: "POST",
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                id: id,
                nombre: nombre,
                apellidos: apellidos,
                fecha: fecha,
            },
            success: function (data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Usuario Editado");
                    $("#id_user").val(data["id"]);
                } else {
                    toastr["warning"](
                        "Ha ocurrido un problema, por favor vuelva a intentarlo"
                    );
                }
            },
            error: function (data) {
                toastr["warning"](
                    "Ha ocurrido un problema, por favor vuelva a intentarlo"
                );
            },
        });
    });
});
