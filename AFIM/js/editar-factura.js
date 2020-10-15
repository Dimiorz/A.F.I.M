

function agregar(id) {
    var precio_venta = document.getElementById('precio_venta_' + id).value;
    var cantidad = document.getElementById('cantidad_' + id).value;
    //Inicia validacion
    if (isNaN(cantidad)) {
        alert('Esto no es un numero');
        document.getElementById('cantidad_' + id).focus();
        return false;
    }
    if (isNaN(precio_venta)) {
        alert('Esto no es un numero');
        document.getElementById('precio_venta_' + id).focus();
        return false;
    }
    //Fin validacion

    $.ajax({
        type: "POST",
        url: "./ajax/editar_facturacion.php",
        data: "id=" + id + "&precio_venta=" + precio_venta + "&cantidad=" + cantidad,
        beforeSend: function (objeto) {
            $("#resultados").html("Mensaje: Cargando...");
        },
        success: function (datos) {
            $("#resultados").html(datos);
        }
    });
}

function eliminar(id) {

    $.ajax({
        type: "GET",
        url: "./ajax/editar_facturacion.php",
        data: "id=" + id,
        beforeSend: function (objeto) {
            $("#resultados").html("Mensaje: Cargando...");
        },
        success: function (datos) {
            $("#resultados").html(datos);
        }
    });

}

$("#datos_factura").submit(function (event) {
    var id_cliente = $("#id_cliente").val();

    if (id_cliente == "") {
        alert("Debes seleccionar un cliente");
        $("#nombre_cliente").focus();
        return false;
    }
    var parametros = $(this).serialize();
    $.ajax({
        type: "POST",
        url: "ajax/editar_factura.php",
        data: parametros,
        beforeSend: function (objeto) {
            $(".editar_factura").html("Mensaje: Cargando...");
        },
        success: function (datos) {
            $(".editar_factura").html(datos);
        }
    });

    event.preventDefault();
});