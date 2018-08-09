<?php include('../../partials/head_admon.php') ?>
<style type="text/css">

.cards-categorias .btn-hover-purple:hover
{
	background-color: #E91E63;
	color: white;

}
.cards-medicamentos .btn-hover-purple:hover
{
	background-color: #E91E63;
	color: white;

}
.cards-marcas .btn-hover-purple:hover
{
	background-color: #E91E63;
	color: white;
}
.opt-cards .btn-hover-purple:hover
{
	background-color: #E91E63  ;
	color: white;
	font-size: 2rem;
}
.cards-medicamentos .menu_cards
{
	background-color: #FFFFFF;
	color: grey;
}
.cards-medicamentos .menu_cards:hover
{
	background-color: #FFFFFF;
	color: #E91E63;
}
.cards-categorias .menu_cards
{
	background-color: #FFFFFF;
	color: grey;
}
.cards-categorias .menu_cards:hover
{
	background-color: #FFFFFF;
	color: #E91E63;
}
.cards-marcas .menu_cards
{
	background-color: #FFFFFF;
	color: grey;
}
.cards-marcas .menu_cards:hover
{
	background-color: #FFFFFF;
	color: #E91E63;
}
.p-txt-small
{
	font-size: 0.6rem;

}
/*text over for options cards buttons*/
.opt-cards .btn-hover-purple:hover .p-txt-small
{
	font-size: 0.8rem;

}

#tabla_productos .btn-hover-pink:hover
{
	background-color: #E91E63  ;
	color: white;
}
#div_buscar_producto .btn-icons:hover
{
    background-color: #E91E63;
    color: white;
}
#div_update_lotes_medicamento .btn-hover-pink:hover
{
	background-color: #E91E63  ;
	color: white;
}

