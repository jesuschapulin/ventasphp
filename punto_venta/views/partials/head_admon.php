<?php session_start();

  if (!isset($_SESSION["sesion_ok"])) 
  {
    ?>
    <script type="text/javascript">
      window.location="../../../";
    </script>
    <?php
  }
  else
  {
    $id_usuario=$_SESSION["id_usuario"];
    $nick_name=$_SESSION["nick_name"];
    $password=$_SESSION["password"];
    $tipo_usuario=$_SESSION["tipo_usuario"];
  }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de ventas(Admon)</title>
    <link rel="shortcut icon" href="../../../resources/Images/sales_bag_shopping_bargain_retail_icon-icons.com_55340.png">
	<link rel="stylesheet" type="text/css" href="../../../resources/kit/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../resources/kit/material-kit.css">
    <!--importar iconos-->
    <link rel="stylesheet" type="text/css" href="../../../resources/font-awesome-4.7.0/css/font-awesome.min.css"/>
	<script type="text/javascript" src="../../../resources/kit/jquery.min.js"></script>
    <script type="text/javascript" src="../../../resources/kit/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../../resources/kit/material.min.js"></script>
	<script type="text/javascript" src="../../../resources/kit/nouislider.min.js"></script>
	<script type="text/javascript" src="../../../resources/kit/bootstrap-datepicker-es.js"></script>
    <script type="text/javascript" src="../../../resources/kit/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../../../resources/kit/material-kit.js"></script>
	
    
</head>
<style type="text/css">

.radius5
{
    border-style: solid;
    border-width: 2px;
    border-radius: 5px;
}
/*overs --------------------------------------------------------------------------*/
.opt-nav:hover
{
    background-color: rgba(0,0,0,.2);
}

/*backgrounds --------------------------------------------------------------------*/
.bg-grey
{
    background-color: grey;
}
.bg-border-purple
{
    background-color: #9C27B0;  
}
.bg-purple
{
    background-color: #9C27B0;
}
.bg-pink
{
    background-color: #E91E63  ;
    
}
.bg-blue
{
  background-color: #2CB7F5;
}

/*colors -------------------------------------------------------------------------*/

/*text colors*/
.txt-white
{
    color: #FFFFFF;
}
.txt-pink
{
    color: #E91E63;
}
.txt-red
{
    color: red;

}
.txt-blue
{
    color: #03A9F4;
}
/*padings ------------------------------------------------------------------*/
.pt2
{
    padding-top: 2rem;
}
.pt1
{
    padding-top: 1rem;
}
.pg-1
{
    padding: 1rem;
}
.pt0
{
    padding-top: 0;
}

.pt4
{
    padding-top: 4rem;
}
.pb2
{
    padding-bottom: 2rem;
}
.pb0
{
    padding-bottom: 0;
}
.pb4
{
    padding-bottom: 4rem;
}

.pd-0
{
    margin: 0;
    padding: 0;
}
.pl3
{
    margin-left: 3rem;
}
.pl0
{
    padding-left: 0;
}
.pr0
{
    padding-right: 0;
}
/*margings ----------------------------------------------------------------------------*/
.mt0
{
    margin-top: 0;
}
.mb0
{
    margin-bottom: 0;
}
.ml0
{
    margin-left: 0;
}
.mr0
{
    margin-right: 0;
}
.ml2
{
    margin-left: 2rem;
}

