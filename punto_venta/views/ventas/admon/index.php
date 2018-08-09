<?php include('../../partials/head_admon.php') ?>

<div class="container-fluid panel" style="min-height:51rem; ">
	<div class="row">
		<div class="container panel panel-default col-sm-12 col-md-12 col-lg-4">
            <div class="row">
    			<div class="container col-lg-12">
                    <legend class="text text-center bg-purple card mb0"><p class="txt-white">Buscar Ventas</p></legend>        
                </div>
                <div class=" col-sm-12 col-md-12 col-lg-12">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-search fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una un tipo de busqueda"></i>
                        </span>
                        <div class="form-group ">
                            <label class="control-label">Tipo de busqueda</label>
                            
                            <select class="form-control select_tipo_busqueda" id="select_tipo_busqueda">
                                <option disabled="true">Seleccione</option>
                                <option>Periodo</option>
                                <option>Fecha</option>
                            </select>
                        </div>
                    </div>
                </div>
    			<div class="col-lg-12" id="div_busqueda_periodo">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="input-group ">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa‐4x" data-toggle="tooltip" data-placement="top" title=""></i>
                                </span>
                                <div class="form-group">
                                    <label class="control-label">Fecha de inicio</label>
                                    <input class="datepicker form-control validate calendario-periodo" id="fecha_periodo1" name="" data-error=".error_fecha1_periodo" placeholder="Seleccione Una Fecha">
                                    <div class="text text-left txt-red error_fecha1_periodo"></div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group ">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa‐4x" data-toggle="tooltip" data-placement="top" title=""></i>
                                </span>
                                <div class="form-group">
                                    <label class="control-label">Fecha de Término</label>
                                    <input class="datepicker form-control validate calendario-periodo" id="fecha_periodo2" name="" data-error=".error_fecha1_periodo" placeholder="Seleccione Una Fecha">
                                    <div class="text text-left txt-red error_fecha1_periodo"></div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                
                            </div>
                            <div class="col-lg-8">
                                <button class="btn btn-primary btn-lg" id="btn_consultar_ventas_periodo">Consultar</button>
                            </div>
                        </div>
                    </div>         
                </div>
                <div class="col-lg-12" id="div_busqueda_fecha">
                    <div class="row">
                        
                        <div class="col-lg-12">
                            <div class="input-group ">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar fa‐4x" data-toggle="tooltip" data-placement="top" title="El nombre del producto solo debe contener letras"></i>
                                </span>
                                <div class="form-group">
                                    <label class="control-label">Fecha de Busqueda</label>
                                    <input class="datepicker form-control validate calendario-periodo" id="fecha_busqueda" name="" data-error=".error_fecha_busqueda" placeholder="Seleccione Una Fecha">
                                    <div class="text text-left txt-red error_fecha_busqueda"></div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                
                            </div>
                            <div class="col-lg-8">
                                <a class="btn btn-primary btn-lg" id="btn_consultar_ventas_fecha" >Consultar</a>
                            </div>
                        </div>
                    </div>         
                </div>
            </div>
		</div>
		<div class="col-sm-8 col-md-8 col-lg-8">
			<!--tabla de busqueda de productos-->
            <div id="div_tabla_ventas" class="container panel col-sm-12 col-md-12 col-lg-12">
                <legend class="text text-center bg-purple card mr0 col-12"><p class="txt-white">Ventas Realizadas</p></legend>
                
                <div class="container panel col-sm-12 col-md-12 col-lg-12" style="height:40rem; overflow:auto;">
                    <table class="table col-12"  id="tabla_ventas" >
                          <thead class="col-12" style="">
                                <tr class="col-12">
                                  
                                  <th data-field="nombre" class="text text-left">Número de Venta</th>
                                  <th data-field="categoria" class="text text-left">Fecha de Venta</th>
                                  <th data-field="categoria" class="text text-left">Estado de Venta</th>
                                  <th data-field="categoria" class="text text-left">Responsable de Venta</th>
                                  <th data-field="codigo_barras" class="text text-left">Producto</th>
                                  <th data-field="codigo_barras" class="text text-left">Precio</th>
                                  <th data-field="precio" class="text text-left">Cantidad de Producto</th>
                                  <th data-field="categoria" class="text text-left">Total</th>
                                  <th data-field="categoria" class="text text-left">Porcentaje de Descuento</th>
                                  <th data-field="categoria" class="text text-left">Descuento</th>
                                  <th data-field="peso" class="text text-center">Total con descuento</th>
                                        
                                </tr>       
                          </thead>
                          <tbody>
                          </tbody>
                          
                                  
                    </table>
                    <div class="row">
                        <div class="col-lg-10"></div>
                        <div class="col-lg-2 input-group">
                            <p class="form-control"><b>Total de Ventas</b></p><p id="numero_total_ventas" class="text text-center form-control">0</p>
                        </div>
                    </div>
                </div>
                
            </div>
            <!--tabla de busqueda de ventas por fecha-->
            <div id="div_tabla_ventas_por_fecha" class="container panel col-sm-12 col-md-12 col-lg-12">
                <legend class="text text-center bg-purple card mr0 col-12"><p class="txt-white">Resultados de Busqueda de Ventas por Fecha</p></legend>
                
                <div class="container panel col-sm-12 col-md-12 col-lg-12" style="height:40rem; overflow:auto;">
                    <table class="table col-12"  id="tabla_ventas_por_fecha" >
                          <thead class="col-12" style="">
                                <tr class="col-12">
                                  
                                  <th data-field="nombre" class="text text-left">Número de Venta</th>
                                  <th data-field="categoria" class="text text-left">Fecha de Venta</th>
                                  <th data-field="categoria" class="text text-left">Estado de Venta</th>
                                  <th data-field="categoria" class="text text-left">Responsable de Venta</th>
                                  <th data-field="codigo_barras" class="text text-left">Producto</th>
                                  <th data-field="codigo_barras" class="text text-left">Precio</th>
                                  <th data-field="precio" class="text text-left">Cantidad de Producto</th>
                                  <th data-field="categoria" class="text text-left">Total</th>
                                  <th data-field="categoria" class="text text-left">Porcentaje de Descuento</th>
                                  <th data-field="categoria" class="text text-left">Descuento</th>
                                  <th data-field="peso" class="text text-center">Total con descuento</th>
                                  
                                  

                                           
                                </tr>       
                          </thead>
                          <tbody>
                          </tbody>
                          
                                  
                    </table>
                    <div class="row">
                        <div class="col-lg-10"></div>
                        <div class="col-lg-2" id="div_suma_ventas_fecha">
                            <p><b>Total de Ventas</b></p><p id="numero_total_ventas_fecha" class="text text-center"></p>
                        </div>
                    </div>
                </div>
                
            </div>
            <!---->
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function()
	{
   
        $("#div_busqueda_fecha").hide();
        $("#div_busqueda_periodo").show();
        get_ventas();

        // activar opcion de navegacion del nav ###############
        var pathname = window.location.pathname;
        if(pathname=="/punto_venta/views/ventas/admon/")
        {
            $(".active_ventas").addClass("active");  
            //console.log("ventana-->"+pathname);
        }
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
        //condicion para seleccionar un tipo de busqueda
        $("#select_tipo_busqueda").bind('change',function()
        {
            var val_select=$("#select_tipo_busqueda").val();
            //console.log("cambiando al tipo de busqueda -->"+val_select);
            if(val_select=="Periodo")
            {
                $("#div_busqueda_fecha").hide();
                $("#div_busqueda_periodo").show();
            }
            else if(val_select=="Fecha")
            {
                $("#div_busqueda_fecha").show();
                $("#div_busqueda_periodo").hide();
            }
        });
        //buscar por periodo de tiempo
        $("#btn_consultar_ventas_periodo").click(function()
        {   
            var fecha_periodo1=$("#fecha_periodo1").val();
            var fecha_periodo2=$("#fecha_periodo2").val();
            //console.log("consultando... "+fecha_periodo1+" <-to-> "+fecha_periodo2);
            $.get("../../../core/controllers/controller_admon.php",{fecha_periodo1:fecha_periodo1,fecha_periodo2:fecha_periodo2,action:"get_ventas_periodo"},function(res)
                {
                    res=JSON.parse(res);
                    ////console.log(res);
                    var html="";
                    var pasado;
                    var constante=0;
                    $.each(res, function(i, item)
                    {
                       
                      if(pasado!=item.id_venta)
                      {
                        constante=constante+1;
                        html+="<tr class='col-12' id='id_fila_venta'>"+
                                  
                                  "<td id='id_venta_fila'>"+constante+"</td>"+
                                  "<td id=''>"+item.fecha_venta+"</td>"+
                                  "<td id='venta_estado'>"+item.Estado+"</td>"+
                                  "<td id='usuario_venta_fila'>"+item.usuario+"</td>"+
                                  "<td id='nombre_producto_venta_fila'>"+item.producto+"</td>"+
                                  "<td id='producto_precio'>"+item.precio+"</td>"+
                                  "<td>"+item.cantidad+"</td>"+
                                  "<td>"+item.total_n+"</td>"+
                                  
                                    "<td id='porcentaje'>"+item.porcentaje+"%</td>"+
                                  "<td id='descuento_venta_fila'>"+item.descuento+"</td>"+
                                  "<td class='text text-center' id='total_venta_fila'>"+item.total+"</td>"+
                                   
                                   
                                  
                              "</tr>";
                            pasado=item.id_venta;
                        }
                        else
                        {
                            html+="<tr class='col-12' id='id_fila_venta'>"+
                                  
                                  "<td id='id_venta_fila'></td>"+
                                  "<td id=''></td>"+
                                  "<td id=''></td>"+
                                  "<td id=''></td>"+
                                  "<td id='nombre_producto_venta_fila'>"+item.producto+"</td>"+
                                  "<td id='producto_precio'>"+item.precio+"</td>"+
                                  "<td>"+item.cantidad+"</td>"+
                                  "<td id='descuento_venta_fila'></td>"+
                                  "<td class='text text-center' id='total_venta_fila'></td>"+
                                  "<td class='text text-center' id='total_venta_fila'></td>"+
                              "</tr>";
                        }

                    });
                    
                    $("#div_tabla_ventas").hide();
                    $("#div_tabla_ventas_por_fecha").show();
                    $("#tabla_ventas_por_fecha tbody").html(html);
                    $('[data-toggle="tooltip"]').tooltip();
                });
            //get suma de ventas por periodo
            $.get("../../../core/controllers/controller_admon.php",{fecha_periodo1:fecha_periodo1,fecha_periodo2:fecha_periodo2,action:"get_ventas_periodo_total"},function(res)
                {
                    res=JSON.parse(res);
                    //console.log(res);
                   
                    var suma_ventas="";
                    $.each(res, function(i, item)
                    {
                       
                        suma_ventas="<p>"+item.total_ventas+"<p>";

                    });
                    
                   
                    $("#div_suma_ventas_fecha #numero_total_ventas_fecha").html(suma_ventas);
                    
                });
        });
        //btn probar
        $("#btn_probar").click(function()
        { 
            var cont=0;
            $("#tabla_ventas_por_fecha #id_venta_fila").each(function()
              {
                var id_venta_fila=$(this).html();
                $("#tabla_ventas_por_fecha #id_venta_fila").html(id_venta_fila);
                cont=1;
                if(cont>=1)
                {
                    $("#tabla_ventas_por_fecha #id_venta_fila").html("");
                    //console.log("misma fila: "+id_venta_fila);
                }
                
              });
        });
        //buscar por fecha
        $("#btn_consultar_ventas_fecha").click(function(event)
        {
            var fecha_busqueda=$("#fecha_busqueda").val();
            //console.log("busqueda por fecha -->"+fecha_busqueda);
            $.get("../../../core/controllers/controller_admon.php",{fecha_busqueda:fecha_busqueda,action:"get_ventas_fecha"},function(res)
                {
                    res=JSON.parse(res);
                    ////console.log(res);
                    var html="";
                    var pasado;
                    var constante=0;
                    $.each(res, function(i, item)
                    {
                       
                      if(pasado!=item.id_venta)
                      {
                        constante=constante+1;
                        html+="<tr class='col-12' id='id_fila_venta'>"+
                                  
                                  "<td id='id_venta_fila'>"+constante+"</td>"+
                                  "<td id=''>"+item.fecha_venta+"</td>"+
                                  "<td id='venta_estado'>"+item.Estado+"</td>"+
                                  "<td id='usuario_venta_fila'>"+item.usuario+"</td>"+
                                  "<td id='nombre_producto_venta_fila'>"+item.producto+"</td>"+
                                  "<td id='producto_precio'>"+item.precio+"</td>"+
                                  "<td>"+item.cantidad+"</td>"+
                                  "<td>"+item.total_n+"</td>"+
                                  
                                    "<td id='porcentaje'>"+item.porcentaje+"%</td>"+
                                  "<td id='descuento_venta_fila'>"+item.descuento+"</td>"+
                                  "<td class='text text-center' id='total_venta_fila'>"+item.total+"</td>"+
                                   
                                   
                                  
                              "</tr>";
                            pasado=item.id_venta;
                        }
                        else
                        {
                            html+="<tr class='col-12' id='id_fila_venta'>"+
                                  
                                  "<td id='id_venta_fila'></td>"+
                                  "<td id=''></td>"+
                                  "<td id=''></td>"+
                                  "<td id=''></td>"+
                                  "<td id='nombre_producto_venta_fila'>"+item.producto+"</td>"+
                                  "<td id='producto_precio'>"+item.precio+"</td>"+
                                  "<td>"+item.cantidad+"</td>"+
                                  "<td id='descuento_venta_fila'></td>"+
                                  "<td class='text text-center' id='total_venta_fila'></td>"+
                                  "<td class='text text-center' id='total_venta_fila'></td>"+
                              "</tr>";
                        }

                    });
                    
                    $("#div_tabla_ventas").hide();
                    $("#div_tabla_ventas_por_fecha").show();
                    $("#tabla_ventas_por_fecha tbody").html(html);
                    $('[data-toggle="tooltip"]').tooltip();
                });
            //get suma de ventas
            $.get("../../../core/controllers/controller_admon.php",{fecha_busqueda:fecha_busqueda,action:"get_ventas_fecha_total"},function(res)
                {
                    res=JSON.parse(res);
                    ////console.log(res);
                   
                    var suma_ventas="";
                    $.each(res, function(i, item)
                    {
                       
                        suma_ventas="<p>"+item.total_ventas+"<p>";

                    });
                    
                   
                    $("#div_suma_ventas_fecha #numero_total_ventas_fecha").html(suma_ventas);
                    
                });

        });

        //
        function get_ventas()
        {
            $.get("../../../core/controllers/controller_admon.php",{action:"get_all_ventas"},function(res)
          {
              res = JSON.parse(res);
              ////console.log(res);
              var html="";
              var pasado;
              var constante=0;
                    $.each(res, function(i, item)
                    {
                       
                      if(pasado!=item.id_venta)
                      {
                        constante=constante+1;
                        html+="<tr class='col-12' id='id_fila_venta'>"+
                                  
                                  "<td id='id_venta_fila'>"+constante+"</td>"+
                                  "<td id=''>"+item.fecha_venta+"</td>"+
                                  "<td id='venta_estado'>"+item.Estado+"</td>"+
                                  "<td id='usuario_venta_fila'>"+item.usuario+"</td>"+
                                  "<td id='nombre_producto_venta_fila'>"+item.producto+"</td>"+
                                  "<td id='producto_precio'>"+item.precio+"</td>"+
                                  "<td>"+item.cantidad+"</td>"+
                                  "<td>"+item.total_n+"</td>"+
                                  
                                    "<td id='porcentaje'>"+item.porcentaje+"%</td>"+
                                  "<td id='descuento_venta_fila'>"+item.descuento+"</td>"+
                                  "<td class='text text-center' id='total_venta_fila'>"+item.total+"</td>"+
                                   
                                   
                                  
                              "</tr>";
                            pasado=item.id_venta;
                        }
                        else
                        {
                            html+="<tr class='col-12' id='id_fila_venta'>"+
                                  
                                  "<td id='id_venta_fila'></td>"+
                                  "<td id=''></td>"+
                                  "<td id=''></td>"+
                                  "<td id=''></td>"+
                                  "<td id='nombre_producto_venta_fila'>"+item.producto+"</td>"+
                                  "<td id='producto_precio'>"+item.precio+"</td>"+
                                  "<td>"+item.cantidad+"</td>"+
                                  "<td id='descuento_venta_fila'></td>"+
                                  "<td class='text text-center' id='total_venta_fila'></td>"+
                                  "<td class='text text-center' id='total_venta_fila'></td>"+
                              "</tr>";
                        }

                    });
                    
                    $("#div_tabla_ventas").show();
                    $("#div_tabla_ventas_por_fecha").hide();
                    $("#div_tabla_ventas tbody").html(html);
                    $('[data-toggle="tooltip"]').tooltip();
                });
            //get suma de ventas
            $.get("../../../core/controllers/controller_admon.php",{action:"get_ventas_total"},function(res)
                {
                    res=JSON.parse(res);
                    ////console.log(res);
                   
                    var suma_ventas="";
                    $.each(res, function(i, item)
                    {
                       
                        suma_ventas="<p>"+item.total_ventas+"<p>";

                    });
                    
                   
                    $("#numero_total_ventas").html(suma_ventas);
                    
                });
        }
        
	});
</script>
