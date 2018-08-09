<?php include('../../partials/head_admon.php'); ?>
<main>
    <div class="container-fluid panel" style="min-height:57rem; ">
        <div class="row">
            <div class="container panel panel-default col-sm-12 col-md-12 col-lg-4">
                <div class="row">
                    <div class="container col-lg-12">
                    <div id="notificaciones_caducidades"></div>
                        <legend class="text text-center bg-purple card mb0"><p class="txt-white">Buscar Productos
                                Proximos a Caducar</p></legend>
                    </div>
                    <div class=" col-sm-12 col-md-12 col-lg-12">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-search fa‐4x" data-toggle="tooltip" data-placement="top"
                                   title="Seleccione una un tipo de busqueda"></i>
                            </span>
                                <div class="form-group ">
                                    <label class="control-label">Tipo de busqueda</label>

                                    <select class="form-control select_tipo_busqueda_caducidades"
                                            id="select_tipo_busqueda_caducidades">
                                        <option disabled="true">Seleccione una opcion</option>
                                        <option>Periodo</option>
                                        <option>Fecha</option>
                                        <option>En 30 dias</option>
                                        <option>Caducados</option>
                                    </select>
                                </div>
                                
                        </div>
                    </div>
                    <div class="col-lg-12" id="div_busqueda_periodo_caducidades">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group ">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa‐4x" data-toggle="tooltip" data-placement="top"
                                       title=""></i>
                                </span>
                                    <div class="form-group">
                                        <label class="control-label">Fecha de inicio</label>
                                        <input class="datepicker form-control validate calendario-periodo" id="fecha_periodo1_caducidades"
                                               name="fecha_periodo1_caducidades"
                                               data-error=".error_fecha1_periodo1_caducidades"
                                               placeholder="Seleccione Una Fecha" data-date-format="yyyy/mm/dd">
                                        <div class="text text-left txt-red error_fecha1_periodo1_caducidades"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group ">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa‐4x" data-toggle="tooltip" data-placement="top"
                                       title=""></i>
                                </span>
                                    <div class="form-group">
                                        <label class="control-label">Fecha de Término</label>
                                        <input class="datepicker form-control validate calendario-periodo" id="fecha_periodo2_caducidades"
                                               name="fecha_periodo2_caducidades"
                                               data-error=".error_fecha2_periodo2_caducidades"
                                               placeholder="Seleccione Una Fecha" data-date-format="yyyy/mm/dd">
                                        <div class="text text-left txt-red error_fecha2_periodo2_caducidades"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-8">
                                    <button class="btn btn-primary btn-lg" id="btn_consultar_caducidades_periodo">
                                        Consultar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12" id="div_busqueda_fecha_caducidades">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="input-group ">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa‐4x" data-toggle="tooltip" data-placement="top"
                                       title="Seleccione una fecha"></i>
                                </span>
                                    <div class="form-group">
                                        <label class="control-label">Fecha de Busqueda</label>
                                        <input class="datepicker form-control validate calendario-periodo" id="fecha_busqueda_caducidades"
                                               name="fecha_busqueda_caducidades"
                                               data-error=".error_fecha_busqueda_caducidades"
                                               placeholder="Seleccione Una Fecha" data-date-format="yyyy/mm/dd">
                                        <div class="text text-left txt-red error_fecha_busqueda_caducidades"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">

                                </div>
                                <div class="col-lg-8">
                                    <a class="btn btn-primary btn-lg" id="btn_consultar_caducidades_fecha">Consultar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div id="div_tabla_caducidades_por_fecha" class="container panel col-sm-12 col-md-12 col-lg-12">
                    <legend class="text text-center bg-purple card mr0 col-12"><p class="txt-white" id="txt_tabla"></p></legend>

                    <div class="container panel col-sm-12 col-md-12 col-lg-12" style="height:40rem; overflow:auto;">
                        <table class="table col-12" id="tabla_caducidades_por_fecha">
                            <thead class="col-12" style="">
                            <tr class="col-12">


                                <th data-field="codigo_barras" class="text text-left">Producto</th>
                                <th data-field="precio" class="text text-left">Código de Barras</th>
                                <th data-field="precio" class="text text-left">Lote</th>
                                <th data-field="categoria" class="text text-left">Fecha de Caducidad</th>
                                <th data-field="categoria" class="text text-left">Cantidad</th>
                                <th data-field="" class="text text-left">Estado</th>

                            </tr>
                            </thead>
                            <tbody>
                            </tbody>


                        </table>
                        <div class="row">
                            <div class="col-lg-9"></div>
                            <div class="col-lg-3">
                                <div style="height: 4rem; width: 7rem;" class="pd-0 radius5 btn btn-danger" id="div_limpiar" data-toggle="tooltip" data-placement="center" title="Eliminar Caducados">
                                        <i class="fa fa-trash fa‐4x" ></i>
                                     </span>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript">
    $(document).ready(function () 
    {
        $("#div_limpiar").hide();
        get_xv();
        $("#div_limpiar").click(function()
        {
            $("#modal_delete_caducados").modal("show");
        });
        $("#btn_continuar_modal_delete_caducados").click(function()
        {
            //console.log("limpiando caducados...");
            var id_usuario=$("#id_usuario_session").val();
            $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,action:"delete_caducados"},function(request)
              {
                $("#content_request").html(request);
              });
            get_caducados();
            $("#modal_delete_caducados").modal("hide");
        });
        $(".calendario-periodo").on('changeDate',function(event)
        { 
          $(this).datepicker('hide');

        });
        $(".calendario-periodo").click(function(event)
        { 
          var popup=$(this).offset();
          var popupTop=0;
          ////console.log(popupTop);
          $('div.datepicker.dropdown-menu').css(
          {
            
            'top':popupTop,
            'position':'absolute'
          });

          
        });
        $("#div_busqueda_fecha_caducidades").hide();
        // activar opcion de navegacion del nav ###############
        var pathname = window.location.pathname;
        if (pathname == "/punto_venta/views/usuarios/admon/") {
            $(".active_caducidades").addClass("active");
            //console.log("ventana-->" + pathname);
        }
        //condicion para seleccionar un tipo de busqueda
        $("#select_tipo_busqueda_caducidades").bind('change', function () {
            var val_select = $("#select_tipo_busqueda_caducidades").val();
            //console.log("cambiando al tipo de busqueda -->" + val_select);
            if (val_select == "Periodo") {
                $("#div_busqueda_fecha_caducidades").hide();
                $("#div_busqueda_periodo_caducidades").show();
            }
            else if (val_select == "Fecha") {
                $("#div_busqueda_fecha_caducidades").show();
                $("#div_busqueda_periodo_caducidades").hide();
            }
            else if (val_select == "Caducados")
            {
                get_caducados();
                $("#div_limpiar").show();
            }
            else if (val_select == "En 30 dias")
            {
                get_xv();
            }
        });
        //get caducidades por periodo
        $("#btn_consultar_caducidades_periodo").click(function () {
            var fecha_periodo1 = $("#fecha_periodo1_caducidades").val();
            var fecha_periodo2 = $("#fecha_periodo2_caducidades").val();
            //console.log("consultando caducidades por periodo: " + fecha_periodo1 + ":->" + fecha_periodo2);
            $.get("../../../core/controllers/controller_admon.php",{fecha_periodo1:fecha_periodo1,fecha_periodo2:fecha_periodo2,action: "get_caducidades_periodo"},function (res) 
                {
                    res = JSON.parse(res);
                    //console.log(res);
                    var html = "";

                    $.each(res, function (i, item) 
                    {


                        html += "<tr class='col-12'>" +

                            "<td>" + item.nombre + "</td>" +
                            "<td>" + item.codigo_barras + "</td>" +
                            "<td>" + item.lote + "</td>" +
                            "<td>" + item.fecha_caducidad + "</td>" +
                            "<td>" + item.cantidad_disponible + "</td>" +
                            "<td>" + item.estado + "</td>" +
                            "</tr>";

                    });

                    $("#tabla_caducidades_por_fecha tbody").html(html);
                    $("#div_limpiar").hide();
                    $("#txt_tabla").text("Resultados de busqueda de productos por periodo");
            });
        });
        //get caducidades por fecha
        $("#btn_consultar_caducidades_fecha").click(function () {
            var fecha_busqueda = $("#fecha_busqueda_caducidades").val();

            //console.log("consultando caducidades por fecha: " + fecha_busqueda);
            $.get("../../../core/controllers/controller_admon.php", {
                fecha_busqueda: fecha_busqueda,
                action: "get_caducidades_fecha"
            }, function (res) {
                res = JSON.parse(res);
                //console.log(res);
                var html = "";

                $.each(res, function (i, item) {


                    html += "<tr class='col-12'>" +

                        "<td>" + item.nombre + "</td>" +
                        "<td>" + item.codigo_barras + "</td>" +
                        "<td>" + item.lote + "</td>" +
                        "<td>" + item.fecha_caducidad + "</td>" +
                        "<td>" + item.cantidad_disponible + "</td>" +
                        "<td>" + item.estado + "</td>" +
                        "</tr>";

                });

                $("#tabla_caducidades_por_fecha tbody").html(html);
                $("#div_limpiar").hide();
                $("#txt_tabla").text("Resultados de busqueda de productos por fecha");
            });
        })
    });