/*inputs -----------------------------------------------------------------------*/
.input_search
{
    border-style: solid;
    border-width: .1rem;
    border-radius: .3rem;
    border-color: #03A9F4;
}
/*div error*/
.div_error
{
    display: inline-block;
    vertical-align: top;
}
#tabla_usuarios .btn-hover-pink:hover
{
    background-color: #E91E63  ;
    color: white;
}
</style>
<body>
<div style="display:none" id="content_request"></div> 
<nav class="navbar navbar-default pt0 pb0" role="navigation">
    <div class="container-fluid pt0 pb0">
       
            <div class="navbar-header col-lg-3">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Administrador</a>
            </div>
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                        <li class="active_caducidades opt-nav"><a class="text-center" href="../../usuarios/admon"><i class="fa-1x fa fa-calendar-check-o" data-toggle="tooltip" data-placement="top"  title=""></i><br>Caducidades</a>
                        </li>
                        <li class="active_productos opt-nav"><a class="text-center" href="../../productos/admon"><i class="fa-1x fa fa-database" data-toggle="tooltip" data-placement="top"  title=""></i><br>Productos</a>
                        </li>
                        <li class="active_ventas opt-nav"><a class="text-center" href="../../ventas/admon"><i class="fa-1x fa fa-balance-scale" data-toggle="tooltip" data-placement="top"  title=""></i><br>Ventas</a>
                        </li>
                        <li class="active_ventas_admons opt-nav"><a class="text-center" href="../../ventas/admons"><i class="fa-1x fa fa-shopping-cart" data-toggle="tooltip" data-placement="top"  title=""></i><br>Vender</a>
                        </li>

                        <li class="dropdown opt-nav">
                            <a href="#" class="text-center dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa-1x fa fa-user" data-toggle="tooltip" data-placement="top"  title=""></i><br>
                                <?php echo($nick_name) ?> <span class="caret"></span>
                                <input style="display: none;" type="text" name="id_usuario_session" id="id_usuario_session" class="id_usuario_session" value="<?php echo ($id_usuario); ?>">
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a class="" data-toggle="modal" data-target="#modal_usuarios" >
                                        Usuarios
                                    </a>
                                </li>
                                <li>
                                    <a class="" data-toggle="modal" data-target="#modal_cierre" >
                                        Salir
                                    </a>
                                </li>
                                
                            </ul>
                        </li>
                </ul>
            </div>
        </div>
        
    </div>
</nav>

<div class="modal fade" id="modal_cierre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar cierre</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea salir ?</h4>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="salir">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal de busqueda de producto-->
<div class="modal fade" id="modal_confirmar_crear_usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar creacion de usuario</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea guardar este usuario ?</h4>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_continuar_confirmar_crear_usuario">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal de busqueda de producto-->
<div class="modal fade" id="modal_confirmar_update_usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar actualizacion de usuario</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea guardar los cambios para este usuario ?</h4>
      </div>
      <div class="modal-footer">
        
        <a  class="btn btn-primary " id="btn_continuar_confirmar_update_usuario">Continuar</a>
        <a type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</a>
      </div>
    </div>
  </div>
