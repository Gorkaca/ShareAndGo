$(document).ready(function () {
    var $numero_trayectos = 0;
    function cargar_combo_municipios() {
        $.ajax({
            type: 'POST',
            dstaType: 'json',
            url: "../../controlador/controlador_combo_municipios.php",
            success: function (datos) {
                midato = JSON.parse(datos)
                milista = "";
                $.each(midato, function (i, dato) {
                    milista += "<option id=" + dato.id_municipio + ">" + dato.municipio + ", " + dato.provincia + "</option>";
                });
                $('datalist[name=municipio_salida]').html(milista);
//                $('#municipio_paso').html(milista);
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }
//    FUNCION PARA SELECCIONAR TODOS LOS CHECKBOX
    $("#seleccionartodos").click(function () {
        $(".check").prop('checked', $(this).prop('checked'));
    });
//    FUNCION PARA AÑADIR Y BORRAR TRAYECTOS
    $(".add-more").click(function () {
        if ($numero_trayectos === 4){
            return false;
        }
        var html = $(".copy-fields").html();
        $(".after-add-more").after(html);
        cargar_combo_municipios();
        $numero_trayectos = $numero_trayectos + 1;
    });
    $("body").on("click", ".remove", function () {
        $(this).parents(".control-group").remove();
        $numero_trayectos = $numero_trayectos - 1;
    });

});