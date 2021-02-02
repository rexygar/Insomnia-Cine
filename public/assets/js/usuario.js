$(document).ready(function () {
    function creararray() {
        var parametros = [];
        $("#mytable tr").each(function (i, e) {
            if (i > 0) {
                rol = {};

                var data = $(this).find("td");
                rol["ROLE"] = $(data[0]).text();
                rol["ID_AREA"] = $(data[1]).text();

                parametros.push(rol);
            }
        });
        return parametros;
    }

    $(document).on("click", ".btn_remove", function () {
        var button_id = $(this).attr("id");
        //cuando da click obtenemos el id del boton
        $("#row" + button_id + "").remove(); //borra la fila
        //limpia el para que vuelva a contar las filas de la tabla
        $("#adicionados").text("");
        var nFilas = $("#mytable tbody").length;
        $("#adicionados").append(nFilas - 1);
    });

    $("#adicionar").on("click", function () {
        var permiso = $("#permiso").val();
        var area = "";
        if ($("#area").val() == "1") {
            var area = "General";
        }
        if ($("#area").val() == "2") {
            var area = "Diesel";
        }
        if ($("#area").val() == "3") {
            var area = "Forestal";
        }
        if ($("#area").val() == "4") {
            var area = "Ferreteria";
        }
        if ($("#area").val() == "5") {
            var area = "Limpieza Profesional";
        }
        var i = $("#mytable tbody tr").length;
        i++;
        var fila =
            '<tr id="row' +
            i +
            '"><td>' +
            permiso +
            "</td><td>" +
            area +
            '</td><td><button type="button" name="remove" id="' +
            i +
            '" class="btn btn-danger btn_remove">Quitar</button></td></tr>';

        $("#mytable tbody").append(fila);
    });

    $("#restablecer").on("click", function () {
        id = $("#id_user").val();
        url = $("#urlReset").val();
        $.ajax({
            url: url,
            type: "POST",
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                id: id,
            },
            success: function (data) {
                if (data == "Successful") {
                    toastr["info"]("Contraseña Reseteada");
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

    $("#editar").on("click", function () {
        var url = $("#urlUser").val();
        var nom = $("#nombre").val();
        var email = $("#email").val();
        var pass = $("#contraseña").val();

        if (nom == "") {
            toastr["warning"]("Por favor ingresar Nombre");
            return false;
        }

        var data = creararray();
        var id = $("#id_user").val();
        $.ajax({
            url: url,
            type: "POST",
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                id: id,
                nom: nom,
                email: email,
                pass: pass,
                data: data,
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

    $("#permiso").change(function () {
        if ($("#permiso").val() == "Vendedor") {
            $("#area").prop("disabled", "disabled");
        } else {
            $("#area").prop("disabled", false);
        }
    });
});
