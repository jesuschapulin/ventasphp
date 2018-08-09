<?php include('../../partials/head_admon.php') ?>

<div class="container-fluid panel" style="min-height:57rem; ">
	<div class="row">
		<div class="container panel panel-default col-sm-12 col-md-12 col-lg-4">
            <div class="row">
                <div class="container col-lg-12">
                    <legend class="text text-center bg-purple card mb0"><p class="txt-white">Acciones de Almacen</p></legend>        
                </div>
			</div>
		</div>
		<div class="col-lg-8">
			<div id="div_tabla_almacen" class="container panel col-sm-12 col-md-12 col-lg-12">
                <legend class="text text-center bg-purple card mr0 col-12"><p class="txt-white">Tabla de Almacen</p></legend>
                
                <div class="container panel col-sm-12 col-md-12 col-lg-12" style="height:40rem; overflow:auto;">
                    <table class="table col-12"  id="tabla_almacen" >
                          <thead class="col-12" style="">
                                <tr class="col-12">
                                  
                                  <th data-field="nombre">Numero de Registro</th>
                                  <th data-field="peso">Producto</th>
                                  <th data-field="codigo_barras">Lote</th>
                                  <th data-field="precio">Fecha de Registro</th>
                                  <th data-field="precio">Fecha de de Caducidad</th>
                                  <th data-field="precio">Cantidad de Registro</th>
                                  <th data-field="precio">Cantidad Disponible</th>
                                  <th data-field="categoria">Usuario que Registro</th>
                                  <th data-field="acciones" class="text text-center">Acciones</th>

                                           
                                </tr>       
                          </thead>
                          <tbody>
                          </tbody>
                          
                                  
                    </table>
                </div>
                
            </div>
		</div>
	</div>
</div>		

<script type="text/javascript">
	$(document).ready(function()
	{
		
	});
</script>