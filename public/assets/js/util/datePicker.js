$(document).ready(function () {
    $( function() {
        month = [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Nomvienbre", "Diciembre" ]
        days = [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ]
        $("#startDate").datepicker({
            monthNames: month,
            dayNamesShort: days,
            dateFormat: "dd-mm-yy",
            maxDate: "0d",
            onSelect: function(dateText) {
                $('#endDate').datepicker("destroy");
                prueba()
            }
        });
        
        $('#endDate').prop( "disabled", true );
    
    function prueba(){
        var from = $("#startDate").val();
        var arregloFecha = from.split("-");
        var anio = arregloFecha[2];
        var mes = arregloFecha[1] - 1;
        var dia = arregloFecha[0];

        var fecha = new Date(anio, mes, dia);
        
        $("#endDate").datepicker({
            monthNames: month,
            dayNamesShort: days,
            dateFormat: "dd-mm-yy",
            minDate: new Date(fecha),
            maxDate: 'today'
        });
        $('#endDate').prop( "disabled", false );
    }

    });
})