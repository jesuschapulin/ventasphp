<?php session_start();
if(isset($_POST["action"])||isset($_GET["action"]))
	{
		require_once('../models/model_admon.php');
		$base=new BASE();
		$action=(isset($_POST["action"]))?$_POST["action"]:$_GET["action"];
		switch ($action) 
		{
			case 'delete_caducados':
				$id_usuario=$_POST['id_usuario'];
				$productos=new BASE();
				$id_producto=$id_usuario;
				$valor="delete_caducados";
				?>
				<script type="text/javascript">

					var nota='<div class="alert alert-success">'+
							    '<div class="container-fluid">'+
								  '<div class="alert-icon">'+
								  '</div>'+
								  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
									'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
								  '</button>'+
								  '<b>Alerta: </b>Productos Eliminados Exitosamente<br>'+
								  	'<i class="fa fa-smile-o"></i>'+
							    '</div>'+
							'</div>';
						$("#notificaciones_caducidades").html(nota);
						$("#notificaciones_caducidades .alert").hide(15000);

				</script>
				<?php
				$productos->edit($valor,$id_producto,'','','','','','','','','');
			break;
			case 'cancelar_venta':
				?>	
					<script>
						//console.log("recibiendo cancelacion ...");
					</script>
				<?php
				$usuario=$_POST['usuario'];
				$valor="cancelar_venta";
				$id_producto=$usuario;
				$ventas=new BASE();
				$ventas->edit($valor,$id_producto,'','','','','','','','','');
			break;
			case 'bitacora_cancelar_venta':
				?>	
					<script>
						//console.log("cancelacion en bitacora...");
					</script>
				<?php
				$usuario=$_POST['usuario'];
				$pass='se cancelo una venta';
				$bitacora=new BASE();
				$valor="bitacora_cancelar_venta";
				$bitacora->get_all($valor,'','','','','','',$usuario,$pass);
			break;
			case 'update_lotes':
				?>	
					<script>
						//console.log("Controller recibiendo actualizacion de lotes...");
					</script>
				<?php
				$id_lote=$_POST['id_lote'];
				$numero_lote=$_POST['numero_lote'];
				$fecha_caducidad=$_POST['fecha_caducidad'];
				$cantidad=$_POST['cantidad'];
				$pass=$id_lote;
				$usuario=$numero_lote;
				$dia=$fecha_caducidad;
				$mes=$cantidad;

				$almacen=new BASE();
				$valor="update_lotes";
				$almacen->get_all($valor,$dia,$mes,'','','','',$usuario,$pass);
			break;
			case 'eliminar_usuario':
				
				$id_usuario=$_POST['id_usuario'];
				$usuario=$id_usuario;
				$usuarios=new BASE();
				$valor="eliminar_usuario";
				?>
				<script type="text/javascript">

					var nota='<div class="alert alert-success">'+
							    '<div class="container-fluid">'+
								  '<div class="alert-icon">'+
								  '</div>'+
								  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
									'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
								  '</button>'+
								  '<b>Alerta: </b>Usuario eliminado<br>'+
								  	'<i class="fa fa-smile-o"></i>'+
							    '</div>'+
							'</div>';
						$("#notificaciones_modal_usuarios").html(nota);
						$("#notificaciones_modal_usuarios .alert").hide(15000);

				</script>
				<?php
				$usuarios->get_all($valor,'','','','','','',$usuario,'');
			break;
			case 'bitacora_agregar_lotes':
				?>	
					<script>
						//console.log("agregando lote en bitacora...");
					</script>
				<?php
				$id_usuario=$_POST['id_usuario'];
				$id_produ=$_POST['id_produ'];
				$usuario=$id_usuario;
				$pass=$id_produ;
				$bitacora=new BASE();
				$valor="bitacora_agregar_lotes";
				$bitacora->get_all($valor,'','','','','','',$usuario,$pass);
			break;
			case 'get_productos_venta_espera':
				$usuario=$_GET['usuario'];
				$valor="get_productos_venta_espera";
				$pro_ventas=new BASE();
				print_r($pro_ventas->get_all($valor,'','','','','','',$usuario,''));

			break;
			case 'sumar_productos_eliminados':
				$cantidad=$_POST['cantidad'];
				$lote=$_POST['lote'];
				$valor="get_cantidad_lote";
				$almacen=new BASE();
				$pass=$lote;
				$almacen->get_all($valor,'','','','','','','',$pass);
				$cantidad_disponible=$almacen->cantidad_disponible;
				if($cantidad_disponible!="")
				{
					?>
						<script type="text/javascript">
							//console.log("controller cantidad de lote actualizada al cancelar venta");
						</script>
					<?php
					$valor="update_lote_cantidad_cancelar_venta";
					$cantidad_total=$cantidad_disponible+$cantidad;
					$pass=$cantidad_total;
					$usuario=$lote;
					$Lotes=new BASE();
					$Lotes->get_all($valor,'','','','','','',$usuario,$pass);
				}
				

			break;
			case 'check_registro_usuario':
				$usuario=$_GET['usuario'];
				$usuarios=new BASE();
				$valor="check_usuarios";
				print_r($usuarios->get_all($valor,'','','','','','',$usuario,''));
			break;
			case 'create_venta_espera_registro':
				$usuario=$_POST['usuario'];
				$contra=$_POST['contra'];
				$usuarios=new BASE();
				$pass=$contra;
				$valor="get_info_usuario";
				$usuarios->get_all($valor,'','','','','','',$usuario,$pass);
				$id_marca=$usuarios->id_usuario;
				if($id_marca!="")
				{
					?>
						<script type="text/javascript">
							//console.log("controller venta en espera creada");
						</script>
					<?php
					$valor="create_venta_espera_registro";
					$ventas=new BASE();
					$ventas->set($valor,'','','','','','','','','','','',$id_marca,'','','');
				}
			break;
			case 'create_venta_espera':
				$usuario=$_POST['usuario'];
				$id_marca=$usuario;
				?>
					<script type="text/javascript">
						//console.log("controller venta en espera creada");
					</script>
				<?php
				$valor="create_venta_espera";
				$ventas=new BASE();
				$ventas->set($valor,'','','','','','','','','','','',$id_marca,'','','');
			break;
			case 'cobrar_venta':
				?>
					<script type="text/javascript">
						//console.log("controller venta cobrada");
					</script>
				<?php
				$descuento=$_POST['descuento'];
				$usuario=$_POST['usuario'];
				$venta=new BASE();
				$valor="get_total_venta";
				$venta->get_all($valor,'','','','','','',$usuario,'');
				$dosis=$descuento;
				$titulo_marca=$venta->total;
				$mult=(($descuento)*($venta->total))/100;
				$id_categoria=($venta->total)-($mult);
				$formula=$mult;
				if($id_categoria!="")
				{
					?>
						<script type="text/javascript">
							//console.log("total_obtenido");
						</script>

					<?php
					$id_marca=$usuario;
					$valor="cobrar_venta";
					$ventas=new BASE();
					$ventas->set($valor,$titulo_marca,'','','','','','','','','','',$id_marca,$id_categoria,$formula,$dosis);
				}
				else
				{
					?>
						<script type="text/javascript">
							//console.log("total_obtenido");
						</script>

					<?php
					$id_marca=$usuario;
					$valor="cobrar_venta";
					$ventas=new BASE();
					$ventas->set($valor,$titulo_marca,'','','','','','','','','','',$id_marca,$id_categoria,$formula,$dosis);
				}
			break;
			case 'cobrar_venta_tarjeta':
				?>
					<script type="text/javascript">
						//console.log("controller venta cobrada");
					</script>
				<?php
				$descuento=$_POST['descuento'];
				$usuario=$_POST['usuario'];
				$venta=new BASE();
				$valor="get_total_venta";
				$venta->get_all($valor,'','','','','','',$usuario,'');
				$dosis=$descuento;
				$titulo_marca=$venta->total;
				$mult=(($descuento)*($venta->total))/100;
				$id_categoria=($venta->total)-($mult);
				$formula=$mult;
				if($id_categoria!="")
				{
					?>
						<script type="text/javascript">
							//console.log("total_obtenido");
						</script>

					<?php
					$id_marca=$usuario;
					$valor="cobrar_venta_tarjeta";
					$ventas=new BASE();
					$ventas->set($valor,$titulo_marca,'','','','','','','','','','',$id_marca,$id_categoria,$formula,$dosis);
				}
				else
				{
					?>
						<script type="text/javascript">
							//console.log("total_obtenido");
						</script>

					<?php
					$id_marca=$usuario;
					$valor="cobrar_venta_tarjeta";
					$ventas=new BASE();
					$ventas->set($valor,$titulo_marca,'','','','','','','','','','',$id_marca,$id_categoria,$formula,$dosis);
				}
			break;
			case 'create_venta':
				$valor="check_venta";
				$tabla_ventas=new BASE();
				$id_usuario=$_POST['id_usuario'];
				$producto_code=$_POST['producto_code'];
				$cantidad=$_POST['cantidad'];
				$fecha_caducidad=$_POST['fecha_caducidad'];
				$usuario=$id_usuario;
				$id_venta="";
				$id_producto="";

				if($tabla_ventas->get_all($valor,'','','','','','',$usuario,''))
				{
					$valor="get_datos_venta";
					$datos_venta=new BASE();
					$datos_venta->get_all($valor,'','','','','','',$usuario,'');
					$id_venta=$datos_venta->id_venta;
					$total_venta=$datos_venta->total;
					if($id_venta!="")
					{
						$valor="get_datos_producto";
						$pass=$producto_code;
						$productos=new BASE();
						$productos->get_all($valor,'','','','','','','',$pass);
						$id_producto=$productos->id_producto;
						$precio_producto=$productos->precio_publico;


						if($id_producto!="")
						{
							$valor="get_datos_lote";
							$pass=$fecha_caducidad;
							$usuario=$id_producto;
							$almacen_lotes=new BASE();
							$almacen_lotes->get_all($valor,'','','','','','',$usuario,$pass);
							$id_registro=$almacen_lotes->id_registro;
							$almacen_cantidad=$almacen_lotes->cantidad_disponible;

							if($id_registro!="")
							{
								?>
								<script type="text/javascript">
									//console.log("insertando en productos_venta...");
								</script>
								<?php
								//insertar producto en tabla productos_ventas
								$valor="set_producto_venta";
								$titulo_marca=$id_registro;
								$lote_cantidad=$cantidad;
								$id_produ=$id_producto;
								$id_marca=$id_venta;
								$productos_ventas=new BASE();
								$productos_ventas->set($valor,$titulo_marca,'','','',$lote_cantidad,$id_produ,'','','','','',$id_marca,'','','');
								
							}
							

						}
					}
				}
				else
				{
					?>
					<script type="text/javascript">
						//console.log(" creando venta...");
					</script>
					<?php
				}
				
			break;
			case 'update_venta':
				$id_usuario=$_POST['id_usuario'];
				$producto_code=$_POST['producto_code'];
				$cantidad=$_POST['cantidad'];
				$fecha_caducidad=$_POST['fecha_caducidad'];
				$usuario=$id_usuario;
				$id_venta="";
				$id_producto="";

				$valor="get_datos_venta";
				$datos_venta=new BASE();
				$datos_venta->get_all($valor,'','','','','','',$usuario,'');
				$id_venta=$datos_venta->id_venta;
				$total_venta=$datos_venta->total;
				if($total_venta!="")
				{
					$valor="get_datos_producto";
					$pass=$producto_code;
					$productos=new BASE();
					$productos->get_all($valor,'','','','','','','',$pass);
					$id_producto=$productos->id_producto;
					$precio_producto=$productos->precio_publico;
					if($precio_producto!="")
					{
						?>
						<script type="text/javascript">
							//console.log("actualizado total en ventas...");
						</script>
						<?php
						//actualizar total en tabla ventas
						$valor="update_total_venta_espera";
						$suma_total=$precio_producto*$cantidad;
						$suma_venta=$total_venta+$suma_total;
						$ventas_table=new BASE();
						$usuario=$id_venta;
						$pass=$suma_venta;
						$ventas_table->get_all($valor,'','','','','','',$usuario,$pass);
					}
				}
			break;
			case 'delete_on_almacen':
				$id_usuario=$_POST['id_usuario'];
				$producto_code=$_POST['producto_code'];
				$cantidad=$_POST['cantidad'];
				$fecha_caducidad=$_POST['fecha_caducidad'];

					$valor="get_datos_producto";
					$pass=$producto_code;
					$productos=new BASE();
					$productos->get_all($valor,'','','','','','','',$pass);
					$id_producto=$productos->id_producto;
					$precio_producto=$productos->precio_publico;
					if($precio_producto!="")
					{
						?>
							<script type="text/javascript">
								//console.log("sacando cantidad de lote...");
							</script>
							<?php
						$valor="get_lote_cantidad";
						$usuario=$fecha_caducidad;
						$pass=$id_producto;
						$lote=new BASE();
						$lote->get_all($valor,'','','','','','',$usuario,$pass);
						$cantidad_lote=$lote->cantidad_disponible;
						if($cantidad_lote!="")
						{
							?>
							<script type="text/javascript">
								//console.log("descontando en almacen...");
							</script>
							<?php
							//actualizar total en tabla ventas
							$valor="delete_on_almacen";
							$almacen=new BASE();
							$pass=$id_producto;
							$usuario=$fecha_caducidad;
							$res_cantidad=$cantidad_lote-$cantidad;
							$ano2=$res_cantidad;
							$almacen->get_all($valor,'','','','','',$ano2,$usuario,$pass);
						}
					}
				
			break;
			case 'bitacora_cobrar_venta':
				?>
						<script type="text/javascript">

							//console.log("insertando en bitacora...");

							var nota='<div class="alert alert-success">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>Venta Cobrada Exitosamente<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(15000);
						</script>
						<?php
				$usuario=$_POST['usuario'];
				$usuario=$usuario;
				$pass='se cobro una venta';
				$bitacora=new BASE();
				$valor="bitacora_cobrar_venta";
				$bitacora->get_all($valor,'','','','','','',$usuario,$pass);
				
			break;
			case 'delete_vendidos':
				$valor="delete_vendidos";
				$almacen=new BASE();
				$almacen->get_all($valor,'','','','','','','','');
			break;
			case 'bitacora_delete_on_venta':
				?>
					<script type="text/javascript">
						//console.log("se ha insertado en la bitacora de eliminación :v");
					</script>
				<?php
				$id_usuario=$_POST['id_usuario'];
				$id_producto=$_POST['id_producto'];
				$usuario=$id_usuario;
				$pass='Eliminación de producto en venta';
				$bitacora=new BASE();
				$valor="bitacora_delete_on_venta";
				$bitacora->get_all($valor,'','','','','','',$usuario,$pass);
				
			break;
			case 'update_venta_total_delete':
				$id_usuario=$_POST['id_usuario'];
				$id_producto=$_POST['id_producto'];
				$usuario=$id_usuario;
				$valor="get_datos_venta";
				$datos_venta=new BASE();
				$datos_venta->get_all($valor,'','','','','','',$usuario,'');
				$id_venta=$datos_venta->id_venta;
				$total_venta=$datos_venta->total;
				if($total_venta!=null)
				{
					
					$valor="get_datos_producto_delete";
					$pass=$id_producto;
					$productos=new BASE();
					$productos->get_all($valor,'','','','','','','',$pass);
					$id_producto=$productos->id_producto;
					$precio_producto=$productos->precio_publico;
					if($precio_producto!=null)
					{
						?>
								<script type="text/javascript">
									//console.log("obteniendo total de venta");
								</script>
							<?php
						$valor="get_datos_lote_producto";
						$pass=$id_venta;
						$usuario=$id_producto;
						$productos_ventas=new BASE();
						$productos_ventas->get_all($valor,'','','','','','',$usuario,$pass);
						$cantidad=$productos_ventas->cantidad_venta;
						
							?>
								<script type="text/javascript">
									//console.log("total actualizado. dont eat me :D");
								</script>
							<?php
							//actualizar total en tabla ventas
							$valor="update_total_venta_espera";
							$suma_total=$precio_producto*$cantidad;
							$suma_venta=$total_venta-$suma_total;
							$ventas_table=new BASE();
							$usuario=$id_venta;
							$pass=$suma_venta;
							$ventas_table->get_all($valor,'','','','','','',$usuario,$pass);	
						
						
							
					}
					
				}
			break;
			case 'update_almacen_delete':
				$id_venta=$_POST['id_venta'];
				$id_producto=$_POST['id_producto'];
				$valor="get_datos_lote_producto";
				$pass=$id_venta;
				$usuario=$id_producto;
				$almacen_lotes=new BASE();
				$almacen_lotes->get_all($valor,'','','','','','',$usuario,$pass);
				$id_registro=$almacen_lotes->id_registro;
				$cantidad_lote=$almacen_lotes->cantidad_lote;
				$cantidad_venta=$almacen_lotes->cantidad_venta;
				if($cantidad_lote!="")
				{
					?>
						<script type="text/javascript">
							//console.log("Recibiendo actualizacion para eliminar en venta... cantidad encontrada");
						</script>
					<?php
					//sumar cantidad eliminada en almacen
					$valor="update_lote_cantidad_disponible_eliminar";
					$usuario=$id_registro;
					$suma_lote=$cantidad_lote+$cantidad_venta;
					$pass=$suma_lote;
					$almacen=new BASE();
					$almacen->get_all($valor,'','','','','','',$usuario,$pass);
				}
			break;
			case 'eliminar_productos_ventas':
				$id_venta=$_POST['id_venta'];
				$id_producto=$_POST['id_producto'];
				$valor="get_datos_lote_producto";
				$pass=$id_venta;
				$usuario=$id_producto;
				$productos_ventas=new BASE();
				$productos_ventas->get_all($valor,'','','','','','',$usuario,$pass);
				$id_productos_venta=$productos_ventas->id_productos_venta;
				
				if($id_productos_venta!="")
				{
					?>
						<script type="text/javascript">
							//console.log("Eliminando de productos_ventas");
						</script>
					<?php
					//sumar cantidad eliminada en almacen
					$valor="eliminar_productos_ventas";
					$usuario=$id_productos_venta;
					$table_pro_sales=new BASE();
					$table_pro_sales->get_all($valor,'','','','','','',$usuario,'');
				}
			break;
			
			case 'get_fechas_lote_venta':
				$producto_code=$_GET['producto_code'];
				$pass=$producto_code;
				$valor="get_fechas_lote_venta";
				$tabla_almacen=new BASE();
				print_r($tabla_almacen->get_all($valor,'','','','','','','',$pass));
				
			break;
			case 'get_fechas_lote_venta_modificar':
				$id_producto=$_GET['id_producto'];
				$pass=$id_producto;
				$valor="get_fechas_lote_venta_modificar";
				$tabla_almacen=new BASE();
				print_r($tabla_almacen->get_all($valor,'','','','','','','',$pass));
				
			break;
			case 'check_code':
				$code=$_GET['code'];
				$pass=$code;
				$valor="check_code";
				$tabla_productos=new BASE();
				print_r($tabla_productos->get_all($valor,'','','','','','','',$pass));
				
			break;
			case "get_producto_cantidad_existente_venta":
				$fecha_venta=$_GET['fecha_venta'];
				$producto_code=$_GET['producto_code'];
				$usuario=$fecha_venta;
				$pass=$producto_code;
				$valor="get_producto_cantidad_existente_venta";
				print_r($base->get_all($valor,'','','','','','',$usuario,$pass));
			break;
			case "get_producto_cantidad_existente":

				$producto_code=$_GET['producto_code'];
				$pass=$producto_code;
				$valor="get_producto_cantidad_existente";
				print_r($base->get_all($valor,'','','','','','','',$pass));
			break;
			case "get_producto_cantidad_existente_modificar":
				$id_producto=$_GET['id_producto'];
				$fecha_producto=$_GET['fecha_producto'];
				$usuario=$fecha_producto;
				$pass=$id_producto;
				$valor="get_producto_cantidad_existente_modificar";
				print_r($base->get_all($valor,'','','','','','',$usuario,$pass));
			break;
			case 'get_venta_espera':
				$valor="get_venta_espera";
				$id_usuario=$_GET['id_usuario'];
				$tabla_productos=new BASE();
				$usuario=$id_usuario;
				print_r($tabla_productos->get_all($valor,'','','','','','',$usuario,''));
			break;
			case 'get_venta_suma_total_espera':
				$valor="get_venta_suma_total_espera";
				$id_usuario=$_GET['id_usuario'];
				$tabla_productos=new BASE();
				$usuario=$id_usuario;
				print_r($tabla_productos->get_all($valor,'','','','','','',$usuario,''));
			break;
			case 'entrar':
				$valor="entrar";
				$usuario=$_POST["usuario"];
				$pass=$_POST["pass"];
				if($base->get_all($valor,'','','','','','',$usuario,$pass))
				{

					//obtener el tipo de usuario, para redireccionar
					$valor='get_tipo_usuario';
					$tabla_usuarios=new BASE();
					$tabla_usuarios->get_all($valor,'','','','','','',$usuario,$pass);
					if($tabla_usuarios->tipo_usuario=='Administrador')
					{
						$valor="get_datos_usuario";
						$data_usuarios=new BASE();
						$data_usuarios->get_all($valor,'','','','','','',$usuario,$pass);
						$_SESSION["sesion_ok"]=true;
						$_SESSION["id_usuario"]=$data_usuarios->id_usuario;
						$_SESSION["nick_name"]=$data_usuarios->nick_name;
						$_SESSION["password"]=$data_usuarios->password;
						$_SESSION["tipo_usuario"]=$data_usuarios->tipo_usuario;
						?>
						<script type="text/javascript">

							//console.log("controller dice ingresando--");

							var nota='<div class="alert alert-success">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>Bienvenido Administrador<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_loggin").html(nota);
							window.location="views/usuarios/admon";
							
						</script>
						<?php
						echo("tipo-->"."--nombre-->".$data_usuarios->nick_name);
						
					}
					else if($tabla_usuarios->tipo_usuario=='Empleado')
					{
						$valor="get_datos_usuario";
						$data_usuarios=new BASE();
						$data_usuarios->get_all($valor,'','','','','','',$usuario,$pass);
						$_SESSION["sesion_ok"]=true;
						$_SESSION["id_usuario"]=$data_usuarios->id_usuario;
						$_SESSION["nick_name"]=$data_usuarios->nick_name;
						$_SESSION["password"]=$data_usuarios->password;
						$_SESSION["tipo_usuario"]=$data_usuarios->tipo_usuario;
						?>
						<script type="text/javascript">

							//console.log("controller dice ingresando--");

							var nota='<div class="alert alert-success">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>Bienvenido empleado<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_loggin").html(nota);
							window.location="views/ventas/empleado";
							
						</script>
						<?php
						
					}
					//ultima modificacion

				}
				else
				{
					?>
						<script type="text/javascript">

							//console.log("controller dice ingresando--");

							var nota='<div class="alert alert-danger">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>Ususario o contraseña no encontrados, verifique que sean correctos<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_loggin").html(nota);
							//window.location="views/usuarios";
							
						</script>
						<?php
				}
			break;
			case 'get_all_productos':
				$valor="get_all_productos";
				print_r($base->get_all($valor,'','','','','','','','')); 
			break;
			case 'productos_caducados':
				$valor="productos_caducados";
				$base->get_all($valor,'','','','','','','',''); 
			break;
			case 'get_all_productos_categoria':
				$id_categoria=$_GET['id_categoria'];
				$pass=$id_categoria;
				$valor="get_all_productos_categoria";
				print_r($base->get_all($valor,'','','','','','','',$pass)); 
			break;
			case 'get_all_productos_marca':
				$id_marca=$_GET['id_marca'];
				$pass=$id_marca;
				$valor="get_all_productos_marca";
				print_r($base->get_all($valor,'','','','','','','',$pass)); 
			break;
			case 'get_all_productos_medicamentos':
				$id_categoria=$_GET['id_categoria'];
				$pass=$id_categoria;
				$valor="get_all_productos_medicamentos";
				print_r($base->get_all($valor,'','','','','','','',$pass)); 
			break;
			case 'create_cat_medicamentos':
				$titulo_categoria=$_POST['titulo_categoria'];
				$descripcion_categoria=$_POST['descripcion_categoria'];
				$usuario=$titulo_categoria;
				$valor="check_cat_medicamentos";
				$base= new BASE();
				
				if(!$base->get_all($valor,'','','','','','',$usuario,''))
				{
					$valor="create_cat_medicamentos";
					$usuario=$titulo_categoria;
					$pass=$descripcion_categoria;
					$categorias=new BASE();
					?>
						<script type="text/javascript">

							//console.log("controller dice ingresando--");

							var nota='<div class="alert alert-success">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>Categoria de Medicamentos Ha Sido Creada Exitosamente<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(12000);
							
						</script>
						<?php
					$categorias->get_all($valor,'','','','','','',$usuario,$pass);
				}
				else
				{
					?>
						<script type="text/javascript">

							//console.log("controller dice ingresando--");

							var nota='<div class="alert alert-danger">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>La categoria de Medicamentos ya existe<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(15000);
							
						</script>
						<?php
				}

			break;
			case 'create_categoria':
				$titulo_categoria=$_POST['titulo_categoria'];
				$descripcion_categoria=$_POST['descripcion_categoria'];
				$usuario=$titulo_categoria;
				$valor="check_categoria";
				$base= new BASE();
				
				if(!$base->get_all($valor,'','','','','','',$usuario,''))
				{
					$valor="create_categoria";
					$usuario=$titulo_categoria;
					$pass=$descripcion_categoria;
					$categorias=new BASE();
					?>
						<script type="text/javascript">

							//console.log("controller dice ingresando--");

							var nota='<div class="alert alert-success">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>Categoria creada exitosamente<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(12000);
							
						</script>
						<?php
					$categorias->get_all($valor,'','','','','','',$usuario,$pass);
				}
				else
				{
					?>
						<script type="text/javascript">

							//console.log("controller dice ingresando--");

							var nota='<div class="alert alert-danger">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>La categoria ya existe<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(15000);
							
						</script>
						<?php
				}

			break;
			case 'update_marca':
				$id_marca=$_POST['id_marca'];
				$titulo_marca=$_POST['titulo_marca'];
				$descripcion_marca=$_POST['descripcion_marca'];
				$pass=$id_marca;
				$usuario=$descripcion_marca;
				$ano2=$titulo_marca;
				$valor="update_marca";
				$base= new BASE();
				?>
				<script type="text/javascript">

					//console.log("controller dice ingresando--");

					var nota='<div class="alert alert-success">'+
							    '<div class="container-fluid">'+
								  '<div class="alert-icon">'+
									''+
								  '</div>'+
								  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
									'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
								  '</button>'+
								  '<b>Alerta: </b>Marca actualizada exitosamente<br>'+
								  	'<i class="fa fa-smile-o"></i>'+
							    '</div>'+
							'</div>';
					$("#notificaciones_productos").html(nota);
					$("#notificaciones_productos .alert").hide(12000);
					
				</script>
				<?php
				$base->get_all($valor,'','','','','',$ano2,$usuario,$pass); 
			break;
			case 'eliminar_categoria':
				$id_categoria=$_POST['id_categoria'];
				$categorias=new BASE();
				$pass=$id_categoria;
				$valor="eliminar_categoria";
				?>
				<script type="text/javascript">

					//console.log("controller dice ingresando--");

					var nota='<div class="alert alert-success">'+
							    '<div class="container-fluid">'+
								  '<div class="alert-icon">'+
									''+
								  '</div>'+
								  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
									'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
								  '</button>'+
								  '<b>Alerta: </b>Categoria eliminada<br>'+
								  	'<i class="fa fa-smile-o"></i>'+
							    '</div>'+
							'</div>';
					$("#notificaciones_productos").html(nota);
					$("#notificaciones_productos .alert").hide(12000);
				</script>
				<?php
				$categorias->get_all($valor,'','','','','','','',$pass);
			break;
			case 'eliminar_marca':
				$id_marca=$_POST['id_marca'];
				$marcas=new BASE();
				$pass=$id_marca;
				$valor="eliminar_marca";
				?>
				<script type="text/javascript">


					var nota='<div class="alert alert-success">'+
							    '<div class="container-fluid">'+
								  '<div class="alert-icon">'+
									''+
								  '</div>'+
								  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
									'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
								  '</button>'+
								  '<b>Alerta: </b>Marca eliminada<br>'+
								  	'<i class="fa fa-smile-o"></i>'+
							    '</div>'+
							'</div>';
					$("#notificaciones_productos").html(nota);
					$("#notificaciones_productos .alert").hide(12000);
				</script>
				<?php
				$marcas->get_all($valor,'','','','','','','',$pass);
			break;
			case 'update_categoria':
				$id_categoria=$_POST['id_categoria'];
				$titulo_categoria=$_POST['titulo_categoria'];
				$descripcion_categoria=$_POST['descripcion_categoria'];
				$pass=$id_categoria;
				$usuario=$descripcion_categoria;
				$ano2=$titulo_categoria;
				$valor="update_categoria";
				$base= new BASE();
				?>
				<script type="text/javascript">


					var nota='<div class="alert alert-success">'+
							    '<div class="container-fluid">'+
								  '<div class="alert-icon">'+
									''+
								  '</div>'+
								  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
									'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
								  '</button>'+
								  '<b>Alerta: </b>Categoria actualizada exitosamente<br>'+
								  	'<i class="fa fa-smile-o"></i>'+
							    '</div>'+
							'</div>';
					$("#notificaciones_productos").html(nota);
					$("#notificaciones_productos .alert").hide(12000);
					
				</script>
				<?php
				$base->get_all($valor,'','','','','',$ano2,$usuario,$pass); 
			break;
			case 'modificar_cat_medicamentos':
				$id_categoria=$_POST['id_categoria'];
				$titulo_categoria=$_POST['titulo_categoria'];
				$descripcion_categoria=$_POST['descripcion_categoria'];
				$pass=$id_categoria;
				$usuario=$descripcion_categoria;
				$ano2=$titulo_categoria;
				$valor="modificar_cat_medicamentos";
				$base= new BASE();
				?>
				<script type="text/javascript">


					var nota='<div class="alert alert-success">'+
							    '<div class="container-fluid">'+
								  '<div class="alert-icon">'+
									''+
								  '</div>'+
								  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
									'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
								  '</button>'+
								  '<b>Alerta: </b>Categoria actualizada exitosamente<br>'+
								  	'<i class="fa fa-smile-o"></i>'+
							    '</div>'+
							'</div>';
					$("#notificaciones_productos").html(nota);
					$("#notificaciones_productos .alert").hide(12000);
					
				</script>
				<?php
				$base->get_all($valor,'','','','','',$ano2,$usuario,$pass); 
			break;
			case 'get_all_categorias':
				$valor="get_all_categorias";
				print_r($base->get_all($valor,'','','','','','','','')); 
			break;
			case 'get_all_categorias_for_select_agregar':
				$valor="get_all_categorias";
				print_r($base->get_all($valor,'','','','','','','','')); 
			break;
			case 'get_all_categorias_for_select_agregar_marcas':
				$valor="get_all_marcas";
				print_r($base->get_all($valor,'','','','','','','','')); 
			break;
			case 'get_all_medicamentos':
				$valor="get_all_medicamentos";
				print_r($base->get_all($valor,'','','','','','','','')); 
			break;
			case 'get_all_categorias_for_select_agregar_tipo_medicamentos':
				$valor="get_all_tipo_medicamentos";
				print_r($base->get_all($valor,'','','','','','','','')); 
			break;

			case 'get_all_marcas':
				$valor="get_all_marcas";
				print_r($base->get_all($valor,'','','','','','','','')); 
			break;

			case 'get_all_ventas':
				$valor="get_all_ventas";
				print_r($base->get_all($valor,'','','','','','','','')); 
			break; 
			case 'get_ventas_total':
				$valor="get_ventas_total";
				print_r($base->get_all($valor,'','','','','','','','')); 
			break; 
			case 'get_all_usuarios':
				$valor="get_all_usuarios";
				print_r($base->get_all($valor,'','','','','','','','')); 
			break;
			case 'get_fechas_productos_xv':
				$valor="get_fechas_productos_xv";
				$productos=new BASE();
				print_r($productos->get_all($valor,'','','','','','','','')); 
			break;
			case 'get_ventas_periodo':
				$fecha_periodo1=$_GET['fecha_periodo1'];
				$date1=DateTime::CreateFromFormat("m/d/Y",$fecha_periodo1);
				$fecha_periodo2=$_GET['fecha_periodo2'];
				$date2=DateTime::CreateFromFormat("m/d/Y",$fecha_periodo2);

				$dia=$date1->format("d");
				$mes=$date1->format("m");
				$ano=$date1->format("Y");
				$dia2=$date2->format("d");
				$mes2=$date2->format("m");
				$ano2=$date2->format("Y");
				$valor="get_ventas_periodo";
				print_r($base->get_all($valor,$dia,$mes,$ano,$dia2,$mes2,$ano2,'','')); 
			break;
			case 'get_ventas_periodo_total':
				$fecha_periodo1=$_GET['fecha_periodo1'];
				$date1=DateTime::CreateFromFormat("m/d/Y",$fecha_periodo1);
				$fecha_periodo2=$_GET['fecha_periodo2'];
				$date2=DateTime::CreateFromFormat("m/d/Y",$fecha_periodo2);

				$dia=$date1->format("d");
				$mes=$date1->format("m");
				$ano=$date1->format("Y");
				$dia2=$date2->format("d");
				$mes2=$date2->format("m");
				$ano2=$date2->format("Y");
				$valor="get_ventas_periodo_total";
				print_r($base->get_all($valor,$dia,$mes,$ano,$dia2,$mes2,$ano2,'','')); 
			break;
			case 'get_caducados':
				$valor="get_caducados";
				print_r($base->get_all($valor,'','','','','','','',''));
			break;
			case 'get_caducidades_periodo':
				$fecha_periodo1=$_GET['fecha_periodo1'];
				$fecha_periodo2=$_GET['fecha_periodo2'];

				$dia=0;
				$mes=0;
				$ano=$fecha_periodo1;
				$dia2=0;
				$mes2=0;
				$ano2=$fecha_periodo2;
				$valor="get_caducidades_periodo";
				print_r($base->get_all($valor,$dia,$mes,$ano,$dia2,$mes2,$ano2,'',''));
			break;
			case 'get_caducidades_fecha':
				$fecha_busqueda=$_GET['fecha_busqueda'];
				$dia=0;
				$mes=0;
				$ano=$fecha_busqueda;
				$valor="get_caducidades_fecha";
				print_r($base->get_all($valor,$dia,$mes,$ano,'','','','',''));
			break;
			case 'get_ventas_fecha':
				$fecha_busqueda=$_GET['fecha_busqueda'];
				$date=DateTime::CreateFromFormat("m/d/Y",$fecha_busqueda);
				$dia=$date->format("d");
				$mes=$date->format("m");
				$ano=$date->format("Y");
				$valor="get_ventas_fecha";
				$base=new BASE();
				print_r($base->get_all($valor,$dia,$mes,$ano,'','','','','')); 
			break;

			case 'get_ventas_fecha_total':
				$fecha_busqueda=$_GET['fecha_busqueda'];
				$date=DateTime::CreateFromFormat("m/d/Y",$fecha_busqueda);
				$dia=$date->format("d");
				$mes=$date->format("m");
				$ano=$date->format("Y");
				$valor="get_ventas_fecha_total";
				print_r($base->get_all($valor,$dia,$mes,$ano,'','','','','')); 
			break;
			//gets
			case "get_busqueda_producto":
				$nombre_busqueda=$_GET['nombre_busqueda'];
				$valor="get_busqueda_producto";
				print_r($base->get($valor,'',$nombre_busqueda,'')); 
			break;
			case "get_busqueda_producto_formula":
				$nombre_busqueda=$_GET['nombre_busqueda'];
				$valor="get_busqueda_producto_formula";
				print_r($base->get($valor,'',$nombre_busqueda,'')); 
			break;
			case "get_busqueda_producto_codigo_barras":
				$nombre_busqueda=$_GET['nombre_busqueda'];
				$valor="get_busqueda_producto_codigo_barras";
				print_r($base->get($valor,'',$nombre_busqueda,'')); 
			break;
			case "get_info_producto":
				$id_producto=$_GET['id_producto'];
				$nombre_busqueda=$_GET['nombre_busqueda'];
				$valor="get_info_producto";
				print_r($base->get($valor,'',$nombre_busqueda,$id_producto)); 
			break;
			case "get_info_producto_cantidad_existente":
				$id_producto=$_GET['id_producto'];
				$valor="get_info_producto_cantidad_existente";
				print_r($base->get($valor,'','',$id_producto)); 
			break;
			case "get_info_producto_cantidad_existente_tab_productos":
				$code=$_GET['code'];
				$id_producto=$code;
				$valor="get_info_producto_cantidad_existente_tab_productos";
				print_r($base->get($valor,'','',$id_producto)); 
			break;
			
			case "get_info_producto_lotes":
				$id_producto=$_GET['id_producto'];
				$valor="get_info_producto_lotes";
				print_r($base->get($valor,'','',$id_producto)); 
			break;
			case "get_info_producto_lotes_tab_productos":
				$code=$_GET['code'];
				$id_producto=$code;
				$valor="get_info_producto_lotes_tab_productos";
				print_r($base->get($valor,'','',$id_producto)); 
			break;
			case "get_info_medicamento":
				$id_producto=$_GET['id_producto'];
				$nombre_busqueda=$_GET['nombre_busqueda'];
				$valor="get_info_medicamento";
				print_r($base->get($valor,'',$nombre_busqueda,$id_producto)); 
			break;
			///creates
			case 'create_marca':
			$titulo_marca=$_POST['titulo_marca'];
			$descripcion_marca=$_POST['descripcion_marca'];
			$valor="get_marca";
				if(!$base->get($valor,$titulo_marca))
				{
					?>
						<script type="text/javascript">
							
							var nota='<div class="alert alert-success">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>la marca ha sido creada correctamente<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(12000);
						</script>
					<?php

					$table_marcas=new BASE();
					$valor="create_marca";
					$table_marcas->set($valor,$titulo_marca,$descripcion_marca);
					
					
				}
				else
				{
					?>
						<script type="text/javascript">
							//console.log("la marca ya existe, no se puede crear");
							var nota='<div class="alert alert-danger">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>la marca ya existe, no se puede crear<br>'+
										  	'<i class="fa fa-frown-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(12000);
						</script>
					<?php
				}
					
			
			
			break;
			
			case 'set_lote_producto':
			$id_usuario=$_POST['id_usuario'];
			$lote_numero=$_POST['lote_numero'];
			$lote_fecha=$_POST['lote_fecha'];
			$lote_cantidad=$_POST['lote_cantidad'];
			$id_producto=$_POST['id_producto'];
			$id_produ=$_POST['id_produ'];
			$valor="get_lote_producto";
				if(!$base->get($valor,'','',$id_producto,$lote_numero,$lote_cantidad))
				{
					?>
						<script type="text/javascript">
							//console.log("validando lote de producto...");
							var nota='<div class="alert alert-success">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>El lote ha sido creado exitosamente<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#div_lotes_notificaciones").html(nota);
							$("#div_lotes_notificaciones .alert").hide(15000);
						</script>
					<?php
					$valor="get_lote_producto_fecha";
					$date=DateTime::CreateFromFormat("m/d/Y",$lote_fecha);
					$dia=$date->format("d");
					$mes=$date->format("m");
					$ano=$date->format("Y");
					if(!$base->get($valor,'','',$id_producto,$lote_numero,$lote_cantidad,$ano,$mes,$dia))
					{
						?>
							<script type="text/javascript">
								
								var nota='<div class="alert alert-success">'+
										    '<div class="container-fluid">'+
											  '<div class="alert-icon">'+
												''+
											  '</div>'+
											  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
												'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
											  '</button>'+
											  '<b>Alerta: </b>El lote ha sido creado exitosamente con fecha valida<br>'+
											  	'<i class="fa fa-smile-o"></i>'+
										    '</div>'+
										'</div>';
								$("#div_lotes_notificaciones").html(nota);
								$("#div_lotes_notificaciones .alert").hide(15000);
							</script>
						<?php

						$almacen=new BASE();
						$valor="set_lote_producto";
						$lote_fecha_caducidad=$ano.$mes.$dia;
						$titulo_marca=$id_usuario;
						$almacen->set($valor,$titulo_marca,'',$lote_numero,$lote_fecha_caducidad,$lote_cantidad,$id_produ,'','','','','','','','','');
						
						
					}
					else
					{
						?>
							<script type="text/javascript">
								var nota='<div class="alert alert-danger">'+
										    '<div class="container-fluid">'+
											  '<div class="alert-icon">'+
												''+
											  '</div>'+
											  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
												'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
											  '</button>'+
											  '<b>Alerta: </b>la fecha de lote ya existe, vea la informacion del producto, e intente de nuevo<br>'+
											  	'<i class="fa fa-frown-o"></i>'+
										    '</div>'+
										'</div>';
								$("#div_lotes_notificaciones").html(nota);
							</script>
						<?php
					}
					
					
				}
				else
				{
					?>
						<script type="text/javascript">
							var nota='<div class="alert alert-danger">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>El numero de lote ya existe, vea la informacion del producto, e intente de nuevo<br>'+
										  	'<i class="fa fa-frown-o"></i>'+
									    '</div>'+
									'</div>';
							$("#div_lotes_notificaciones").html(nota);
						</script>
					<?php
				}
				
			break;
			case 'set_lote_producto_registro':
			$id_usuario=$_POST['id_usuario'];
			$lote_numero=$_POST['lote_numero'];
			$lote_fecha=$_POST['lote_fecha'];
			$lote_cantidad=$_POST['lote_cantidad'];
			$id_producto=$_POST['id_producto'];
			$id_produ=0;
			$valor="get_lote_producto_registro";
				if($base->get($valor,'','',$id_producto,$lote_numero,$lote_cantidad))
				{
					
					$productos_table=new BASE();
					$valor="get_id_producto_registro";
					$nombre_busqueda=$id_producto;
					$productos_table->get($valor,'',$nombre_busqueda,'','','','','','');
					$id_produ=$productos_table->id_producto;
					if($id_produ!="")
					{
						?>
							<script type="text/javascript">
								console.log("creando lotes de registro...");
								var nota='<div class="alert alert-success">'+
										    '<div class="container-fluid">'+
											  '<div class="alert-icon">'+
												''+
											  '</div>'+
											  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
												'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
											  '</button>'+
											  '<b>Alerta: </b>El lote ha sido creado exitosamente<br>'+
											  	'<i class="fa fa-smile-o"></i>'+
										    '</div>'+
										'</div>';
								$("#div_lotes_notificaciones").html(nota);
								$("#div_lotes_notificaciones .alert").hide(15000);
							</script>
						<?php
						$almacen=new BASE();
						$valor="set_lote_producto";
						$lote_fecha_caducidad=$lote_fecha;
						$titulo_marca=$id_usuario;
						$almacen->set($valor,$titulo_marca,'',$lote_numero,$lote_fecha_caducidad,$lote_cantidad,$id_produ,'','','','','','','','','');
					}
						
					
				}
				else
				{
					?>
						<script type="text/javascript">
							var nota='<div class="alert alert-danger">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>El producto aun no existe, no se pueden crear los lotes<br>'+
										  	'<i class="fa fa-frown-o"></i>'+
									    '</div>'+
									'</div>';
							$("#div_lotes_notificaciones").html(nota);
						</script>
					<?php
				}
				
			break;
			case 'update_producto':
				?>
					<script type="text/javascript">
						
						var nota='<div class="alert alert-success">'+
								    '<div class="container-fluid">'+
									  '<div class="alert-icon">'+
										''+
									  '</div>'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
									  '</button>'+
									  '<b>Alerta: </b>El producto ha sido actualizado exitosamente<br>'+
									  	'<i class="fa fa-smile-o"></i>'+
								    '</div>'+
								'</div>';
						$("#notificaciones_productos").html(nota);
						$("#notificaciones_productos .alert").hide(15000);
					</script>
				<?php
				$id_producto=$_POST['id_producto'];
				$nombre_producto=$_POST['nombre_producto'];
				$uso_producto=$_POST['uso_producto'];
				$codigo_barras_producto=$_POST['codigo_barras_producto'];
				$precio_mayoreo_producto=$_POST['precio_mayoreo_producto'];
				$precio_publico_producto=$_POST['precio_publico_producto'];
				$categoria=$_POST['categoria'];
				$marca=$_POST['marca'];
				$titulo_marca=$marca;
				$nombre_busqueda=$categoria;
				$id_marca;
				$id_categoria;

				$valor="get_id_marca";
				$marcas=new BASE();
				$marcas->get($valor,$titulo_marca,'','','','','','','');
				$id_marca=$marcas->id_marca;
				
				$valor="get_id_categoria";
				$categorias=new BASE();
				$categorias->get($valor,'',$nombre_busqueda,'','','','','','');
				$id_categoria=$categorias->id_categoria_producto;

				$valor="update_producto";
				$productos=new BASE();
				$productos->edit($valor,$id_producto,$nombre_producto,$uso_producto,$codigo_barras_producto,$precio_mayoreo_producto,$precio_publico_producto,$id_marca,$id_categoria,'','');
				
			break;
			case 'update_medicamento':
				?>
					<script type="text/javascript">
						var nota='<div class="alert alert-success">'+
								    '<div class="container-fluid">'+
									  '<div class="alert-icon">'+
										''+
									  '</div>'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
									  '</button>'+
									  '<b>Alerta: </b>El producto ha sido actualizado exitosamente<br>'+
									  	'<i class="fa fa-smile-o"></i>'+
								    '</div>'+
								'</div>';
						$("#notificaciones_productos").html(nota);
						$("#notificaciones_productos .alert").hide(15000);
					</script>
				<?php
				$id_producto=$_POST['id_producto'];
				$formula=$_POST['formula'];
				$dosis=$_POST['dosis'];
				$cat_medicamento=$_POST['cat_medicamento'];
				$titulo_marca=$cat_medicamento;
				$id_categoria;

				$valor="get_id_cat_medicamento";
				$medicamentos=new BASE();
				$medicamentos->get($valor,$titulo_marca,'','','','','','','');
				$id_categoria=$medicamentos->id_categoria;
				
				$valor="update_medicamento";
				$productos=new BASE();
				$productos->edit($valor,$id_producto,'','','','','','',$id_categoria,$formula,$dosis);
				
			break;
			case 'create_producto':
				
				$nombre_producto=$_POST['nombre_producto'];
				$uso_producto=$_POST['uso_producto'];
				$codigo_barras_producto=$_POST['codigo_barras_producto'];
				$precio_mayoreo_producto=$_POST['precio_mayoreo_producto'];
				$precio_publico_producto=$_POST['precio_publico_producto'];
				$categoria=$_POST['categoria'];
				$marca=$_POST['marca'];
				$titulo_marca=$marca;
				$nombre_busqueda=$categoria;
				$id_marca;
				$id_categoria;
				$productos_table=new BASE();
				$pass=$codigo_barras_producto;
				$valor="check_code_producto";
				if(!$productos_table->get_all($valor,'','','','','','','',$pass))
				{
					$valor="check_name_producto";
					$pass=$nombre_producto;
					$productos_T=new BASE();
					if(!$productos_T->get_all($valor,'','','','','','','',$pass))
					{
						?>
						<script type="text/javascript">
							var nota='<div class="alert alert-success">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>El producto ha sido registrado exitosamente<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(15000);
						</script>
						<?php
						$valor="get_id_marca";
						$marcas=new BASE();
						$marcas->get($valor,$titulo_marca,'','','','','','','');
						$id_marca=$marcas->id_marca;
						
						$valor="get_id_categoria";
						$categorias=new BASE();
						$categorias->get($valor,'',$nombre_busqueda,'','','','','','');
						$id_categoria=$categorias->id_categoria_producto;

						$valor="create_producto";
						$productos=new BASE();
						$productos->set($valor,'','','','','','',$nombre_producto,$uso_producto,$codigo_barras_producto,$precio_mayoreo_producto,$precio_publico_producto,$id_marca,$id_categoria,'','');
					}
					else
					{
						?>
						<script type="text/javascript">
							var nota='<div class="alert alert-danger">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>El nombre de producto ya existe, prueba con otro<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(15000);
						</script>
						<?php
					}
				}
				else
				{
					?>
					<script type="text/javascript">
						var nota='<div class="alert alert-danger">'+
								    '<div class="container-fluid">'+
									  '<div class="alert-icon">'+
										''+
									  '</div>'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
									  '</button>'+
									  '<b>Alerta: </b>El codigo de barras ya pertenece a un producto, imposible registrar de nuevo <br>'+
									  	'<i class="fa fa-smile-o"></i>'+
								    '</div>'+
								'</div>';
						$("#notificaciones_productos").html(nota);
						$("#notificaciones_productos .alert").hide(15000);
					</script>
					<?php
				}
				
				
			break;
			case 'delete_lote':
			$id_lote=$_POST['id_lote'];
			$valor="delete_lote";
			$pass=$id_lote;
			?>
				<script type="text/javascript">
					var nota='<div class="alert alert-success">'+
							    '<div class="container-fluid">'+
								  '<div class="alert-icon">'+
									''+
								  '</div>'+
								  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
									'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
								  '</button>'+
								  '<b>Alerta: </b><br>Lote Eliminado Exitosamente<br>'+
								  	'<i class="fa fa-smile-o"></i>'+
							    '</div>'+
							'</div>';
					$("#notificaciones_productos").html(nota);
					$("#notificaciones_productos .alert").hide(15000);
				</script>
			<?php
			$base->get_all($valor,'','','','','','','',$pass);	
			break;
			case 'create_usuario':
				$usuario=$_POST['usuario'];
				$contra=$_POST['contra'];
				$tipo=$_POST['tipo'];
				$pass=$contra;
				//checar si existe el usuario
				$valor="get_usuario";
				if($base->get_all($valor,'','','','','','',$usuario,$pass))
				{
					?>
					<script type="text/javascript">
						var nota='<div class="alert alert-danger">'+
								    '<div class="container-fluid">'+
									  '<div class="alert-icon">'+
										''+
									  '</div>'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
									  '</button>'+
									  '<b>Alerta: </b><br>El usuario ya existe, intente con otro nombre<br>'+
									  	'<i class="fa fa-smile-o"></i>'+
								    '</div>'+
								'</div>';
						$("#notificaciones_modal_usuarios").html(nota);
					</script>
					<?php
				}
				else
				{
					//create usuario
					?>
					<script type="text/javascript">
						var nota='<div class="alert alert-success">'+
								    '<div class="container-fluid">'+
									  '<div class="alert-icon">'+
										''+
									  '</div>'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
									  '</button>'+
									  '<b>Alerta: </b><br>El usuario se creo exitosamente<br>'+
									  	'<i class="fa fa-smile-o"></i>'+
								    '</div>'+
								'</div>';
						$("#notificaciones_modal_usuarios").html(nota);
						$("#notificaciones_modal_usuarios .alert").hide(15000);

					</script>
					<?php
					$valor="set_usuario";
					$ano2=$tipo;
					$table_usuarios=new BASE();
					$table_usuarios->get_all($valor,'','','','','',$ano2,$usuario,$pass);
				}
					
			break;
			case 'update_usuario':
				$id_usuario=$_POST['id_usuario'];
				$usuario=$_POST['usuario'];
				$contra=$_POST['contra'];
				$pass=$contra;
				$ano2=$id_usuario;
				?>
					<script type="text/javascript">
						var nota='<div class="alert alert-success">'+
								    '<div class="container-fluid">'+
									  '<div class="alert-icon">'+
									  '</div>'+
									  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
										'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
									  '</button>'+
									  '<b>Alerta: </b><br>El usuario ha sido actualizado exitosamente<br>'+
									  	'<i class="fa fa-smile-o"></i>'+
								    '</div>'+
								'</div>';
						$("#notificaciones_modal_usuarios").html(nota);
						//$("#notificaciones_modal_usuarios .alert").hide(15000);
					</script>
				<?php
				$valor="update_usuario";
				$table_usuarios=new BASE();
				$table_usuarios->get_all($valor,'','','','','',$ano2,$usuario,$pass);
			break;
			case 'create_medicamento':
				
				$nombre_producto=$_POST['nombre_producto'];
				$formula=$_POST['formula'];
				$dosis=$_POST['dosis'];
				$cat_medicamento=$_POST['cat_medicamento'];
				$titulo_marca=$cat_medicamento;
				$id_categoria;
				$nombre_busqueda=$nombre_producto;
				$id_producto;

				$valor="get_id_cat_medicamento";
				$medicamentos=new BASE();
				$medicamentos->get($valor,$titulo_marca,'','','','','','','');
				$id_categoria=$medicamentos->id_categoria;

				$valor="get_id_producto";
				$productos=new BASE();
				$productos->get($valor,'',$nombre_busqueda,'','','','','','');
				$id_producto=$productos->id_producto;
				if($id_producto!="")
				{
					$med=new BASE();
					$valor="check_medicamento";
					$pass=$id_producto;
					if(!$med->get_all($valor,'','','','','','','',$pass))
					{
						?>
						<script type="text/javascript">
							var nota='<div class="alert alert-success">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>El medicamentos se creo exitosamente<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(15000);
						</script>
						<?php
						$valor="create_medicamento";
						$nombre_producto=$id_producto;
						$tabla_medicamentos=new BASE();
						$tabla_medicamentos->set($valor,'','','','','','',$nombre_producto,'','','','','',$id_categoria,$formula,$dosis);
					}
					else
					{
						?>
						<script type="text/javascript">
							var nota='<div class="alert alert-danger">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>medicamento no pudo ser creado<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(15000);
						</script>
						<?php
					}
						
				}
				else
				{
					?>
						<script type="text/javascript">
							var nota='<div class="alert alert-danger">'+
									    '<div class="container-fluid">'+
										  '<div class="alert-icon">'+
											''+
										  '</div>'+
										  '<button type="button" class="close" data-dismiss="alert" aria-label="Close">'+
											'<span aria-hidden="true"><i class="fa fa-close"></i></span>'+
										  '</button>'+
										  '<b>Alerta: </b>el medicamento no se pudo crear<br>'+
										  	'<i class="fa fa-smile-o"></i>'+
									    '</div>'+
									'</div>';
							$("#notificaciones_productos").html(nota);
							$("#notificaciones_productos .alert").hide(15000);
						</script>
					<?php
				}
				
				
			break;
			
		}
		
	}
?>