<?php include('../../partials/head.php') ?>
<style type="text/css">
  #div_buscar_producto .btn-icons:hover
{
    background-color: #E91E63;
    color: white;
}
#tabla_venta_espera .btn-hover-pink:hover
{
  background-color: #E91E63  ;
  color: white;
}
#tabla_productos .btn-hover-pink:hover
{
  background-color: #E91E63  ;
  color: white;
}
</style>
<div class="container-fluid panel pt0" style="min-height:30rem; ">
  <div class="row pt0">
    <div class="container-fluid pt0">
        <div class="row pt0">
          <div class="col-lg-4 text text-center" id="notificaciones_productos">
            
          </div>
          <div class="col-lg-5 pt0" id="div_buscar_producto">
            <div class="row">
              <div class="col-lg-10  pt1">
                <label>Buscar producto</label>
                <input type="text" name="" placeholder="" class="input_search" id="nombre_buscar_producto">
                
                <a class="btn btn-simple btn-icons btn-xs" id="btn_agregar_producto" style="display: none;"><i class="fa fa-plus-circle fa‐4x" data-toggle="tooltip" data-placement="top" title="Agregar un producto nuevo" style="display: none;"></i></a>
              </div>
              <div class="col-lg-2 ">
                
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            
          </div>
        </div>
      </div>
    <div class="container panel panel-default col-lg-4 pd-0">
      <legend class="pd-0 container-fluid text text-center bg-purple card"><p class="txt-white">Productos Proximos a Caducar</p></legend>
      <div id="div_noticias" style="height:43rem; overflow:auto;">
        
      </div>
    </div>
    <div class="col-lg-8">
      <div class="row">
        
        <div id="div_tabla_venta" class="panel col-sm-12 col-md-12 col-lg-12">
              <legend class="text text-center bg-purple card mr0 col-12"><p class="txt-white">Nueva Venta</p></legend>
              <div class="container-fluid pt0">
                  <div class="row">
                    
                    <div class="col-lg-7 pt0" id="div_buscar_producto">
                      <div class="row">
                      <form id="form_producto_code">
                        <div class="col-lg-10  pt1">
                          <label>Código del producto</label>
                          <input type="text" class="validate input_search" id="producto_code" name="producto_code" data-error=".error_producto_code">
                          
                          
                        </div>
                        
                      </form>
                      </div>
                      <div class="txt-red error_producto_code" id="error_producto_code" style="display: none;"></div>
                    </div>
                    <div class="col-lg-2">
                      
                    </div>
                  </div>
                </div>
              <div class="col-sm-12 col-md-12 col-lg-12" style="height:25rem; overflow:auto;">
                  <table class="table col-12"  id="tabla_venta_espera" >
                        <thead class="col-12" style="">
                              <tr class="col-12">
                                
                                <th data-field="nombre">Nombre De Producto</th>
                                <th data-field="peso">Precio Mayoreo</th>
                                <th data-field="codigo_barras">Código de Barras</th>
                                <th data-field="precio">Precio Público</th>
                                <th data-field="categoria">Categoria</th>
                                <th data-field="" class="text text-center">Cantidad</th>
                                <th data-field="" class="text text-center">Fecha de caducidad</th>
                                <!--<th data-field="" class="text text-center">Opciones</th>-->


                                         
                              </tr>       
                        </thead>
                        <tbody>
                        </tbody>
                        
                                
                  </table>
                  
              </div>
              <div class="row">
                  <div class="col-lg-8"></div>
                  <div class="col-lg-2 text text-right"><h4><b>Total</b></h4></div>
                  <div class="col-lg-2" id="div_suma_venta">
                      
                  </div>
                  <input type="text" name="suma_total_venta" id="suma_total_venta" style="display: none;">
              </div>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-6 modal-footer pd-0">
                    <p class=" text text-right pd-0">Descuento</p>
                    <a class="btn btn-simple btn-icons btn-xs" id=""><i class="fa fa-percent fa‐4x" data-toggle="tooltip" data-placement="top" title="Buscar producto"></i></a>
                    <select id="select_descuento" class="select_descuento" name="select_descuento">
                        
                    </select>
                  </div>
                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-lg-9">
                          <a class="btn btn-primary btn-lg" id="btn_cobrar_venta">Cobrar</a>
                          <a class="btn btn-simple btn-lg" id="btn_cancelar_venta"><p class="txt-blue">Cancelar</p></a>
                        </div>
                        <div class="col-lg-3 pt1">
                            <div class="checkbox" id="div_targeta" data-toggle="tooltip" data-placement="top" title="Cobrar esta venta con tarjeta">
                              <label>
                                <input type="checkbox" name="opt_targeta" id="opt_targeta">
                                Tarjeta
                              </label>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
          </div>
          <!---->
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
                                <input type="text" class="precio_pub_reg_productos form-control validate" id="precio_pub_reg_productos" name="precio_pub_reg_productos" data-error=".error_precio_pub_reg_productos">
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
                                
                                <select class="select_categoria_registro_productos form-control validate" id="select_categoria_registro_productos" name="select_categoria_registro_productos" data-error=".error_select_categoria_reg_productos">
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
                                
                                <select class="form-control select_marca_registro_productos"  id="select_marca_registro_productos" name="select_marca_registro_productos" data-error="error_select_marca_registro_productos">
                                
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
                                
                                <select class="form-control select_tipo_medicamento_registro_productos"  id="select_tipo_medicamento_registro_productos" name="select_tipo_medicamento_registro_productos" data-error="error_select_tipo_medicamento_registro_productos">
                                
                                </select>
                                <div class="text text-left txt-red error_select_tipo_medicamento_registro_productos"></div>
                            </div>

                            
                        </div>
                    </div>
                </form>
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
          <div class="col-sm-4 col-md-4 col-lg-4 pd-0">
            
              <div class="form-group " id="div_update_lotes_medicamento">
                
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
                    
                      <select class="form-control select_lotes"  id="select_lotes" >
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
                  <input type="text" name="lote_numero_uno" placeholder="" class="validate clear input_search lote_numero_uno" id="lote_numero_uno" data-error=".error_lote_numero_uno">
                  <div class="txt-red error_lote_numero_uno"></div>
                  
                </div>
                <div class="col-lg-3 pt1">
                  <label>Fecha de Caducidad</label>
                  <input placeholder="" name="lote_fecha_uno" class="datepicker clear input_search lote_fecha_uno" id="lote_fecha_uno" data-error=".error_lote_fecha_uno">
                  <div class="txt-red error_lote_fecha_uno"></div>
                  
                </div>
                <div class="col-lg-3 pt1">
                  <label>Cantidad</label><br>
                  <input type="text" placeholder="" name="lote_cantidad_uno" class="validate clear input_search lote_cantidad_uno" id="lote_cantidad_uno" data-error=".error_lote_cantidad_uno">
                  <div class="txt-red error_lote_cantidad_uno"></div>
                </div>
                
              </form>
              
            </div>
            <!--dos-->
            <div class="row" id="div_campos_lotes_dos">
              <form class="form col-lg12" id="form_lote_dos">
                <div class="col-lg-3 pt1">
                  <label>Número de Lote</label>
                  <input type="text" name="lote_numero_dos" placeholder="" class="validate clear input_search lote_numero_dos" id="lote_numero_dos" data-error=".error_lote_numero_dos">
                  <div class="txt-red error_lote_numero_dos"></div>
                  
                </div>
                <div class="col-lg-3 pt1">
                  <label>Fecha de Caducidad</label>
                  <input placeholder="" name="lote_fecha_dos" class="datepicker clear input_search lote_fecha_dos" id="lote_fecha_dos" data-error=".error_lote_fecha_dos">
                  <div class="txt-red error_lote_fecha_dos"></div>
                  
                </div>
                <div class="col-lg-3 pt1">
                  <label>Cantidad</label><br>
                  <input type="text" placeholder="" name="lote_cantidad_dos" class="validate clear input_search lote_cantidad_dos" id="lote_cantidad_dos" data-error=".error_lote_cantidad_dos">
                  <div class="txt-red error_lote_cantidad_dos"></div>
                </div>
                
              </form>
              
            </div>
            <!--tres-->
            <div class="row" id="div_campos_lotes_tres">
              <form class="form col-lg12" id="form_lote_tres">
                <div class="col-lg-3 pt1">
                  <label>Número de Lote</label>
                  <input type="text" name="lote_numero_tres" placeholder="" class="validate clear input_search lote_numero_tres" id="lote_numero_tres" data-error=".error_lote_numero_tres">
                  <div class="txt-red error_lote_numero_tres"></div>
                  
                </div>
                <div class="col-lg-3 pt1">
                  <label>Fecha de Caducidad</label>
                  <input placeholder="" name="lote_fecha_tres" class="datepicker clear input_search lote_fecha_tres" id="lote_fecha_tres" data-error=".error_lote_fecha_tres">
                  <div class="txt-red error_lote_fecha_tres"></div>
                  
                </div>
                <div class="col-lg-3 pt1">
                  <label>Cantidad</label><br>
                  <input type="text" placeholder="" name="lote_cantidad_tres" class="validate clear input_search lote_cantidad_tres" id="lote_cantidad_tres" data-error=".error_lote_cantidad_tres">
                  <div class="txt-red error_lote_cantidad_tres"></div>
                </div>
                
              </form>
            </div>
            <!--cuatro-->
            <div class="row" id="div_campos_lotes_cuatro">
              <form class="form col-lg12" id="form_lote_cuatro">
                <div class="col-lg-3 pt1">
                  <label>Número de Lote</label>
                  <input type="text" name="lote_numero_cuatro" placeholder="" class="validate clear input_search lote_numero_cuatro" id="lote_numero_cuatro" data-error=".error_lote_numero_cuatro">
                  <div class="txt-red error_lote_numero_cuatro"></div>
                  
                </div>
                <div class="col-lg-3 pt1">
                  <label>Fecha de Caducidad</label>
                  <input placeholder="" name="lote_fecha_cuatro" class="datepicker clear input_search lote_fecha_cuatro" id="lote_fecha_cuatro" data-error=".error_lote_fecha_cuatro">
                  <div class="txt-red error_lote_fecha_cuatro"></div>
                  
                </div>
                <div class="col-lg-3 pt1">
                  <label>Cantidad</label><br>
                  <input type="text" placeholder="" name="lote_cantidad_cuatro" class="validate clear input_search lote_cantidad_cuatro" id="lote_cantidad_cuatro" data-error=".error_lote_cantidad_cuatro">
                  <div class="txt-red error_lote_cantidad_cuatro"></div>
                </div>
                
              </form>
              
            </div>
            <!--cinco-->
            <div class="row" id="div_campos_lotes_cinco">
              <form class="form col-lg12" id="form_lote_cinco">
                <div class="col-lg-3 pt1">
                  <label>Número de Lote</label>
                  <input type="text" name="lote_numero_cinco" placeholder="" class="validate clear input_search lote_numero_cinco" id="lote_numero_cinco" data-error=".error_lote_numero_cinco">
                  <div class="txt-red error_lote_numero_cinco"></div>
                  
                </div>
                <div class="col-lg-3 pt1">
                  <label>Fecha de Caducidad</label>
                  <input placeholder="" name="lote_fecha_cinco" class="datepicker clear input_search lote_fecha_cinco" id="lote_fecha_cinco" data-error=".error_lote_fecha_cinco">
                  <div class="txt-red error_lote_fecha_cinco"></div>
                  
                </div>
                <div class="col-lg-3 pt1">
                  <label>Cantidad</label><br>
                  <input type="text" placeholder="" name="lote_cantidad_cinco" class="validate clear input_search lote_cantidad_cinco" id="lote_cantidad_cinco" data-error=".error_lote_cantidad_cinco">
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
            <div class="col-sm-4 col-md-4 col-lg-4">
                   
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
            <!--<div class="col-sm-4 col-md-4 col-lg-4">
              <div class="input-group">
                    <div class="form-group pt3 pl3">
                        <div style="height: 4rem; width: 7rem;" class="pd-0 radius5 btn btn-success" id="div_agregar_producto_venta" data-toggle="tooltip" data-placement="center" title="Agregar Este Producto A Venta">
                          <span class="input-group-addon txt-white">
                            <i class="fa fa-shopping-basket fa‐4x" ></i>
                          </span>
                        </div>
                    </div>
              </div>          
            </div>-->
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
          <!--tabla de busqueda-->
          <div id="div_tabla_productos" class="container panel col-sm-12 col-md-12 col-lg-12">
            <legend class="text text-center bg-purple card mr0 col-12"><p class="txt-white">Tabla de productos</p></legend>
            
              <div class="container panel col-sm-12 col-md-12 col-lg-12" style="height:40rem; overflow:auto;">
                <table class="table col-12"  id="tabla_productos" >
                        <thead class="col-12" style="">
                            <tr class="col-12">
                              
                              <th data-field="nombre">Nombre</th>
                              <th data-field="peso">Precio Mayoreo</th>
                              <th data-field="codigo_barras">Código de barras</th>
                              <th data-field="precio">Precio Público</th>
                              <th data-field="categoria" class="text-center">Lotes</th>
                              <th data-field="categoria">Cantidad existente</th>
                            <th data-field="acciones" class="text text-center">Opciones</th>

                                       
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
</div>
<!--modal para seleccionar fechas y caducidades-->
<div class="modal fade" id="modal_select_caducidades_producto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar"><p class="txt-red">&times;<p></button>
        <legend class="text text-center txt-white">Seleccione Cantidad y Fecha de Caducidad</legend>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6" id="div_select_cantidad_producto">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-shopping-basket fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una cantidad"></i>
                    </span>
                    <div class="form-group ">
                        <label class="control-label">Cantidad</label>
                        
                        <select class="select_cantidad_venta form-control validate" id="select_cantidad_venta" name="select_cantidad_venta" data-error=".error_select_cantidad_venta">
                        </select>
                        <div class="text text-left txt-red error_select_cantidad_venta"></div>
                    </div>

                    
                </div>
            </div>
            <input type="text" name="num_cantidad_producto" id="num_cantidad_producto" class="num_cantidad_producto" style="display: none;" />
          </div>
          <div class="col-lg-6" id="div_select_fechas_producto">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="input-group">
                    <span class="input-group-addon" for="select_fechas_caducidades_producto">
                        <i class="fa fa-calendar fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una fecha de caducidad"></i>
                    </span>
                    <div class="form-group ">
                        <label class="control-label">Fechas</label>
                        
                        <select class="select_fechas_caducidades_producto form-control validate" id="select_fechas_caducidades_producto" name="select_fechas_caducidades_producto" data-error=".error_select_fechas_caducidades_producto">
                        </select>
                        <div class="text text-left txt-red error_select_fechas_caducidades_producto"></div>
                    </div>

                    
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_fecha_producto">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal para seleccionar fechas y caducidades para agregar medicamentos a venta-->
<div class="modal fade" id="modal_agregar_medicamentos_venta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar"><p class="txt-red">&times;<p></button>
        <legend class="text text-center txt-white">Seleccione Cantidad y Fecha de Caducidad</legend>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6" id="div_select_cantidad_producto">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-shopping-basket fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una cantidad"></i>
                    </span>
                    <div class="form-group ">
                        <label class="control-label">Cantidad</label>
                        
                        <select class="select_cantidad_venta_agregar_medicamento_venta form-control validate" id="select_cantidad_venta_agregar_medicamento_venta" name="select_cantidad_venta_agregar_medicamento_venta" data-error=".error_select_cantidad_agregar_medicamento_venta">
                        </select>
                        <div class="text text-left txt-red error_select_cantidad_agregar_medicamento_venta"></div>
                    </div>

                    
                </div>
            </div>
            <input type="text" name="num_cantidad_medicamento_agregar_venta" id="num_cantidad_medicamento_agregar_venta" class="num_cantidad_medicamento_agregar_venta" style="display: none;" />
            <input type="text" name="codigo_barras_medicamento_vender" id="codigo_barras_medicamento_vender" style="display: none;">
          </div>
          <div class="col-lg-6" id="div_select_fechas_producto">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="input-group">
                    <span class="input-group-addon" for="select_fechas_caducidades_producto">
                        <i class="fa fa-calendar fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una fecha de caducidad"></i>
                    </span>
                    <div class="form-group ">
                        <label class="control-label">Fechas</label>
                        
                        <select class="select_fechas_caducidades_agregar_medicamento_venta form-control validate" id="select_fechas_caducidades_agregar_medicamento_venta" name="select_fechas_caducidades_agregar_medicamento_venta" data-error=".error_select_fechas_caducidades_agregar_medicamento_venta">
                        </select>
                        <div class="text text-left txt-red error_select_fechas_caducidades_agregar_medicamento_venta"></div>
                    </div>

                    
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_modal_agregar_medicamento_venta">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal para seleccionar fechas y caducidades para agregar productos a venta-->
<div class="modal fade" id="modal_agregar_productos_venta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar"><p class="txt-red">&times;<p></button>
        <legend class="text text-center txt-white">Seleccione Cantidad y Fecha de Caducidad</legend>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-6" id="div_select_cantidad_producto">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-shopping-basket fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una cantidad"></i>
                    </span>
                    <div class="form-group ">
                        <label class="control-label">Cantidad</label>
                        
                        <select class="select_cantidad_venta_agregar_producto_venta form-control validate" id="select_cantidad_venta_agregar_producto_venta" name="select_cantidad_venta_agregar_producto_venta" data-error=".error_select_cantidad_agregar_producto_venta">
                        </select>
                        <div class="text text-left txt-red error_select_cantidad_agregar_producto_venta"></div>
                    </div>

                    
                </div>
            </div>
            <input type="text" name="num_cantidad_producto_agregar_venta" id="num_cantidad_producto_agregar_venta" class="num_cantidad_producto_agregar_venta" style="display: none;" />
          </div>
          <div class="col-lg-6" id="div_select_fechas_producto">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="input-group">
                    <span class="input-group-addon" for="select_fechas_caducidades_producto">
                        <i class="fa fa-calendar fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una fecha de caducidad"></i>
                    </span>
                    <div class="form-group ">
                        <label class="control-label">Fechas</label>
                        
                        <select class="select_fechas_caducidades_agregar_producto_venta form-control validate" id="select_fechas_caducidades_agregar_producto_venta" name="select_fechas_caducidades_agregar_producto_venta" data-error=".error_select_fechas_caducidades_agregar_producto_venta">
                        </select>
                        <div class="text text-left txt-red error_select_fechas_caducidades_agregar_producto_venta"></div>
                    </div>

                    
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_modal_agregar_producto_venta">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal para cancelar venta-->
<div class="modal fade" id="modal_cancelar_venta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar"><p class="txt-red">&times;<p></button>
        <legend class="text text-left txt-white">Confirmar para cancelar</legend>
      </div>
      <div class="modal-body">
        <div class="row text-center">
        <h4 class="display">Está segúro de cancelar esta venta ?</h4>
        
        </div>  
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_cancelar_venta">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal para eliminar productos de ventas-->
<div class="modal fade" id="modal_eliminar_producto_venta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar"><p class="txt-red">&times;<p></button>
        <legend class="text text-left txt-white">Confirmar para eliminar</legend>
      </div>
      <div class="modal-body">
        <div class="row text-center">
        <h4 class="display">Está segúro de eliminar este producto de la venta ?</h4>
        <input type="text" name="id_producto_eliminar" id="id_producto_eliminar" placeholder="id_producto_eliminar" style="display: none;">
        <input type="text" name="id_venta_eliminar" id="id_venta_eliminar" placeholder="id_venta_eliminar" style="display: none;">
        </div>  
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_eliminar_producto">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal para cobrar venta-->
<div class="modal fade" id="modal_cobrar_venta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar"><p class="txt-red">&times;<p></button>
        <legend class="text text-left txt-white">Confirmar Para Cobrar</legend>
      </div>
      <div class="modal-body">
        <div class="row text-center">
        <h4 class="display">Cobrar venta ?</h4>
        <input type="text" name="" id="" placeholder="" style="display: none;">
        <input type="text" name="" id="" placeholder="" style="display: none;">
        </div>  
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_cobrar_venta">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--Modal para modificar fechas de caducidad-->
<div class="modal fade" id="modal_modificar_fechas_venta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar"><p class="txt-red">&times;<p></button>
        <legend class="text text-center txt-white">Seleccione Cantidad y Fecha de Caducidad</legend>
      </div>
      <div class="modal-body">
        <div class="row">
        <div class="col-lg-6" id="div_select_fechas_producto_modificar">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-calendar fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una fecha de caducidad"></i>
                    </span>
                    <div class="form-group ">
                        <label class="control-label">Fechas</label>
                        
                        <select class="select_fechas_caducidades_producto_modificar form-control validate" id="select_fechas_caducidades_producto_modificar" name="select_fechas_caducidades_producto_modificar" data-error=".error_select_fechas_caducidades_producto">
                        </select>
                        <div class="text text-left txt-red error_select_fechas_caducidades_producto"></div>
                    </div>

                    
                </div>
            </div>
          </div>
          <div class="col-lg-6" id="div_select_cantidad_producto_modificar">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="fa fa-shopping-basket fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione una cantidad"></i>
                    </span>
                    <div class="form-group ">
                        <label class="control-label">Cantidad</label>
                        
                        <select class="select_cantidad_venta_modificar form-control validate" id="select_cantidad_venta_modificar" name="select_cantidad_venta_modificar" data-error=".error_select_cantidad_venta_modificar">
                        </select>
                        <div class="text text-left txt-red error_select_cantidad_venta_modificar"></div>
                    </div>

                    
                </div>
            </div>
            <input type="text" name="num_cantidad_producto_modificar" id="num_cantidad_producto_modificar" class="num_cantidad_producto_modificar" style="display: none;" />
          </div>
          <input type="text" name="id_producto_modificar" id="id_producto_modificar" placeholder="id_producto_modificar" style="display: none;">
        <input type="text" name="id_venta_modificar" id="id_venta_modificar" placeholder="id_venta_modificar" style="display: none;">
          
        </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_modificar_fecha_venta">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!---->