//fin document ready
    function get_caducados()
    {
        $.get("../../../core/controllers/controller_admon.php",{action:"get_caducados"},function (res)
        {
                res = JSON.parse(res);
                //console.log(res);
                var html = "";

                $.each(res, function (i, item) 
                {


                    html += "<tr class='col-12'>" +

                        "<td>" + item.nombre + "</td>" +
                        "<td>" + item.codigo_barras + "</td>" +
                        "<td>" + item.lote + "</td>" +
                        "<td>" + item.fecha_caducidad + "</td>" +
                        "<td>" + item.cantidad_disponible + "</td>" +
                        "<td>" + item.estado + "</td>" +
                        "</tr>";

                });

                $("#tabla_caducidades_por_fecha tbody").html(html);
                $("#div_limpiar").show();
                $("#txt_tabla").text("Resultados de busqueda de productos caducados");
        });
    }
    function get_xv()
    {
        $.get("../../../core/controllers/controller_admon.php",{action:"get_fechas_productos_xv"},function (res)
        {
                res = JSON.parse(res);
                //console.log(res);
                var html = "";

                $.each(res, function (i, item) 
                {


                    html += "<tr class='col-12'>" +

                        "<td>" + item.nombre + "</td>" +
                        "<td>" + item.codigo_barras + "</td>" +
                        "<td>" + item.lote + "</td>" +
                        "<td>" + item.fecha_caducidad + "</td>" +
                        "<td>" + item.cantidad_disponible + "</td>" +
                        "<td>" + item.estado + "</td>" +
                        "</tr>";

                });

                $("#tabla_caducidades_por_fecha tbody").html(html);
                $("#div_limpiar").hide();
                $("#txt_tabla").text("Productos a caducar en 30 dias");
        });
    }
</script>