</style>
<div class="text text-center" style="" id="notificaciones"></div> 
<div class="container-fluid panel mb0 pt0" style="min-height:51rem; ">
	<div class="row pt0">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 text text-center" id="notificaciones_productos">
					
				</div>
				<div class="col-lg-5" id="div_buscar_producto">
					<div class="row">
						<div class="col-lg-10  pt1">
							<label>Nombre del producto</label>
							<input type="text" name="" placeholder="" class="input_search" id="nombre_buscar_producto">
							
							<a class="btn btn-simple btn-icons btn-xs" id="btn_agregar_producto"><i class="fa fa-plus-circle fa‐4x" data-toggle="tooltip" data-placement="top" title="Agregar un producto nuevo"></i></a>
						</div>
						<div class="col-lg-2 ">
							
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					
				</div>
			</div>
		</div>
		<div class="container panel panel-default col-lg-4 pd-0" id="div_tabla_categorias">
			<!--<legend class="pd-0 container-fluid text text-center bg-purple card"><p class="txt-white">Categoria de productos</p></legend>-->
			<div id="cards-categorias" class="cards-categorias col-sm-12 col-md-12 col-lg-12" style="height:40rem;overflow:auto;">
				
				
				
			</div>
			<div id="cards-marcas" class="cards-marcas col-sm-12 col-md-12 col-lg-12" style="height:40rem;overflow:auto;">
				
				
				
			</div>
			<div id="cards-medicamentos" class="cards-medicamentos col-sm-12 col-md-12 col-lg-12" style="height:40rem;overflow:auto;">
				
				
				
			</div>
			
			<div class="container-fluid pd-0" >
				<div class="row text-center">
					<div class="col-sm-4 col-md-4 col-lg-4 opt-cards " id="div_cards_agregar_categoria">
						<a class="btn btn-simple btn-xs text text-center btn-hover-purple" id="opt_cards_categorias">
							<i class="fa fa-cubes fa-2x"></i>
							<p class="p-txt-small">Ver Categorias</p>
						</a>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 opt-cards " id="div_cards_agregar_medicamentos">
						<a class="btn btn-simple btn-xs text text-center btn-hover-purple" id="opt_cards_medicamentos">
							<i class="fa fa-medkit fa-2x"></i>
							<p class="p-txt-small">Ver medicamentos</p>
						</a>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 opt-cards " id="div_cards_agregar_marca">
						<a class="btn btn-simple btn-xs text text-center btn-hover-purple" id="opt_cards_marcas">
							<i class="fa fa-industry fa-2x"></i>
							<p class="p-txt-small">Ver Marcas</p>
						</a>
					</div>
					
					
				</div>
			</div>
			
		</div>
		<!--division de 8 columnas-->
		<div class="col-sm-8 col-md-8 col-lg-8">
			<!--tabla de productos-->
					
			<div id="div_tabla_productos" class="container panel col-sm-12 col-md-12 col-lg-12">
				<legend class="text text-center bg-purple card mr0 col-12"><p class="txt-white" id="text_tabla_productos">Tabla de productos</p></legend>
				
				<div class="container panel col-sm-12 col-md-12 col-lg-12" style="height:40rem; overflow:auto;">
					<table class="table col-12"  id="tabla_productos" >
				          <thead class="col-12" style="">
					            <tr class="col-12">
					              
					              <th data-field="nombre">Nombre</th>
					              <th data-field="peso">precio mayoreo</th>
					              <th data-field="codigo_barras">Código de barras</th>
					              <th data-field="precio">Precio público</th>
					              <th data-field="categoria" class="text-center">Lotes</th>
					              <th data-field="categoria">Cantidad Existente</th>
			      				  <th data-field="acciones" class="text text-center">Opciones</th>

					                       
					            </tr>       
				          </thead>
			          	  <tbody>
			              </tbody>
				          
				                  
				    </table>
				</div>
			    
		    </div>
		    
		    <!-- agregar producto ################################################################# -->
		    <div id="div_form_registro_productos" class="panel container col-sm-12 col-md-12 col-lg-12">
                <legend class="text text-center bg-purple card mb0"><p class="txt-white">Agregar Nuevo Producto</p></legend>
                <div class="text-center" id="notificaciones_registro_productos"></div>
                <form class="form col-sm-12 col-md-12 col-lg-12  mt0 form_registro_productos" id="form_registro_productos">
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="input-group ">
                            <span class="input-group-addon">
                                <i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="El nombre del producto solo debe contener letras"></i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Nombre del Producto</label>
                                <input type="text" class="clear nombre_producto_registro_productos form-control validate" id="nombre_producto_registro_productos" name="nombre_producto_registro_productos" data-error=".error_nombre_registro">
								<div class="text text-left txt-red error_nombre_registro"></div>
                            </div>
                           
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa el uso del producto, solo se aceptan letras"></i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Uso</label>
                                <input type="text" class="clear uso_registro_productos form-control validate" id="uso_registro_productos" name="uso_registro_productos" data-error=".error_uso_productos">
								<div class="text text-left txt-red error_uso_productos"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-sort-numeric-desc fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa el codigo de barras del producto, solo se aceptan numeros"></i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Código de Barras</label>
                                <input type="text" class="clear codigo_barras_registro_productos form-control validate" id="codigo_barras_registro_productos" name="codigo_barras_registro_productos" data-error=".error_codigo_barras_productos">
								<div class="text text-left txt-red error_codigo_barras_productos"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-dollar fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa el precio por mayoreo de este producto, solo se aceptan numeros, el precio puede tener decimales"></i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Precio por Mayoreo</label>
                                <input type="text" class="clear precio_mayoreo_registro_productos form-control validate" id="precio_mayoreo_registro_productos" name="precio_mayoreo_registro_productos" data-error=".error_precio_may_reg_productos">
								<div class="text text-left txt-red error_precio_may_reg_productos"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-dollar fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa el precio público de este producto, solo se aceptan numeros, el precio puede tener decimales"></i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Precio Público</label>
                                <input type="text" class="clear precio_pub_reg_productos form-control validate" id="precio_pub_reg_productos" name="precio_pub_reg_productos" data-error=".error_precio_pub_reg_productos">
								<div class="text text-left txt-red error_precio_pub_reg_productos"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6" id="div_formula_registro_productos">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-flask fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa la fórmula conocida del medicamento, solo se aceptan numeros, el precio puede tener decimales"></i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Fórmula</label>
                                <input type="text" class="clear formula_reg_productos form-control validate" id="formula_reg_productos" name="formula_reg_productos" data-error=".error_formula_reg_productos">
								<div class="text text-left txt-red error_formula_reg_productos"></div>
                            </div>
            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6" id="div_dosis_registro_productos">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-eyedropper fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa la dosis recomendada del medicamento"></i>
                            </span>
                            <div class="form-group label-floating">
                                <label class="control-label">Dosis</label>
                                <input type="text" class="clear dosis_reg_productos form-control validate" id="dosis_reg_productos" name="dosis_reg_productos" data-error=".error_dosis_reg_productos">
								<div class="text text-left txt-red error_dosis_reg_productos"></div>
                            </div>
            
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-cubes fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una categoria"></i>
                            </span>
                            <div class="form-group ">
                                <label class="control-label">Categoria</label>
                                
                                <select class="clear select_categoria_registro_productos form-control validate" id="select_categoria_registro_productos" name="select_categoria_registro_productos" data-error=".error_select_categoria_reg_productos">
                                </select>
                                <div class="text text-left txt-red error_select_categoria_reg_productos"></div>
                            </div>

                            
                        </div>
                    </div>
                    <div class=" col-sm-6 col-md-6 col-lg-6 pt0 mt0">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-industry fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una marca"></i>
                            </span>
                            <div class="form-group ">
                                <label class="control-label">Marca</label>
                                
                                <select class="clear form-control select_marca_registro_productos"  id="select_marca_registro_productos" name="select_marca_registro_productos" data-error="error_select_marca_registro_productos">
                                
                                </select>
                                <div class="text text-left txt-red error_select_marca_registro_productos"></div>
                            </div>

                            
                        </div>
                    </div>
                    <div class=" col-sm-6 col-md-6 col-lg-6 pt0 mt0" id="div_select_categoria_medicamentos_registro_productos">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-cube fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una categoria de medicamento"></i>
                            </span>
                            <div class="form-group ">
                                <label class="control-label">Categoria de medicamentos</label>
                                
                                <select class="clear form-control select_tipo_medicamento_registro_productos"  id="select_tipo_medicamento_registro_productos" name="select_tipo_medicamento_registro_productos" data-error="error_select_tipo_medicamento_registro_productos">
                                
                                </select>
                                <div class="text text-left txt-red error_select_tipo_medicamento_registro_productos"></div>
                            </div>

                            
                        </div>
                    </div>
                    <div class=" col-sm-12 col-md-12 col-lg-12 pt0 mt0" id="div_select_lotes_registro">
						<div class="row">
							<div class="col-lg-4">
								
							</div>
							<div class="col-lg-4">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-cube fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una cantidad de lotes"></i>
									</span>
									<div class="form-group ">
										<label class="control-label">Número de Lotes</label>
										
									    <select class="form-control select_lotes"  id="select_lotes_registro">
									    	<option disabled selected>seleccione</option>
									    	<option>1</option>
									    	<option>2</option>
									    	<option>3</option>
									    	<option>4</option>
									    	<option>5</option>
									    </select>
									</div>

								    
							    </div>
							</div>
							<div class="col-lg-4"></div>
						</div>
						
					</div>
                </form>
                <div class="col-lg-12" id="div_agregar_lotes_producto_registro">
						<div class="col-12" id="div_lotes_notificaciones_registro"></div>
						<div class="row" id="div_campos_lotes_uno_registro">
							<form class="form col-lg12" id="form_lote_uno_registro">
								<div class="col-lg-3 pt1">
									<label>Número de Lote</label>
									<input type="text" name="lote_numero_uno_registro" placeholder="" class="clear validate input_search lote_numero_uno_registro" id="lote_numero_uno_registro" data-error=".error_lote_numero_uno_registro">
									<div class="txt-red error_lote_numero_uno_registro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Fecha de Caducidad</label>
									<input placeholder="" name="lote_fecha_uno_registro" class="clear datepicker input_search lote_fecha_uno_registro" id="lote_fecha_uno_registro" data-error=".error_lote_fecha_uno_registro" data-date-format="yyyy-mm-dd">
									<div class="txt-red error_lote_fecha_uno_registro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Cantidad</label><br>
									<input type="text" placeholder="" name="lote_cantidad_uno_registro" class="clear validate input_search lote_cantidad_uno_registro" id="lote_cantidad_uno_registro" data-error=".error_lote_cantidad_uno_registro">
									<div class="txt-red error_lote_cantidad_uno_registro"></div>
								</div>
								
							</form>
							
						</div>
						<!--dos-->
						<div class="row" id="div_campos_lotes_dos_registro">
							<form class="form col-lg12" id="form_lote_dos_registro">
								<div class="col-lg-3 pt1">
									<label>Número de Lote</label>
									<input type="text" name="lote_numero_dos_registro" placeholder="" class="clear validate input_search lote_numero_dos_registro" id="lote_numero_dos_registro" data-error=".error_lote_numero_dos_registro">
									<div class="txt-red error_lote_numero_dos_registro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Fecha de Caducidad</label>
									<input placeholder="" name="lote_fecha_dos_registro" class="clear datepicker input_search lote_fecha_dos_registro" id="lote_fecha_dos_registro" data-error=".error_lote_fecha_dos_registro" data-date-format="yyyy-mm-dd">
									<div class="txt-red error_lote_fecha_dos_registro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Cantidad</label><br>
									<input type="text" placeholder="" name="lote_cantidad_dos_registro" class="clear validate input_search lote_cantidad_dos_registro" id="lote_cantidad_dos_registro" data-error=".error_lote_cantidad_dos_registro">
									<div class="txt-red error_lote_cantidad_dos_registro"></div>
								</div>
								
							</form>
							
						</div>
						<!--tres-->
						<div class="row" id="div_campos_lotes_tres_registro">
							<form class="form col-lg12" id="form_lote_tres_registro">
								<div class="col-lg-3 pt1">
									<label>Número de Lote</label>
									<input type="text" name="lote_numero_tres_registro" placeholder="" class="clear validate input_search lote_numero_tres_registro" id="lote_numero_tres_registro" data-error=".error_lote_numero_tres_registro">
									<div class="txt-red error_lote_numero_tres_registro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Fecha de Caducidad</label>
									<input placeholder="" name="lote_fecha_tres_registro" class="clear datepicker input_search lote_fecha_tres_registro" id="lote_fecha_tres_registro" data-error=".error_lote_fecha_tres_registro" data-date-format="yyyy-mm-dd">
									<div class="txt-red error_lote_fecha_tres_registro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Cantidad</label><br>
									<input type="text" placeholder="" name="lote_cantidad_tres_registro" class="clear validate input_search lote_cantidad_tres_registro" id="lote_cantidad_tres_registro" data-error=".error_lote_cantidad_tres_registro">
									<div class="txt-red error_lote_cantidad_tres_registro"></div>
								</div>
								
							</form>
						</div>
						<!--cuatro-->
						<div class="row" id="div_campos_lotes_cuatro_registro">
							<form class="form col-lg12" id="form_lote_cuatro_registro">
								<div class="col-lg-3 pt1">
									<label>Número de Lote</label>
									<input type="text" name="lote_numero_cuatro_registro" placeholder="" class="clear validate input_search lote_numero_cuatro_registro" id="lote_numero_cuatro_registro" data-error=".error_lote_numero_cuatro_registro">
									<div class="txt-red error_lote_numero_cuatro_registro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Fecha de Caducidad</label>
									<input placeholder="" name="lote_fecha_cuatro_registro" class="clear datepicker input_search lote_fecha_cuatro_registro" id="lote_fecha_cuatro_registro" data-error=".error_lote_fecha_cuatro_registro" data-date-format="yyyy-mm-dd">
									<div class="txt-red error_lote_fecha_cuatro_registro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Cantidad</label><br>
									<input type="text" placeholder="" name="lote_cantidad_cuatro_registro" class="clear validate input_search lote_cantidad_cuatro_registro" id="lote_cantidad_cuatro_registro" data-error=".error_lote_cantidad_cuatro_registro">
									<div class="txt-red error_lote_cantidad_cuatro_registro"></div>
								</div>
								
							</form>
							
						</div>
						<!--cinco-->
						<div class="row" id="div_campos_lotes_cinco_registro">
							<form class="form col-lg12" id="form_lote_cinco_registro">
								<div class="col-lg-3 pt1">
									<label>Número de Lote</label>
									<input type="text" name="lote_numero_cinco_registro" placeholder="" class="clear validate input_search lote_numero_cinco_registro" id="lote_numero_cinco_registro" data-error=".error_lote_numero_cinco_registro">
									<div class="txt-red error_lote_numero_cinco_registro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Fecha de Caducidad</label>
									<input placeholder="" name="lote_fecha_cinco_registro" class="clear datepicker input_search lote_fecha_cinco_registro" id="lote_fecha_cinco_registro" data-error=".error_lote_fecha_cinco_registro" data-date-format="yyyy-mm-dd">
									<div class="txt-red error_lote_fecha_cinco_registro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Cantidad</label><br>
									<input type="text" placeholder="" name="lote_cantidad_cinco_registro" class="clear validate input_search lote_cantidad_cinco_registro" id="lote_cantidad_cinco_registro" data-error=".error_lote_cantidad_cinco">
									<div class="txt-red error_lote_cantidad_cinco_registro"></div>
								</div>
								
							</form>
							
						</div>
					</div>
                <div class="row">
		    		<div class="col-lg-6">
		    			
		    		</div>
		    		<div class="col-lg-6">
		    			<button type="button" class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Guardar este nuevo producto" id="btn_continuar_registro_productos">Continuar</button>
		    			<button type="button" class="btn btn-info btn-simple opt-nav btn-lg" data-toggle="tooltip" data-placement="top" title="Volver a los productos" id="btn_cancelar_registro_productos">Volver</button>

		    		</div>
		    	</div>
                
            </div>
		    <!--editar productos #################################################################-->
		    <!---->
		    <div id="div_tabla_editar_producto" class="panel container col-sm-12 col-md-12 col-lg-12">
		    	<legend class="text text-center bg-purple card mb0"><p class="txt-white">Modificar Producto</p></legend>
		    	<div class="col-12 text-center" id="notificaciones_modificar_productos"></div>
		    	<form class="form col-sm-12 col-md-12 col-lg-12  mt0" id="form_modificar_productos">
		    		<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="El nombre del producto solo debe contener letras"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Nombre del Producto</label>
								<input type="text" name="nombre_modifica_producto" class="validate form-control nombre_modifica_producto" data-error=".error_nombre_modifica_producto" id="nombre_modifica_producto" placeholder="">
								<input type="text" class="form-control" id="id_producto_modifica">
								<div class="row txt-red text-left error_nombre_modifica_producto"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa el uso del producto, solo se aceptan letras"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Uso</label>
								<input type="text" name="uso_modifica_producto" class="uso_modifica_producto form-control validate" id="uso_modifica_producto" placeholder="" data-error=".error_uso_modifica_producto">
								<div class="row txt-red text-left error_uso_modifica_producto"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-sort-numeric-desc fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa el código de barras del producto, solo se aceptan numeros"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Código de Barras</label>
								<input type="text" name="codigo_barras_modifica_producto" class="validate codigo_barras_modifica_producto form-control" id="codigo_barras_modifica_producto" placeholder="" data-error=".error_codigo_barras_modifica_producto">
								<div class="row txt-red text-left error_codigo_barras_modifica_producto"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-dollar fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa el precio por mayoreo de este producto, solo se aceptan numeros, el precio puede tener decimales"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Precio por Mayoreo</label>
								<input type="text" class="validate precio_mayoreo_modifica_producto form-control" id="precio_mayoreo_modifica_producto" name="precio_mayoreo_modifica_producto" placeholder="" data-error=".error_precio_mayoreo_modifica_producto">
								<div class="row txt-red text-left error_precio_mayoreo_modifica_producto"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-dollar fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa el precio público de este producto, solo se aceptan numeros, el precio puede tener decimales"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Precio Público</label>
								<input type="text" name="precio_publico_modifica_producto" class="validate precio_publico_modifica_producto form-control" id="precio_publico_modifica_producto" placeholder="" data-error=".error_precio_publico_modifica_producto">
								<div class="row txt-red text-left error_precio_publico_modifica_producto"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4" id="div_formula_modifica_producto">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-dollar fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa el precio público de este producto, solo se aceptan numeros, el precio puede tener decimales"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Fórmula</label>
								<input type="text" name="formula_modifica_producto" class="formula_modifica_producto form-control validate" id="formula_modifica_producto" placeholder="" data-error=".error_formula_modifica_producto">
								<div class="txt-red text-left error_formula_modifica_producto"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4" id="div_dosis_modifica_producto">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-dollar fa‐4x" data-toggle="tooltip" data-placement="top" title="Ingresa el precio público de este producto, solo se aceptan numeros, el precio puede tener decimales"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Dosis</label>
								<input type="text" name="dosis_modifica_producto " class="dosis_modifica_producto form-control validate" id="dosis_modifica_producto" placeholder="" data-error=".error_dosis_modifica_producto">
								<div class="txt-red text-left error_dosis_modifica_producto"></div>
							</div>
						</div>
					</div>
					<div class=" col-sm-4 col-md-4 col-lg-4">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-cubes fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una categoria"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Categoria</label>
								
							    <select class="form-control select_modificar_categoria"  id="select_modificar_categoria">
							    
							    </select>
							</div>

						    
					    </div>
					</div>
					<div class=" col-sm-4 col-md-4 col-lg-4 pt0 mt0">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-industry fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una marca"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Marca</label>
								
							    <select class="form-control select_modificar_marca"  id="select_modificar_marca">
							    
							    </select>
							</div>

						    
					    </div>
					</div>
					<div class=" col-sm-4 col-md-4 col-lg-4 pt0 mt0" id="div_select_modificar_tipo_pedicamento">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-cube fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una categoria de medicamento"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Categoria de medicamentos</label>
								
							    <select class="form-control select_modificar_tipo_medicamento"  id="select_modificar_tipo_medicamento">
							    
							    </select>
							</div>

						    
					    </div>
					</div>
					
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group " >
							<span class="input-group-addon">
								<i class="fa fa-th fa‐4x" data-toggle="tooltip" data-placement="top" title="Esta cantidad representa la suma total de este medicamento"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Cantidad Existente en Almacen</label>
								<input type="text" disabled="true" class="form-control" id="div_update_cantidad_existente" >
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-12 col-lg-12 pt0 mt0">
						<div class="row" id="div_update_lotes_medicamento">
							
						</div>
					</div>
					<div class=" col-sm-12 col-md-12 col-lg-12 pt0 mt0" id="div_select_lotes">
						<div class="row">
							<div class="col-lg-4">
								
							</div>
							<div class="col-lg-4">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-cube fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una categoria de medicamento"></i>
									</span>
									<div class="form-group ">
										<label class="control-label">Número de Lotes</label>
										
									    <select class="form-control select_lotes"  id="select_lotes">
									    	<option>1</option>
									    	<option>2</option>
									    	<option>3</option>
									    	<option>4</option>
									    	<option>5</option>
									    </select>
									</div>

								    
							    </div>
							</div>
							<div class="col-lg-4"></div>
						</div>
						
					</div>
				</form>
					<div class="col-lg-12" id="div_agregar_lotes_producto">
						<div class="col-12" id="div_lotes_notificaciones"></div>
						<div class="row" id="div_campos_lotes_uno">
							<form class="form col-lg12" id="form_lote_uno">
								<div class="col-lg-3 pt1">
									<label>Número de Lote</label>
									<input type="text" name="lote_numero_uno" placeholder="" class="clear validate input_search lote_numero_uno" id="lote_numero_uno" data-error=".error_lote_numero_uno">
									<div class="txt-red error_lote_numero_uno"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Fecha de Caducidad</label>
									<input placeholder="" name="lote_fecha_uno" class="clear datepicker input_search lote_fecha_uno" id="lote_fecha_uno" data-error=".error_lote_fecha_uno">
									<div class="txt-red error_lote_fecha_uno"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Cantidad</label><br>
									<input type="text" placeholder="" name="lote_cantidad_uno" class="clear validate input_search lote_cantidad_uno" id="lote_cantidad_uno" data-error=".error_lote_cantidad_uno">
									<div class="txt-red error_lote_cantidad_uno"></div>
								</div>
								
							</form>
							
						</div>
						<!--dos-->
						<div class="row" id="div_campos_lotes_dos">
							<form class="form col-lg12" id="form_lote_dos">
								<div class="col-lg-3 pt1">
									<label>Número de Lote</label>
									<input type="text" name="lote_numero_dos" placeholder="" class="clear validate input_search lote_numero_dos" id="lote_numero_dos" data-error=".error_lote_numero_dos">
									<div class="txt-red error_lote_numero_dos"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Fecha de Caducidad</label>
									<input placeholder="" name="lote_fecha_dos" class="clear datepicker input_search lote_fecha_dos" id="lote_fecha_dos" data-error=".error_lote_fecha_dos">
									<div class="txt-red error_lote_fecha_dos"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Cantidad</label><br>
									<input type="text" placeholder="" name="lote_cantidad_dos" class="clear validate input_search lote_cantidad_dos" id="lote_cantidad_dos" data-error=".error_lote_cantidad_dos">
									<div class="txt-red error_lote_cantidad_dos"></div>
								</div>
								
							</form>
							
						</div>
						<!--tres-->
						<div class="row" id="div_campos_lotes_tres">
							<form class="form col-lg12" id="form_lote_tres">
								<div class="col-lg-3 pt1">
									<label>Número de Lote</label>
									<input type="text" name="lote_numero_tres" placeholder="" class="clear validate input_search lote_numero_tres" id="lote_numero_tres" data-error=".error_lote_numero_tres">
									<div class="txt-red error_lote_numero_tres"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Fecha de Caducidad</label>
									<input placeholder="" name="lote_fecha_tres" class="clear datepicker input_search lote_fecha_tres" id="lote_fecha_tres" data-error=".error_lote_fecha_tres">
									<div class="txt-red error_lote_fecha_tres"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Cantidad</label><br>
									<input type="text" placeholder="" name="lote_cantidad_tres" class="clear validate input_search lote_cantidad_tres" id="lote_cantidad_tres" data-error=".error_lote_cantidad_tres">
									<div class="txt-red error_lote_cantidad_tres"></div>
								</div>
								
							</form>
						</div>
						<!--cuatro-->
						<div class="row" id="div_campos_lotes_cuatro">
							<form class="form col-lg12" id="form_lote_cuatro">
								<div class="col-lg-3 pt1">
									<label>Número de Lote</label>
									<input type="text" name="lote_numero_cuatro" placeholder="" class="clear validate input_search lote_numero_cuatro" id="lote_numero_cuatro" data-error=".error_lote_numero_cuatro">
									<div class="txt-red error_lote_numero_cuatro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Fecha de Caducidad</label>
									<input placeholder="" name="lote_fecha_cuatro" class="clear datepicker input_search lote_fecha_cuatro" id="lote_fecha_cuatro" data-error=".error_lote_fecha_cuatro">
									<div class="txt-red error_lote_fecha_cuatro"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Cantidad</label><br>
									<input type="text" placeholder="" name="lote_cantidad_cuatro" class="clear validate input_search lote_cantidad_cuatro" id="lote_cantidad_cuatro" data-error=".error_lote_cantidad_cuatro">
									<div class="txt-red error_lote_cantidad_cuatro"></div>
								</div>
								
							</form>
							
						</div>
						<!--cinco-->
						<div class="row" id="div_campos_lotes_cinco">
							<form class="form col-lg12" id="form_lote_cinco">
								<div class="col-lg-3 pt1">
									<label>Número de Lote</label>
									<input type="text" name="lote_numero_cinco" placeholder="" class="clear validate input_search lote_numero_cinco" id="lote_numero_cinco" data-error=".error_lote_numero_cinco">
									<div class="txt-red error_lote_numero_cinco"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Fecha de Caducidad</label>
									<input placeholder="" name="lote_fecha_cinco" class="clear datepicker input_search lote_fecha_cinco" id="lote_fecha_cinco" data-error=".error_lote_fecha_cinco">
									<div class="txt-red error_lote_fecha_cinco"></div>
									
								</div>
								<div class="col-lg-3 pt1">
									<label>Cantidad</label><br>
									<input type="text" placeholder="" name="lote_cantidad_cinco" class="clear validate input_search lote_cantidad_cinco" id="lote_cantidad_cinco" data-error=".error_lote_cantidad_cinco">
									<div class="txt-red error_lote_cantidad_cinco"></div>
								</div>
								
							</form>
							
						</div>
					</div>
					
		    	<div class="row">
		    		<div class="col-lg-6">
		    			
		    		</div>
		    		<div class="col-lg-6">
		    			<a type="button" class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Guardar los cambios para este producto" id="btn_continuar_modificar_producto">Continuar</a>
		    			<a type="button" class="btn btn-info btn-simple opt-nav btn-lg" data-toggle="tooltip" data-placement="top" title="Volver a los productos" id="btn_cancelar_edicion">Volver</a>

		    		</div>
		    	</div>
		    </div>
		    
			<!--agregar categorias ################################################################-->
			<div id="div_agregar_categoria" class="panel container col-sm-12 col-md-12 col-lg-12">
		    	<legend class="text text-center bg-purple card mb0"><p class="txt-white">Agregar una Categoria</p></legend>
		    	<form class="form col-sm-12 col-md-12 col-lg-12  mt0" id="form_agregar_categoria">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="El titulo de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Titúlo de la categoria</label>
								<input type="text" class="clear validate form-control" id="titulo_agregar_categoria" name="titulo_agregar_categoria" data-error=".error_titulo_agregar_categoria" placeholder="">
								<div class="txt-red error_titulo_agregar_categoria"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group label-floating">
								<label class="control-label">Descripción de la categoria</label>
								<input type="text" class="clear validate form-control" id="descripcion_agregar_categoria" name="descripcion_agregar_categoria" data-error=".error_descripcion_agregar_categoria" placeholder="">
								<div class="error_descripcion_agregar_categoria txt-red"></div>
							</div>
						</div>
					</div>
		    	</form>
		    	<div class="row">
		    		<div class="col-lg-7">
		    			
		    		</div>
		    		<div class="col-lg-5">
		    			<a  class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Guardar esta nueva categoria" id="btn_continuar_agregar_categoria">Continuar</a>
		    			<a  class="btn btn-info btn-simple opt-nav btn-lg" data-toggle="tooltip" data-placement="top" title="Volver a los productos" id="btn_cancelar_agregar_categoria">Volver</a>

		    		</div>
		    	</div>
		    </div>
		    <!--modificar categorias -->
		    <div id="div_modificar_categoria" class="panel container col-sm-12 col-md-12 col-lg-12">
		    	<legend class="text text-center bg-purple card mb0"><p class="txt-white">Modificar Categoria</p></legend>
		    	<form class="form col-sm-12 col-md-12 col-lg-12  mt0" id="form_modificar_categoria">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="El titulo de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Titúlo de la categoria</label>
								<input type="text" class="form-control" id="titulo_modificar_categoria" name="titulo_modificar_categoria" data-error=".error_titulo_modificar_categoria" placeholder="">
								<div class="error_titulo_modificar_categoria txt-red"></div>
								<input type="text" name="modificar_id_categoria" id="modificar_id_categoria" style="display: none;">
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Descripción de la categoria</label>
								<input type="text" class="form-control" id="descripcion_modificar_categoria" name="descripcion_modificar_categoria" data-error=".error_descripcion__modificar_categoria" placeholder="">
								<div class="error_descripcion__modificar_categoria txt-red"></div>
							</div>
						</div>
					</div>
		    	</form>
		    	<div class="row">
		    		<div class="col-lg-7">
		    			
		    		</div>
		    		<div class="col-lg-5">
		    			<a  class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Guardar esta nueva categoria" id="btn_continuar_modificar_categoria">Continuar</a>
		    			<a  class="btn btn-info btn-simple opt-nav btn-lg" data-toggle="tooltip" data-placement="top" title="Volver a los productos" id="btn_cancelar_modificar_categoria">Volver</a>

		    		</div>
		    	</div>
		    </div>
		    <!--div agregar marca -->
		    <div id="div_agregar_marca" class="panel container col-sm-12 col-md-12 col-lg-12">
		    	<legend class="text text-center bg-purple card mb0"><p class="txt-white">Agregar Marca</p></legend>
		    	<form class="form col-sm-12 col-md-12 col-lg-12  mt0" id="form_agregar_marca">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="El titulo de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Titúlo de la marca</label>
								<input type="text" class="clear agregar_marca_titulo form-control validate" id="agregar_marca_titulo" name="agregar_marca_titulo" data-error=".error_agregar_marca_titulo">
								<div class="text text-left txt-red error_agregar_marca_titulo"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Descripción de la marca</label>
								<input type="text" class="clear agregar_marca_descripcion form-control validate" id="agregar_marca_descripcion" name="agregar_marca_descripcion" data-error=".error_agregar_marca_descripcion">
								<div class="text text-left txt-red error_agregar_marca_descripcion"></div>
							</div>
						</div>
					</div>
		    	</form>
		    	<div class="row">
		    		<div class="col-lg-7">
		    			
		    		</div>
		    		<div class="col-lg-5">
		    			<button type="button" class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Guardar esta nueva categoria" id="btn_agregar_marca">Continuar</button>
		    			<button type="button" class="btn btn-info btn-simple opt-nav btn-lg" data-toggle="tooltip" data-placement="top" title="Volver a los productos" id="btn_cancelar_agregar_marca">Volver</button>

		    		</div>
		    	</div>
		    </div>
		    <!--div modificar marca-->
		    <div id="div_modificar_marca" class="panel container col-sm-12 col-md-12 col-lg-12">
		    	<legend class="text text-center bg-purple card mb0"><p class="txt-white">Modificar Marca</p></legend>
		    	<form class="form col-sm-12 col-md-12 col-lg-12  mt0" id="form_modificar_marca">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="El titulo de la marca solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Titúlo de la marca</label>
								<input type="text" class="form-control" id="modificar_marca_titulo" data-error=".error_modificar_marca_titulo" name="modificar_marca_titulo">
								<div class="error_modificar_marca_titulo txt-red"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la marca solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Descripción de la marca</label>
								<input type="text" class="form-control" id="modificar_marca_descripcion" name="modificar_marca_descripcion" data-error=".error_modificar_marca_descripcion">
								<div class="error_modificar_marca_descripcion txt-red"></div>
								<input type="text" name="modificar_id_marca" id="modificar_id_marca" style="display: none;">
							</div>
						</div>
					</div>
		    	</form>
		    	<div class="row">
		    		<div class="col-lg-7">
		    			
		    		</div>
		    		<div class="col-lg-5">
		    			<button type="button" class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Guardar esta nueva categoria" id="btn_modificar_marca">Continuar</button>
		    			<button type="button" class="btn btn-info btn-simple opt-nav btn-lg" data-toggle="tooltip" data-placement="top" title="Volver a los productos" id="btn_cancelar_modificar_marca">Volver</button>

		    		</div>
		    	</div>
		    </div>
		    <!--agregar categorias de medicamentos-->
			<div id="div_agregar_cat_medicamentos" class="panel container col-sm-12 col-md-12 col-lg-12">
		    	<legend class="text text-center bg-purple card mb0"><p class="txt-white">Agregar una Categoria de Medicamentos</p></legend>
		    	<form class="form col-sm-12 col-md-12 col-lg-12  mt0" id="form_agregar_cat_medicamentos">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="El titulo de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group">
								<label class="control-label">Titúlo de la categoria</label>
								<input type="text" class="form-control validate clear" id="titulo_agregar_cat_medicamentos" name="titulo_agregar_cat_medicamentos" data-error=".error_titulo_agregar_cat_medicamentos" placeholder="">
								<div class="txt-red error_titulo_agregar_cat_medicamentos"></div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group">
								<label class="control-label">Descripción de la categoria</label>
								<input type="text" class="form-control validate clear" id="descripcion_agregar_cat_medicamentos" name="descripcion_agregar_cat_medicamentos" data-error=".error_descripcion_agregar_cat_medicamentos" placeholder="">
								<div class="error_descripcion_agregar_cat_medicamentos txt-red"></div>
							</div>
						</div>
					</div>
		    	</form>
		    	<div class="row">
		    		<div class="col-lg-7">
		    			
		    		</div>
		    		<div class="col-lg-5">
		    			<a  class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Guardar esta nueva categoria" id="btn_continuar_agregar_cat_medicamentos">Continuar</a>
		    			<a  class="btn btn-info btn-simple opt-nav btn-lg" data-toggle="tooltip" data-placement="top" title="Volver a los productos" id="btn_cancelar_agregar_cat_medicamentos">Volver</a>

		    		</div>
		    	</div>
		    </div>
		    <!--modificar categorias de medicamentos-->
			<div id="div_modificar_cat_medicamentos" class="panel container col-sm-12 col-md-12 col-lg-12">
		    	<legend class="text text-center bg-purple card mb0"><p class="txt-white">Modificar Categoria de Medicamentos</p></legend>
		    	<form class="form col-sm-12 col-md-12 col-lg-12  mt0" id="form_modificar_cat_medicamentos">
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="El titulo de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group">
								<label class="control-label">Titúlo de la categoria</label>
								<input type="text" class="form-control validate" id="titulo_modificar_cat_medicamentos" name="titulo_modificar_cat_medicamentos" data-error=".error_titulo_modificar_cat_medicamentos" placeholder="">
								<div class="txt-red error_titulo_modificar_cat_medicamentos"></div>
								<input type="text" name="id_cat_modificar_medicamentos" id="id_cat_modificar_medicamentos" style="display: none;">
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-6 col-lg-6">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group">
								<label class="control-label">Descripción de la categoria</label>
								<input type="text" class="form-control validate" id="descripcion_modificar_cat_medicamentos" name="descripcion_modificar_cat_medicamentos" data-error=".error_descripcion_modificar_cat_medicamentos" placeholder="">
								<div class="error_descripcion_modificar_cat_medicamentos txt-red"></div>
							</div>
						</div>
					</div>
		    	</form>
		    	<div class="row">
		    		<div class="col-lg-7">
		    			
		    		</div>
		    		<div class="col-lg-5">
		    			<a  class="btn btn-primary btn-lg" data-toggle="tooltip" data-placement="top" title="Guardar esta nueva categoria" id="btn_continuar_modificar_cat_medicamentos">Continuar</a>
		    			<a  class="btn btn-info btn-simple opt-nav btn-lg" data-toggle="tooltip" data-placement="top" title="Volver a los productos" id="btn_cancelar_modificar_cat_medicamentos">Volver</a>

		    		</div>
		    	</div>
		    </div>
		    <!--div informacion de medicamentos-->
		    <div id="div_informacion_medicamentos" class="panel container col-sm-12 col-md-12 col-lg-12">
		    	<legend class="text text-center bg-purple card mb0"><p class="txt-white">Información de Medicamento</p></legend>
		    	<form class="form col-sm-12 col-md-12 col-lg-12  pd-0">
					<div class="col-sm-4 col-md-4 col-lg-4 pd-0">
						<div class="input-group pd-0">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="El titulo de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Nombre del medicamento</label>
								<input type="text" class="form-control" disabled="true" id="ver_medicamento_nombre">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-numeric-desc fa‐4x" data-toggle="tooltip" data-placement="top" title="El titulo de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Código de barras medicamento</label>
								<input type="text" class="form-control" disabled="true" id="ver_medicamento_codigo_barras">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-dollar fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Precio de Mayoreo</label>
								<input type="text" disabled="true" class="form-control" id="ver_medicamento_precio_mayoreo">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-dollar fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Precio de Público</label>
								<input type="text" disabled="true" class="form-control" id="ver_medicamento_precio_publico">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-flask fa‐4x" data-toggle="tooltip" data-placement="top" title="Este campo muestra la fórmula conocida"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Fórmula</label>
								<input type="text" disabled="true" class="form-control" id="ver_medicamento_formula">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-eyedropper fa‐4x" data-toggle="tooltip" data-placement="top" title="Este campo muestra la dosis recomendada"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Dosis</label>
								<input type="text" disabled="true" class="form-control" id="ver_medicamento_docis">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-cubes fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Categoria</label>
								<input type="text" disabled="true" class="form-control" id="ver_medicamento_categoria">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-industry fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Marca</label>
								<input type="text" disabled="true" class="form-control" id="ver_medicamento_marca">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-cube fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Categoria de Medicamentos</label>
								<input type="text" disabled="true" class="form-control" id="ver_medicamento_categoria_medicamentos">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 pd-0">
						
							<div class="form-group " id="div_lotes_medicamento">
								
							</div>
						
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group " >
							<span class="input-group-addon">
								<i class="fa fa-th fa‐4x" data-toggle="tooltip" data-placement="top" title="Esta cantidad representa la suma total de este medicamento"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Cantidad Existente en Almacen</label>
								<input type="text" disabled="true" class="form-control" id="ver_medicamento_cantidad_existente" >
							</div>
						</div>
					</div>
		    	</form>
		    	<div class="row">
		    		<div class="col-lg-7">
		    			
		    		</div>
		    		<div class="col-lg-5">
		    			
		    			<button type="button" class="btn btn-info btn-simple opt-nav btn-lg" data-toggle="tooltip" data-placement="top" title="Volver a los productos" id="ver_medicamento_btn_volver">Volver</button>

		    		</div>
		    	</div>
		    </div>
		    <!---->
		    <!--div informacion de productos-->
		    <div id="div_informacion_productos" class="panel container col-sm-12 col-md-12 col-lg-12">
		    	<legend class="text text-center bg-purple card mb0"><p class="txt-white">Informacion  producto</p></legend>
		    	<form class="form col-sm-12 col-md-12 col-lg-12  pd-0">
					<div class="col-sm-4 col-md-4 col-lg-4 pd-0">
						<div class="input-group pd-0">
							<span class="input-group-addon">
								<i class="fa fa-sort-alpha-asc fa‐4x" data-toggle="tooltip" data-placement="top" title="El titulo de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Nombre del producto</label>
								<input type="text" class="form-control" disabled="true" id="ver_producto_nombre">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-numeric-desc fa‐4x" data-toggle="tooltip" data-placement="top" title=""></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Uso</label>
								<input type="text" class="form-control" disabled="true" id="ver_producto_uso">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-sort-numeric-desc fa‐4x" data-toggle="tooltip" data-placement="top" title="El titulo de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Código de barras producto</label>
								<input type="text" class="form-control" disabled="true" id="ver_producto_codigo_barras">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-dollar fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Precio de Mayoreo</label>
								<input type="text" disabled="true" class="form-control" id="ver_producto_precio_mayoreo">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-dollar fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Precio de Público</label>
								<input type="text" disabled="true" class="form-control" id="ver_producto_precio_publico">
							</div>
						</div>
					</div>
					
					
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-cubes fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Categoria</label>
								<input type="text" disabled="true" class="form-control" id="ver_producto_categoria">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group ">
							<span class="input-group-addon">
								<i class="fa fa-industry fa‐4x" data-toggle="tooltip" data-placement="top" title="La descripcion de la categoria solo debe contener letras, se recomienda la primer letra sea mayuscula"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Marca</label>
								<input type="text" disabled="true" class="form-control" id="ver_producto_marca">
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4 col-lg-4 pd-0">
						
							<div class="form-group " id="div_lotes_producto">
								
							</div>
						
					</div>
					
					<div class="col-sm-4 col-md-4 col-lg-4">
						<div class="input-group " >
							<span class="input-group-addon">
								<i class="fa fa-th fa‐4x" data-toggle="tooltip" data-placement="top" title="Esta cantidad representa la suma total de este producto"></i>
							</span>
							<div class="form-group ">
								<label class="control-label">Cantidad Existente en Almacen</label>
								<input type="text" disabled="true" class="form-control" id="ver_producto_cantidad_existente" >
							</div>
						</div>
					</div>
		    	</form>
		    	<div class="row">
		    		<div class="col-lg-7">
		    			
		    		</div>
		    		<div class="col-lg-5">
		    			
		    			<button type="button" class="btn btn-info btn-simple opt-nav btn-lg" data-toggle="tooltip" data-placement="top" title="Volver a los productos" id="ver_producto_btn_volver">Volver</button>

		    		</div>
		    	</div>
		    </div>
		    <!---->
			
		</div>
	</div>