</div>
<!--modal de busqueda de producto-->
<div class="modal fade" id="modal_usuarios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div id="notificaciones_modal_usuarios">
            
        </div>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
            <!--tabla de usuarios-->
            <div id="div_tabla_usuarios" class="container col-sm-12 col-md-12 col-lg-12">
                <legend class="text text-center bg-purple card mr0 col-12"><p class="txt-white">Usuarios</p></legend>
                
                <div class="container col-sm-12 col-md-12 col-lg-12">
                    <table class="table col-12"  id="tabla_usuarios" >
                          <thead class="col-12" style="">
                                <tr class="col-12">
                                  
                                  <th data-field="nombre">Nombre</th>
                                  <th data-field="peso">Contraseña</th>
                                  <th data-field="acciones" class="text text-center">Acciones</th>

                                           
                                </tr>       
                          </thead>
                          <tbody>
                          </tbody>
                          
                                  
                    </table>
                </div>
                
            </div>
            <!--btn agregar usuario-->

            <div class="row">
                <div class="col-lg-5">
                    
                </div>
                <div class="col-lg-2" id="div_btn_agregar_usuario">
                    <a class="btn btn-simple" id="btn_agregar_usuario">
                        <i class="fa fa-plus-circle fa‐4x" data-toggle="tooltip" data-placement="top" title="Agregar un usuario">
                            
                        </i>
                    </a>
                </div>
                <div class="col-lg-5">
                    
                </div>
            </div>
            <!--div formulario agregar usuario-->
           <div class="" id="div_form_registro_usuario">
                <form class="form col-sm-12 col-md-12 col-lg-12  mt0" id="form_registro_usuarios"><legend class="text text-center bg-purple card mr0 col-12"><p class="txt-white">Agregar usuario</p></legend>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="input-group ">
                                <span class="input-group-addon">
                                    <i class="fa fa-user fa‐4x" data-toggle="tooltip" data-placement="top" title="El nombre del producto solo debe contener letras"></i>
                                </span>
                                <div class="form-group">
                                    <label class="control-label">Nombre Del Usuario</label>
                                    <input type="text" class="nombre_registro_usuario form-control validate" id="nombre_registro_usuario" name="nombre_registro_usuario" data-error=".error_nombre_registro_usuario">
                                    <div class="text text-left txt-red error_nombre_registro_usuario"></div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="input-group ">
                                <span class="input-group-addon">
                                    <i class="fa fa-key fa‐4x" data-toggle="tooltip" data-placement="top" title="El nombre del producto solo debe contener letras"></i>
                                </span>
                                <div class="form-group">
                                    <label class="control-label">Contraseña</label>
                                    <input type="text" class="contra_registro_usuario form-control validate" id="contra_registro_usuario" name="contra_registro_usuario" data-error=".error_contra_registro_usuario">
                                    <div class="text text-left txt-red error_contra_registro_usuario"></div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-shopping-basket fa‐4x" data-toggle="tooltip" data-placement="top" title="Seleccione un tipo"></i>
                                </span>
                                <div class="form-group ">
                                    <label class="control-label">Tipo de usuario</label>
                                    
                                    <select class="select_tipo_usuario form-control validate" id="select_tipo_usuario" name="select_tipo_usuario" data-error=".error_select_tipo_usuario"><option>Empleado</option>
                                                                <option>Administrador</option>
                                    </select>
                                    <div class="text text-left txt-red error_select_tipo_usuario"></div>
                                </div>

                                
                            </div>
                        </div>
                </form>
                <div class="modal-footer">
                    <a type="button" class="btn btn-primary " id="btn_continuar_registro_usuario">Continuar</a>
                    <a type="button" class="btn btn-simple " id="btn_volver_registro_usuario"><p class="txt-blue">Volver</p></a>
                </div>
           </div>
           <!--div form modifica usuario-->
           <div class="" id="div_form_update_usuario">
                <form class="form col-sm-12 col-md-12 col-lg-12  mt0" id="form_update_usuarios"><legend class="text text-center bg-purple card mr0 col-12"><p class="txt-white">Modificar usuario</p></legend>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="input-group ">
                                <span class="input-group-addon">
                                    <i class="fa fa-user fa‐4x" data-toggle="tooltip" data-placement="top" title="El nombre del producto solo debe contener letras"></i>
                                </span>
                                <div class="form-group">
                                    <label class="control-label">Nombre Del Usuario</label>
                                    <input type="text" class="nombre_update_usuario form-control validate" id="nombre_update_usuario" name="nombre_update_usuario" data-error=".error_nombre_update_usuario">
                                    <div class="text text-left txt-red error_nombre_update_usuario"></div>
                                </div>
                                <input type="text" name="id_usuario_update" id="id_usuario_update" style="display: none;">
                               
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="input-group ">
                                <span class="input-group-addon">
                                    <i class="fa fa-key fa‐4x" data-toggle="tooltip" data-placement="top" title="El nombre del producto solo debe contener letras"></i>
                                </span>
                                <div class="form-group">
                                    <label class="control-label">Contraseña</label>
                                    <input type="text" class="contra_update_usuario form-control validate" id="contra_update_usuario" name="contra_update_usuario" data-error=".error_contra_update_usuario">
                                    <div class="text text-left txt-red error_contra_update_usuario"></div>
                                </div>
                               
                            </div>
                        </div>
                </form>
                <div class="modal-footer">
                    <a type="button" class="btn btn-primary " id="btn_continuar_update_usuario">Continuar</a>
                    <a type="button" class="btn btn-simple " id="btn_volver_update_usuario"><p class="txt-blue">Volver</p></a>
                </div>
           </div>
            <!---->
        </div>
      </div>
    </div>
  </div>
</div>
<!--modal modificar productos-->
<div class="modal fade" id="modal_modificar_productos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar modificación</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea guardar los cambios para este producto ?</h4>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_modal_continuar_modificar_producto">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal crear productos-->
<div class="modal fade" id="modal_agregar_productos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar para crear</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea guardar este producto ?</h4>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-primary " id="btn_modal_continuar_agregar_producto">Continuar</button>
        <button type="button" class="btn btn-info btn-simple" data-dismiss="modal">Volver</button>
      </div>
    </div>
  </div>
