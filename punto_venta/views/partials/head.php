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
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sistema de ventas(Empleado)</title>
  <link rel="shortcut icon" href="../../../resources/Images/sales_bag_shopping_bargain_retail_icon-icons.com_55340.png">
	<link rel="stylesheet" type="text/css" href="../../../resources/kit/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../../resources/kit/material-kit.css">
    <link rel="stylesheet" type="text/css" href="../../../resources/chaps/css/mine-styles.css">
    <link rel="stylesheet" type="text/css" href="../../../resources/font-awesome-4.7.0/css/font-awesome.min.css"/>
	<script type="text/javascript" src="../../../resources/kit/jquery.min.js"></script>
	<script type="text/javascript" src="../../../resources/kit/nouislider.min.js"></script>
	<script type="text/javascript" src="../../../resources/kit/bootstrap-datepicker-es.js"></script>
    <script type="text/javascript" src="../../../resources/kit/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../../../resources/kit/material-kit.js"></script>
	<script type="text/javascript" src="../../../resources/kit/material.min.js"></script>
	<script type="text/javascript" src="../../../resources/kit/bootstrap.min.js"></script>
</head>
<style type="text/css">
/*overs --------------------------------------------------------------------------*/
.opt-nav:hover
{
    background-color: rgba(0,0,0,.2);
}
.radius5
{
    border-style: solid;
    border-width: 2px;
    border-radius: 5px;
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
#opt_selected
{
  background-color: rgba(0,0,0,.2);
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
<div style="display:none" id="cont_request"></div> 
<nav class="navbar navbar-default pt0 pb0" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Empleado</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                
                    <li class="active_caducidades opt-nav"><a class="text-center" href="../../usuarios/empleados"><i class="fa-1x fa fa-calendar-check-o" data-toggle="tooltip" data-placement="top"  title=""></i><br>Caducidades</a>
                        </li>
                    <li class="active_productos opt-nav"><a class="text-center" href="../../productos/empleado"><i class="fa-1x fa fa-database" data-toggle="tooltip" data-placement="top"  title=""></i><br>Productos</a>
                    </li>
                    <li class="active_ventas opt-nav"><a class="text-center" href="../../ventas/empleado"><i class="fa-1x fa fa-shopping-cart" data-toggle="tooltip" data-placement="top"  title=""></i><br>Vender</a>
                    </li>

                    <li class="dropdown opt-nav">
                        <a href="#" class="text-center dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa-1x fa fa-user" data-toggle="tooltip" data-placement="top"  title=""></i><br>
                                <?php echo($nick_name) ?> <span class="caret"></span>
                                <input style="display: none;" type="text" name="id_usuario_session" id="id_usuario_session" class="id_usuario_session" value="<?php echo ($id_usuario); ?>">
                            </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a  data-toggle="modal" data-target="#modal_cierre">
                                    Salir
                                </a>
                            </li>
                        </ul>
                    </li>
               
            </ul>
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
<!--modal modificar cat medicamentos-->
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

<script type="text/javascript">
    $(document).ready(function()
    {
        $("#salir").click(function()
        {
            window.location=('../../../../punto_venta');
        })
        
        
       
    });
</script>