</div>
<!--modal de busqueda de producto-->
<div class="modal fade" id="modal_confirmar_crear_marca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar creacion de marca</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea guardar esta marca ?</h4>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_confirmar_crear_marca">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal de busqueda de producto-->
<div class="modal fade" id="modal_confirmar_update_marca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar modificación</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea guardar los cambios para esta marca ?</h4>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_confirmar_update_marca">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal de busqueda de producto-->
<div class="modal fade" id="modal_confirmar_crear_categoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar creacion de categoria</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea guardar esta categoria ?</h4>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_confirmar_crear_categoria">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal de busqueda de producto-->
<div class="modal fade" id="modal_confirmar_update_categoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar modificación</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea guardar los cambios para esta categoria ?</h4>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_confirmar_update_categoria">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>		

<script type="text/javascript">
	$(document).ready(function()
	{
		$("#modal_espera").modal("show");

		$('[data-toggle="tooltip"]').tooltip();
		$("#div_modificar_cat_medicamentos").hide();
		$("#div_tabla_editar_producto").hide();
		$("#div_formula_registro_productos").hide();
		$("#div_dosis_registro_productos").hide();
		$("#div_select_categoria_medicamentos_registro_productos").hide();
		$("#div_modificar_categoria").hide();
		$("#div_agregar_categoria").hide();
		$("#div_informacion_productos").hide();
		$("#div_agregar_marca").hide();
		$("#div_modificar_marca").hide();
		$("#cards-marcas").hide();
		$("#cards-medicamentos").hide();
		$("#div_form_registro_productos").hide();
		$("#div_informacion_medicamentos").hide();
		$("#div_campos_lotes_uno").hide();
		$("#div_campos_lotes_dos").hide();
		$("#div_campos_lotes_tres").hide();
		$("#div_campos_lotes_cuatro").hide();
		$("#div_campos_lotes_cinco").hide();
		$("#div_campos_lotes_uno_registro").hide();
		$("#div_campos_lotes_dos_registro").hide();
		$("#div_campos_lotes_tres_registro").hide();
		$("#div_campos_lotes_cuatro_registro").hide();
		$("#div_campos_lotes_cinco_registro").hide();
		$("#id_producto_modifica").hide();
		$("#div_agregar_cat_medicamentos").hide();
		
		get_all_productos();
		get_all_categorias_productos();
		get_all_marcas();
		medicamentos();
		productos_caducados();
		get_all_categorias_for_select_agregar();
		get_all_categorias_for_select_agregar_marcas();
		get_all_categorias_for_select_agregar_tipo_medicamentos();
		//activar opcion de navegacion en nav
		var pathname = window.location.pathname;
		if(pathname=="/punto_venta/views/productos/admon/")
		{
			$(".active_productos").addClass("active");	
			//console.log("ventana-->"+pathname);
		}
		$(".datepicker").on('changeDate',function(event)
        { 
          $(this).datepicker('hide');

        });
        $(".datepicker").click(function(event)
        { 
          var popup=$(this).offset();
          var popupTop=450;
          ////console.log(popupTop);
          $('div.datepicker.dropdown-menu').css(
          {
            
            'top':popupTop,
            'position':'absolute'
          });

          
        });
        //
        $("#div_tabla_editar_producto").on('click','a#btn_eliminar_lote',function()
        {
        	var id_reg=$(this).data("id_lote_reg");

        	$("#modal_eliminar_lote_id").val(id_reg);
        	$("#modal_eliminar_lote").modal("show");
        	//console.log("id_registro= "+id_reg);
        });
        $("#btn_continuar_modal_eliminar_lote").click(function()
        {
        	var id_lote=$("#modal_eliminar_lote_id").val();

        	$.post("../../../core/controllers/controller_admon.php",{id_lote:id_lote,action:"delete_lote"},function(request)
				{
					$("#content_request").html(request);
					$("#modal_eliminar_lote").modal("hide");
					$("#div_informacion_medicamentos").hide();
					$("#div_informacion_productos").hide();
					$("#div_tabla_editar_producto").hide();
					$("#div_tabla_productos").show();

				});
        	//console.log("eliminando lote..."+ id_lote);
        });
		//
		$("#btn_cerrar_espera").click(function()
		{
			hide_card_medicamento();
		});
		//btn ver categorias
		$("#cards-categorias").on('click','a#btn_ver_categoria',function(event)
		{
			var id_categoria=$(this).data("id_categoria");
			var titulo=$(this).data("titulo");
			var texto="Tabla De Productos De La Categoria "+titulo;
			$.get("../../../core/controllers/controller_admon.php",{id_categoria:id_categoria,action:"get_all_productos_categoria"},function(res)
          {
              res = JSON.parse(res);
              ////console.log(res);
              var html="";
              $.each(res, function(i, item)
              {
               
                var btn_elimina='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_eliminar_producto" data-toggle="tooltip" data-placement="top" title="Eliminar el producto: '+item.nombre+'">'+
								'<i class="fa fa-trash fa-2x"></i>'+
							'</a>';
                var btn_ver='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_ver_producto" data-toggle="tooltip" data-placement="top" title="Ver informacion del producto: '+item.nombre+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-categoria="'+item.titulo+'">'+
								'<i class="fa fa-eye fa-2x"></i>'+
							'</a>';
								
							
						

                var btn_actualiza='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_update_producto" data-categoria="'+item.titulo+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-toggle="tooltip" data-placement="top" title="Actualizar informacion del producto: '+item.nombre+'">'+
								'<i class="fa fa-refresh fa-2x"></i>'+
							'</a>';

                html+="<tr class='col-12 fila_tab_productos'>"+
                          
                          "<td>"+item.nombre+"</td>"+
                          "<td>"+item.precio_mayoreo+"</td>"+
                          "<td class='tab_productos_code'>"+item.codigo_barras+"</td>"+
                          "<td>"+item.precio_publico+"</td>"+
                           "<td class='tab_productos_lotes'></td>"+
                           "<td class='tab_productos_cantidad'></td>"+
                           "<td>"+btn_ver+
                          		  btn_actualiza+
                          "</td>"+
                          // "<td>"+btn_sueldo+"</td>"+
                      "</tr>";
              });
              $("#text_tabla_productos").text(texto);
              $("#tabla_productos tbody").html(html);
              $('[data-toggle="tooltip"]').tooltip();
              get_lotes_for_tab_productos();
          });
			//console.log("mostrar categoria "+id_categoria);
		});
		//btn ver marcas
		$("#cards-marcas").on('click','a#btn_ver_marca',function(event)
		{
			var id_marca=$(this).data("id_marca");
			var titulo=$(this).data("titulo");
			var texto="Tabla De Productos De La Marca "+titulo;
			$.get("../../../core/controllers/controller_admon.php",{id_marca:id_marca,action:"get_all_productos_marca"},function(res)
          {
              res = JSON.parse(res);
              ////console.log(res);
              var html="";
              $.each(res, function(i, item)
              {
               
                var btn_elimina='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_eliminar_producto" data-toggle="tooltip" data-placement="top" title="Eliminar el producto: '+item.nombre+'">'+
								'<i class="fa fa-trash fa-2x"></i>'+
							'</a>';
                var btn_ver='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_ver_producto" data-toggle="tooltip" data-placement="top" title="Ver informacion del producto: '+item.nombre+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-categoria="'+item.titulo+'">'+
								'<i class="fa fa-eye fa-2x"></i>'+
							'</a>';
								
							
						

                var btn_actualiza='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_update_producto" data-categoria="'+item.titulo+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-toggle="tooltip" data-placement="top" title="Actualizar informacion del producto: '+item.nombre+'">'+
								'<i class="fa fa-refresh fa-2x"></i>'+
							'</a>';

                html+="<tr class='col-12 fila_tab_productos'>"+
                          
                          "<td>"+item.nombre+"</td>"+
                          "<td>"+item.precio_mayoreo+"</td>"+
                          "<td class='tab_productos_code'>"+item.codigo_barras+"</td>"+
                          "<td>"+item.precio_publico+"</td>"+
                           "<td class='tab_productos_lotes'></td>"+
                           "<td class='tab_productos_cantidad'></td>"+
                           "<td>"+btn_ver+
                          		  btn_actualiza+
                          "</td>"+
                          // "<td>"+btn_sueldo+"</td>"+
                      "</tr>";
              });
              $("#text_tabla_productos").text(texto);
              $("#tabla_productos tbody").html(html);
              $('[data-toggle="tooltip"]').tooltip();
              get_lotes_for_tab_productos();
          });
			//console.log("mostrar marca "+id_marca);
		});
		//btn ver medicamentos
		$("#cards-medicamentos").on('click','a#btn_ver_medicamentos',function(event)
		{
			var id_categoria=$(this).data("id_categoria");
			var titulo=$(this).data("titulo");
			var texto="Tabla De Medicamentos De "+titulo;
			$.get("../../../core/controllers/controller_admon.php",{id_categoria:id_categoria,action:"get_all_productos_medicamentos"},function(res)
          {
              res = JSON.parse(res);
              ////console.log(res);
              var html="";
              $.each(res, function(i, item)
              {
               
                var btn_elimina='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_eliminar_producto" data-toggle="tooltip" data-placement="top" title="Eliminar el producto: '+item.nombre+'">'+
								'<i class="fa fa-trash fa-2x"></i>'+
							'</a>';
                var btn_ver='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_ver_producto" data-toggle="tooltip" data-placement="top" title="Ver informacion del producto: '+item.nombre+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-categoria="'+item.titulo+'">'+
								'<i class="fa fa-eye fa-2x"></i>'+
							'</a>';
								
							
						

                var btn_actualiza='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_update_producto" data-categoria="'+item.titulo+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-toggle="tooltip" data-placement="top" title="Actualizar informacion del producto: '+item.nombre+'">'+
								'<i class="fa fa-refresh fa-2x"></i>'+
							'</a>';

                html+="<tr class='col-12 fila_tab_productos'>"+
                          
                          "<td>"+item.nombre+"</td>"+
                          "<td>"+item.precio_mayoreo+"</td>"+
                          "<td class='tab_productos_code'>"+item.codigo_barras+"</td>"+
                          "<td>"+item.precio_publico+"</td>"+
                           "<td class='tab_productos_lotes'></td>"+
                           "<td class='tab_productos_cantidad'></td>"+
                           "<td>"+btn_ver+
                          		  btn_actualiza+
                          "</td>"+
                          // "<td>"+btn_sueldo+"</td>"+
                      "</tr>";
              });
              $("#text_tabla_productos").text(texto);
              $("#tabla_productos tbody").html(html);
              $('[data-toggle="tooltip"]').tooltip();
              get_lotes_for_tab_productos();
          });
			//console.log("mostrar medicamentos "+id_categoria);
		});
		//btn agregar productos
		$("#btn_agregar_producto").click(function()
		{
			//console.log('agregar producto');
			$("#div_tabla_editar_producto").hide();
			$("#div_tabla_productos").hide();
			$("#div_modificar_categoria").hide();
			$("#div_agregar_categoria").hide();
			$("#div_informacion_productos").hide();
			$("#div_form_registro_productos").show();
			$("#div_informacion_medicamentos").hide();


		});
		//btn cancelar registro de productos
		$("#btn_cancelar_registro_productos").click(function()
		{
			//console.log('agregar producto');
			$("#div_tabla_editar_producto").hide();
			$("#div_modificar_categoria").hide();
			$("#div_agregar_categoria").hide();
			$("#div_informacion_productos").hide();
			$("#div_form_registro_productos").hide();
			$("#div_tabla_productos").show();
			$("#div_informacion_medicamentos").hide();
		});
		
		//btn agregar categorias
		$(".cards-categorias").on("click","a#btn_cards_agregar_categoria",function()
		{
			//console.log("agregar categoria de productos");
			$("#div_tabla_editar_producto").hide();
			$("#div_tabla_productos").hide();
			$("#div_modificar_categoria").hide();
			$("#div_agregar_categoria").show();
			$("#div_informacion_productos").hide();
			$("#div_agregar_marca").hide();
			$("#div_modificar_marca").hide();
			$("#div_informacion_medicamentos").hide();
			$("#div_form_registro_productos").hide();

		});
		//btn cancelar agregar categorias
		$("#btn_cancelar_agregar_categoria").click(function()
		{
			//console.log("cancelar agregar categoria de productos");
			$("#div_tabla_editar_producto").hide();
			$("#div_modificar_categoria").hide();
			$("#div_agregar_categoria").hide();
			$("#div_informacion_productos").hide();
			$("#div_agregar_marca").hide();
			$("#div_modificar_marca").hide();
			$("#div_tabla_productos").show();
			$("#div_informacion_medicamentos").hide();
			$("#div_form_registro_productos").hide();
		});
		//btn agregar marca
		$(".cards-marcas").on("click","a#btn_cards_agregar_marca",function()
		{
			//console.log("agregar marca");
			$("#div_tabla_editar_producto").hide();
			$("#div_tabla_productos").hide();
			$("#div_modificar_categoria").hide();
			$("#div_agregar_categoria").hide();
			$("#div_informacion_productos").hide();
			$("#div_agregar_marca").show();
			$("#div_modificar_marca").hide();
			$("#div_informacion_medicamentos").hide();
			$("#div_form_registro_productos").hide();

		});
		//btn cancelar agregar marca
		$("#btn_cancelar_agregar_marca").click(function()
		{
			//console.log("cancelar agregar categoria de productos");
			$("#div_tabla_editar_producto").hide();
			$("#div_modificar_categoria").hide();
			$("#div_agregar_categoria").hide();
			$("#div_informacion_productos").hide();
			$("#div_agregar_marca").hide();
			$("#div_modificar_marca").hide();
			$("#div_tabla_productos").show();
			$("#div_informacion_medicamentos").hide();
			$("#div_form_registro_productos").hide();
		});
		
		//btn_actualizar productos
		$("#tabla_productos").on("click","a#btn_update_producto",function()     
        {       
          var id_producto=$(this).data("id");
          $("#id_producto_modifica").val(id_producto);
          var nombre_busqueda=$(this).data("nombre");
          var categoria=$(this).data("categoria");
          if(categoria=="medicamentos")
          {	
          	//console.log("producto de medicamentos");
          	$.get("../../../core/controllers/controller_admon.php",{action:"get_all_categorias_for_select_agregar"},function(res)
		            {
		                res=JSON.parse(res);
		                var options_select='';
		                ////console.log(res);
		                $.each(res,function(i, item)
		                {
		                    options_select+='<option>'+item.titulo+'</option>'
		                });
		                $("#select_modificar_categoria").html(options_select);
		            });
	          	$.get("../../../core/controllers/controller_admon.php",{action:"get_all_categorias_for_select_agregar_marcas"},function(res)
		            {
		                res=JSON.parse(res);
		                var options_select='';
		                ////console.log(res);
		                $.each(res,function(i, item)
		                {
		                    options_select+='<option>'+item.titulo+'</option>'
		                });
		                $("#select_modificar_marca").html(options_select);
		            });
	          	$.get("../../../core/controllers/controller_admon.php",{action:"get_all_categorias_for_select_agregar_tipo_medicamentos"},function(res)
		            {
		                res=JSON.parse(res);
		                var options_select='';
		                ////console.log(res);
		                $.each(res,function(i, item)
		                {
		                    options_select+='<option>'+item.titulo+'</option>'
		                });
		                $("#select_modificar_tipo_medicamento").html(options_select);
		            });
	          	//get cantidad existente
	    		  $.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,action:"get_info_producto_cantidad_existente"},function(res)
		            {
		                res=JSON.parse(res);
		                var summ='';
		                
		                $.each(res,function(i, item)
		                {
		                    summ=''+item.suma_disponible+'';
		                    
		                });
		                $("#div_update_cantidad_existente").val(summ);
			    		
		            });
	    		  //get lotes y fechas de caducidad
	    		  $.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,action:"get_info_producto_lotes"},function(res)
		            {
		                res=JSON.parse(res);
		                //console.log(res);
		                var summ='';
		                var tabla='';
		                var tabla2='';
		                $.each(res,function(i, item)
		                {
		                    summ=''+item.lote+'';
		                    
					   		tabla2+='<div class="col-lg-12 fila_lotes_modificar" data-id_lote="'+item.id_registro+'"><div class="row">'+
										'<div class="col-lg-3 pt1">'+
											'<label>Número de Lote</label>'+
											'<input type="text" name="lote_numero_modificar" placeholder="" class="clear validate input_search lote_numero_modificar" id="lote_numero_modificar" data-error=".error_lote_numero_modificar" value="'+item.lote+'">'+
											'<div class="txt-red error_lote_numero_modificar"></div>'+
											
										'</div>'+
										'<div class="col-lg-3 pt1">'+
											'<label>Fecha de Caducidad</label>'+
											'<input placeholder="" name="lote_fecha_modificar" class="clear datepicker input_search lote_fecha_modificar" id="lote_fecha_modificar" data-error=".error_lote_fecha_modificar" value="'+item.fecha_caducidad+'" data-date-format="yyyy-mm-dd">'+
											'<div class="txt-red error_lote_fecha_modificar">'+'</div>'+
											
										'</div>'+
										'<div class="col-lg-3 pt1">'+
											'<label>Cantidad</label><br>'+
												'<input type="text" placeholder="" name="lote_cantidad_modificar" class="clear validate input_search lote_cantidad_modificar" id="lote_cantidad_modificar" data-error=".error_lote_cantidad_modificar" value="'+item.cantidad_disponible+'">'+
												'<div class="txt-red error_lote_cantidad_modificar"></div>'+
										'</div>'+
										'<div class="col-lg-3 pt2">'+
											'<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_eliminar_lote" data-toggle="tooltip" data-placement="top" title="Eliminar el lote: '+item.lote+'" data-id_lote_reg="'+item.id_registro+'">'+
												'<i class="fa fa-trash fa-2x"></i>'+
											'</a>'+
										'</div>'+
									'</div>'+
									'</div>';
		                    
		                });
		                $("#div_update_lotes_medicamento").html(tabla2);
		                $('[data-toggle="tooltip"]').tooltip();
		                $(".lote_fecha_modificar").datepicker();
		                $(".lote_fecha_modificar").on('changeDate',function(event)
				        { 
				          $(this).datepicker('hide');

				        });
				        $(".lote_fecha_modificar").click(function(event)
				        { 
				          var popup=$(this).offset();
				          var popupTop=315;
				          ////console.log(popupTop);
				          $('div.datepicker.dropdown-menu').css(
				          {
				            
				            'top':popupTop,
				            'position':'absolute'
				          });

				          
				        });
			    		
		            });
	          //get info medicamento
          	$.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,nombre_busqueda:nombre_busqueda,action:"get_info_medicamento"},function(res)
		            {
		                res=JSON.parse(res);
		                var nombre_producto='';
		                var codigo_barras='';
		                var uso='';
		                var marca='';
		                var precio_publico='';
		                var precio_mayoreo='';
		                var categoria='';
		                var formula='';
		                var docis='';
		                var cat_medicamento='';
		                ////console.log(res);
		                $.each(res,function(i, item)
		                {
		                    nombre_producto=''+item.nombre+'';
		                    codigo_barras=''+item.codigo_barras+'';
		                    uso=''+item.uso+'';
		                    precio_mayoreo=''+item.precio_mayoreo+'';
		                    precio_publico=''+item.precio_publico+'';
		                    marca=''+item.marca+'';
		                    categoria=''+item.categoria+'';
		                    docis=''+item.docis+'';
		                    formula=''+item.formula+'';
		                    cat_medicamento=''+item.cat_medicamento+'';
		                    
		                });
		                $("#select_lotes").val("seleccione");
		                $("#select_modificar_categoria").val(categoria)
		                $("#select_modificar_marca").val(marca)
		                $("#select_modificar_tipo_medicamento").val(cat_medicamento)
		                $("#nombre_modifica_producto").val(nombre_producto);
			    		  $("#codigo_barras_modifica_producto").val(codigo_barras);
			    		  $("#uso_modifica_producto").val(uso);
			    		  $("#precio_mayoreo_modifica_producto").val(precio_mayoreo);
			    		  $("#precio_publico_modifica_producto").val(precio_publico);
			    		  $("#formula_modifica_producto").val(formula);
			    		  $("#dosis_modifica_producto").val(docis);
						  ////console.log("ver informacion producto ...");
						  $("#div_formula_modifica_producto").show();
						  $("#div_dosis_modifica_producto").show();
						  $("#div_tabla_productos").hide();
				          $("#div_modificar_categoria").hide();
				          $("#div_agregar_categoria").hide();
				          $("#div_select_modificar_tipo_pedicamento").show();
				          $("#div_informacion_productos").hide();
				          $("#div_informacion_medicamentos").hide();
				          $("#div_tabla_editar_producto").show();
		            });
	          	
          }
          else
          {
          	//console.log("producto de productos");
          		$.get("../../../core/controllers/controller_admon.php",{action:"get_all_categorias_for_select_agregar"},function(res)
		            {
		                res=JSON.parse(res);
		                var options_select='';
		                ////console.log(res);
		                $.each(res,function(i, item)
		                {
		                    options_select+='<option>'+item.titulo+'</option>'
		                });
		                $("#select_modificar_categoria").html(options_select);
		            });
	          	$.get("../../../core/controllers/controller_admon.php",{action:"get_all_categorias_for_select_agregar_marcas"},function(res)
		            {
		                res=JSON.parse(res);
		                var options_select='';
		                ////console.log(res);
		                $.each(res,function(i, item)
		                {
		                    options_select+='<option>'+item.titulo+'</option>'
		                });
		                $("#select_modificar_marca").html(options_select);
		            });
	          	//get cantidad existente
	    		  $.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,action:"get_info_producto_cantidad_existente"},function(res)
		            {
		                res=JSON.parse(res);
		                var summ='';
		                
		                $.each(res,function(i, item)
		                {
		                    summ=''+item.suma_disponible+'';
		                    
		                });
		                $("#div_update_cantidad_existente").val(summ);
			    		
		            });
	    		  //get lotes y fechas de caducidad
	    		  $.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,action:"get_info_producto_lotes"},function(res)
		            {
		                res=JSON.parse(res);
		                //console.log(res);
		                var summ='';
		                var tabla='';
		                var tabla2='';
		                $.each(res,function(i, item)
		                {
		                    summ=''+item.lote+'';
		                    
					   		tabla2+='<div class="col-lg-12 fila_lotes_modificar" data-id_lote="'+item.id_registro+'"><div class="row">'+
										'<div class="col-lg-3 pt1">'+
											'<label>Número de Lote</label>'+
											'<input type="text" name="lote_numero_modificar" placeholder="" class="clear validate input_search lote_numero_modificar" id="lote_numero_modificar" data-error=".error_lote_numero_modificar" value="'+item.lote+'">'+
											'<div class="txt-red error_lote_numero_modificar"></div>'+
											
										'</div>'+
										'<div class="col-lg-3 pt1">'+
											'<label>Fecha de Caducidad</label>'+
											'<input placeholder="" name="lote_fecha_modificar" class="clear datepicker input_search lote_fecha_modificar" id="lote_fecha_modificar" data-error=".error_lote_fecha_modificar" value="'+item.fecha_caducidad+'" data-date-format="yyyy-mm-dd">'+
											'<div class="txt-red error_lote_fecha_modificar">'+'</div>'+
											
										'</div>'+
										'<div class="col-lg-3 pt1">'+
											'<label>Cantidad</label><br>'+
												'<input type="text" placeholder="" name="lote_cantidad_modificar" class="clear validate input_search lote_cantidad_modificar" id="lote_cantidad_modificar" data-error=".error_lote_cantidad_modificar" value="'+item.cantidad_disponible+'">'+
												'<div class="txt-red error_lote_cantidad_modificar"></div>'+
										'</div>'+
										'<div class="col-lg-3 pt2">'+
											'<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_eliminar_lote" data-toggle="tooltip" data-placement="top" title="Eliminar el lote: '+item.lote+'" data-id_lote_reg="'+item.id_registro+'">'+
												'<i class="fa fa-trash fa-2x"></i>'+
											'</a>'+
										'</div>'+
									'</div>'+
									'</div>';
		                    
		                });
		                $("#div_update_lotes_medicamento").html(tabla2);
		                $('[data-toggle="tooltip"]').tooltip();
		                $(".lote_fecha_modificar").datepicker();
		                $(".lote_fecha_modificar").on('changeDate',function(event)
				        { 
				          $(this).datepicker('hide');

				        });
				        $(".lote_fecha_modificar").click(function(event)
				        { 
				          var popup=$(this).offset();
				          var popupTop=315;
				          ////console.log(popupTop);
				          $('div.datepicker.dropdown-menu').css(
				          {
				            
				            'top':popupTop,
				            'position':'absolute'
				          });

				          
				        });
			    		
		            });
	          	//get info producto
	          $.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,nombre_busqueda:nombre_busqueda,action:"get_info_producto"},function(res)
		            {
		                res=JSON.parse(res);
		                var nombre_producto='';
		                var codigo_barras='';
		                var uso='';
		                var marca='';
		                var precio_publico='';
		                var precio_mayoreo='';
		                var categoria='';
		                var formula='';
		                var docis='';
		                var cat_medicamento='';
		                ////console.log(res);
		                $.each(res,function(i, item)
		                {
		                    nombre_producto=''+item.nombre+'';
		                    codigo_barras=''+item.codigo_barras+'';
		                    uso=''+item.uso+'';
		                    precio_mayoreo=''+item.precio_mayoreo+'';
		                    precio_publico=''+item.precio_publico+'';
		                    marca=''+item.marca+'';
		                    categoria=''+item.categoria+'';
		                    
		                });
		                $("#select_lotes").val("seleccione");
		                $("#select_modificar_categoria").val(categoria)
		                $("#select_modificar_marca").val(marca)
		                $("#nombre_modifica_producto").val(nombre_producto);
			    		  $("#codigo_barras_modifica_producto").val(codigo_barras);
			    		  $("#uso_modifica_producto").val(uso);
			    		  $("#precio_mayoreo_modifica_producto").val(precio_mayoreo);
			    		  $("#precio_publico_modifica_producto").val(precio_publico);
			    		  
						  ////console.log("ver informacion producto ...");
						  $("#div_formula_modifica_producto").hide();
						  $("#div_dosis_modifica_producto").hide();
						  $("#div_tabla_productos").hide();
				          $("#div_modificar_categoria").hide();
				          $("#div_agregar_categoria").hide();
				          $("#div_select_modificar_tipo_pedicamento").hide();
				          $("#div_informacion_productos").hide();
				          $("#div_informacion_medicamentos").hide();
				          $("#div_tabla_editar_producto").show();
		            });
	          	
          }

         
    	});
    	//
    	
		$("#form_lote_uno").validate({
	            ignore:[],
	            rules:
	            {
	              lote_numero_uno:"required",
	              lote_fecha_uno: "required",
	              lote_cantidad_uno: "required"
	            },
	            messages:
	            {
	              lote_numero_uno:"El campo numero de lote no puede estar vacio",
	              lote_fecha_uno: "Seleccione una fecha para este lote",
	              lote_cantidad_uno: "El campo cantidad de lote no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_usuario=$("#id_usuario_session").val();
              		var lote_numero=$("#lote_numero_uno").val();
					var lote_fecha=$("#lote_fecha_uno").val();
					var lote_cantidad=$("#lote_cantidad_uno").val();
					var id_producto=$("#codigo_barras_modifica_producto").val();
					var id_produ=$("#id_producto_modifica").val();
					//console.log("enviando lote..."+id_producto+"<-->"+id_produ);
					$.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,lote_numero:lote_numero,lote_fecha:lote_fecha,lote_cantidad:lote_cantidad,id_producto:id_producto,id_produ:id_produ,action:"set_lote_producto"},function(request)
						{
							$("#content_request").html(request);

						});
					
					$("#div_modificar_categoria").hide();
			        $("#div_agregar_categoria").hide();
			        $("#div_informacion_productos").hide();
			        $("#div_tabla_editar_producto").hide();
			        $("#div_tabla_productos").show();
						
	            }
	    });
	    //guardar lote dos
		$("#form_lote_dos").validate({
	            ignore:[],
	            rules:
	            {
	              lote_numero_dos:"required",
	              lote_fecha_dos: "required",
	              lote_cantidad_dos: "required"
	            },
	            messages:
	            {
	              lote_numero_dos:"El campo numero de lote no puede estar vacio",
	              lote_fecha_dos: "Seleccione una fecha para este lote",
	              lote_cantidad_dos: "El campo cantidad de lote no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_usuario=$("#id_usuario_session").val();
              		var lote_numero=$("#lote_numero_dos").val();
					var lote_fecha=$("#lote_fecha_dos").val();
					var lote_cantidad=$("#lote_cantidad_dos").val();
					var id_producto=$("#codigo_barras_modifica_producto").val();
					var id_produ=$("#id_producto_modifica").val();
					//console.log("enviando lote..."+id_producto+"<-->"+id_produ);
					$.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,lote_numero:lote_numero,lote_fecha:lote_fecha,lote_cantidad:lote_cantidad,id_producto:id_producto,id_produ:id_produ,action:"set_lote_producto"},function(request)
						{
							$("#content_request").html(request);

						});
					$("#div_modificar_categoria").hide();
			        $("#div_agregar_categoria").hide();
			        $("#div_informacion_productos").hide();
			        $("#div_tabla_editar_producto").hide();
			        $("#div_tabla_productos").show();
						
	            }
	          });
		//guardar lote tres
		$("#form_lote_tres").validate({
	            ignore:[],
	            rules:
	            {
	              lote_numero_tres:"required",
	              lote_fecha_tres: "required",
	              lote_cantidad_tres: "required"
	            },
	            messages:
	            {
	              lote_numero_tres:"El campo numero de lote no puede estar vacio",
	              lote_fecha_tres: "Seleccione una fecha para este lote",
	              lote_cantidad_tres: "El campo cantidad de lote no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_usuario=$("#id_usuario_session").val();
              		var lote_numero=$("#lote_numero_tres").val();
					var lote_fecha=$("#lote_fecha_tres").val();
					var lote_cantidad=$("#lote_cantidad_tres").val();
					var id_producto=$("#codigo_barras_modifica_producto").val();
					var id_produ=$("#id_producto_modifica").val();
					//console.log("enviando lote..."+id_producto+"<-->"+id_produ);
					$.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,lote_numero:lote_numero,lote_fecha:lote_fecha,lote_cantidad:lote_cantidad,id_producto:id_producto,id_produ:id_produ,action:"set_lote_producto"},function(request)
						{
							$("#content_request").html(request);

						});
					$("#div_modificar_categoria").hide();
			        $("#div_agregar_categoria").hide();
			        $("#div_informacion_productos").hide();
			        $("#div_tabla_editar_producto").hide();
			        $("#div_tabla_productos").show();
						
	            }
	          });
		//guardar lote cuatro
		$("#form_lote_cuatro").validate({
	            ignore:[],
	            rules:
	            {
	              lote_numero_cuatro:"required",
	              lote_fecha_cuatro: "required",
	              lote_cantidad_cuatro: "required"
	            },
	            messages:
	            {
	              lote_numero_cuatro:"El campo numero de lote no puede estar vacio",
	              lote_fecha_cuatro: "Seleccione una fecha para este lote",
	              lote_cantidad_cuatro: "El campo cantidad de lote no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_usuario=$("#id_usuario_session").val();
              		var lote_numero=$("#lote_numero_cuatro").val();
					var lote_fecha=$("#lote_fecha_cuatro").val();
					var lote_cantidad=$("#lote_cantidad_cuatro").val();
					var id_producto=$("#codigo_barras_modifica_producto").val();
					var id_produ=$("#id_producto_modifica").val();
					//console.log("enviando lote..."+id_producto+"<-->"+id_produ);
					$.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,lote_numero:lote_numero,lote_fecha:lote_fecha,lote_cantidad:lote_cantidad,id_producto:id_producto,id_produ:id_produ,action:"set_lote_producto"},function(request)
						{
							$("#content_request").html(request);

						});
					$("#div_modificar_categoria").hide();
			        $("#div_agregar_categoria").hide();
			        $("#div_informacion_productos").hide();
			        $("#div_tabla_editar_producto").hide();
			        $("#div_tabla_productos").show();
						
	            }
	          });
		//guardar lote cinco
		$("#form_lote_cinco").validate({
	            ignore:[],
	            rules:
	            {
	              lote_numero_cinco:"required",
	              lote_fecha_cinco: "required",
	              lote_cantidad_cinco: "required"
	            },
	            messages:
	            {
	              lote_numero_cinco:"El campo numero de lote no puede estar vacio",
	              lote_fecha_cinco: "Seleccione una fecha para este lote",
	              lote_cantidad_cinco: "El campo cantidad de lote no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_usuario=$("#id_usuario_session").val();
              		var lote_numero=$("#lote_numero_cinco").val();
					var lote_fecha=$("#lote_fecha_cinco").val();
					var lote_cantidad=$("#lote_cantidad_cinco").val();
					var id_producto=$("#codigo_barras_modifica_producto").val();
					var id_produ=$("#id_producto_modifica").val();
					//console.log("enviando lote..."+id_producto+"<-->"+id_produ);
					$.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,lote_numero:lote_numero,lote_fecha:lote_fecha,lote_cantidad:lote_cantidad,id_producto:id_producto,id_produ:id_produ,action:"set_lote_producto"},function(request)
						{
							$("#content_request").html(request);

						});
			        $("#div_modificar_categoria").hide();
			        $("#div_agregar_categoria").hide();
			        $("#div_informacion_productos").hide();
			        $("#div_tabla_editar_producto").hide();
			        $("#div_tabla_productos").show();
						
	            }
	          });
		
    	//btn_actualizar productos busqueda
		$("#tabla_productos_busqueda").on("click","a#btn_update_producto",function()     
        {       
          var id_producto=$(this).data("id");       
          $("#nombre_modifica").val(id_producto);
          //console.log('modifica funciona id --->'+id_producto);
          $("#div_tabla_productos").hide();
          $("#div_modificar_categoria").hide();
          $("#div_agregar_categoria").hide();
          $("#div_informacion_productos").hide();
          $("#div_tabla_editar_producto").show();
          

    	});
    	//btn cancelar edicion
    	$("#btn_cancelar_edicion").click(function()
    	{
    	  $("#div_tabla_productos").show();
          $("#div_modificar_categoria").hide();
          $("#div_agregar_categoria").hide();
          $("#div_tabla_editar_producto").hide();
          $("#div_informacion_productos").hide();
          $("#notificaciones_modificar_productos").html("notas");
    	});
    	//btn ver producto
    	$("#tabla_productos").on("click","a#btn_ver_producto",function()
    	{
    		  var id_producto=$(this).data("id");
    		  var nombre_busqueda=$(this).data("nombre");
    		  var cat=$(this).data("categoria");
    		  //console.log("categoria---> "+cat);
    		  if(cat=="medicamentos")
    		  {
    		  		$.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,nombre_busqueda:nombre_busqueda,action:"get_info_medicamento"},function(res)
		            {
		                res=JSON.parse(res);
		                var nombre_producto='';
		                var codigo_barras='';
		                var uso='';
		                var marca='';
		                var precio_publico='';
		                var precio_mayoreo='';
		                var categoria='';
		                var formula='';
		                var docis='';
		                var cat_medicamento='';
		                ////console.log(res);
		                $.each(res,function(i, item)
		                {
		                    nombre_producto=''+item.nombre+'';
		                    codigo_barras=''+item.codigo_barras+'';
		                    uso=''+item.uso+'';
		                    precio_mayoreo=''+item.precio_mayoreo+'';
		                    precio_publico=''+item.precio_publico+'';
		                    marca=''+item.marca+'';
		                    categoria=''+item.categoria+'';
		                    formula=''+item.formula+'';
		                    docis=''+item.docis+'';
		                    cat_medicamento=''+item.cat_medicamento+'';
		                });
		                
		                $("#ver_medicamento_nombre").val(nombre_producto);
			    		  $("#ver_medicamento_codigo_barras").val(codigo_barras);
			    		  $("#ver_medicamento_precio_mayoreo").val(precio_mayoreo);
			    		  $("#ver_medicamento_precio_publico").val(precio_publico);
			    		  $("#ver_medicamento_categoria").val(categoria);
			    		  $("#ver_medicamento_uso").val(uso);
			    		  $("#ver_medicamento_marca").val(marca);
			    		  $("#ver_medicamento_formula").val(formula);
			    		  $("#ver_medicamento_docis").val(docis);
			    		  $("#ver_medicamento_categoria_medicamentos").val(cat_medicamento);

						  ////console.log("ver informacion producto ...");
						  $("#div_tabla_productos").hide();
				          $("#div_modificar_categoria").hide();
				          $("#div_agregar_categoria").hide();
				          $("#div_tabla_editar_producto").hide();
				          $("#div_informacion_productos").hide();
				          $("#div_informacion_medicamentos").show();
		            });
		            //
		            //get cantidad existente
	    		  $.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,action:"get_info_producto_cantidad_existente"},function(res)
		            {
		                res=JSON.parse(res);
		                var summ='';
		                
		                $.each(res,function(i, item)
		                {
		                    summ=''+item.suma_disponible+'';
		                    
		                });
		                $("#ver_medicamento_cantidad_existente").val(summ);
			    		
		            });
	    		  //get lotes y fechas de caducidad
	    		  $.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,action:"get_info_producto_lotes"},function(res)
		            {
		                res=JSON.parse(res);
		                var summ='';
		                var tabla='<table>'+
			                    		'<thead>'+
			                    			'<tr>'+
			                    				'<th class="text-center" style="font-size: 1.4rem; color:pink;">Lote </th>'+
			                    				'<th class="text-center" style="font-size: 1.4rem; color:pink;">Fecha de Caducidad</th>'+
			                    				'<th class="text-center" style="font-size: 1.4rem; color:pink;">Cantidad Disponible</th>'+
			                    			'<tr>'+
			                    		'</thead><tbody>';
		                $.each(res,function(i, item)
		                {
		                    summ=''+item.lote+'';
		                    tabla+='<tr>'+
		                    			'<td class="text-center">'+item.lote+'</td>'+
		                    			'<td class="text-center">'+item.fecha_caducidad+'</td>'+
		                    			'<td class="text-center">'+item.cantidad_disponible+'</td>'+

			                    	'</tr>';
		                    
		                });
		                tabla+='</tbody>'+'</table>';
		                $("#div_lotes_medicamento").html(tabla);
			    		
		            });
    		  }
    		  else
    		  {
	    		  $.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,nombre_busqueda:nombre_busqueda,action:"get_info_producto"},function(res)
		            {
		                res=JSON.parse(res);
		                var nombre_producto='';
		                var codigo_barras='';
		                var uso='';
		                var marca='';
		                var precio_publico='';
		                var precio_mayoreo='';
		                var categoria='';
		                $.each(res,function(i, item)
		                {
		                    nombre_producto=''+item.nombre+'';
		                    codigo_barras=''+item.codigo_barras+'';
		                    uso=''+item.uso+'';
		                    precio_mayoreo=''+item.precio_mayoreo+'';
		                    precio_publico=''+item.precio_publico+'';
		                    marca=''+item.marca+'';
		                    categoria=''+item.categoria+'';
		                });
		                
		                $("#ver_producto_nombre").val(nombre_producto);
			    		  $("#ver_producto_codigo_barras").val(codigo_barras);
			    		  $("#ver_producto_precio_mayoreo").val(precio_mayoreo);
			    		  $("#ver_producto_precio_publico").val(precio_publico);
			    		  $("#ver_producto_categoria").val(categoria);
			    		  $("#ver_producto_uso").val(uso);

			    		  $("#ver_producto_marca").val(marca);
						  $("#div_tabla_productos").hide();
				          $("#div_modificar_categoria").hide();
				          $("#div_agregar_categoria").hide();
				          $("#div_tabla_editar_producto").hide();
				          $("#div_informacion_medicamentos").hide();
				          $("#div_informacion_productos").show();
		            });
	    		  //get cantidad existente
	    		  $.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,action:"get_info_producto_cantidad_existente"},function(res)
		            {
		                res=JSON.parse(res);
		                var summ='';
		                
		                $.each(res,function(i, item)
		                {
		                    summ=''+item.suma_disponible+'';
		                    
		                });
		                $("#ver_producto_cantidad_existente").val(summ);
			    		
		            });
	    		  //get lotes y fechas de caducidad
	    		  $.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,action:"get_info_producto_lotes"},function(res)
		            {
		                res=JSON.parse(res);
		                var summ='';
		                var tabla='<table>'+
			                    		'<thead>'+
			                    			'<tr>'+
			                    				'<th class="text-center" style="font-size: 1.4rem; color:pink;">Lote </th>'+
			                    				'<th class="text-center" style="font-size: 1.4rem; color:pink;">Fecha de Caducidad</th>'+
			                    				'<th class="text-center" style="font-size: 1.4rem; color:pink;">Cantidad Disponible</th>'+
			                    			'<tr>'+
			                    		'</thead><tbody>';
		                $.each(res,function(i, item)
		                {
		                    summ=''+item.lote+'';
		                    tabla+='<tr>'+
		                    			'<td class="text-center">'+item.lote+'</td>'+
		                    			'<td class="text-center">'+item.fecha_caducidad+'</td>'+
		                    			'<td class="text-center">'+item.cantidad_disponible+'</td>'+

			                    	'</tr>';
		                    
		                });
		                tabla+='</tbody>'+'</table>';
		                $("#div_lotes_producto").html(tabla);
			    		
		            });
	    		  //
	    		}
			////////////    		  

    	});
    	
    	//volver de ver productos
    	$("#ver_producto_btn_volver").click(function()
		{
			//console.log("volver de ver productos");
			$("#div_tabla_productos").show();
	          $("#div_modificar_categoria").hide();
	          $("#div_agregar_categoria").hide();
	          $("#div_tabla_editar_producto").hide();
	          $("#div_informacion_productos").hide();
	          $("#div_informacion_medicamentos").hide();
		});
		//volver de ver medicamentos
    	$("#ver_medicamento_btn_volver").click(function()
		{
			//console.log("volver de ver productos");
			$("#div_tabla_productos").show();
	          $("#div_modificar_categoria").hide();
	          $("#div_agregar_categoria").hide();
	          $("#div_tabla_editar_producto").hide();
	          $("#div_informacion_productos").hide();
	          $("#div_informacion_medicamentos").hide();
		});
		//btn ver producto de busqueda
    	$("#tabla_productos_busqueda").on("click","a#btn_ver_producto",function()
    	{
    		  var id_producto=$(this).data("id");
    		  var nombre=$(this).data("nombre");
    		  var precio_mayoreo=$(this).data("precio_mayoreo");
    		  var precio_publico=$(this).data("precio_publico");
    		  var categoria=$(this).data("categoria");
    		  var codigo_barras=$(this).data("codigo_barras");
    		  $("#ver_producto_nombre").val(nombre);
    		  $("#ver_producto_codigo_barras").val(codigo_barras);
    		  $("#ver_producto_precio_mayoreo").val(precio_mayoreo);
    		  $("#ver_producto_precio_publico").val(precio_publico);
    		  $("#ver_producto_categoria").val(categoria);

			  //console.log("ver informacion producto ...");
			  $("#div_tabla_productos").hide();
	          $("#div_modificar_categoria").hide();
	          $("#div_agregar_categoria").hide();
	          $("#div_tabla_editar_producto").hide();
	          $("#div_informacion_productos").show();

    	});
    	//btn eliminar marca
    	$("#cards-marcas").on("click","a#btn_eliminar_marca",function()
    	{
    		var id_marca=$(this).data("id_marca");
    		$("#id_marca_eliminar").val(id_marca);
    		$("#modal_eliminar_marca").modal("show");
    		//console.log("id marca= "+id_marca);

    	});
    	$("#btn_continuar_eliminar_marca").click(function()
    	{
    		var id_marca=$("#id_marca_eliminar").val();
    		//console.log("eliminando marca id= "+id_marca);
    		$("#modal_eliminar_marca").modal("hide");
    		$.post("../../../core/controllers/controller_admon.php",{id_marca:id_marca,action:"eliminar_marca"},function(request)
				{
					$("#content_request").html(request);

				});
    		get_all_marcas();
			get_all_categorias_for_select_agregar_marcas();
    		$("#div_tabla_productos").show();
	        $("#div_modificar_categoria").hide();
	        $("#div_agregar_categoria").hide();
	        $("#div_tabla_editar_producto").hide();
	        $("#div_informacion_productos").hide();
	        $("#div_form_registro_productos").hide();
	        $("#div_agregar_marca").hide();
	        $("#div_modificar_marca").hide()

    	});
    	//btn eliminar categoria
    	$("#cards-categorias").on("click","a#btn_eliminar_categoria",function()
    	{
    		var id_categoria=$(this).data("id_categoria");
    		$("#id_categoria_eliminar").val(id_categoria);
    		$("#modal_eliminar_categoria").modal("show");
    		//console.log("id categoria= "+id_categoria);

    	});
    	$("#btn_continuar_eliminar_categoria").click(function()
    	{
    		var id_categoria=$("#id_categoria_eliminar").val();
    		//console.log("eliminando categoria id= "+id_categoria);
    		$("#modal_eliminar_categoria").modal("hide");
    		$.post("../../../core/controllers/controller_admon.php",{id_categoria:id_categoria,action:"eliminar_categoria"},function(request)
				{
					$("#content_request").html(request);

				});
    		get_all_categorias_productos();
    		get_all_categorias_for_select_agregar();
			get_all_categorias_for_select_agregar_marcas();
			
    		$("#div_tabla_productos").show();
	        $("#div_modificar_categoria").hide();
	        $("#div_agregar_categoria").hide();
	        $("#div_tabla_editar_producto").hide();
	        $("#div_informacion_productos").hide();
	        $("#div_form_registro_productos").hide();
	        $("#div_agregar_marca").hide();
	        $("#div_modificar_marca").hide()

    	});
    	//btn cards categorias editar
    	$(".cards-categorias").on("click","a#btn_cards_categorias_editar",function()
    	{
    		
    		var id_categoria=$(this).data("id");
    		var titulo_categoria=$(this).data("titulo");
    		var descripcion_categoria=$(this).data("descripcion");
    		$("#modificar_id_categoria").val(id_categoria);
    		$("#titulo_modificar_categoria").val(titulo_categoria);
    		$("#descripcion_modificar_categoria").val(descripcion_categoria);
    		$("#div_modificar_categoria").show();
			$("#div_tabla_editar_producto").hide();
			$("#div_tabla_productos").hide();
			$("#div_agregar_categoria").hide();
			$("#div_agregar_marca").hide();
			$("#div_modificar_marca").hide();
    		//console.log("editando categoria..."+id_categoria);
    	});
    	// btn cancelar editar categoria
    	$("#btn_cancelar_modificar_categoria").click(function()
    	{
    		
    		$("#div_modificar_categoria").hide();
			$("#div_tabla_editar_producto").hide();
			$("#div_tabla_productos").show();
			$("#div_agregar_categoria").hide();
			$("#div_agregar_marca").hide();
			$("#div_modificar_marca").hide();
    		//console.log("cancelar editar categoria...");
    	})
    	//btn editar marca
    	$(".cards-marcas").on("click","a#btn_cards_marcas_editar",function()
    	{
    		
    		var id_marca=$(this).data("id");
    		var titulo_marca=$(this).data("titulo");
    		var descripcion_marca=$(this).data("descripcion");
    		$("#modificar_marca_titulo").val(titulo_marca);
    		$("#modificar_marca_descripcion").val(descripcion_marca);
    		$("#modificar_id_marca").val(id_marca);
    		$("#div_modificar_categoria").hide();
			$("#div_tabla_editar_producto").hide();
			$("#div_tabla_productos").hide();
			$("#div_agregar_categoria").hide();
			$("#div_agregar_marca").hide();
			$("#div_modificar_marca").show();
    		//console.log("editando categoria..."+id_marca);
    	});
    	//btn cancelar editar marca
    	$("#btn_cancelar_modificar_marca").click(function()
    	{
    		
    		$("#div_modificar_categoria").hide();
			$("#div_tabla_editar_producto").hide();
			$("#div_tabla_productos").show();
			$("#div_agregar_categoria").hide();
			$("#div_agregar_marca").hide();
			$("#div_modificar_marca").hide();
    		//console.log("cancelar editar categoria...");
    	})
    	//opcion buscar producto
    	$("#opt_cards_buscar_producto").click(function()
    	{
    		//console.log("buscar producto...");
    		
    		$("#cards-categorias").hide();
    		$("#cards-marcas").hide();
    		$("#div_form_buscar_producto").show();
    	});
    	//btn cancelar busqueda de producto
    	$("#btn_cancelar_buscar_producto").click(function()
    	{
    		
    		$("#cards-categorias").show();
    		$("#cards-marcas").hide();
    		$("#div_form_buscar_producto").hide();
    		//console.log("cancelar busqueda producto...");
    	});
    	//mostrar medicamentos
    	$("#opt_cards_medicamentos").click(function()
    	{
    		$("#cards-categorias").hide();
    		$("#cards-marcas").hide();
    		$("#cards-medicamentos").show();
    	});
    	
    	//mostrar categorias
    	$("#opt_cards_categorias").click(function()
    	{
    		$("#cards-categorias").show();
    		$("#cards-marcas").hide();
    		$("#cards-medicamentos").hide();

    	})
    	//mostrar marcas
    	$("#opt_cards_marcas").click(function()
    	{
    		$("#cards-categorias").hide();
    		$("#cards-marcas").show();
    		$("#cards-medicamentos").hide();
    	})
		//get categorias
		
		//
		///update categorias
		$("#btn_continuar_confirmar_update_categoria").click(function()
		{
			$("#form_modificar_categoria").submit();
			$("#modal_confirmar_update_categoria").modal("hide");
			
		})
		$("#btn_continuar_modificar_categoria").click(function()
		{
			$("#modal_confirmar_update_categoria").modal("show");
		});
		$("#form_modificar_categoria").validate({
	            ignore:[],
	            rules:
	            {
	              titulo_modificar_categoria:"required",
	              descripcion_modificar_categoria: "required"
	            },
	            messages:
	            {
	              titulo_modificar_categoria:"El campo titulo no puede estar vacio",
	              descripcion_modificar_categoria:"El campo descripcion no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_categoria=$("#modificar_id_categoria").val();
              		var titulo_categoria=$("#titulo_modificar_categoria").val();
					var descripcion_categoria=$("#descripcion_modificar_categoria").val();
					//console.log("validando categoria..."+titulo_categoria+"<--->"+descripcion_categoria);
					$.post("../../../core/controllers/controller_admon.php",{id_categoria:id_categoria,titulo_categoria:titulo_categoria,descripcion_categoria:descripcion_categoria,action:"update_categoria"},function(request)
						{
							$("#content_request").html(request);

						});
					get_all_categorias_productos();
					get_all_categorias_for_select_agregar_marcas();
					$("#div_modificar_categoria").hide();
					$("#div_tabla_editar_producto").hide();
					$("#div_tabla_productos").show();
					$("#div_agregar_categoria").hide();
					$("#div_agregar_marca").hide();
					$("#div_modificar_marca").hide();
	            }
	          });
		///agregar categorias
		$("#btn_continuar_confirmar_crear_categoria").click(function()
		{
			$("#form_agregar_categoria").submit();
			$("#modal_confirmar_crear_categoria").modal("hide");
			
		})
		$("#btn_continuar_agregar_categoria").click(function()
		{
			$("#modal_confirmar_crear_categoria").modal("show");
		});
		$("#form_agregar_categoria").validate({
	            ignore:[],
	            rules:
	            {
	              titulo_agregar_categoria:"required",
	              descripcion_agregar_categoria: "required"
	            },
	            messages:
	            {
	              titulo_agregar_categoria:"El campo titulo no puede estar vacio",
	              descripcion_agregar_categoria:"El campo descripcion no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
              		var titulo_categoria=$("#titulo_agregar_categoria").val();
					var descripcion_categoria=$("#descripcion_agregar_categoria").val();
					//console.log("validando categoria..."+titulo_categoria+"<--->"+descripcion_categoria);
					$.post("../../../core/controllers/controller_admon.php",{titulo_categoria:titulo_categoria,descripcion_categoria:descripcion_categoria,action:"create_categoria"},function(request)
						{
							$("#content_request").html(request);

						});
					get_all_categorias_productos();
					get_all_categorias_for_select_agregar_marcas();
					$("#div_modificar_categoria").hide();
					$("#div_tabla_editar_producto").hide();
					$("#div_tabla_productos").show();
					$("#div_agregar_categoria").hide();
					$("#div_agregar_marca").hide();
					$("#div_modificar_marca").hide();
	            }
	          });

		///modificar marcas
		$("#btn_continuar_confirmar_update_marca").click(function()
		{
			$("#form_modificar_marca").submit();
			$("#modal_confirmar_update_marca").modal("hide");
			
		})
		$("#btn_modificar_marca").click(function()
		{
			$("#modal_confirmar_update_marca").modal("show");
		});
		$("#form_modificar_marca").validate({
	            ignore:[],
	            rules:
	            {
	              modificar_marca_titulo:"required",
	              modificar_marca_descripcion: "required"
	            },
	            messages:
	            {
	              modificar_marca_titulo:"El campo titulo no puede estar vacio",
	              modificar_marca_descripcion:"El campo descripcion no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_marca=$("#modificar_id_marca").val();
              		var titulo_marca=$("#modificar_marca_titulo").val();
					var descripcion_marca=$("#modificar_marca_descripcion").val();
					//console.log("validando marca..."+titulo_marca+"<--->"+descripcion_marca);
					$.post("../../../core/controllers/controller_admon.php",{id_marca:id_marca,titulo_marca:titulo_marca,descripcion_marca:descripcion_marca,action:"update_marca"},function(request)
						{
							$("#content_request").html(request);

						});
					get_all_marcas();
					get_all_categorias_for_select_agregar_marcas();
					$("#div_modificar_categoria").hide();
					$("#div_tabla_editar_producto").hide();
					$("#div_tabla_productos").show();
					$("#div_agregar_categoria").hide();
					$("#div_agregar_marca").hide();
					$("#div_modificar_marca").hide();
	            }
	          });
		//marcas ############################################################3
		$("#btn_continuar_confirmar_crear_marca").click(function()
		{
			$("#modal_confirmar_crear_marca").modal("hide");
			$("#form_agregar_marca").submit();
			
			
		})
		$("#btn_agregar_marca").click(function()
		{
			$("#modal_confirmar_crear_marca").modal("show");
		});
		$("#form_agregar_marca").validate({
	            ignore:[],
	            rules:
	            {
	              agregar_marca_titulo:"required",
	              agregar_marca_descripcion: "required"
	            },
	            messages:
	            {
	              agregar_marca_titulo:"El campo titulo no puede estar vacio",
	              agregar_marca_descripcion:"El campo descripcion no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
              		var titulo_marca=$("#agregar_marca_titulo").val();
					var descripcion_marca=$("#agregar_marca_descripcion").val();
					//console.log("validando marca..."+titulo_marca+"<--->"+descripcion_marca);
					$.post("../../../core/controllers/controller_admon.php",{titulo_marca:titulo_marca,descripcion_marca:descripcion_marca,action:"create_marca"},function(request)
						{
							$("#content_request").html(request);

						});
					$("#div_modificar_categoria").hide();
					$("#div_tabla_editar_producto").hide();
					$("#div_tabla_productos").show();
					$("#div_agregar_categoria").hide();
					$("#div_agregar_marca").hide();
					$("#div_modificar_marca").hide();
					clear_inputs();
					//refrescar cards de marcas
					get_all_marcas();
					//select tipo de medicamento en registro en registro
					get_all_categorias_for_select_agregar_tipo_medicamentos();
					//select marca en registro
					get_all_categorias_for_select_agregar_marcas();
					//select categoria en registro
					get_all_categorias_for_select_agregar();
	            }
	          });
		
        //seleccionar categoria para agregar productos
        $("#select_categoria_registro_productos").bind('change',function()
        {
            var opt_categoria_agregar=$("#select_categoria_registro_productos").val();
            if(opt_categoria_agregar=="medicamentos")
            {
                $("#div_formula_registro_productos").show();
                $("#div_dosis_registro_productos").show();
                $("#div_select_categoria_medicamentos_registro_productos").show();
            }
            else
            {
                $("#div_formula_registro_productos").hide();
                $("#div_dosis_registro_productos").hide();
                $("#div_select_categoria_medicamentos_registro_productos").hide();
            }
        });
        //seleccionar numero de lotes
        $("#select_lotes").bind('change',function()
        {
            var opt_categoria_agregar=$("#select_lotes").val();
            var campos='';

            for (var i=1; i<=opt_categoria_agregar; i++)
            {
            	if(i==1)
            	{
            		$("#div_campos_lotes_dos").hide();
            		$("#div_campos_lotes_tres").hide();
            		$("#div_campos_lotes_cuatro").hide();
            		$("#div_campos_lotes_cinco").hide();
            		$("#div_campos_lotes_uno").show();
            	}
            	if(i==2)
            	{
            		$("#div_campos_lotes_dos").show();
            		$("#div_campos_lotes_tres").hide();
            		$("#div_campos_lotes_cuatro").hide();
            		$("#div_campos_lotes_cinco").hide();
            		$("#div_campos_lotes_uno").show();
            	}
            	if(i==3)
            	{
            		$("#div_campos_lotes_dos").show();
            		$("#div_campos_lotes_tres").show();
            		$("#div_campos_lotes_cuatro").hide();
            		$("#div_campos_lotes_cinco").hide();
            		$("#div_campos_lotes_uno").show();
            	}
            	if(i==4)
            	{
            		$("#div_campos_lotes_dos").show();
            		$("#div_campos_lotes_tres").show();
            		$("#div_campos_lotes_cuatro").show();
            		$("#div_campos_lotes_cinco").hide();
            		$("#div_campos_lotes_uno").show();
            	}
            	if(i==5)
            	{
            		$("#div_campos_lotes_dos").show();
            		$("#div_campos_lotes_tres").show();
            		$("#div_campos_lotes_cuatro").show();
            		$("#div_campos_lotes_cinco").show();
            		$("#div_campos_lotes_uno").show();
            	}
            	
            	
            }

            
        });
        //select de lotes de registro
        $("#select_lotes_registro").bind('change',function()
        {
            var opt_categoria_agregar=$("#select_lotes_registro").val();
            var campos='';

            for (var i=1; i<=opt_categoria_agregar; i++)
            {
            	if(i==1)
            	{
            		$("#div_campos_lotes_dos_registro").hide();
            		$("#div_campos_lotes_tres_registro").hide();
            		$("#div_campos_lotes_cuatro_registro").hide();
            		$("#div_campos_lotes_cinco_registro").hide();
            		$("#div_campos_lotes_uno_registro").show();
            	}
            	if(i==2)
            	{
            		$("#div_campos_lotes_dos_registro").show();
            		$("#div_campos_lotes_tres_registro").hide();
            		$("#div_campos_lotes_cuatro_registro").hide();
            		$("#div_campos_lotes_cinco_registro").hide();
            		$("#div_campos_lotes_uno_registro").show();
            	}
            	if(i==3)
            	{
            		$("#div_campos_lotes_dos_registro").show();
            		$("#div_campos_lotes_tres_registro").show();
            		$("#div_campos_lotes_cuatro_registro").hide();
            		$("#div_campos_lotes_cinco_registro").hide();
            		$("#div_campos_lotes_uno_registro").show();
            	}
            	if(i==4)
            	{
            		$("#div_campos_lotes_dos_registro").show();
            		$("#div_campos_lotes_tres_registro").show();
            		$("#div_campos_lotes_cuatro_registro").show();
            		$("#div_campos_lotes_cinco_registro").hide();
            		$("#div_campos_lotes_uno_registro").show();
            	}
            	if(i==5)
            	{
            		$("#div_campos_lotes_dos_registro").show();
            		$("#div_campos_lotes_tres_registro").show();
            		$("#div_campos_lotes_cuatro_registro").show();
            		$("#div_campos_lotes_cinco_registro").show();
            		$("#div_campos_lotes_uno_registro").show();
            	}
            	
            	
            }

            
        });
        
        //validar registro de productos
        $("#btn_modal_continuar_agregar_producto").click(function()
	    {
	      
	      	var num1=$("#lote_numero_uno_registro").val();
			var fech1=$("#lote_fecha_uno_registro").val();
			var cant1=$("#lote_cantidad_uno_registro").val();
			var num2=$("#lote_numero_dos_registro").val();
			var fech2=$("#lote_fecha_dos_registro").val();
			var cant2=$("#lote_cantidad_dos_registro").val();
			var num3=$("#lote_numero_tres_registro").val();
			var fech3=$("#lote_fecha_tres_registro").val();
			var cant3=$("#lote_cantidad_tres_registro").val();
			var num4=$("#lote_numero_cuatro_registro").val();
			var fech4=$("#lote_fecha_cuatro_registro").val();
			var cant4=$("#lote_cantidad_cuatro_registro").val();
			var num5=$("#lote_numero_cinco_registro").val();
			var fech5=$("#lote_fecha_cinco_registro").val();
			var cant5=$("#lote_cantidad_cinco_registro").val();

			$("#form_registro_productos").submit();

			if(num1!="" && fech1!="" && cant1!="")
			{
				$("#form_lote_uno_registro").submit();
			}
			if(num2!="" && fech2!="" && cant2!="")
			{
				$("#form_lote_dos_registro").submit();
			}
			if(num3!="" && fech3!="" && cant3!="")
			{
				$("#form_lote_tres_registro").submit();
			}
			if(num4!="" && fech4!="" && cant4!="")
			{
				$("#form_lote_cuatro_registro").submit();
			}
			if(num5!="" && fech5!="" && cant5!="")
			{
				$("#form_lote_cinco_registro").submit();
			}
	      $("#modal_agregar_productos").modal("hide");
	    })
	    $("#btn_continuar_registro_productos").click(function(event)
	    {
	      $("#modal_agregar_productos").modal("show");
	      
	    });
		$("#form_registro_productos").validate(
		{
	            ignore:[],
	            rules:
	            {
	              nombre_producto_registro_productos:"required",
	              uso_registro_productos: "required",
	              codigo_barras_registro_productos: "required",
	              precio_mayoreo_registro_productos: "required",
	              precio_pub_reg_productos: "required"
	              
	              
	            },
	            messages:
	            {
	              nombre_producto_registro_productos:"El campo nombre del producto no puede estar vacio",
	              uso_registro_productos: "El campo uso no puede estar vacio",
	              codigo_barras_registro_productos: "El campo código de barras no puede estar vacio",
	              precio_mayoreo_registro_productos: "El campo precio por mayoreo no puede estar vacio",
	              precio_pub_reg_productos: "El campo precio publico no puede estar vacio"
	              
	              
	              
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
					var nombre_producto=$("#nombre_producto_registro_productos").val();
	              	var uso_producto=$("#uso_registro_productos").val();
	              	var codigo_barras_producto=$("#codigo_barras_registro_productos").val();
	              	var precio_mayoreo_producto=$("#precio_mayoreo_registro_productos").val();
	              	var precio_publico_producto=$("#precio_pub_reg_productos").val();
	              	var categoria=$("#select_categoria_registro_productos").val();
	              	var marca=$("#select_marca_registro_productos").val();
	              	var formula=$("#formula_reg_productos").val();
	              	var dosis=$("#dosis_reg_productos").val();
	              	var cat_medicamento=$("#select_tipo_medicamento_registro_productos").val();
	            	
	            	if (categoria=="medicamentos") 
	            	{
	            		if(formula=="" || dosis=="" || cat_medicamento=="")
	            		{
	            			
							
							//console.log("error en campo dosis -->");
	            		}
	            		else
	            		{
	            			
	            			////console.log("enviando producto...\nnombre: "+nombre_producto+"\nuso: "+uso_producto+"\ncodigo: "+codigo_barras_producto+"\nprecio_may: "+precio_mayoreo_producto+"\nprecio_pub: "+precio_publico_producto+"\ncategoria: "+categoria+"\nmarca: "+marca+"\nformula: "+formula+"\ndosis: "+dosis+"\ncat_medicamento: "+cat_medicamento);
	            			$.post("../../../core/controllers/controller_admon.php",{nombre_producto:nombre_producto,uso_producto:uso_producto,codigo_barras_producto:codigo_barras_producto,precio_mayoreo_producto:precio_mayoreo_producto,precio_publico_producto:precio_publico_producto,categoria:categoria,marca:marca,action:"create_producto"},function(request)
								{
									$("#content_request").html(request);
									$.post("../../../core/controllers/controller_admon.php",{nombre_producto:nombre_producto,formula:formula,dosis:dosis,cat_medicamento:cat_medicamento,action:"create_medicamento"},function(request)
										{
											$("#content_request").html(request);
											$("#div_tabla_productos").show();
									        $("#div_form_registro_productos").hide();
									        $("#div_tabla_editar_producto").hide();
									        $("#div_informacion_productos").hide();
									        $("#div_form_registro_productos").hide();
									        $("#div_tabla_productos_busqueda").hide();
									        $("#div_informacion_medicamentos").hide();
									        $("#div_campos_lotes_uno_registro").hide();
											$("#div_campos_lotes_dos_registro").hide();
											$("#div_campos_lotes_tres_registro").hide();
											$("#div_campos_lotes_cuatro_registro").hide();
											$("#div_campos_lotes_cinco_registro").hide();
											$("#select_lotes_registro").val("seleccione");
											clear_inputs();
										});
									
								});
							
	            		}
	            	}
	            	else
	            	{
	            		//console.log("enviando registro de productos -->"+ categoria);
	            		$.post("../../../core/controllers/controller_admon.php",{nombre_producto:nombre_producto,uso_producto:uso_producto,codigo_barras_producto:codigo_barras_producto,precio_mayoreo_producto:precio_mayoreo_producto,precio_publico_producto:precio_publico_producto,categoria:categoria,marca:marca,action:"create_producto"},function(request)
							{
								$("#content_request").html(request);
								$("#div_tabla_productos").show();
						        $("#div_form_registro_productos").hide();
						        $("#div_tabla_editar_producto").hide();
						        $("#div_informacion_productos").hide();
						        $("#div_form_registro_productos").hide();
						        $("#div_tabla_productos_busqueda").hide();
						        $("#div_informacion_medicamentos").hide();
						        $("#div_campos_lotes_uno_registro").hide();
								$("#div_campos_lotes_dos_registro").hide();
								$("#div_campos_lotes_tres_registro").hide();
								$("#div_campos_lotes_cuatro_registro").hide();
								$("#div_campos_lotes_cinco_registro").hide();
								$("#select_lotes_registro").val("seleccione");
								clear_inputs();
							});
	            		
	            	}
              		
	            }
	    });
		$("#form_lote_uno_registro").validate({
	            ignore:[],
	            rules:
	            {
	              lote_numero_uno_registro:"required",
	              lote_fecha_uno_registro: "required",
	              lote_cantidad_uno_registro: "required"
	            },
	            messages:
	            {
	              lote_numero_uno_registro:"El campo numero de lote no puede estar vacio",
	              lote_fecha_uno_registro: "Seleccione una fecha para este lote",
	              lote_cantidad_uno_registro: "El campo cantidad de lote no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_usuario=$("#id_usuario_session").val();
              		var lote_numero=$("#lote_numero_uno_registro").val();
					var lote_fecha=$("#lote_fecha_uno_registro").val();
					var lote_cantidad=$("#lote_cantidad_uno_registro").val();
					var id_producto=$("#codigo_barras_registro_productos").val();
					//console.log("enviando lote..."+id_producto+"<-->"+id_produ);
					$.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,lote_numero:lote_numero,lote_fecha:lote_fecha,lote_cantidad:lote_cantidad,id_producto:id_producto,action:"set_lote_producto_registro"},function(request)
						{
							$("#content_request").html(request);

						});
					
					$("#div_modificar_categoria").hide();
			        $("#div_agregar_categoria").hide();
			        $("#div_informacion_productos").hide();
			        $("#div_tabla_editar_producto").hide();
			        $("#div_tabla_productos").show();
						
	            }
	    });
	    //guardar lote dos
		$("#form_lote_dos_registro").validate({
	            ignore:[],
	            rules:
	            {
	              lote_numero_dos_registro:"required",
	              lote_fecha_dos_registro: "required",
	              lote_cantidad_dos_registro: "required"
	            },
	            messages:
	            {
	              lote_numero_dos_registro:"El campo numero de lote no puede estar vacio",
	              lote_fecha_dos_registro: "Seleccione una fecha para este lote",
	              lote_cantidad_dos_registro: "El campo cantidad de lote no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_usuario=$("#id_usuario_session").val();
              		var lote_numero=$("#lote_numero_dos_registro").val();
					var lote_fecha=$("#lote_fecha_dos_registro").val();
					var lote_cantidad=$("#lote_cantidad_dos_registro").val();
					var id_producto=$("#codigo_barras_registro_productos").val();
					//console.log("enviando lote..."+id_producto+"<-->"+id_produ);
					$.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,lote_numero:lote_numero,lote_fecha:lote_fecha,lote_cantidad:lote_cantidad,id_producto:id_producto,action:"set_lote_producto_registro"},function(request)
						{
							$("#content_request").html(request);

						});
					$("#div_modificar_categoria").hide();
			        $("#div_agregar_categoria").hide();
			        $("#div_informacion_productos").hide();
			        $("#div_tabla_editar_producto").hide();
			        $("#div_tabla_productos").show();
						
	            }
	          });
		//guardar lote tres
		$("#form_lote_tres_registro").validate({
	            ignore:[],
	            rules:
	            {
	              lote_numero_tres_registro:"required",
	              lote_fecha_tres_registro: "required",
	              lote_cantidad_tres_registro: "required"
	            },
	            messages:
	            {
	              lote_numero_tres_registro:"El campo numero de lote no puede estar vacio",
	              lote_fecha_tres_registro: "Seleccione una fecha para este lote",
	              lote_cantidad_tres_registro: "El campo cantidad de lote no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_usuario=$("#id_usuario_session").val();
              		var lote_numero=$("#lote_numero_tres_registro").val();
					var lote_fecha=$("#lote_fecha_tres_registro").val();
					var lote_cantidad=$("#lote_cantidad_tres_registro").val();
					var id_producto=$("#codigo_barras_registro_productos").val();
					//console.log("enviando lote..."+id_producto+"<-->"+id_produ);
					$.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,lote_numero:lote_numero,lote_fecha:lote_fecha,lote_cantidad:lote_cantidad,id_producto:id_producto,action:"set_lote_producto_registro"},function(request)
						{
							$("#content_request").html(request);

						});
					$("#div_modificar_categoria").hide();
			        $("#div_agregar_categoria").hide();
			        $("#div_informacion_productos").hide();
			        $("#div_tabla_editar_producto").hide();
			        $("#div_tabla_productos").show();
						
	            }
	          });
		//guardar lote cuatro
		$("#form_lote_cuatro_registro").validate({
	            ignore:[],
	            rules:
	            {
	              lote_numero_cuatro_registro:"required",
	              lote_fecha_cuatro_registro: "required",
	              lote_cantidad_cuatro_registro: "required"
	            },
	            messages:
	            {
	              lote_numero_cuatro_registro:"El campo numero de lote no puede estar vacio",
	              lote_fecha_cuatro_registro: "Seleccione una fecha para este lote",
	              lote_cantidad_cuatro_registro: "El campo cantidad de lote no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_usuario=$("#id_usuario_session").val();
              		var lote_numero=$("#lote_numero_cuatro_registro").val();
					var lote_fecha=$("#lote_fecha_cuatro_registro").val();
					var lote_cantidad=$("#lote_cantidad_cuatro_registro").val();
					var id_producto=$("#codigo_barras_registro_productos").val();
					//console.log("enviando lote..."+id_producto+"<-->"+id_produ);
					$.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,lote_numero:lote_numero,lote_fecha:lote_fecha,lote_cantidad:lote_cantidad,id_producto:id_producto,action:"set_lote_producto_registro"},function(request)
						{
							$("#content_request").html(request);

						});
					$("#div_modificar_categoria").hide();
			        $("#div_agregar_categoria").hide();
			        $("#div_informacion_productos").hide();
			        $("#div_tabla_editar_producto").hide();
			        $("#div_tabla_productos").show();
						
	            }
	          });
		//guardar lote cinco
		$("#form_lote_cinco_registro").validate({
	            ignore:[],
	            rules:
	            {
	              lote_numero_cinco_registro:"required",
	              lote_fecha_cinco_registro: "required",
	              lote_cantidad_cinco_registro: "required"
	            },
	            messages:
	            {
	              lote_numero_cinco_registro:"El campo numero de lote no puede estar vacio",
	              lote_fecha_cinco_registro: "Seleccione una fecha para este lote",
	              lote_cantidad_cinco_registro: "El campo cantidad de lote no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_usuario=$("#id_usuario_session").val();
              		var lote_numero=$("#lote_numero_cinco_registro").val();
					var lote_fecha=$("#lote_fecha_cinco_registro").val();
					var lote_cantidad=$("#lote_cantidad_cinco_registro").val();
					var id_producto=$("#codigo_barras_registro_productos").val();
					//console.log("enviando lote..."+id_producto+"<-->"+id_produ);
					$.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,lote_numero:lote_numero,lote_fecha:lote_fecha,lote_cantidad:lote_cantidad,id_producto:id_producto,action:"set_lote_producto_registro"},function(request)
						{
							$("#content_request").html(request);

						});
			        $("#div_modificar_categoria").hide();
			        $("#div_agregar_categoria").hide();
			        $("#div_informacion_productos").hide();
			        $("#div_tabla_editar_producto").hide();
			        $("#div_tabla_productos").show();
						
	            }
	          });
	    $("#btn_continuar_modificar_producto").click(function()
	    {
	      $("#modal_modificar_productos").modal("show");
	    }); 
	    $("#btn_modal_continuar_modificar_producto").click(function(event)
	    {
	      $("#modal_modificar_productos").modal("hide");
			var num1=$("#lote_numero_uno").val();
			var fech1=$("#lote_fecha_uno").val();
			var cant1=$("#lote_cantidad_uno").val();
			var num2=$("#lote_numero_dos").val();
			var fech2=$("#lote_fecha_dos").val();
			var cant2=$("#lote_cantidad_dos").val();
			var num3=$("#lote_numero_tres").val();
			var fech3=$("#lote_fecha_tres").val();
			var cant3=$("#lote_cantidad_tres").val();
			var num4=$("#lote_numero_cuatro").val();
			var fech4=$("#lote_fecha_cuatro").val();
			var cant4=$("#lote_cantidad_cuatro").val();
			var num5=$("#lote_numero_cinco").val();
			var fech5=$("#lote_fecha_cinco").val();
			var cant5=$("#lote_cantidad_cinco").val();

			$("#form_modificar_productos").submit();

			if(num1!="" && fech1!="" && cant1!="")
			{
				$("#form_lote_uno").submit();
			}
			if(num2!="" && fech2!="" && cant2!="")
			{
				$("#form_lote_dos").submit();
			}
			if(num3!="" && fech3!="" && cant3!="")
			{
				$("#form_lote_tres").submit();
			}
			if(num4!="" && fech4!="" && cant4!="")
			{
				$("#form_lote_cuatro").submit();
			}
			if(num5!="" && fech5!="" && cant5!="")
			{
				$("#form_lote_cinco").submit();
			}
			update_lotes();
			

		});
		$("#form_modificar_productos").validate(
		{
            ignore:[],
            rules:
            {
              nombre_modifica_producto:"required",
              uso_modifica_producto: "required",
              codigo_barras_modifica_producto: "required",
              precio_mayoreo_modifica_producto: "required",
              precio_publico_modifica_producto: "required"
            },
            messages:
            {
              nombre_modifica_producto:"El campo nombre no puede estar vacio",
              uso_modifica_producto: "El campo uso no puede estar vacio",
              codigo_barras_modifica_producto: "El campo código de barras no puede estar vacio",
              precio_mayoreo_modifica_producto: "El campo precio de mayoreo no puede estar vacio",
              precio_publico_modifica_producto: "El campo precio público no puede estar vacio"
            },
            errorElement:"div",
            errorPlacement:function(error,element)
            {
              var placement=$(element).data("error");
              if(placement)
                $(placement).append(error);
              else
                error.insertAfter(error);
            },
            submitHandler:function(form)
            {
          		var id_producto=$("#id_producto_modifica").val();
				var nombre_producto=$("#nombre_modifica_producto").val();
              	var uso_producto=$("#uso_modifica_producto").val();
              	var codigo_barras_producto=$("#codigo_barras_modifica_producto").val();
              	var precio_mayoreo_producto=$("#precio_mayoreo_modifica_producto").val();
              	var precio_publico_producto=$("#precio_publico_modifica_producto").val();
              	var categoria=$("#select_modificar_categoria").val();
              	var marca=$("#select_modificar_marca").val();
              	var formula=$("#formula_modifica_producto").val();
              	var dosis=$("#dosis_modifica_producto").val();
              	var cat_medicamento=$("#select_modificar_tipo_medicamento").val();
				
				if(categoria=="medicamentos")
				{
					if(formula=="" || dosis=="" || cat_medicamento=="")
					{
						var nota='<div class="alert alert-danger">'+
								    '<div class="container-fluid">'+
									  '<div class="alert-icon">'+
										''+
									  '</div>'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
									  '</button>'+
									  '<b>Alerta: </b>Para un medicamento es necesario rellenar el campo Dosis y el campo Formula, ademas de seleccionar el tipo de medicamento<br>'+
									  	'<i class="fa fa-frown-o"></i>'+
								    '</div>'+
								'</div>';
						$("#notificaciones_modificar_productos").html(nota);
					}
					else
					{
						////console.log("enviando modificaciones...\nid_producto: "+id_producto+"\n"+nombre_producto+"\n"+uso_producto+"\n"+codigo_barras_producto+"\n"+precio_mayoreo_producto+"\n"+precio_publico_producto+"\ncategoria: "+categoria+"\nmarca: "+marca+"\nformula: "+formula+"\ndosis: "+dosis+"\ncat_medicamento"+cat_medicamento);
						$.post("../../../core/controllers/controller_admon.php",{id_producto:id_producto,nombre_producto:nombre_producto,uso_producto:uso_producto,codigo_barras_producto:codigo_barras_producto,precio_mayoreo_producto:precio_mayoreo_producto,precio_publico_producto:precio_publico_producto,categoria:categoria,marca:marca,action:"update_producto"},function(request)
							{
								$("#content_request").html(request);

							});
						$.post("../../../core/controllers/controller_admon.php",{id_producto:id_producto,formula:formula,dosis:dosis,cat_medicamento:cat_medicamento,action:"update_medicamento"},function(request)
							{
								$("#content_request").html(request);

							});
						$("#div_tabla_productos").show();
				        $("#div_form_registro_productos").hide();
				        $("#div_tabla_editar_producto").hide();
				        $("#div_informacion_productos").hide();
				        $("#div_form_registro_productos").hide();
				        $("#div_tabla_productos_busqueda").hide();
				        $("#div_informacion_medicamentos").hide();
				        $("#div_agregar_cat_medicamentos").hide();
							

					}
            	}
            	else
            	{
            		////console.log("enviando modificaciones...\nid_producto: "+id_producto+"\n"+nombre_producto+"\n"+uso_producto+"\n"+codigo_barras_producto+"\n"+precio_mayoreo_producto+"\n"+precio_publico_producto+"\ncategoria: "+categoria+"\nmarca: "+marca);
            		$.post("../../../core/controllers/controller_admon.php",{id_producto:id_producto,nombre_producto:nombre_producto,uso_producto:uso_producto,codigo_barras_producto:codigo_barras_producto,precio_mayoreo_producto:precio_mayoreo_producto,precio_publico_producto:precio_publico_producto,categoria:categoria,marca:marca,action:"update_producto"},function(request)
							{
								$("#content_request").html(request);

							});
            		$("#div_tabla_productos").show();
			        $("#div_form_registro_productos").hide();
			        $("#div_tabla_editar_producto").hide();
			        $("#div_informacion_productos").hide();
			        $("#div_form_registro_productos").hide();
			        $("#div_tabla_productos_busqueda").hide();
			        $("#div_informacion_medicamentos").hide();
			        $("#div_agregar_cat_medicamentos").hide();
            		
            	}
			}
	    });
		//btn abrir modal agregar cat medicamentos
		$("#btn_continuar_modal_cat_medicamentos").click(function()
		{
			$("#modal_agregar_cat_medicamentos").modal("hide");
			$("#form_agregar_cat_medicamentos").submit();
		})
		//btn submit cat medicamentos
		$("#btn_continuar_agregar_cat_medicamentos").click(function()
		{
			$("#modal_agregar_cat_medicamentos").modal("show");	
		});
		//agregar cat medicamentos
		$("#form_agregar_cat_medicamentos").validate({
	            ignore:[],
	            rules:
	            {
	              titulo_agregar_cat_medicamentos:"required",
	              descripcion_agregar_cat_medicamentos: "required"
	            },
	            messages:
	            {
	              titulo_agregar_cat_medicamentos:"El campo titulo no puede estar vacio",
	              descripcion_agregar_cat_medicamentos:"El campo descripcion no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
              		var titulo_categoria=$("#titulo_agregar_cat_medicamentos").val();
					var descripcion_categoria=$("#descripcion_agregar_cat_medicamentos").val();
					//console.log("validando categoria..."+titulo_categoria+"<--->"+descripcion_categoria);
					$.post("../../../core/controllers/controller_admon.php",{titulo_categoria:titulo_categoria,descripcion_categoria:descripcion_categoria,action:"create_cat_medicamentos"},function(request)
						{
							$("#content_request").html(request);

						});
					$("#div_modificar_categoria").hide();
					$("#div_tabla_editar_producto").hide();
					$("#div_tabla_productos").show();
					$("#div_agregar_categoria").hide();
					$("#div_agregar_marca").hide();
					$("#div_modificar_marca").hide();
					$("#div_agregar_cat_medicamentos").hide();
					clear_inputs();
					medicamentos();
					//refrescar selects de registro de productos
					get_all_categorias_for_select_agregar_tipo_medicamentos();
					
	            }
	          });
		//btn agregar cat_medicamentos
		$('#cards-medicamentos').on('click','a#btn_cards_agregar_cat_medicamentos',function()
		{
			//console.log("agregar cat medicamentos");
			$("#div_tabla_productos").hide();
	        $("#div_form_registro_productos").hide();
	        $("#div_tabla_editar_producto").hide();
	        $("#div_informacion_productos").hide();
	        $("#div_form_registro_productos").hide();
	        $("#div_tabla_productos_busqueda").hide();
	        $("#div_informacion_medicamentos").hide();
	        $("#div_agregar_cat_medicamentos").show();
	        $("#div_agregar_marca").hide();
	        $("#div_agregar_categoria").hide();
	        $("#div_modificar_categoria").hide();
	        $("#div_modificar_marca").hide();
		});
		
		$('#btn_cancelar_agregar_cat_medicamentos').click(function()
		{
			//console.log("agregar cat medicamentos");
			$("#div_tabla_productos").show();
	        $("#div_form_registro_productos").hide();
	        $("#div_tabla_editar_producto").hide();
	        $("#div_informacion_productos").hide();
	        $("#div_form_registro_productos").hide();
	        $("#div_tabla_productos_busqueda").hide();
	        $("#div_informacion_medicamentos").hide();
	        $("#div_agregar_cat_medicamentos").hide();
	        $("#div_agregar_marca").hide();
	        $("#div_agregar_categoria").hide();
	        $("#div_modificar_categoria").hide();
	        $("#div_modificar_marca").hide();
	        $("#div_modificar_cat_medicamentos").hide();
		});
		//modificar cat medicamentos
		$('#cards-medicamentos').on('click','a#btn_cards_cat_medicamentos_editar',function()
		{
			var id_categoria=$(this).data("id_categoria");
			var titulo=$(this).data("titulo");
			var descripcion=$(this).data("descripcion");
			$("#id_cat_modificar_medicamentos").val(id_categoria);
			$("#titulo_modificar_cat_medicamentos").val(titulo);
			$("#descripcion_modificar_cat_medicamentos").val(descripcion);
			//console.log("modificar cat medicamentos");
			$("#div_tabla_productos").hide();
	        $("#div_form_registro_productos").hide();
	        $("#div_tabla_editar_producto").hide();
	        $("#div_informacion_productos").hide();
	        $("#div_form_registro_productos").hide();
	        $("#div_tabla_productos_busqueda").hide();
	        $("#div_informacion_medicamentos").hide();
	        $("#div_agregar_cat_medicamentos").hide();
	        $("#div_agregar_marca").hide();
	        $("#div_agregar_categoria").hide();
	        $("#div_modificar_categoria").hide();
	        $("#div_modificar_marca").hide();
	        $("#div_modificar_cat_medicamentos").show();
		});
		$("#btn_cancelar_modificar_cat_medicamentos").click(function()
		{
			//console.log("agregar cat medicamentos");
			$("#div_tabla_productos").show();
	        $("#div_form_registro_productos").hide();
	        $("#div_tabla_editar_producto").hide();
	        $("#div_informacion_productos").hide();
	        $("#div_form_registro_productos").hide();
	        $("#div_tabla_productos_busqueda").hide();
	        $("#div_informacion_medicamentos").hide();
	        $("#div_agregar_cat_medicamentos").hide();
	        $("#div_agregar_marca").hide();
	        $("#div_agregar_categoria").hide();
	        $("#div_modificar_categoria").hide();
	        $("#div_modificar_marca").hide();
	        $("#div_modificar_cat_medicamentos").hide();
		});
		//btn abrir modal modificar cat medicamentos
		$("#btn_continuar_modal_mod_cat_medicamentos").click(function()
		{
			$("#modal_modificar_cat_medicamentos").modal("hide");
			$("#form_modificar_cat_medicamentos").submit();
		})
		//btn submit modificar cat medicamentos
		$("#btn_continuar_modificar_cat_medicamentos").click(function()
		{
			$("#modal_modificar_cat_medicamentos").modal("show");	
		});
		//modificar cat medicamentos
		$("#form_modificar_cat_medicamentos").validate({
	            ignore:[],
	            rules:
	            {
	              titulo_modificar_cat_medicamentos:"required",
	              descripcion_modificar_cat_medicamentos: "required"
	            },
	            messages:
	            {
	              titulo_modificar_cat_medicamentos:"El campo titulo no puede estar vacio",
	              descripcion_modificar_cat_medicamentos:"El campo descripcion no puede estar vacio"
	            },
	            errorElement:"div",
	            errorPlacement:function(error,element)
	            {
	              var placement=$(element).data("error");
	              if(placement)
	                $(placement).append(error);
	              else
	                error.insertAfter(error);
	            },
	            submitHandler:function(form)
	            {
	            	var id_categoria=$("#id_cat_modificar_medicamentos").val();
              		var titulo_categoria=$("#titulo_modificar_cat_medicamentos").val();
					var descripcion_categoria=$("#descripcion_modificar_cat_medicamentos").val();
					//console.log("validando categoria..."+titulo_categoria+"<--->"+descripcion_categoria);
					$.post("../../../core/controllers/controller_admon.php",{id_categoria:id_categoria,titulo_categoria:titulo_categoria,descripcion_categoria:descripcion_categoria,action:"modificar_cat_medicamentos"},function(request)
						{
							$("#content_request").html(request);
							$("#div_modificar_categoria").hide();
							$("#div_tabla_editar_producto").hide();
							$("#div_tabla_productos").show();
							$("#div_agregar_categoria").hide();
							$("#div_agregar_marca").hide();
							$("#div_modificar_marca").hide();
							$("#div_agregar_cat_medicamentos").hide();
							$("#div_modificar_cat_medicamentos").hide();
							medicamentos();
							//refrescar selects de registro de productos
							get_all_categorias_for_select_agregar_tipo_medicamentos();
						});
					
					
	            }
	          });
	    //buscar productos

	    //buscar productos

	    $('#nombre_buscar_producto').bind('keyup',function(event)
      {

        var nombre_busqueda=$(this).val();
        if(event.key==='Enter')
        {
          //console.log("Buscando..."+nombre_busqueda);
          $("#div_tabla_productos").show();
          $("#div_form_registro_productos").hide();
          $("#div_tabla_editar_producto").hide();
          $("#div_informacion_productos").hide();
          $("#div_form_registro_productos").hide();
          $("#div_tabla_venta").hide();
          $("#div_informacion_medicamentos").hide();
          ////console.log(producto_code);
          $.get("../../../core/controllers/controller_admon.php",{nombre_busqueda:nombre_busqueda,action:"get_busqueda_producto"},function(res)
            {
                var bandera=1;
                res=JSON.parse(res);
                var html="";
                if(res!="")
                {
                  $.each(res, function(i, item)
                  {
                   
                    var btn_vender_producto='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_vender_producto" data-toggle="tooltip" data-placement="top" title="Agregar producto '+item.nombre+' a la venta actual" data-codigo_barras="'+item.codigo_barras+'">'+
                    '<i class="fa fa-shopping-basket fa-2x"></i>'+
                  '</a>';
                    var btn_ver='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_ver_producto" data-toggle="tooltip" data-placement="top" title="Ver informacion del producto: '+item.nombre+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-categoria="'+item.titulo+'">'+
                    '<i class="fa fa-eye fa-2x"></i>'+
                  '</a>';
                    
                  
                

                    var btn_actualiza='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_update_producto" data-categoria="'+item.titulo+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-toggle="tooltip" data-placement="top" title="Actualizar informacion del producto: '+item.nombre+'">'+
                    '<i class="fa fa-refresh fa-2x"></i>'+
                  '</a>';

                    html+="<tr class='col-12 fila_tab_productos'>"+
                              
                              "<td>"+item.nombre+"</td>"+
                              "<td>"+item.precio_mayoreo+"</td>"+
                              "<td class='tab_productos_code'>"+item.codigo_barras+"</td>"+
                              "<td>"+item.precio_publico+"</td>"+
                               "<td class='tab_productos_lotes'></td>"+
                               "<td class='tab_productos_cantidad'></td>"+
                               "<td>"+btn_ver+
                                    btn_actualiza+
                              "</td>"+
                              // "<td>"+btn_sueldo+"</td>"+
                          "</tr>";
                  });
                  $("#tabla_productos tbody").html(html);
                  $('[data-toggle="tooltip"]').tooltip();
                  get_lotes_for_tab_productos();
              }
              else
              {
                
                $.get("../../../core/controllers/controller_admon.php",{nombre_busqueda:nombre_busqueda,action:"get_busqueda_producto_formula"},function(res)
                {
                  
                    res=JSON.parse(res);
                    if(res=="")
                    {
                      bandera=1;
                      if(bandera==1)
                      {
                        $.get("../../../core/controllers/controller_admon.php",{nombre_busqueda:nombre_busqueda,action:"get_busqueda_producto_codigo_barras"},function(res)
                        {
                          
                            res=JSON.parse(res);
                            var html="";
                            
                              $.each(res, function(i, item)
                              {
                               
                                var btn_vender_producto='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_vender_producto" data-toggle="tooltip" data-placement="top" title="Agregar producto '+item.nombre+' a la venta actual" data-codigo_barras="'+item.codigo_barras+'">'+
                                    '<i class="fa fa-shopping-basket fa-2x"></i>'+
                                  '</a>';
                                var btn_ver='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_ver_producto" data-toggle="tooltip" data-placement="top" title="Ver informacion del producto: '+item.nombre+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-categoria="'+item.titulo+'">'+
                                '<i class="fa fa-eye fa-2x"></i>'+
                              '</a>';
                                
                              
                            

                                var btn_actualiza='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_update_producto" data-categoria="'+item.titulo+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-toggle="tooltip" data-placement="top" title="Actualizar informacion del producto: '+item.nombre+'">'+
                                '<i class="fa fa-refresh fa-2x"></i>'+
                              '</a>';

                                html+="<tr class='col-12 fila_tab_productos'>"+
                                          
                                          "<td>"+item.nombre+"</td>"+
                                          "<td>"+item.precio_mayoreo+"</td>"+
                                          "<td class='tab_productos_code'>"+item.codigo_barras+"</td>"+
                                          "<td>"+item.precio_publico+"</td>"+
                                           "<td class='tab_productos_lotes'></td>"+
                                           "<td class='tab_productos_cantidad'></td>"+
                                           "<td>"+btn_ver+
                                                btn_actualiza+
                                          "</td>"+
                                          // "<td>"+btn_sueldo+"</td>"+
                                      "</tr>";
                              });
                              $("#tabla_productos tbody").html(html);
                              $('[data-toggle="tooltip"]').tooltip();
                              get_lotes_for_tab_productos();
                              bandera==0;
                          
                            
                        });
                      } 
                    }
                    //termina de buscar codigo
                    var html="";
                    
                      $.each(res, function(i, item)
                      {
                       
                        var btn_vender_producto='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_vender_producto" data-toggle="tooltip" data-placement="top" title="Agregar producto '+item.nombre+' a la venta actual" data-codigo_barras="'+item.codigo_barras+'">'+
                            '<i class="fa fa-shopping-basket fa-2x"></i>'+
                          '</a>';
                        var btn_ver='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_ver_producto" data-toggle="tooltip" data-placement="top" title="Ver informacion del producto: '+item.nombre+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-categoria="'+item.titulo+'">'+
                        '<i class="fa fa-eye fa-2x"></i>'+
                      '</a>';
                        
                      
                    

                        var btn_actualiza='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_update_producto" data-categoria="'+item.titulo+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-toggle="tooltip" data-placement="top" title="Actualizar informacion del producto: '+item.nombre+'">'+
                        '<i class="fa fa-refresh fa-2x"></i>'+
                      '</a>';

                        html+="<tr class='col-12 fila_tab_productos'>"+
                                  
                                  "<td>"+item.nombre+"</td>"+
                                  "<td>"+item.precio_mayoreo+"</td>"+
                                  "<td class='tab_productos_code'>"+item.codigo_barras+"</td>"+
                                  "<td>"+item.precio_publico+"</td>"+
                                   "<td class='tab_productos_lotes'></td>"+
                                   "<td class='tab_productos_cantidad'></td>"+
                                   "<td>"+btn_ver+
                                        btn_actualiza+
                                  "</td>"+
                                  // "<td>"+btn_sueldo+"</td>"+
                              "</tr>";
                      });
                      $("#tabla_productos tbody").html(html);
                      $('[data-toggle="tooltip"]').tooltip();
                      get_lotes_for_tab_productos();
                  
                  
                    
                });
              }
               
                
            });
              
        }
        else if(nombre_busqueda=="")
        {
          //get_all_productos();
          $("#div_tabla_productos").show();
          $("#div_form_registro_productos").hide();
          $("#div_tabla_editar_producto").hide();
          $("#div_informacion_productos").hide();
          $("#div_form_registro_productos").hide();
          $("#div_informacion_medicamentos").hide();
        }
        

        
      });
    //fin buscar
		//fin buscar
	});
	//fin document ready