</div>
<!--modal crear productos-->
<div class="modal fade" id="modal_eliminar_categoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar para eliminar</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea eliminar esta categoria ?</h4>
        <input type="text" id="id_categoria_eliminar" name="id_categoria_eliminar" style="display: none;">
      </div>
      <div class="modal-footer">
        
        <a  class="btn btn-primary " id="btn_continuar_eliminar_categoria">Continuar</a>
        <a  class="btn btn-info btn-simple" data-dismiss="modal">Volver</a>
      </div>
    </div>
  </div>
</div>
<!--modal crear productos-->
<div class="modal fade" id="modal_eliminar_marca" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar para eliminar</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea eliminar esta marca ?</h4>
        <input type="text" id="id_marca_eliminar" name="id_marca_eliminar" style="display: none;">
      </div>
      <div class="modal-footer">
        
        <a  class="btn btn-primary " id="btn_continuar_eliminar_marca">Continuar</a>
        <a  class="btn btn-info btn-simple" data-dismiss="modal">Volver</a>
      </div>
    </div>
  </div>
</div>
<!--modal crear productos-->
<div class="modal fade" id="modal_agregar_cat_medicamentos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar Para Crear</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea agregar esta categoria de medicamentos ?</h4>
        <input type="text" id="id_agregar_cat_medicamentos" name="id_agregar_cat_medicamentos" style="display: none;">
      </div>
      <div class="modal-footer">
        
        <a  class="btn btn-primary " id="btn_continuar_modal_cat_medicamentos">Continuar</a>
        <a  class="btn btn-info btn-simple" data-dismiss="modal">Volver</a>
      </div>
    </div>
  </div>
</div>
<!--modificar categoria de medicamentos-->
<div class="modal fade" id="modal_modificar_cat_medicamentos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <legend class="text txt-white">Confirmar Para Modificar</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea modificar esta categoria de medicamentos ?</h4>
      </div>
      <div class="modal-footer">
        
        <a  class="btn btn-primary " id="btn_continuar_modal_mod_cat_medicamentos">Continuar</a>
        <a  class="btn btn-info btn-simple" data-dismiss="modal">Volver</a>
      </div>
    </div>
  </div>