<script type="text/javascript">
  $(document).ready(function(event)
  {
    $("#div_tabla_editar_producto").hide();
    $("#div_informacion_productos").hide();
    $("#div_form_registro_productos").hide();
    
    $("#div_informacion_medicamentos").hide();
    $("#div_campos_lotes_uno").hide();
    $("#div_campos_lotes_dos").hide();
    $("#div_campos_lotes_tres").hide();
    $("#div_campos_lotes_cuatro").hide();
    $("#div_campos_lotes_cinco").hide();
    $("#id_producto_modifica").hide();
    $("#div_formula_registro_productos").hide();
    $("#div_dosis_registro_productos").hide();
    get_fechas_productos_xv();
    porcentages();
    get_venta();
    get_all_categorias_for_select_agregar();
    get_all_categorias_for_select_agregar_marcas();
    get_all_categorias_for_select_agregar_tipo_medicamentos();
    productos_caducados();
    $("#div_tabla_productos").hide();
    //activar opcion de navegacion en nav
    var pathname = window.location.pathname;
    if(pathname=="/punto_venta/views/ventas/admons/")
    {
      $(".active_ventas_admons").addClass("active");  
      //console.log("ventana-->"+pathname);
    }
    //actualizar venta con descuento
    $("#select_descuento").bind('change',function(event)
        {
          var total='';
          var suma=$("#suma_total_venta").val();
          var descuento=$("#select_descuento").val();
          var resta=(descuento*suma)/100;
          total=suma-resta;
          //console.log("suma-->"+total);
          $("#div_suma_venta").html("<h4 id='suma_venta_j'>"+total+"</h4>");
          if($("#select_descuento").val()=="Seleccione")
          {
            //console.log("Descuento a cero...");
            $("#div_suma_venta").html("<h4 id='suma_venta_j'>"+suma+"</h4>");
          }

        });
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
    $("#tabla_productos").on('click','a#btn_vender_producto',function()
    {
      //console.log("carrito medicamentos...");
      $("#modal_agregar_medicamentos_venta").modal('show');

        var producto_code=$(this).data("codigo_barras");
        var fecha_venta="";
        $("#codigo_barras_medicamento_vender").val(producto_code);
        $.get("../../../core/controllers/controller_admon.php",{producto_code:producto_code,action:"get_fechas_lote_venta"},function(res)
          {
              res=JSON.parse(res);
              var options_select='';

              ////console.log(res);
              $.each(res,function(i, item)
              {
                  options_select+='<option>'+item.fecha_caducidad+'</option>'
                  
              });
              $("#select_fechas_caducidades_agregar_medicamento_venta").html(options_select);
                fecha_venta=$("#select_fechas_caducidades_agregar_medicamento_venta").val();
                $.get("../../../core/controllers/controller_admon.php",{fecha_venta:fecha_venta,producto_code:producto_code,action:"get_producto_cantidad_existente_venta"},function(res)
                {
                    res=JSON.parse(res);
                    var options_select='';
                    //console.log("cantidad para vender... fecha"+fecha_venta);
                    //console.log(res);
                    $.each(res,function(i, item)
                    {
                        options_select=item.cantidad_disponible;
                    });
                    $("#num_cantidad_medicamento_agregar_venta").val(options_select);

                    var vl=$("#num_cantidad_medicamento_agregar_venta").val();
                    var opciones='<opt option-disabled>Seleccione</option>'
                    for(var opt=1; opt<=vl; opt++)
                    {
                      opciones+='<option>'+opt+'</option>';
                    }
                    $("#select_cantidad_venta_agregar_medicamento_venta").html(opciones);
                });
          });
        
    });
    $("#select_fechas_caducidades_agregar_medicamento_venta").bind('change',function()
    {
      //console.log("cambiando fecha de venta");
      var producto_code=$("#codigo_barras_medicamento_vender").val();
      var fecha_venta=$("#select_fechas_caducidades_agregar_medicamento_venta").val();
        $("#codigo_barras_medicamento_vender").val(producto_code);
          $.get("../../../core/controllers/controller_admon.php",{fecha_venta:fecha_venta,producto_code:producto_code,action:"get_producto_cantidad_existente_venta"},function(res)
          {
              res=JSON.parse(res);
              var options_select='';
              //console.log("cantidad para vender... fecha"+fecha_venta);
              //console.log(res);
              $.each(res,function(i, item)
              {
                  options_select=item.cantidad_disponible;
              });
              $("#num_cantidad_medicamento_agregar_venta").val(options_select);

              var vl=$("#num_cantidad_medicamento_agregar_venta").val();
              var opciones='<opt option-disabled>Seleccione</option>'
              for(var opt=1; opt<=vl; opt++)
              {
                opciones+='<option>'+opt+'</option>';
              }
              $("#select_cantidad_venta_agregar_medicamento_venta").html(opciones);
          });
    });
    //agregar producto a venta
    $("#div_agregar_producto_venta").click(function()
    {
      //console.log("carrito productos...");
      $("#modal_agregar_productos_venta").modal('show');

        var producto_code=$("#ver_producto_codigo_barras").val();
        $.get("../../../core/controllers/controller_admon.php",{producto_code:producto_code,action:"get_fechas_lote_venta"},function(res)
          {
              res=JSON.parse(res);
              var options_select='';
              ////console.log(res);
              $.each(res,function(i, item)
              {
                  options_select+='<option>'+item.fecha_caducidad+'</option>'
              });
              $("#select_fechas_caducidades_agregar_producto_venta").html(options_select);
          });
        $.get("../../../core/controllers/controller_admon.php",{producto_code:producto_code,action:"get_producto_cantidad_existente"},function(res)
          {
              res=JSON.parse(res);
              var options_select='';
              ////console.log(res);
              $.each(res,function(i, item)
              {
                  options_select+=''+item.suma_disponible+''
              });
              $("#num_cantidad_producto_agregar_venta").val(options_select);

              var vl=$("#num_cantidad_producto_agregar_venta").val();
              var opciones='<opt option-disabled>Seleccione</option>'
              for(var opt=1; opt<=vl; opt++)
              {
                opciones+='<option>'+opt+'</option>';
              }
              $("#select_cantidad_venta_agregar_producto_venta").html(opciones);
          });
    });
    //ocultar y mostrar select dosis
    $("#select_categoria_registro_productos").bind('change',function(event)
        {
            var opt_categoria_agregar=$("#select_categoria_registro_productos").val();
            //console.log('cambiando categoria'+'-->'+opt_categoria_agregar);
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
    //select lotes
    $("#select_lotes").bind('change',function(event)
        {
            var opt_categoria_agregar=$("#select_lotes").val();
            //console.log('numero de lotes'+'-->'+opt_categoria_agregar);
            var campos='';

            for (var i=1; i<=opt_categoria_agregar; i++)
            {
              //console.log("numero-->"+i);
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
    //agregar productos
    //validar registro de productos
    $("#btn_modal_continuar_agregar_producto").click(function()
    {
      $("#form_registro_productos").submit();
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
                    
                      $.post("../../../core/controllers/controller_admon.php",{nombre_producto:nombre_producto,uso_producto:uso_producto,codigo_barras_producto:codigo_barras_producto,precio_mayoreo_producto:precio_mayoreo_producto,precio_publico_producto:precio_publico_producto,categoria:categoria,marca:marca,action:"create_producto"},function(request)
                      {
                        $("#cont_request").html(request);
                        $.post("../../../core/controllers/controller_admon.php",{nombre_producto:nombre_producto,formula:formula,dosis:dosis,cat_medicamento:cat_medicamento,action:"create_medicamento"},function(request)
                        {
                          $("#cont_request").html(request);
                          clear_inputs();
                          $("#div_tabla_productos").show();
                          $("#div_form_registro_productos").hide();
                          $("#div_tabla_venta").hide();
                          $("#div_tabla_editar_producto").hide();
                          $("#div_informacion_productos").hide();
                          $("#div_form_registro_productos").hide();
                          $("#div_informacion_medicamentos").hide();
                        });
                      });
                  }
                }
                else
                {
                  //console.log("enviando registro de productos -->"+ categoria);
                  $.post("../../../core/controllers/controller_admon.php",{nombre_producto:nombre_producto,uso_producto:uso_producto,codigo_barras_producto:codigo_barras_producto,precio_mayoreo_producto:precio_mayoreo_producto,precio_publico_producto:precio_publico_producto,categoria:categoria,marca:marca,action:"create_producto"},function(request)
                    {
                      $("#cont_request").html(request);
                      clear_inputs();
                      $("#div_tabla_productos").show();
                      $("#div_form_registro_productos").hide();
                      $("#div_tabla_venta").hide();
                      $("#div_tabla_editar_producto").hide();
                      $("#div_informacion_productos").hide();
                      $("#div_form_registro_productos").hide();
                      $("#div_informacion_medicamentos").hide();
                    });
                }
                  
              }
      });
    //btn continuar modificar producto
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
      clear_inputs();
      $("#div_campos_lotes_uno").hide();
      $("#div_campos_lotes_dos").hide();
      $("#div_campos_lotes_tres").hide();
      $("#div_campos_lotes_cuatro").hide();
      $("#div_campos_lotes_cinco").hide();
    });
    //validar modificacion de'producto
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
                      $("#cont_request").html(request);

                    });
                  $.post("../../../core/controllers/controller_admon.php",{id_producto:id_producto,formula:formula,dosis:dosis,cat_medicamento:cat_medicamento,action:"update_medicamento"},function(request)
                    {
                      $("#cont_request").html(request);

                    });
                    $("#div_tabla_productos").show();
                    $("#div_form_registro_productos").hide();
                    $("#div_tabla_venta").hide();
                    $("#div_tabla_editar_producto").hide();
                    $("#div_informacion_productos").hide();
                    $("#div_form_registro_productos").hide();
                    
                    $("#div_informacion_medicamentos").hide();

                }
              }
              else
              {
                ////console.log("enviando modificaciones...\nid_producto: "+id_producto+"\n"+nombre_producto+"\n"+uso_producto+"\n"+codigo_barras_producto+"\n"+precio_mayoreo_producto+"\n"+precio_publico_producto+"\ncategoria: "+categoria+"\nmarca: "+marca);
                $.post("../../../core/controllers/controller_admon.php",{id_producto:id_producto,nombre_producto:nombre_producto,uso_producto:uso_producto,codigo_barras_producto:codigo_barras_producto,precio_mayoreo_producto:precio_mayoreo_producto,precio_publico_producto:precio_publico_producto,categoria:categoria,marca:marca,action:"update_producto"},function(request)
                  {
                    $("#cont_request").html(request);

                  });
                $("#div_tabla_productos").show();
                $("#div_form_registro_productos").hide();
                $("#div_tabla_venta").hide();
                $("#div_tabla_editar_producto").hide();
                $("#div_informacion_productos").hide();
                $("#div_form_registro_productos").hide();
                
                $("#div_informacion_medicamentos").hide();
                
              }
            }
    });
    //btn agregar productos
    $("#btn_agregar_producto").click(function(event)
    {
      //console.log('agregar producto');
      $("#div_tabla_venta").hide();
      $("#div_tabla_editar_producto").hide();
      $("#div_tabla_productos").hide();
      $("#div_informacion_productos").hide();
      $("#div_form_registro_productos").show();

    });
    //btn cancelar registro de productos
    $("#btn_cancelar_registro_productos").click(function(event)
    {
      //console.log('agregar producto');
      $("#div_tabla_editar_producto").hide();
      $("#div_informacion_productos").hide();
      $("#div_form_registro_productos").hide();
      $("#div_tabla_productos").hide();
      $("#div_tabla_venta").show();

    });
    //btn_actualizar productos
    $("#tabla_productos").on("click","a#btn_update_producto",function(event)     
        {       
          var id_producto=$(this).data("id");
          $("#id_producto_modifica").val(id_producto);
          var nombre_busqueda=$(this).data("nombre");
          var categoria=$(this).data("categoria");
          if(categoria=="medicamentos")
          { 
            //console.log("medicamentos");
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
                    
                    //console.log(res);
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
                    var summ='';
                    var tabla='<table>'+
                              '<thead>'+
                                '<tr>'+
                                  '<th class="text-center" style="font-size: 1.4rem; color:pink;">Lote </th>'+
                                  '<th class="text-center" style="font-size: 1.4rem; color:pink;">Fecha de Caducidad</th>'+
                                  '<th class="text-center" style="font-size: 1.4rem; color:pink;">Cantidad Disponible</th>'+
                                '<tr>'+
                              '</thead><tbody>';
                    //console.log(res);
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
                    $("#div_update_lotes_medicamento").html(tabla);
              
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
                    
                    //console.log(res);
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
                    var summ='';
                    var tabla='<table>'+
                              '<thead>'+
                                '<tr>'+
                                  '<th class="text-center" style="font-size: 1.4rem; color:pink;">Lote </th>'+
                                  '<th class="text-center" style="font-size: 1.4rem; color:pink;">Fecha de Caducidad</th>'+
                                  '<th class="text-center" style="font-size: 1.4rem; color:pink;">Cantidad Disponible</th>'+
                                '<tr>'+
                              '</thead><tbody>';
                    //console.log(res);
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
                    $("#div_update_lotes_medicamento").html(tabla);
              
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
                      $("#cont_request").html(request);

                    });
                  $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,id_produ:id_produ,action:"bitacora_agregar_lotes"},function(request)
                    {
                      $("#cont_request").html(request);

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
                      $("#cont_request").html(request);

                    });
                  $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,id_produ:id_produ,action:"bitacora_agregar_lotes"},function(request)
                    {
                      $("#cont_request").html(request);

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
                      $("#cont_request").html(request);

                    });
                  $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,id_produ:id_produ,action:"bitacora_agregar_lotes"},function(request)
                    {
                      $("#cont_request").html(request);

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
                      $("#cont_request").html(request);

                    });
                  $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,id_produ:id_produ,action:"bitacora_agregar_lotes"},function(request)
                    {
                      $("#cont_request").html(request);

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
                      $("#cont_request").html(request);

                    });
                  $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,id_produ:id_produ,action:"bitacora_agregar_lotes"},function(request)
                    {
                      $("#cont_request").html(request);

                    });
                      $("#div_modificar_categoria").hide();
                      $("#div_agregar_categoria").hide();
                      
                      $("#div_informacion_productos").hide();
                      $("#div_tabla_editar_producto").hide();
                      $("#div_tabla_productos").show();
            
              }
            });
    //btn cancelar edicion
    $("#btn_cancelar_edicion").click(function(event)
      {

        $("#div_tabla_productos").hide();
        $("#div_tabla_editar_producto").hide();
        $("#div_informacion_productos").hide();
        
        $("#div_tabla_venta").show();
      });
    //btn ver producto
      $("#tabla_productos").on("click","a#btn_ver_producto",function(event)
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
                    
                    //console.log(res);
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
                    //console.log(res);
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
                    
                    //console.log(res);
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
                    //console.log(res);
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
    /////////////////////
    $("#btn_cancelar_venta").click(function(event)
    {
      //console.log("cancelando venta...");
      $("#modal_cancelar_venta").modal("show");
    });
    $("#btn_continuar_cancelar_venta").click(function(event)
    {
      var usuario=$("#id_usuario_session").val();
      //console.log("usuario-->"+usuario);
      //obteniendo productos de venta
      $.get("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"get_productos_venta_espera"},function(res)
          {
              res=JSON.parse(res);
              //console.log(res);
              $.each(res,function(i, item)
              {
                var cantidad=item.cantidad;
                var lote=item.id_lote;
                //se suma los productos de la venta a cancelar
                 $.post("../../../core/controllers/controller_admon.php",{cantidad:cantidad,lote:lote,action:"sumar_productos_eliminados"},function(request)
                  {
                    $("#cont_request").html(request);
                  }); 
                 //console.log("productos listos para eliminar\ncantidad: "+cantidad+"\nlote: "+lote);
              });
              get_fechas_productos_xv();
              
          });
      //se pone estado de cancelado en la venta
      $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"cancelar_venta"},function(request)
        {
          $("#cont_request").html(request);
          //se registra la venta cancelada
          $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"bitacora_cancelar_venta"},function(request)
          {
            $("#cont_request").html(request);
            //se crea una nueva venta
            $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"create_venta_espera"},function(request)
            {
              //se trae la nueva venta en espera
              $("#cont_request").html(request);
              //console.log("creando venta en espera");
              $("#modal_cancelar_venta").modal("hide");
              get_venta();
            });
          });
        });
      $("#select_descuento").val("Seleccione");
    });
    //mostrar modal para confirmar venta
    $("#btn_cobrar_venta").click(function(event)
    {
      
      var descuento=$("#select_descuento").val();
      var usuario=$("#id_usuario_session").val();
      if(descuento!="Seleccione")
      {
        $("#modal_cobrar_venta").modal("show");
        
      }
      else
      {
        $("#modal_cobrar_venta").modal("show");

      }
      
    });
    //btn cobrar
    $("#btn_continuar_cobrar_venta").click(function(event)
    {
      var descuento=$("#select_descuento").val();
      var usuario=$("#id_usuario_session").val();
      if($("#opt_targeta").is(":checked"))
      {
        console.log("cobrando con tarjeta");
      
        if(descuento=="Seleccione")
        {
          descuento=0;
          $.post("../../../core/controllers/controller_admon.php",{descuento:descuento,usuario:usuario,action:"cobrar_venta_tarjeta"},function(request)
            {
              $("#cont_request").html(request);
              $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"create_venta_espera"},function(request)
                {
                  $("#cont_request").html(request);
                  $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"bitacora_cobrar_venta"},function(request)
                    {
                      $("#cont_request").html(request);
                      //console.log("cobrando...");
                      $("#modal_cobrar_venta").modal("hide");
                      $("#select_descuento").val("Seleccione");
                      $.get("../../../core/controllers/controller_admon.php",{action:"delete_vendidos"},function(res)
                        {
                            
                            $("#nombre_buscar_producto").val("");
                            get_venta();
                            get_fechas_productos_xv();
                            $("#opt_targeta").removeAttr("checked");
                        });
                      

                    });
                });
            });
           
        }
        else
        {
          $.post("../../../core/controllers/controller_admon.php",{descuento:descuento,usuario:usuario,action:"cobrar_venta_tarjeta"},function(request)
            {
              $("#cont_request").html(request);
              $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"create_venta_espera"},function(request)
                {
                  $("#cont_request").html(request);
                  $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"bitacora_cobrar_venta"},function(request)
                    {
                      $("#cont_request").html(request);
                      //console.log("cobrando...");
                      $("#modal_cobrar_venta").modal("hide");
                      $("#select_descuento").val("Seleccione");
                      $.get("../../../core/controllers/controller_admon.php",{action:"delete_vendidos"},function(res)
                        {
                            //console.log("Eliminando Vendidos");
                            $("#nombre_buscar_producto").val("");
                            get_venta();
                            get_fechas_productos_xv();
                            $("#opt_targeta").removeAttr("checked");
                        });
                    });
                });
            });
        }
        //ifs de cobrar
      }//if de tarjeta
      else
      {
        console.log("cobrando normalmente...");
        if(descuento=="Seleccione")
        {
          descuento=0;
          $.post("../../../core/controllers/controller_admon.php",{descuento:descuento,usuario:usuario,action:"cobrar_venta"},function(request)
            {
              $("#cont_request").html(request);
              $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"create_venta_espera"},function(request)
                {
                  $("#cont_request").html(request);
                  $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"bitacora_cobrar_venta"},function(request)
                    {
                      $("#cont_request").html(request);
                      //console.log("cobrando...");
                      $("#modal_cobrar_venta").modal("hide");
                      $("#select_descuento").val("Seleccione");
                      $.get("../../../core/controllers/controller_admon.php",{action:"delete_vendidos"},function(res)
                        {
                            
                            $("#nombre_buscar_producto").val("");
                            get_venta();
                            get_fechas_productos_xv();
                            
                        });
                      

                    });
                });
            });
           
        }
        else
        {
          $.post("../../../core/controllers/controller_admon.php",{descuento:descuento,usuario:usuario,action:"cobrar_venta"},function(request)
            {
              $("#cont_request").html(request);
              $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"create_venta_espera"},function(request)
                {
                  $("#cont_request").html(request);
                  $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"bitacora_cobrar_venta"},function(request)
                    {
                      $("#cont_request").html(request);
                      //console.log("cobrando...");
                      $("#modal_cobrar_venta").modal("hide");
                      $("#select_descuento").val("Seleccione");
                      $.get("../../../core/controllers/controller_admon.php",{action:"delete_vendidos"},function(res)
                        {
                            //console.log("Eliminando Vendidos");
                            $("#nombre_buscar_producto").val("");
                            get_venta();
                            get_fechas_productos_xv();
                        });
                    });
                });
            });
        }//else de cobrar
      }//esle de tarjeta
      });

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
                                    btn_vender_producto+
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
                                                btn_vender_producto+
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
                                        btn_vender_producto+
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
          $("#div_tabla_productos").hide();
          $("#div_form_registro_productos").hide();
          $("#div_tabla_editar_producto").hide();
          $("#div_informacion_productos").hide();
          $("#div_form_registro_productos").hide();
          $("#div_tabla_venta").show();
          $("#div_informacion_medicamentos").hide();
        }
        

        
      });
    //fin buscar
    //ver producto
    $("#tabla_productos").on("click","a#btn_ver_producto",function(event)
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
                    
                    //console.log(res);
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
                    //console.log(res);
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
                    
                    //console.log(res);
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
                    //console.log(res);
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
      //volver de ver medicamento
      $("#ver_medicamento_btn_volver").click(function(event)
      {
        //console.log("volver de ver productos");
        $("#div_tabla_venta").show();
        $("#div_tabla_productos").hide();
        $("#div_modificar_categoria").hide();
        $("#div_agregar_categoria").hide();
        $("#div_tabla_editar_producto").hide();
        $("#div_informacion_productos").hide();
        
        $("#div_informacion_medicamentos").hide();
      });
      //volver de ver productos
      $("#ver_producto_btn_volver").click(function(event)
      {
        //console.log("volver de ver productos");
        $("#div_tabla_venta").show();
        $("#div_tabla_productos").hide();
        $("#div_modificar_categoria").hide();
        $("#div_agregar_categoria").hide();
        $("#div_tabla_editar_producto").hide();
        $("#div_informacion_productos").hide();
        
        $("#div_informacion_medicamentos").hide();
      });
    //get product information while user is writing or paste a product code
    $("#modal_select_caducidades_producto").bind('change',function()
    {
      var producto_code=$("#producto_code").val();
      var fecha_venta=$("#select_fechas_caducidades_producto").val();
        $.get("../../../core/controllers/controller_admon.php",{fecha_venta:fecha_venta,producto_code:producto_code,action:"get_producto_cantidad_existente_venta"},function(res)
          {
              res=JSON.parse(res);
              var options_select='';
              ////console.log(res);
              $.each(res,function(i, item)
              {
                  options_select=item.cantidad_disponible;
              });
              $("#num_cantidad_producto").val(options_select);

              var vl=$("#num_cantidad_producto").val();
              var opciones='';
              for(var opt=1; opt<=vl; opt++)
              {
                opciones+='<option>'+opt+'</option>';
              }
              $("#select_cantidad_venta").html(opciones);
          });
    });
    $('#producto_code').bind('keyup input paste',function(event)
    {
      var producto_code=$(this).val();
      ////console.log(producto_code);
      /*
      $.get("../../../core/controllers/controller_admon.php",{code:code,action:"check_code"},function(res)
        {
          //console.log("...buscando...");
            res=JSON.parse(res);
            var options_select='';
            
            if(res!="")
            {
              ////console.log(res);
              var producto_code=$("#producto_code").val();
              var id_usuario=$("#id_usuario_session").val();
              var fecha_venta='';
              $("#modal_select_caducidades_producto").modal('show');

              $.get("../../../core/controllers/controller_admon.php",{producto_code:producto_code,action:"get_fechas_lote_venta"},function(res)
                {
                    res=JSON.parse(res);
                    var options_select='';
                    ////console.log(res);
                    $.each(res,function(i, item)
                    {
                        options_select+='<option>'+item.fecha_caducidad+'</option>'
                    });
                    $("#select_fechas_caducidades_producto").html(options_select);
                    fecha_venta=$("#select_fechas_caducidades_producto").val();
                      $.get("../../../core/controllers/controller_admon.php",{fecha_venta:fecha_venta,producto_code:producto_code,action:"get_producto_cantidad_existente_venta"},function(res)
                        {
                            res=JSON.parse(res);
                            var options_select='';
                            ////console.log(res);
                            $.each(res,function(i, item)
                            {
                                options_select=item.cantidad_disponible;
                            });
                            $("#num_cantidad_producto").val(options_select);

                            var vl=$("#num_cantidad_producto").val();
                            var opciones='';
                            for(var opt=1; opt<=vl; opt++)
                            {
                              opciones+='<option>'+opt+'</option>';
                            }
                            $("#select_cantidad_venta").html(opciones);
                        });
                });
              
            }
        });
      *///
      //console.log("carrito medicamentos...");
      $("#modal_agregar_medicamentos_venta").modal('show');

        //var producto_code=$(this).data("codigo_barras");
        var fecha_venta="";
        $("#codigo_barras_medicamento_vender").val(producto_code);
        $.get("../../../core/controllers/controller_admon.php",{producto_code:producto_code,action:"get_fechas_lote_venta"},function(res)
          {
              res=JSON.parse(res);
              var options_select='';

              ////console.log(res);
              $.each(res,function(i, item)
              {
                  options_select+='<option>'+item.fecha_caducidad+'</option>'
                  
              });
              $("#select_fechas_caducidades_agregar_medicamento_venta").html(options_select);
                fecha_venta=$("#select_fechas_caducidades_agregar_medicamento_venta").val();
                $.get("../../../core/controllers/controller_admon.php",{fecha_venta:fecha_venta,producto_code:producto_code,action:"get_producto_cantidad_existente_venta"},function(res)
                {
                    res=JSON.parse(res);
                    var options_select='';
                    //console.log("cantidad para vender... fecha"+fecha_venta);
                    //console.log(res);
                    $.each(res,function(i, item)
                    {
                        options_select=item.cantidad_disponible;
                    });
                    $("#num_cantidad_medicamento_agregar_venta").val(options_select);

                    var vl=$("#num_cantidad_medicamento_agregar_venta").val();
                    var opciones='<opt option-disabled>Seleccione</option>'
                    for(var opt=1; opt<=vl; opt++)
                    {
                      opciones+='<option>'+opt+'</option>';
                    }
                    $("#select_cantidad_venta_agregar_medicamento_venta").html(opciones);
                });
          });
    });
    //
    //validate search product area
      $("#form_producto_code").validate(
      {
            ignore:[],
            rules:{
              producto_code:"required"
            },
            messages:{
              producto_code:"Ingresa un codigo de producto"
            },
            errorElement:"div",
            errorPlacement:function(error,element){
              var placement=$(element).data("error");
              if(placement)
                $(placement).append(error);
              else
                error.insertAfter(error);
            },
            submitHandler:function(form)
            {
              
            }
      });
      //btn continuar agregar producto a venta
      $("#btn_continuar_fecha_producto").click(function(event)
      {
        var id_usuario=$("#id_usuario_session").val();
        var producto_code=$("#producto_code").val();
        var cantidad=$("#select_cantidad_venta").val();
        var fecha_caducidad=$("#select_fechas_caducidades_producto").val();
        //console.log("mandando producto...\nid_usuario: "+id_usuario+"\nproducto_code: "+producto_code+"\ncantidad: "+cantidad+"\nfecha_caducidad: "+fecha_caducidad);
        //se inserta en productos_venta
        $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,producto_code:producto_code,cantidad:cantidad,fecha_caducidad:fecha_caducidad,action:"create_venta"},function(request)
            {
              $("#cont_request").html(request);
              //se suma en total de la venta
              $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,producto_code:producto_code,cantidad:cantidad,fecha_caducidad:fecha_caducidad,action:"update_venta"},function(request)
                {
                  $("#cont_request").html(request);
                  //se descuenta cantidad de producto en venta
                  $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,producto_code:producto_code,cantidad:cantidad,fecha_caducidad:fecha_caducidad,action:"delete_on_almacen"},function(request)
                    {
                      $("#cont_request").html(request);
                      $("#modal_select_caducidades_producto").modal('hide');
                      $("#producto_code").val("");
                      get_venta();
                    });
                });
            });
      });
      $("#btn_continuar_modal_agregar_medicamento_venta").click(function(event)
      {
        var id_usuario=$("#id_usuario_session").val();
        var producto_code=$("#codigo_barras_medicamento_vender").val();
        var cantidad=$("#select_cantidad_venta_agregar_medicamento_venta").val();
        var fecha_caducidad=$("#select_fechas_caducidades_agregar_medicamento_venta").val();
        //console.log("mandando producto...\nid_usuario: "+id_usuario+"\nproducto_code: "+producto_code+"\ncantidad: "+cantidad+"\nfecha_caducidad: "+fecha_caducidad);
        //se inserta en productos_venta
        $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,producto_code:producto_code,cantidad:cantidad,fecha_caducidad:fecha_caducidad,action:"create_venta"},function(request)
            {
              $("#cont_request").html(request);
              //se suma en total de la venta
              $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,producto_code:producto_code,cantidad:cantidad,fecha_caducidad:fecha_caducidad,action:"update_venta"},function(request)
                {
                  $("#cont_request").html(request);
                  //se descuenta cantidad de producto en venta
                  $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,producto_code:producto_code,cantidad:cantidad,fecha_caducidad:fecha_caducidad,action:"delete_on_almacen"},function(request)
                    {
                      $("#cont_request").html(request);
                      $("#modal_agregar_medicamentos_venta").modal('hide');
                      $("#div_informacion_medicamentos").hide();
                      $("#div_informacion_productos").hide();
                      $("#div_tabla_productos").hide();
                      $("#div_tabla_venta").show();
                      $("#nombre_buscar_producto").val("");
                      $("#producto_code").val("");
                      get_venta();
                    });
                });
            });
      });
      $("#btn_continuar_modal_agregar_producto_venta").click(function(event)
      {
        var id_usuario=$("#id_usuario_session").val();
        var producto_code=$("#ver_producto_codigo_barras").val();
        var cantidad=$("#select_cantidad_venta_agregar_producto_venta").val();
        var fecha_caducidad=$("#select_fechas_caducidades_agregar_producto_venta").val();
        //console.log("mandando producto...\nid_usuario: "+id_usuario+"\nproducto_code: "+producto_code+"\ncantidad: "+cantidad+"\nfecha_caducidad: "+fecha_caducidad);
        //se inserta en productos_venta
        $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,producto_code:producto_code,cantidad:cantidad,fecha_caducidad:fecha_caducidad,action:"create_venta"},function(request)
            {
              $("#cont_request").html(request);
              //se suma en total de la venta
              $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,producto_code:producto_code,cantidad:cantidad,fecha_caducidad:fecha_caducidad,action:"update_venta"},function(request)
                {
                  $("#cont_request").html(request);
                  //se descuenta cantidad de producto en venta
                  $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,producto_code:producto_code,cantidad:cantidad,fecha_caducidad:fecha_caducidad,action:"delete_on_almacen"},function(request)
                    {
                      $("#cont_request").html(request);
                      $("#modal_agregar_productos_venta").modal('hide');
                      $("#div_informacion_medicamentos").hide();
                      $("#div_informacion_productos").hide();
                      $("#div_tabla_venta").show();
                      get_venta();
                    });
                });
            });
      });
      //btn eliminar producto de venta
      $("#tabla_venta_espera").on('click','a#btn_eliminar_producto_venta',function(event)
      {
        var id_usuario=$("#id_usuario_session").val();
        var id_venta=$(this).data('id_venta');
        var id_producto=$(this).data('id_producto');
        $("#id_producto_eliminar").val(id_producto);
        $("#id_venta_eliminar").val(id_venta);
          //console.log("enviando eliminacion de producto de venta\nid_venta: "+id_venta+
                      //"\nid_producto: "+id_producto);
        $("#modal_eliminar_producto_venta").modal('show');
        //eliminar un producto
        

      });
      ///////
      $("#btn_continuar_eliminar_producto").click(function(event)
        {
          var id_producto=$("#id_producto_eliminar").val();
          var id_venta=$("#id_venta_eliminar").val();
          var id_usuario=$("#id_usuario_session").val();
          //console.log("eliminando id_producto: "+id_producto);
          //sumar productos en almacen al eliminar de venta
          $.post("../../../core/controllers/controller_admon.php",{id_venta:id_venta,id_producto:id_producto,action:"update_almacen_delete"},function(request)
              {
                $("#cont_request").html(request);
              });
          //eliminar producto de la tabla productos_ventas
          $.post("../../../core/controllers/controller_admon.php",{id_venta:id_venta,id_producto:id_producto,action:"eliminar_productos_ventas"},function(request)
              {
                $("#cont_request").html(request);
              });
          //descontar costo de la cantidad de producto al eliminar de venta
          $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,id_producto:id_producto,action:"update_venta_total_delete"},function(request)
              {
                $("#cont_request").html(request);
              });
          //enviar a bitacora de eliminacion
          $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,id_producto:id_producto,action:"bitacora_delete_on_venta"},function(request)
              {
                $("#cont_request").html(request);
              });
          //abrir modal
          get_venta();
          $("#modal_eliminar_producto_venta").modal('hide');
          //actualizar tabla de venta
          
        });
      
      $("#select_fechas_caducidades_producto_modificar").bind('change',function()
      {
        var id_producto=$("#id_producto_modificar").val();
        var id_venta=$("#id_venta_modificar").val();
        var fecha_producto=$("#select_fechas_caducidades_producto_modificar").val();
        //console.log("canbiando fecha de venta\n fecha_caducidad: "+fecha_producto+"\n id_producto: "+id_producto);
        $.get("../../../core/controllers/controller_admon.php",{id_producto:id_producto,fecha_producto:fecha_producto,action:"get_producto_cantidad_existente_modificar"},function(cantidad_lote)
                {
                    cantidad_lote=JSON.parse(cantidad_lote);
                    var numeros='';
                    //console.log(cantidad_lote);
                    $.each(cantidad_lote,function(k, itemm)
                    {
                        numeros+=''+itemm.cantidad_disponible+''
                    });
                    $("#num_cantidad_producto_modificar").val(numeros);

                    var vl=$("#num_cantidad_producto_modificar").val();
                    var opciones='<opt option-disabled>Seleccione</option>'
                    for(var opt=1; opt<=vl; opt++)
                    {
                      opciones+='<option>'+opt+'</option>';
                    }
                    $("#select_cantidad_venta_modificar").html(opciones);
                }); 
      });


     
  });