function get_lotes_for_tab_productos()
        {
          $("#tabla_productos").find('tr.fila_tab_productos').each(function(index)
          {
            var code=$(this).closest('tr.fila_tab_productos').children('td.tab_productos_code').text();
            var td_lotes=$(this).closest('tr.fila_tab_productos').children('td.tab_productos_lotes');
            var td_cantidad=$(this).closest('tr.fila_tab_productos').children('td.tab_productos_cantidad');

            $.get("../../../core/controllers/controller_admon.php",{code:code,action:"get_info_producto_lotes_tab_productos"},function(res)
                {
                    res=JSON.parse(res);
                    var summ='';
                    var tabla='<table>'+
                              '<thead>'+
                                '<tr>'+
                                  '<th class="text-center" style="font-size: 1.4rem; color:pink;">Lote </th>'+
                                  '<th class="text-center" style="font-size: 1.4rem; color:pink;">Fecha de Caducidad</th>'+
                                  '<th class="text-center" style="font-size: 1.4rem; color:pink;">Cantidad Disponible</th>'+
                                '<tr>'+
                              '</thead><tbody>';
                    $.each(res,function(i, item)
                    {
                        summ=''+item.lote+'';
                        tabla+='<tr>'+
                              '<td class="text-center">'+item.lote+'</td>'+
                              '<td class="text-center">'+item.fecha_caducidad+'</td>'+
                              '<td class="text-center">'+item.cantidad_disponible+'</td>'+

                            '</tr>';
                        
                    });
                    tabla+='</tbody>'+'</table>';
                    td_lotes.html(tabla);
              
                });
            //get cantidad existente
              $.get("../../../core/controllers/controller_admon.php",{code:code,action:"get_info_producto_cantidad_existente_tab_productos"},function(res)
                {
                    res=JSON.parse(res);
                    var summ='';
                    
                    $.each(res,function(i, item)
                    {
                        summ=''+item.suma_disponible+'';
                        
                    });
                    td_cantidad.html(summ);
              
                });
          });
        }
        function clear_inputs()
        {
        	$("input.clear").val("");
        }
        //get medicamentos
        function medicamentos()
		{
			$.get("../../../core/controllers/controller_admon.php",{action:"get_all_medicamentos"},function(res)
			{
				res=JSON.parse(res);
				////console.log(res);
				var marcas='<legend class="text text-center bg-purple card mb0"><p class="txt-white">Categorias De Medicamento</p></legend>';
				$.each(res,function(i,item)
				{
					marcas+='<div class="card cartita_medicamento" style="margin:0.1rem; width: 20rem;">'+
									'<ul class="nav navbar-nav navbar-right ">'+
                        
					                    '<li class="dropdown">'+
					                        '<a class="dropdown-toggle menu_cards" data-toggle="dropdown" role="button" aria-expanded="false">'+
												'<i class="fa fa-bars fa-2x"></i>'+
											'</a>'+

					                        '<ul class="dropdown-menu" role="menu">'+
					                            '<li>'+
					                                '<a class="dropdown-toggle menu_cards" data-toggle="dropdown" role="button" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Editar la marca: '+item.titulo+'" id="btn_cards_cat_medicamentos_editar" data-id_categoria="'+item.id_categoria+'" data-titulo="'+item.titulo+'" data-descripcion="'+item.descripcion+'">'+
														'<i class="fa fa-refresh fa-2x"></i> Editar'+
													'</a>'+
					                            '</li>'+
					                            '<li>'+
					                                '<a class="dropdown-toggle menu_cards" data-toggle="dropdown" role="button" aria-expanded="false" id="btn_eliminar_marca" data-id_marca="'+item.id_categoria+'">'+
														'<i class="fa fa-trash fa-2x"></i> Eliminar'+
													'</a>'+
					                            '</li>'+
					                        '</ul>'+
					                    '</li>'+
					               
					            	'</ul>'+
								  '<div class="card-body">'+
								  		'<h4 class="card-title">'+item.titulo+'</h4>'+
								    	'<p class="card-text">'+item.descripcion+'</p>'+
								    	'<div class="col-sm-3 col-md-3 col-lg-3">'+
											'<a class="btn btn-simple text text-center btn-hover-purple" id="btn_ver_medicamentos" data-id_categoria="'+item.id_categoria+'" data-titulo="'+item.titulo+'">'+
												'<i class="fa fa-table fa-2x"></i><br>ver tabla'+
											'</a></div>'+
								  '</div>'+
							'</div>';
								
				});
				marcas+='<div class="row">'+
							'<div class="col-lg-5">'+
								
							'</div>'+
							'<div class="col-lg-7">'+
								'<a class="menu_cards btn btn-simple btn-hover-pink" id="btn_cards_agregar_cat_medicamentos" data-toggle="tooltip" data-placement="top" title="Agregar Categoria de Medicamentos">'+
										'<i class="fa fa-plus-circle fa-2x"></i>'+
									'</a>'+
							'<div>'+
						'</div>';
				$('[data-toggle="tooltip"]').tooltip();
				$(".cards-medicamentos").html(marcas);
				
				
			});
		}
		function get_all_productos()
		{
			
			$.get("../../../core/controllers/controller_admon.php",{action:"get_all_productos"},function(res)
          {
              res = JSON.parse(res);
              ////console.log(res);
              var html="";
              $.each(res, function(i, item)
              {
               
                var btn_elimina='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_eliminar_producto" data-toggle="tooltip" data-placement="top" title="Eliminar el producto: '+item.nombre+'">'+
								'<i class="fa fa-trash fa-2x"></i>'+
							'</a>';
                var btn_ver='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_ver_producto" data-toggle="tooltip" data-placement="top" title="Ver informacion del producto: '+item.nombre+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-categoria="'+item.titulo+'">'+
								'<i class="fa fa-eye fa-2x"></i>'+
							'</a>';
								
							
						

                var btn_actualiza='<a class="btn btn-simple btn-hover-pink btn-xs" id="btn_update_producto" data-categoria="'+item.titulo+'" data-id="'+item.id_producto+'" data-nombre="'+item.nombre+'" data-toggle="tooltip" data-placement="top" title="Actualizar informacion del producto: '+item.nombre+'">'+
								'<i class="fa fa-refresh fa-2x"></i>'+
							'</a>';

                html+="<tr class='col-12 fila_tab_productos'>"+
                          
                          "<td>"+item.nombre+"</td>"+
                          "<td>"+item.precio_mayoreo+"</td>"+
                          "<td class='tab_productos_code'>"+item.codigo_barras+"</td>"+
                          "<td>"+item.precio_publico+"</td>"+
                           "<td class='tab_productos_lotes'></td>"+
                           "<td class='tab_productos_cantidad'></td>"+
                           "<td>"+btn_ver+
                          		  btn_actualiza+
                          "</td>"+
                          // "<td>"+btn_sueldo+"</td>"+
                      "</tr>";
              });
              $("#tabla_productos tbody").html(html);
              $('[data-toggle="tooltip"]').tooltip();
              get_lotes_for_tab_productos();
          });
			

		}
		//get all categorias
		function get_all_categorias_productos()
		{
			$.get("../../../core/controllers/controller_admon.php",{action:"get_all_categorias"},function(res)
			{
				res=JSON.parse(res);
				////console.log(res);
				var categorias='<legend class="text text-center bg-purple card mb0"><p class="txt-white">Categorias de Productos</p></legend>';
				$.each(res,function(i,item)
				{
					categorias+='<div class="card cartita_categoria" style="margin:0.1rem; width: 19rem;">'+
									'<ul class="nav navbar-nav navbar-right ">'+
                        
					                    '<li class="dropdown">'+
					                        '<a class="dropdown-toggle menu_cards" data-toggle="dropdown" role="button" aria-expanded="false">'+
												'<i class="fa fa-bars fa-2x"></i>'+
											'</a>'+

					                        '<ul class="dropdown-menu" role="menu">'+
					                            '<li>'+
					                                '<a class="dropdown-toggle menu_cards" data-toggle="dropdown" role="button" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Editar la categoria: '+item.titulo+'" id="btn_cards_categorias_editar" data-id="'+item.id_categoria_producto+'" data-titulo="'+item.titulo+'" data-descripcion="'+item.descripcion+'">'+
														'<i class="fa fa-refresh fa-2x"></i> Editar'+
													'</a>'+
					                            '</li>'+
					                            '<li>'+
					                                '<a class="dropdown-toggle menu_cards" data-toggle="dropdown" role="button" aria-expanded="false" id="btn_eliminar_categoria" data-id_categoria="'+item.id_categoria_producto+'">'+
														'<i class="fa fa-trash fa-2x"></i> Eliminar'+
													'</a>'+
					                            '</li>'+
					                        '</ul>'+
					                    '</li>'+
					               
					            	'</ul>'+
								  '<div class="card-body">'+
								  		'<h4 class="card-title">'+item.titulo+'</h4>'+
								    	'<p class="card-text">'+item.descripcion+'</p>'+
								    	'<div class="col-sm-3 col-md-3 col-lg-3">'+
											'<a class="btn btn-simple text text-center btn-hover-purple" id="btn_ver_categoria" data-id_categoria="'+item.id_categoria_producto+'" data-titulo="'+item.titulo+'">'+
												'<i class="fa fa-table fa-2x"></i><br>ver tabla'+
											'</a></div>'+
								  '</div>'+
								'</div>';
								
				});
				categorias+='<div class="row">'+
							'<div class="col-lg-5">'+
								
							'</div>'+
							'<div class="col-lg-7">'+
								'<a class="menu_cards btn btn-simple btn-hover-pink" id="btn_cards_agregar_categoria" data-toggle="tooltip" data-placement="top" title="Agregar Categoria">'+
										'<i class="fa fa-plus-circle fa-2x"></i>'+
									'</a>'+
							'<div>'+
						'</div>';
				$('[data-toggle="tooltip"]').tooltip();
				$(".cards-categorias").html(categorias);
				
				
			});
		}
		//get marcas
		function get_all_marcas()
		{
			$.get("../../../core/controllers/controller_admon.php",{action:"get_all_marcas"},function(res)
			{
				res=JSON.parse(res);
				////console.log(res);
				var marcas='<legend class="text text-center bg-purple card mb0"><p class="txt-white">Marcas</p></legend>';
				$.each(res,function(i,item)
				{
					marcas+='<div class="card" style="margin:0.1rem; width: 20rem;">'+
									'<ul class="nav navbar-nav navbar-right ">'+
                        
					                    '<li class="dropdown">'+
					                        '<a class="dropdown-toggle menu_cards" data-toggle="dropdown" role="button" aria-expanded="false">'+
												'<i class="fa fa-bars fa-2x"></i>'+
											'</a>'+

					                        '<ul class="dropdown-menu" role="menu">'+
					                            '<li>'+
					                                '<a class="dropdown-toggle menu_cards" data-toggle="dropdown" role="button" aria-expanded="false" data-toggle="tooltip" data-placement="top" title="Editar la marca: '+item.titulo+'" id="btn_cards_marcas_editar" data-id="'+item.id_marca+'" data-titulo="'+item.titulo+'" data-descripcion="'+item.descripcion+'">'+
														'<i class="fa fa-refresh fa-2x"></i> Editar'+
													'</a>'+
					                            '</li>'+
					                            '<li>'+
					                                '<a class="dropdown-toggle menu_cards" data-toggle="dropdown" role="button" aria-expanded="false" id="btn_eliminar_marca" data-id_marca="'+item.id_marca+'">'+
														'<i class="fa fa-trash fa-2x"></i> Eliminar'+
													'</a>'+
					                            '</li>'+
					                        '</ul>'+
					                    '</li>'+
					               
					            	'</ul>'+
								  '<div class="card-body">'+
								  		'<h4 class="card-title">'+item.titulo+'</h4>'+
								    	'<p class="card-text">'+item.descripcion+'</p>'+
								    	'<div class="col-sm-3 col-md-3 col-lg-3">'+
											'<a class="btn btn-simple text text-center btn-hover-purple" id="btn_ver_marca" data-id_marca="'+item.id_marca+'" data-titulo="'+item.titulo+'">'+
												'<i class="fa fa-table fa-2x"></i><br>ver tabla'+
											'</a></div>'+
								  '</div>'+
							'</div>';
								
				});
				marcas+='<div class="row">'+
							'<div class="col-lg-5">'+
								
							'</div>'+
							'<div class="col-lg-7">'+
								'<a class="menu_cards btn btn-simple btn-hover-pink" id="btn_cards_agregar_marca" data-toggle="tooltip" data-placement="top" title="Agregar Categoria">'+
										'<i class="fa fa-plus-circle fa-2x"></i>'+
									'</a>'+
							'<div>'+
						'</div>';
				$('[data-toggle="tooltip"]').tooltip();
				$(".cards-marcas").html(marcas);
				
				
			});
		}
		// productos #########################################################
		function get_all_categorias_for_select_agregar_tipo_medicamentos()
        {
            $.get("../../../core/controllers/controller_admon.php",{action:"get_all_categorias_for_select_agregar_tipo_medicamentos"},function(res)
            {
                res=JSON.parse(res);
                var options_select='';
                ////console.log(res);
                $.each(res,function(i, item)
                {
                    options_select+='<option>'+item.titulo+'</option>'
                });
                $("#select_tipo_medicamento_registro_productos").html(options_select);
            });
        }
        function get_all_categorias_for_select_agregar_marcas()
        {
            $.get("../../../core/controllers/controller_admon.php",{action:"get_all_categorias_for_select_agregar_marcas"},function(res)
            {
                res=JSON.parse(res);
                var options_select='';
                ////console.log(res);
                $.each(res,function(i, item)
                {
                    options_select+='<option>'+item.titulo+'</option>'
                });
                $("#select_marca_registro_productos").html(options_select);
            });
        }
        function get_all_categorias_for_select_agregar()
        {
            $.get("../../../core/controllers/controller_admon.php",{action:"get_all_categorias_for_select_agregar"},function(res)
            {
                res=JSON.parse(res);
                var options_select='';
                ////console.log(res);
                $.each(res,function(i, item)
                {
                    options_select+='<option>'+item.titulo+'</option>'
                });
                $("#select_categoria_registro_productos").html(options_select);
            });
        }
        function productos_caducados()
	    {
	      $.get("../../../core/controllers/controller_admon.php",{action:"productos_caducados"},function(res)
            {
                
            });
	    }
	    function hide_card_medicamento()
	    {
	    	$(".cards-categorias").find("div.cartita_categoria").each(function(index)
	    	{
	    		var titulo=$(this).find('h4.card-title').text();
	    		////console.log("categorias-->\n"+titulo);
	    		if(titulo=="medicamentos")
	    		{
	    			$(this).hide();
	    		}
	    	});
	    }
	    function update_lotes()
	    {
	    	//console.log("listo para actualizar man");
	    	$("#div_tabla_editar_producto").find('div.fila_lotes_modificar').each(function(index)
	        {
	        	var id_lote=$(this).data("id_lote");
	            var numero_lote=$(this).find('#lote_numero_modificar').val();
	            var fecha_caducidad=$(this).find("#lote_fecha_modificar").val();
	            var cantidad=$(this).find("#lote_cantidad_modificar").val();
	            //console.log("numero lote--> "+numero_lote+" --id_lote--> "+id_lote+" cantidad--> "+cantidad);
	            if(id_lote!="")
	            {
		            $.post("../../../core/controllers/controller_admon.php",{id_lote:id_lote,numero_lote:numero_lote,fecha_caducidad:fecha_caducidad,cantidad:cantidad,action:"update_lotes"},function(request)
					{
						$("#content_request").html(request);
						clear_inputs();
						$("#div_campos_lotes_uno").hide();
						$("#div_campos_lotes_dos").hide();
						$("#div_campos_lotes_tres").hide();
						$("#div_campos_lotes_cuatro").hide();
						$("#div_campos_lotes_cinco").hide();
					});
	        	}
	            
	        });
	    }
</script>

<?php include('../../partials/footer.php'); ?>