</div>
<!--modal espera-->
<div class="modal fade" id="modal_espera" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <a class="close btn btn-danger btn-xs" id="btn_cerrar_espera" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar">&times;</a>
        <legend class="text txt-white">Cargando productos porfavor espere ...</legend>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_eliminar_usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <a class="close btn btn-danger btn-xs" id="btn_cerrar_espera" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar">&times;</a>
        <legend class="text txt-white">Confirmar para eliminar usuario</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea Eliminar este usuario ?</h4>
        <input type="text" id="id_usuario_elimina" style="display: none;">
        <input type="text" id="nombre_usuario_elimina" style="display: none;">
        <input type="text" id="contra_usuario_elimina" style="display: none;">
      </div>
      <div class="modal-footer">
        <a  class="btn btn-primary " id="btn_continuar_modal_eliminar_usuario">Continuar</a>
        <a  class="btn btn-info btn-simple" data-dismiss="modal">Volver</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_delete_caducados" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <a class="close btn btn-danger btn-xs" id="btn_cerrar_espera" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar">&times;</a>
        <legend class="text txt-white">Confirmar para eliminar usuario</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro Que Desea Eliminar Estos Productos ?</h4>
        
      </div>
      <div class="modal-footer">
        <a  class="btn btn-primary " id="btn_continuar_modal_delete_caducados">Continuar</a>
        <a  class="btn btn-info btn-simple" data-dismiss="modal">Volver</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_eliminar_usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <a class="close btn btn-danger btn-xs" id="btn_cerrar_espera" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar">&times;</a>
        <legend class="text txt-white">Confirmar para eliminar usuario</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro que desea Eliminar este usuario ?</h4>
        <input type="text" id="id_usuario_elimina" style="display: none;">
        <input type="text" id="nombre_usuario_elimina" style="display: none;">
        <input type="text" id="contra_usuario_elimina" style="display: none;">
      </div>
      <div class="modal-footer">
        <a  class="btn btn-primary " id="btn_continuar_modal_eliminar_usuario">Continuar</a>
        <a  class="btn btn-info btn-simple" data-dismiss="modal">Volver</a>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modal_eliminar_lote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header card bg-blue">
        <a class="close btn btn-danger btn-xs" id="btn_cerrar_espera" data-dismiss="modal" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Cerrar">&times;</a>
        <legend class="text txt-white">Confirmar para eliminar lote</legend>
      </div>
      <div class="modal-body">
        <h4 class="text text-center">Seguro Que Desea Eliminar Este lote ?</h4>
        <input type="text" name="modal_eliminar_lote_id" id="modal_eliminar_lote_id" style="display: none;">
      </div>
      <div class="modal-footer">
        <a  class="btn btn-primary " id="btn_continuar_modal_eliminar_lote">Continuar</a>
        <a  class="btn btn-info btn-simple" data-dismiss="modal">Volver</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
    $(document).ready(function()
    {
        
        //
        get_usuarios();
        
        
        $("#div_form_update_usuario").hide();
        $("#div_form_registro_usuario").hide();

        $("#salir").click(function()
        {
            window.location=('../../..');
        })
        $("#btn_agregar_usuario").click(function()
        {
            $("#div_tabla_usuarios").hide();
            $("#div_form_registro_usuario").show();
            $("#div_btn_agregar_usuario").hide();
            
        })
        $("#btn_volver_registro_usuario").click(function()
        {
            $("#div_tabla_usuarios").show();
            $("#div_form_registro_usuario").hide();
            $("#div_btn_agregar_usuario").show();
            
        })
        $("#div_tabla_usuarios").on('click','a#btn_update_usuario',function()
        {
            
            var id_usuario=$(this).data("id");
            var nick_name=$(this).data("nick_name");
            var password=$(this).data("password");
            $("#id_usuario_update").val(id_usuario);
            $("#nombre_update_usuario").val(nick_name);
            $("#contra_update_usuario").val(password);
            $("#div_tabla_usuarios").hide();
            $("#div_form_registro_usuario").hide();
            $("#div_btn_agregar_usuario").hide();
            
            $("#div_form_update_usuario").show();

            //console.log("actualizando usuario\nid_usuario: "+id_usuario);
        })
        $("#div_tabla_usuarios").on('click','a#btn_elimina_usuario',function()
        {
            
            var id_usuario=$(this).data("id");
            var nick_name=$(this).data("nick_name");
            var password=$(this).data("password");
            $("#id_usuario_elimina").val(id_usuario);
            $("#nombre_usuario_elimina").val(nick_name);
            $("#contra_usuario_elimina").val(password);
            
            $("#modal_eliminar_usuario").modal("show");

            //console.log("eliminando usuario\nid_usuario: "+id_usuario);
        })
        $("#btn_continuar_modal_eliminar_usuario").click(function()
        {
            var id_usuario=$("#id_usuario_elimina").val();
            $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,action:"eliminar_usuario"},function(request)
            {
              $("#content_request").html(request);
              get_usuarios();
            });
            $("#modal_eliminar_usuario").modal("hide");

        });
        $("#btn_volver_update_usuario").click(function()
        {
            $("#div_tabla_usuarios").show();
            $("#div_form_registro_usuario").hide();
            $("#div_btn_agregar_usuario").show();
            
            $("#div_form_update_usuario").hide();
        });
        
        //validar registro de usuario
        $("#btn_continuar_confirmar_crear_usuario").click(function()
        {
            $("#form_registro_usuarios").submit();
            $("#modal_confirmar_crear_usuario").modal("hide");
            $("#modal_usuarios").modal("show");
            $("#div_form_update_usuario").hide();
            $("#div_form_registro_usuario").hide();
            $("#div_btn_agregar_usuario").show();
            $("#div_tabla_usuarios").show();
        });
        $("#btn_continuar_registro_usuario").click(function()
        {
            $("#modal_confirmar_crear_usuario").modal("show");
            $("#modal_usuarios").modal("hide");

        });
        $("#form_registro_usuarios").validate({
                ignore:[],
                rules:
                {
                  nombre_registro_usuario:"required",
                  contra_registro_usuario: "required"
                },
                messages:
                {
                  nombre_registro_usuario:"El campo nombre de usuario no puede estar vacio",
                  contra_registro_usuario:"El campo contraseña no puede estar vacio"
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
                    var usuario=$("#nombre_registro_usuario").val();
                    var contra=$("#contra_registro_usuario").val();
                    var tipo=$("#select_tipo_usuario").val();
                    //console.log("validando usuario..."+usuario+"<--->"+contra);
                    $.get("../../../core/controllers/controller_admon.php",{usuario:usuario,action:"check_registro_usuario"},function(res)
                          {
                              res = JSON.parse(res);
                              if(res!="")
                              {
                                //console.log("el usuario ya existe... XD")
                              }
                              else
                              {
                                $.post("../../../core/controllers/controller_admon.php",{tipo:tipo,usuario:usuario,contra:contra,action:"create_usuario"},function(request)
                                    {
                                        $("#content_request").html(request);

                                    });
                                $.post("../../../core/controllers/controller_admon.php",{usuario:usuario,contra:contra,action:"create_venta_espera_registro"},function(request)
                                    {
                                      $("#content_request").html(request);
                                      //console.log("creando venta en espera");
                                    });
                                get_usuarios();
                              }
                          });
                    
                }
              });
        //validar actualizacion de usuario
        $("#btn_continuar_update_usuario").click(function()
        {
            $("#modal_usuarios").modal("hide");
            $("#modal_confirmar_update_usuario").modal("show");
            
        });
        $("#btn_continuar_confirmar_update_usuario").click(function()
        {
            $("#form_update_usuarios").submit();
            $("#modal_usuarios").modal("show");
            $("#modal_confirmar_update_usuario").modal("hide");
            
           
        });
        $("#form_update_usuarios").validate({
                ignore:[],
                rules:
                {
                  nombre_update_usuario:"required",
                  contra_update_usuario: "required"
                },
                messages:
                {
                  nombre_update_usuario:"El campo nombre de usuario no puede estar vacio",
                  contra_update_usuario:"El campo contraseña no puede estar vacio"
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
                    var id_usuario=$("#id_usuario_update").val();
                    var usuario=$("#nombre_update_usuario").val();
                    var contra=$("#contra_update_usuario").val();
                    //console.log("validando usuario..."+usuario+"<--->"+contra);
                    $.post("../../../core/controllers/controller_admon.php",{id_usuario:id_usuario,usuario:usuario,contra:contra,action:"update_usuario"},function(request)
                        {
                            $("#content_request").html(request);
                            
                        });
                    $("#div_form_update_usuario").hide();
                            $("#div_btn_agregar_usuario").show();
                            get_usuarios();
                            $("#div_tabla_usuarios").show();
                }
              });
        
    });