//end document.read
//function to get venta with estate on wait
    function get_venta()
      {
        var id_usuario=$("#id_usuario_session").val();
        $.get("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,action:"get_venta_espera"},function(res)
          {
              res = JSON.parse(res);
              ////console.log(res);
              var tabla='';
              var id_producto='';
              var select;
              var fechas='';
              $.each(res, function(i, item)
              {
                  var btn_elimina='<a class="btn btn-simple btn-xs btn-hover-pink" id="btn_eliminar_producto_venta" data-toggle="tooltip" data-placement="top" title="Eliminar el producto: '+item.nombre+'" data-id_producto="'+item.id_producto+'" data-id_venta="'+item.id_venta+'">'+
                                    '<i class="fa fa-trash fa-2x"></i>'+
                                  '</a>';
                  
                tabla+='<tr class="col-12">'+
                          
                          '<td>'+item.nombre+'</td>'+
                          '<td>'+item.precio_mayoreo+'</td>'+
                          '<td>'+item.codigo_barras+'</td>'+
                          '<td>'+item.precio_publico+'</td>'+
                          '<td>'+item.categoria+'</td>'+
                          '<td>'+item.cantidad+'</td>'+
                          '<td>'+item.fecha_caducidad+'</td>'+
                          
                       '</tr>';
              });

              $("#tabla_venta_espera tbody").html(tabla);
              $('[data-toggle="tooltip"]').tooltip();
          });
        //get suma from venta
        $.get("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,action:"get_venta_suma_total_espera"},function(res)
          {
              res = JSON.parse(res);
              ////console.log(res);
              var suma_venta='';
              var total_neto;
              $.each(res, function(number,values)
              {
                  
                suma_venta+='<h4 id="suma_venta_j">'+values.total+'</h4>';
                total_neto=values.total;
                 
              });
              $("#div_suma_venta").html(suma_venta);
              $("#suma_total_venta").val(total_neto);
              
          }); 
      }
      function porcentages()
      {
        var vl=100;
        var opciones='<option option-disabled>Seleccione</option><option>3</option>';
        for(var opt=1; opt<=vl; opt++)
        {
          opt+=4;
          opciones+='<option>'+opt+'</option>';
          
          if(opt==100)
          {
            break;
          }
        }
        $("#select_descuento").html(opciones);
      }
      function get_fechas_productos_xv()
      {
        $.get("../../../core/controllers/controller_admon.php",{action:"get_fechas_productos_xv"},function(tabla)
          {
              tabla = JSON.parse(tabla);
              ////console.log(tabla);
              var notas='';
              
              $.each(tabla, function(number,values)
              {
               
                notas+='<div class="alert alert-warning">'+
                          '<div class="container-fluid">'+
                            '<div class="alert-icon">'+
                            ''+
                            '</div>'+
                          '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
                          '<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
                          '</button>'+
                          '<b>Nombre del producto: </b>'+values.nombre+
                          '<br>'+'<b>Codigo de barras:</b>'+values.codigo_barras+
                          '<br>'+'<b>Numero de lote: </b>'+values.lote+
                          '<br>'+'<b>Cantidad en lote: </b>'+values.cantidad_disponible+
                          '<br>'+'<b>Fecha de caducidad: </b>'+values.fecha_caducidad+
                          '</div>'+
                      '</div>';
                
                
                 
              });
              $("#div_noticias").html(notas);
                
              
          }); 
      }
      //
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
                    //console.log(res);
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
                    
                    //console.log(res);
                    $.each(res,function(i, item)
                    {
                        summ=''+item.suma_disponible+'';
                        
                    });
                    td_cantidad.html(summ);
              
                });
            //console.log("td= "+code);
          });
        }
    function productos_caducados()
      {
        $.get("../../../core/controllers/controller_admon.php",{action:"productos_caducados"},function(res)
            {
                
            });
      }
      function clear_inputs()
        {
          $("input.clear").val("");
        }
    
</script>
<?php include('../../partials/footer.php') ?>