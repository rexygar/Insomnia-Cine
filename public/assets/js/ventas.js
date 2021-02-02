$(document).ready(function () {
    validarPrint();

    $("#SKU").keyup(function (e) {
        if (e.keyCode == 13) {
            buscarProd();
        }
    });

    $("#buscar").on("click", function () {
        buscarProd();
    });

    function buscarProd() {
        var sku = $("#SKU").val();
        var url = $("#url").val();
        $.ajax({
            url: url,
            type: "POST",
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                sku: sku,
            },
            success: function (data) {
                if (data == "Error") {
                    toastr["warning"](
                        "hubo un error, por favor vuelva a intentar o ingrese otro SKU"
                    );
                    return;
                }
                $("#descripcion").val(data["Descripcion"]);
                $("#precio").val(data["Precio"]);
                $("#stock").val(data["Stock"]);
                $("#SKU").prop("disabled", true);
            },
            error: function (data) {
                toastr["warning"](
                    "hubo un error, por favor vuelva a intentar o ingrese otro SKU"
                );
            },
        });
    }

    $("#descuento").on("change", function () {
        if ($("#descuento").val() > 100) {
            $("#descuento").val("100");
        }

        if ($("#descuento").val() < 0) {
            $("#descuento").val("0");
        }
        actualizarTotal();
    });

    $("#cantidad").on("change", function () {
        cantidad = parseInt($("#cantidad").val());
        stock = parseInt($("#stock").val());

        if (cantidad < 0) {
            $("#cantidad").val("0");
        }

        if (cantidad > stock) {
            $("#cantidad").val($("#stock").val());
        }

        actualizar();
    });

    function actualizar() {
        $("#total").val($("#precio").val() * $("#cantidad").val());
    }

    function validarPrint() {
        if ($("#id").val() == "") {
            $("#linkPrint").hide();
        } else {
            print = $("#urlPrint").val();
            $("#ventas").val("Actualizar Venta");
            $("#linkPrint").attr("href", print + "/" + $("#id").val());
            $("#linkPrint").show();
        }
    }

    function actualizarTotal() {
        var desc =
            (($("#precio").val() * $("#cantidad").val()) / 100) *
            $("#descuento").val();
        $("#total").val($("#precio").val() * $("#cantidad").val() - desc);
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

    function creararray() {
        var parametros = [];
        $("#mytable tr").each(function (i, e) {
            if (i > 0) {
                producto = {};

                var data = $(this).find("td");

                producto["SKU"] = $(data[0]).text();
                producto["DESCRIPCION"] = $(data[1]).text();
                producto["PRECIO"] = $(data[2]).text();
                producto["STOCK"] = $(data[3]).text();
                producto["CANTIDAD"] = $(data[4]).text();
                producto["DESCUENTO"] = $(data[5]).text();
                producto["DESCUENTOMONE"] = $(data[6]).text();
                producto["TOTAL"] = $(data[7]).text();

                parametros.push(producto);
            }
        });
        return parametros;
    }

    function validarProducto(sku) {
        valida = false;
        $("#mytable tr").each(function (i, e) {
            if (i > 0) {
                var data = $(this).find("td");

                if ($(data[0]).text() == sku) {
                    valida = true;
                }
            }
        });
        return valida;
    }

    //función guardar datos de la tabla
    $("#adicionar").on("click", function () {
        if (!validar()) {
            return;
        }
        var sku = $("#SKU").val();
        valdia = validarProducto(sku);
        if (valdia) {
            toastr["warning"]("Producto Ya Agregado");
            return false;
        }

        var descripcion = $("#descripcion").val();
        var precio = $("#precio").val();
        var stock = $("#stock").val();
        var cantidad = $("#cantidad").val();
        var descuento = $("#descuento").val();
        var total = $("#total").val();
        var descuentoM = precio * cantidad - total;
        var i = $("#mytable tbody tr").length;
        i++;
        var fila =
            '<tr id="row' +
            i +
            '"><td>' +
            sku +
            "</td><td>" +
            descripcion +
            "</td><td>" +
            precio +
            "</td><td>" +
            stock +
            "</td><td>" +
            cantidad +
            "</td><td>" +
            descuento +
            "</td><td>" +
            descuentoM +
            "</td><td>" +
            total +
            '</td><td><button type="button" name="remove" id="' +
            i +
            '" class="btn btn-danger btn_remove">Quitar</button></td></tr> '; //esto seria lo que contendria la fila

        $("#mytable tbody").append(fila);

        //le resto 1 para no contar la fila del header
        $("#SKU").val("");
        $("#descripcion").val("");
        $("#precio").val("");
        $("#stock").val("");
        $("#cantidad").val("");
        $("#descuento").val("");
        $("#total").val("");
        $("#SKU").focus();
        $("#SKU").prop("disabled", false);
    });

    function validar() {
        if ($("#SKU").val() == "") {
            toastr["warning"]("Por favor usar SKU");
            return false;
        }

        if ($("#descripcion").val() == "") {
            toastr["warning"]("Por favor buscar producto");
            return false;
        }

        if ($("#cantidad").val() == "") {
            toastr["warning"]("Por favor ingresar cantidad");
            return false;
        }

        if ($("#cantidad").val() <= 0) {
            toastr["warning"]("Por favor ingrese una cantidad mayor a 0");
            return false;
        }

        if ($("#descuento").val() == "") {
            $("#descuento").val(0);
        }

        return true;
    }

    $("#limpiar").on("click", function () {
        $("#SKU").val("");
        $("#descripcion").val("");
        $("#precio").val("");
        $("#stock").val("");
        $("#cantidad").val("");
        $("#descuento").val("");
        $("#total").val("");
        $("#SKU").focus();
        $("#SKU").prop("disabled", false);
    });

    $("#fono").keyup(function (e) {
        if (
            (e.keyCode > 47 && e.keyCode < 58) ||
            (e.keyCode < 106 && e.keyCode > 95)
        ) {
            if (this.value.length > 10) {
                this.value = this.value.substring(0, 10);
            }
            this.value = this.value.replace(/(\d{1})(\d{8})/g, "$1 $2");
            return true;
        }

        //remove all chars, except dash and digits
        this.value = this.value.replace(/[^\-0-9]/g, "");
    });

    $("#ventas").on("click", function () {
        var url = $("#urlVenta").val();
        var rut = $("#rut").val();
        var nom = $("#nombre").val();
        var fono = $("#fono").val();
        var dir = $("#dir").val();
        var rz = $("#rz").val();
        var area = $("#selectArea").val();

        if (nom == "") {
            toastr["warning"]("Por favor ingresar Nombre");
            return false;
        }

        var data = creararray();
        var id = $("#id").val();
        $.ajax({
            url: url,
            type: "POST",
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                id: id,
                rut: rut,
                nom: nom,
                fono: fono,
                dir: dir,
                razonSocial: rz,
                area: area,
                data: data,
            },
            success: function (data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Venta Guardada");
                    $("#id").val(data["id"]);
                    validarPrint();
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

    $("#ventas1").on("click", function () {
        var url = $("#urlVenta").val();
        var rut = $("#rut").val();
        var nom = $("#nombre").val();
        var fono = $("#fono").val();
        var dir = $("#dir").val();
        var rz = $("#rz").val();
        var area = $("#selectArea").val();

        if (nom == "") {
            toastr["warning"]("Por favor ingresar Nombre");
            return false;
        }

        var data = creararray();
        var id = $("#id").val();
        $.ajax({
            url: url,
            type: "POST",
            data: {
                _token: $("meta[name='csrf-token']").attr("content"),
                id: id,
                rut: rut,
                nom: nom,
                fono: fono,
                dir: dir,
                razonSocial: rz,
                area: area,
                data: data,
            },
            success: function (data) {
                if (data["message"] == "Successful") {
                    toastr["info"]("Venta Guardada");
                    $("#id").val(data["id"]);
                    validarPrint();
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