//fin document
function get_usuarios()
        {
            $.get("../../../core/controllers/controller_admon.php",{action:"get_all_usuarios"},function(res)
          {
              res = JSON.parse(res);
              //console.log(res);
              var html="";
              $.each(res, function(i, item)
              {
               
                
                var btn_actualiza='<a class="btn btn-simple btn-sm btn-hover-pink" id="btn_update_usuario" data-id="'+item.id_usuario+'" data-nick_name="'+item.nick_name+'" data-password="'+item.password+'" data-toggle="tooltip" data-placement="top" title="Actualizar informacion del usuario: '+item.nick_name+'">'+
                                '<i class="fa fa-refresh fa-2x"></i>'+
                            '</a>';
                var btn_elimina_usuario='<a class="btn btn-simple btn-sm btn-hover-pink" id="btn_elimina_usuario" data-id="'+item.id_usuario+'" data-nick_name="'+item.nick_name+'" data-password="'+item.password+'" data-toggle="tooltip" data-placement="top" title="Eliminar informacion del usuario: '+item.nick_name+'">'+
                    '<i class="fa fa-trash fa-2x"></i>'+
                '</a>';

                html+="<tr class='col-12'>"+
                          
                          "<td>"+item.nick_name+"</td>"+
                          "<td>"+item.password+"</td>"+
                          "<td class='text-center'>"+btn_actualiza+"</td>"+
                          "<td class='text-center'>"+btn_elimina_usuario+"</td>"+
                      "</tr>";
              });
              $("#tabla_usuarios tbody").html(html);
              $('[data-toggle="tooltip"]').tooltip();
            
          });
        }
</script>

