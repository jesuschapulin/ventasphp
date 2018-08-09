<?php
require_once('conexion.php');

class BASE extends DBAbstractModel
{
    public $id_usuarios;
    public $contra;
    public $email;
    public $tipo_usuario;
    public $id_registro;

    function __construct()
    {

    }

    public function set($valor = '', $titulo_marca = '', $descripcion_marca = '', $lote_numero = '', $lote_fecha_caducidad = '',
                        $lote_cantidad = '', $id_produ = '', $nombre_producto = '', $uso_producto = '', $codigo_barras_producto = '', $precio_mayoreo_producto = '', $precio_publico_producto = '', $id_marca = '', $id_categoria = '', $formula = '', $dosis = '')
    {
        //set producto en productos_ventas
        if ($valor == "create_venta_espera_registro") {
            $this->query = 'insert into ventas values("","0",CURRENT_TIMESTAMP,"0","' . $id_marca . '","espera","","");';
            $this->get_results_from_query();
        }
        if ($valor == "create_venta_espera") {
            $this->query = 'insert into ventas values("","0",CURRENT_TIMESTAMP,"0","' . $id_marca . '","espera","","");';
            $this->get_results_from_query();
        }
        if ($valor == "set_producto_venta") {
            $this->query = 'insert into productos_ventas values("","' . $id_marca . '","' . $id_produ . '","' . $lote_cantidad . '","' . $titulo_marca . '");';
            $this->get_results_from_query();
        }
        if ($valor == "cobrar_venta") {
            $this->query = 'update ventas set ventas.Estado="cobrada",ventas.descuento="' . $formula . '",ventas.total="' . $id_categoria . '",ventas.porcentaje="'.$dosis.'",ventas.total_n="'.$titulo_marca.'" where ventas.Estado="espera" and ventas.id_usuario="' . $id_marca . '"';
            $this->get_results_from_query();
        }
        if ($valor == "cobrar_venta_tarjeta") {
            $this->query = 'update ventas set ventas.Estado="cobrada/tarjeta",ventas.descuento="' . $formula . '",ventas.total="' . $id_categoria . '",ventas.porcentaje="'.$dosis.'",ventas.total_n="'.$titulo_marca.'" where ventas.Estado="espera" and ventas.id_usuario="' . $id_marca . '"';
            $this->get_results_from_query();
        }
        //crear una marca
        if ($valor == "create_marca") {
            $this->query = 'insert into marcas values("","' . $titulo_marca . '","' . $descripcion_marca . '");';
            $this->get_results_from_query();
        }
        if ($valor == "set_lote_producto") {
            $this->query = "insert into almacen values('','" . $id_produ . "','" . $lote_numero . "','" . $lote_fecha_caducidad . "','" . $lote_cantidad . "','" . $lote_cantidad . "','" . $titulo_marca . "',CURRENT_TIMESTAMP,'Disponible');";
            $this->get_results_from_query();
        }


        if ($valor == "create_producto") {
            $this->query = 'insert into productos values("","' . $nombre_producto . '","' . $uso_producto . '","' . $codigo_barras_producto . '","' . $precio_mayoreo_producto . '","' . $precio_publico_producto . '","' . $id_categoria . '","' . $id_marca . '");';
            $this->get_results_from_query();
        }
        if ($valor == "create_medicamento") {
            $this->query = 'insert into medicamentos values("","' . $nombre_producto . '","' . $formula . '","' . $dosis . '","' . $id_categoria . '");';
            $this->get_results_from_query();
        }
    }

    public function get_all($valor = '', $dia = '', $mes = '', $ano = '', $dia2 = '', $mes2 = '', $ano2 = '', $usuario = '', $pass = '')
    {
        if ($valor == "create_categoria") {
            $this->query = 'insert into categoria_productos values("","' . $usuario . '","' . $pass . '")';
            return $this->get_results_from_query();

        }
        if ($valor == "create_cat_medicamentos") {
            $this->query = 'insert into categoria_medicamentos values("","' . $usuario . '","' . $pass . '")';
            return $this->get_results_from_query();

        }
        if ($valor == "eliminar_categoria") {
            $this->query = 'delete from categoria_productos where categoria_productos.id_categoria_producto="' . $pass . '"';
            return $this->get_results_from_query();

        }
        if ($valor == "eliminar_usuario") {
            $this->query = 'delete from usuarios where usuarios.id_usuario="' . $usuario . '"';
            return $this->get_results_from_query();

        }
        if ($valor == "eliminar_marca") {
            $this->query = 'delete from marcas where marcas.id_marca="' . $pass . '"';
            return $this->get_results_from_query();

        }
        if ($valor == "check_cat_medicamentos") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from categoria_medicamentos where categoria_medicamentos.titulo="' . $usuario . '";';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;
        }
        if ($valor == "check_categoria") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from categoria_productos where categoria_productos.titulo="' . $usuario . '";';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;
        }
        if ($valor == "check_code_producto") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from productos where productos.codigo_barras="' . $pass . '";';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;
        }
        if ($valor == "check_name_producto") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from productos where productos.nombre="' . $pass . '";';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;
        }
        if ($valor == "check_medicamento") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from medicamentos where medicamentos.id_producto="' . $pass . '";';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;
        }
        if ($valor == "update_marca") {
            $this->query = 'update marcas set marcas.titulo="' . $ano2 . '",marcas.descripcion="' . $usuario . '" where marcas.id_marca="' . $pass . '"';
            return $this->get_results_from_query();

        }
        if ($valor == "modificar_cat_medicamentos") 
        {
            $this->query = 'update categoria_medicamentos set categoria_medicamentos.titulo="' . $ano2 . '",categoria_medicamentos.descripcion="' . $usuario . '" where categoria_medicamentos.id_categoria="' . $pass . '"';
            return $this->get_results_from_query();

        }
        if ($valor == "update_categoria") {
            $this->query = 'update categoria_productos set categoria_productos.titulo="' . $ano2 . '",categoria_productos.descripcion="' . $usuario . '" where categoria_productos.id_categoria_producto="' . $pass . '"';
            return $this->get_results_from_query();

        }
        if ($valor == "update_lote_cantidad_cancelar_venta") {
            $this->query = 'update almacen set cantidad_disponible="' . $pass . '" where almacen.id_registro="' . $usuario . '"';
            return $this->get_results_from_query();

        }
        if ($valor == "get_productos_venta_espera") {
            $this->query = 'select productos_ventas.id_producto,productos_ventas.cantidad,productos_ventas.id_lote from productos_ventas,ventas where ventas.id_venta=productos_ventas.id_venta and ventas.Estado="espera" and ventas.id_usuario="' . $usuario . '"';
            return $this->get_results_from_query();

        }
        if ($valor == "get_cantidad_lote") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select almacen.cantidad_disponible from almacen where almacen.id_registro="' . $pass . '"';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }

        }
        if ($valor == "get_total_venta") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select ventas.total from ventas,usuarios where ventas.id_usuario=usuarios.id_usuario and usuarios.id_usuario="' . $usuario . '" and ventas.Estado="espera"';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }

        }
        if ($valor == "bitacora_delete_on_venta") {
            $this->query = 'insert into bitacora values(" ","Eliminacion","' . $pass . '","' . $usuario . '","ventas,almacen,productos de venta",CURRENT_TIMESTAMP);';
            return $this->get_results_from_query();

        }
        if ($valor == "update_lotes") 
        {
            $this->query='update almacen set almacen.lote="'.$usuario.'",almacen.fecha_caducidad="'.$dia.'",almacen.cantidad_disponible="'.$mes.'" where almacen.id_registro="'.$pass.'"';
            return $this->get_results_from_query();

        }
        if ($valor == "bitacora_agregar_lotes") {
            $this->query = 'insert into bitacora_productos values("","Agregar","Se agrego un nuevo lote de productos al almacen","' . $pass . '","' . $usuario . '",CURRENT_TIMESTAMP);';
            return $this->get_results_from_query();

        }
        if ($valor == "bitacora_cancelar_venta") {
            $this->query = 'insert into bitacora values(" ","Cancelar","' . $pass . '","' . $usuario . '","ventas,almacen,productos de venta",CURRENT_TIMESTAMP);';
            return $this->get_results_from_query();

        }
        if ($valor == "bitacora_cobrar_venta") {
            $this->query = 'insert into bitacora values(" ","Cobro","' . $pass . '","' . $usuario . '","ventas,almacen,productos de venta",CURRENT_TIMESTAMP);';
            return $this->get_results_from_query();

        }
        if ($valor == "delete_vendidos") {
            $this->query = 'delete from almacen where almacen.cantidad_disponible="0"';
            return $this->get_results_from_query();

        }
        if ($valor == "get_datos_producto") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select productos.id_producto,productos.nombre,productos.codigo_barras,productos.precio_mayoreo,productos.precio_publico from productos where productos.codigo_barras="' . $pass . '";';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }

        }
        if ($valor == "get_datos_producto_delete") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select productos.id_producto,productos.nombre,productos.codigo_barras,productos.precio_mayoreo,productos.precio_publico from productos where productos.id_producto="' . $pass . '";';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }

        }
        if ($valor == "get_datos_lote") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select almacen.id_registro,almacen.cantidad_disponible from almacen,productos where productos.id_producto=almacen.id_producto and productos.id_producto="' . $usuario . '" and almacen.fecha_caducidad="' . $pass . '"';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }

        }
        if ($valor == "get_lote_cantidad") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select almacen.id_registro,almacen.cantidad_disponible from productos,almacen,usuarios where almacen.id_producto=productos.id_producto and usuarios.id_usuario=almacen.id_usuario and almacen.fecha_caducidad="' . $usuario . '" and productos.id_producto="' . $pass . '"';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }

        }
        if ($valor == "get_datos_venta_espera") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select productos_ventas.id_registro,productos_ventas.id_venta,productos_ventas.id_producto,productos_ventas.cantidad,productos_ventas.id_lote,almacen.cantidad_disponible from almacen,productos_ventas,usuarios,ventas WHERE usuarios.id_usuario=ventas.id_usuario and productos_ventas.id_venta=ventas.id_venta and ventas.Estado="espera" and almacen.id_registro=productos_ventas.id_lote and usuarios.id_usuario="' . $usuario . '"';
            $this->get_results_from_query();

        }
        if ($valor == "update_almacen_after_cancel") {
            //retorna un valor si se encuentran resultados
            $this->query = 'update almacen.cantidad_disponible="' . $pass . '" where almacen.id_registro="' . $usuario . '"';
            $this->get_results_from_query();

        }
        if ($valor == "get_datos_venta") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select ventas.id_venta,ventas.total from ventas,usuarios WHERE ventas.id_usuario=usuarios.id_usuario and ventas.Estado="espera" and usuarios.id_usuario="' . $usuario . '";';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }

        }
        if ($valor == "get_info_usuario") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from usuarios where usuarios.nick_name="' . $usuario . '"';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }

        }
        if ($valor == "get_datos_lote_producto") {
            //retorna resultados
            $this->query = 'select almacen.id_registro,almacen.cantidad_disponible cantidad_lote,productos.id_producto,productos_ventas.cantidad cantidad_venta,productos_ventas.id_registro id_productos_venta,ventas.id_venta,ventas.total from productos,productos_ventas,almacen,ventas where almacen.id_producto=productos.id_producto and productos.id_producto="' . $usuario . '" and ventas.id_venta=productos_ventas.id_venta and productos_ventas.id_producto=productos.id_producto and ventas.Estado="espera" and almacen.id_registro=productos_ventas.id_lote and ventas.id_venta="' . $pass . '"';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }

        }
        if ($valor == "check_venta") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select ventas.id_venta from ventas,usuarios WHERE ventas.id_usuario=usuarios.id_usuario and ventas.Estado="espera" and usuarios.id_usuario="' . $usuario . '";';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;

        }
        if ($valor == "check_code") {
            $this->query = 'select *from productos where productos.codigo_barras="' . $pass . '";';
            return $this->get_results_from_query();

        }
        if ($valor == "check_usuarios") {
            $this->query = 'select *from usuarios where usuarios.nick_name="' . $usuario . '";';
            return $this->get_results_from_query();

        }
        if ($valor == "get_producto_cantidad_existente") {
            $this->query = 'select sum(almacen.cantidad_disponible) suma_disponible from productos,almacen where productos.id_producto=almacen.id_producto and almacen.estado="Disponible" and almacen.cantidad_disponible>0 and productos.codigo_barras="' . $pass . '"';
            return $this->get_results_from_query();

        }
        if ($valor == "get_producto_cantidad_existente_venta") {
            $this->query = 'select almacen.cantidad_disponible from productos,almacen where productos.id_producto=almacen.id_producto and almacen.estado="Disponible" and almacen.cantidad_disponible>0 and productos.codigo_barras="' . $pass . '" and almacen.fecha_caducidad="'.$usuario.'"';
            return $this->get_results_from_query();

        }
        if ($valor == "get_producto_cantidad_existente_modificar") {
            $this->query = 'select almacen.cantidad_disponible from almacen,productos,usuarios where almacen.id_producto=productos.id_producto and almacen.id_usuario=usuarios.id_usuario and almacen.fecha_caducidad="' . $usuario . '" and productos.id_producto="' . $pass . '" and almacen.cantidad_disponible>0';
            return $this->get_results_from_query();

        }
        if ($valor == "get_fechas_lote_venta") {
            $this->query = 'select productos.id_producto,almacen.lote,almacen.fecha_caducidad from almacen,productos WHERE productos.id_producto=almacen.id_producto and  productos.codigo_barras="' . $pass . '"and almacen.estado="Disponible" and almacen.cantidad_disponible>0;';
            return $this->get_results_from_query();

        }
        if ($valor == "get_fechas_lote_venta_modificar") {
            $this->query = 'select productos.id_producto,almacen.lote,almacen.fecha_caducidad from almacen,productos WHERE productos.id_producto=almacen.id_producto and  productos.id_producto="' . $pass . '" and almacen.cantidad_disponible>0;';
            return $this->get_results_from_query();

        }
        if ($valor == "get_venta_espera") {
            $this->query = 'select ventas.id_venta,productos.id_producto,productos_ventas.cantidad,productos.nombre,productos.codigo_barras,productos.precio_mayoreo,productos.precio_publico,categoria_productos.titulo categoria,almacen.fecha_caducidad from productos,ventas,productos_ventas,categoria_productos,almacen WHERE productos.id_categoria_producto=categoria_productos.id_categoria_producto and productos_ventas.id_producto=productos.id_producto and ventas.id_venta=productos_ventas.id_venta and productos_ventas.id_lote=almacen.id_registro and productos.id_producto=almacen.id_producto and ventas.Estado="espera" and ventas.id_usuario="' . $usuario . '" order by productos.nombre;';
            return $this->get_results_from_query();

        }
        if ($valor == "get_venta_suma_total_espera") {
            $this->query = 'select ventas.total from usuarios,ventas where ventas.id_usuario=usuarios.id_usuario and usuarios.id_usuario="' . $usuario . '" and ventas.Estado="espera";';
            return $this->get_results_from_query();

        }
        if ($valor == "get_usuario") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from usuarios where usuarios.nick_name="' . $usuario . '";';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;

        }
        if ($valor == "set_usuario") {
            $this->query = 'insert into usuarios values("","' . $usuario . '","' . $pass . '","' . $ano2 . '");';
            $this->get_results_from_query();
        }
        if ($valor == "update_usuario") {
            $this->query = 'update usuarios set usuarios.nick_name="' . $usuario . '",usuarios.password="' . $pass . '" where usuarios.id_usuario="' . $ano2 . '"';
            $this->get_results_from_query();
        }
        if ($valor == "delete_on_almacen") {
            $this->query = 'update almacen set almacen.cantidad_disponible="' . $ano2 . '" where  almacen.fecha_caducidad="' . $usuario . '" and almacen.id_producto="' . $pass . '";';
            $this->get_results_from_query();
        }
        if ($valor == "eliminar_productos_ventas") {
            $this->query = 'delete from productos_ventas where productos_ventas.id_registro="' . $usuario . '";';
            $this->get_results_from_query();
        }
        if ($valor == "update_total_venta_espera") {
            $this->query = 'update ventas set ventas.total="' . $pass . '" where ventas.id_venta="' . $usuario . '"';
            $this->get_results_from_query();
        }
        if ($valor == "update_lote_cantidad_disponible_eliminar") {
            $this->query = 'update almacen set almacen.cantidad_disponible="' . $pass . '" where almacen.id_registro="' . $usuario . '"';
            $this->get_results_from_query();
        }
        if ($valor == "entrar") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from usuarios where usuarios.nick_name="' . $usuario . '" and usuarios.password="' . $pass . '"';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;

        }
        if ($valor == "get_tipo_usuario") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from usuarios where usuarios.nick_name="' . $usuario . '" and usuarios.password="' . $pass . '"';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }

        }
        if ($valor == "get_datos_usuario") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from usuarios where usuarios.nick_name="' . $usuario . '" and usuarios.password="' . $pass . '"';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }

        }
        if ($valor == "productos_caducados") {
            $this->query = 'update almacen set almacen.estado="Caducado",almacen.lote="0" where year(almacen.fecha_caducidad)=year(now()) and MONTH(almacen.fecha_caducidad)<=MONTH(now()) and day(almacen.fecha_caducidad)<=day(now())';
            $this->get_results_from_query();
        }
        if ($valor == "get_all_productos") {
            $this->query = "select productos.id_producto,productos.nombre,productos.precio_mayoreo,productos.codigo_barras,productos.precio_publico,categoria_productos.titulo FROM productos,categoria_productos where productos.id_categoria_producto=categoria_productos.id_categoria_producto order by productos.nombre";
            return $this->get_results_from_query();
        }
        if ($valor == "get_all_productos_categoria") {
            $this->query = "select productos.id_producto,productos.nombre,productos.precio_mayoreo,productos.codigo_barras,productos.precio_publico,categoria_productos.titulo FROM productos,categoria_productos where productos.id_categoria_producto=categoria_productos.id_categoria_producto and categoria_productos.id_categoria_producto='" . $pass . "' order by productos.nombre";
            return $this->get_results_from_query();
        }
        if ($valor == "get_all_productos_marca") {
            $this->query = "select productos.id_producto,productos.nombre,productos.precio_mayoreo,productos.codigo_barras,productos.precio_publico,categoria_productos.titulo FROM productos,categoria_productos,marcas where productos.id_categoria_producto=categoria_productos.id_categoria_producto and productos.id_marca=marcas.id_marca and marcas.id_marca='" . $pass . "' order by productos.nombre";
            return $this->get_results_from_query();
        }
        if ($valor == "get_all_productos_medicamentos") {
            $this->query = 'select productos.id_producto,productos.nombre,productos.precio_mayoreo,productos.codigo_barras,productos.precio_publico FROM productos,medicamentos,categoria_medicamentos where productos.id_producto=medicamentos.id_producto and medicamentos.id_categoria_medicamentos=categoria_medicamentos.id_categoria and categoria_medicamentos.id_categoria="' . $pass . '" order by productos.nombre';
            return $this->get_results_from_query();
        }
        if ($valor == "delete_lote") {
            $this->query = 'delete from almacen where almacen.id_registro="'.$pass.'"';
            return $this->get_results_from_query();
        }
        if ($valor == "get_all_categorias") {
            $this->query = "select *from categoria_productos order by categoria_productos.titulo";
            return $this->get_results_from_query();
        }
        if ($valor == "get_all_marcas") {
            $this->query = "select *from marcas order by marcas.titulo";
            return $this->get_results_from_query();
        }
        if ($valor == "get_all_medicamentos") {
            $this->query = "select *from categoria_medicamentos order by categoria_medicamentos.titulo";
            return $this->get_results_from_query();
        }
        if ($valor == "get_all_usuarios") {
            $this->query = "select *from usuarios";
            return $this->get_results_from_query();
        }
        if ($valor == "get_all_tipo_medicamentos") {
            $this->query = "select *from categoria_medicamentos order by categoria_medicamentos.titulo";
            return $this->get_results_from_query();
        }
        if ($valor == "get_all_ventas") {
            $this->query = 'select ventas.id_venta,ventas.total_n,ventas.porcentaje,ventas.total,productos.nombre producto,productos.precio_mayoreo precio,productos_ventas.cantidad, ventas.fecha_venta,ventas.descuento,ventas.Estado,usuarios.nick_name usuario from ventas,usuarios,productos_ventas,productos where ventas.id_usuario=usuarios.id_usuario and productos.id_producto=productos_ventas.id_producto and ventas.id_venta=productos_ventas.id_venta and year(ventas.fecha_venta)=year(now()) and MONTH(ventas.fecha_venta)=MONTH(now()) and day(ventas.fecha_venta)=day(now()) and ventas.Estado="cobrada" or (ventas.id_usuario=usuarios.id_usuario and productos.id_producto=productos_ventas.id_producto and ventas.id_venta=productos_ventas.id_venta and year(ventas.fecha_venta)=year(now()) and MONTH(ventas.fecha_venta)=MONTH(now()) and day(ventas.fecha_venta)=day(now()) and ventas.Estado="cobrada/tarjeta")';
            return $this->get_results_from_query();
        }
        if ($valor == "get_ventas_total") {
            $this->query = 'select sum(ventas.total) total_ventas from ventas where ventas.id_venta IN(select ventas.id_venta from ventas where  year(ventas.fecha_venta)=year(now()) and MONTH(ventas.fecha_venta)=MONTH(now()) and day(ventas.fecha_venta)=day(now()) and ventas.Estado="cobrada");';
            return $this->get_results_from_query();
        }
        if ($valor == "get_fechas_productos_xv") {
            $this->query = 'select productos.nombre,productos.codigo_barras,almacen.fecha_caducidad,almacen.lote,almacen.cantidad_disponible,almacen.estado from almacen,productos where almacen.id_producto=productos.id_producto and almacen.fecha_caducidad<=CURDATE()+INTERVAL 30 DAY and almacen.cantidad_disponible>0 and almacen.estado="Disponible"';
            return $this->get_results_from_query();
        }
        if ($valor == "get_caducados") {
            $this->query = 'select almacen.estado,productos.nombre,productos.codigo_barras,almacen.fecha_caducidad,almacen.lote,almacen.cantidad_disponible from productos,almacen where productos.id_producto=almacen.id_producto and almacen.estado="Caducado"';
            return $this->get_results_from_query();
        }
        if ($valor == "get_caducidades_periodo") {
            $this->query = 'select productos.nombre,productos.codigo_barras,almacen.fecha_caducidad,almacen.lote,almacen.cantidad_disponible,almacen.estado from productos,almacen where productos.id_producto=almacen.id_producto and almacen.fecha_caducidad>="'.$ano.'" and almacen.fecha_caducidad<="'.$ano2.'" and almacen.estado="Disponible" ORDER BY productos.nombre';
            return $this->get_results_from_query();
        }
        if ($valor == "get_caducidades_fecha") {
            $this->query = 'select productos.nombre,productos.codigo_barras,almacen.fecha_caducidad,almacen.lote,almacen.cantidad_disponible,almacen.estado from productos,almacen where productos.id_producto=almacen.id_producto and almacen.fecha_caducidad="'.$ano.'" and almacen.estado="Disponible" ORDER BY productos.nombre';
            return $this->get_results_from_query();
        }
        if ($valor == "get_ventas_periodo") {
            $this->query = 'select ventas.id_venta,ventas.total_n,ventas.porcentaje,ventas.total,productos.nombre producto,productos.precio_mayoreo precio,productos_ventas.cantidad, ventas.fecha_venta,ventas.descuento,ventas.Estado,usuarios.nick_name usuario from ventas,usuarios,productos_ventas,productos where ventas.id_usuario=usuarios.id_usuario and productos.id_producto=productos_ventas.id_producto and ventas.id_venta=productos_ventas.id_venta and year(ventas.fecha_venta)>="' . $ano . '" and MONTH(ventas.fecha_venta)>="' . $mes . '" and day(ventas.fecha_venta)>="' . $dia . '" and year(ventas.fecha_venta)<="' . $ano2 . '" and MONTH(ventas.fecha_venta)<="' . $mes2 . '" and day(ventas.fecha_venta)<="' . $dia2 . '" and ventas.Estado="cobrada" or (ventas.id_usuario=usuarios.id_usuario and productos.id_producto=productos_ventas.id_producto and ventas.id_venta=productos_ventas.id_venta and year(ventas.fecha_venta)>="' . $ano . '" and MONTH(ventas.fecha_venta)>="' . $mes . '" and day(ventas.fecha_venta)>="' . $dia . '" and year(ventas.fecha_venta)<="' . $ano2 . '" and MONTH(ventas.fecha_venta)<="' . $mes2 . '" and day(ventas.fecha_venta)<="' . $dia2 . '" and ventas.Estado="cobrada/tarjeta")';
            return $this->get_results_from_query();
        }
        if ($valor == "get_ventas_periodo_total") {
            $this->query = 'select sum(ventas.total) total_ventas from ventas where ventas.id_venta IN(select ventas.id_venta from ventas where  year(ventas.fecha_venta)>="' . $ano . '" and MONTH(ventas.fecha_venta)>="' . $mes . '" and day(ventas.fecha_venta)>="' . $dia . '" and year(ventas.fecha_venta)<="' . $ano2 . '" and MONTH(ventas.fecha_venta)<="' . $mes2 . '" and day(ventas.fecha_venta)<="' . $dia2 . '" and ventas.Estado="cobrada");';
            return $this->get_results_from_query();
        }
        if ($valor == "get_ventas_fecha")
        {
            $this->query = 'select ventas.id_venta,ventas.total_n,ventas.porcentaje,ventas.total,productos.nombre producto,productos.precio_mayoreo precio,productos_ventas.cantidad, ventas.fecha_venta,ventas.descuento,ventas.Estado,usuarios.nick_name usuario from ventas,usuarios,productos_ventas,productos where ventas.id_usuario=usuarios.id_usuario and productos.id_producto=productos_ventas.id_producto and ventas.id_venta=productos_ventas.id_venta and year(ventas.fecha_venta)="'.$ano.'" and MONTH(ventas.fecha_venta)="'.$mes.'" and day(ventas.fecha_venta)="'.$dia.'" and ventas.Estado="cobrada" or (ventas.id_usuario=usuarios.id_usuario and productos.id_producto=productos_ventas.id_producto and ventas.id_venta=productos_ventas.id_venta and year(ventas.fecha_venta)="'.$ano.'" and MONTH(ventas.fecha_venta)="'.$mes.'" and day(ventas.fecha_venta)="'.$dia.'" and ventas.Estado="cobrada/tarjeta");';
            return $this->get_results_from_query();
        }
        if ($valor == "get_ventas_fecha_total") {
            $this->query = 'select sum(ventas.total) total_ventas from ventas where ventas.id_venta IN(select ventas.id_venta from ventas where  year(ventas.fecha_venta)="' . $ano . '" and MONTH(ventas.fecha_venta)="' . $mes . '" and day(ventas.fecha_venta)="' . $dia . '" and ventas.Estado="cobrada");';
            return $this->get_results_from_query();
        }

    }

    public function get($valor = '', $titulo_marca = '', $nombre_busqueda = '', $id_producto = '', $lote_numero = '', $lote_cantidad = '', $ano = '', $mes = '', $dia = '')
    {

        if ($valor == "get_marca") {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from marcas where marcas.titulo="' . $titulo_marca . '";';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;

        }
        if ($valor == "get_id_marca") {
            $this->query = 'select *from marcas where marcas.titulo="' . $titulo_marca . '";';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }
        }
        if ($valor == "get_id_categoria") {
            $this->query = 'select *from categoria_productos where categoria_productos.titulo="' . $nombre_busqueda . '";';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }
        }
        if ($valor == "get_id_cat_medicamento") {
            $this->query = 'select *from categoria_medicamentos where categoria_medicamentos.titulo="' . $titulo_marca . '";';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }
        }
        if ($valor == "get_id_producto") {
            $this->query = 'select *from productos where productos.nombre="' . $nombre_busqueda . '";';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }
        }
        if ($valor == "get_id_producto_registro") {
            $this->query = 'select *from productos where productos.codigo_barras="' . $nombre_busqueda . '";';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }
        }
        if ($valor == "get_tipo_medicamento") {
            $this->query = 'select *from categoria_medicamentos where categoria_medicamentos.titulo="' . $titulo_marca . '";';
            $this->get_results_from_query();
            foreach ($this->rows[0] as $key => $value) {
                $this->$key = $value;
            }
        }
        if ($valor == "get_lote_producto") 
        {
            //retorna un valor si se encuentran resultados
            $this->query = 'select almacen.lote,productos.nombre from productos,almacen where almacen.id_producto=productos.id_producto and productos.codigo_barras="' . $id_producto . '" and almacen.lote="' . $lote_numero . '"';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;

        }
        if ($valor == "get_lote_producto_registro") 
        {
            //retorna un valor si se encuentran resultados
            $this->query = 'select *from productos where productos.codigo_barras="'.$id_producto.'"';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;

        }
        if ($valor == "get_lote_producto_fecha") {
            //retorna un valor si se encuentran resultados

            $this->query = 'select almacen.lote,productos.nombre from productos,almacen where almacen.id_producto=productos.id_producto and productos.codigo_barras="' . $id_producto . '" and year(almacen.fecha_caducidad)="' . $ano . '" and MONTH(almacen.fecha_caducidad)="' . $mes . '" and day(almacen.fecha_caducidad)="' . $dia . '"';
            $this->get_results_from_query();

            if (count($this->rows) == 1)
                return true;
            return false;

        }
        if ($valor == "get_busqueda_producto") {
            $this->query = "select productos.id_producto,productos.nombre,productos.precio_mayoreo,productos.codigo_barras,productos.precio_publico,categoria_productos.titulo FROM productos,categoria_productos where productos.id_categoria_producto=categoria_productos.id_categoria_producto and productos.nombre like '%" . $nombre_busqueda . "%'";
            return $this->get_results_from_query();
        }
        if ($valor == "get_busqueda_producto_formula") {
            $this->query = "select productos.id_producto,productos.nombre,productos.precio_mayoreo,productos.codigo_barras,productos.precio_publico,categoria_productos.titulo FROM medicamentos,productos,categoria_productos where productos.id_categoria_producto=categoria_productos.id_categoria_producto and productos.id_producto=medicamentos.id_producto and medicamentos.formula like '%" . $nombre_busqueda . "%'";
            return $this->get_results_from_query();
        }
        if ($valor == "get_busqueda_producto_codigo_barras") {
            $this->query = "select productos.id_producto,productos.nombre,productos.precio_mayoreo,productos.codigo_barras,productos.precio_publico,categoria_productos.titulo FROM productos,categoria_productos where productos.id_categoria_producto=categoria_productos.id_categoria_producto and productos.codigo_barras='".$nombre_busqueda."'";
            return $this->get_results_from_query();
        }
        if ($valor == "get_info_producto") {
            $this->query = 'select productos.nombre, productos.codigo_barras,productos.uso,productos.precio_mayoreo,productos.precio_publico,categoria_productos.titulo categoria,marcas.titulo marca from productos,marcas,categoria_productos where productos.id_categoria_producto=categoria_productos.id_categoria_producto and productos.id_marca=marcas.id_marca and productos.nombre="' . $nombre_busqueda . '" and productos.id_producto="' . $id_producto . '";';
            return $this->get_results_from_query();
        }
        if ($valor == "get_info_producto_cantidad_existente") {
            $this->query = 'select sum(almacen.cantidad_disponible) suma_disponible from productos,almacen where productos.id_producto=almacen.id_producto and almacen.cantidad_disponible>0 and almacen.estado="Disponible" and productos.id_producto="' . $id_producto . '"';
            return $this->get_results_from_query();
        }
        if ($valor == "get_info_producto_cantidad_existente_tab_productos") {
            $this->query = 'select sum(almacen.cantidad_disponible) suma_disponible from productos,almacen where productos.id_producto=almacen.id_producto and almacen.cantidad_disponible>0 and almacen.estado="Disponible" and productos.codigo_barras="' . $id_producto . '"';
            return $this->get_results_from_query();
        }
        if ($valor == "get_info_producto_lotes") {
            $this->query = 'select almacen.id_registro,almacen.lote,almacen.fecha_caducidad,almacen.cantidad_disponible from almacen,productos WHERE productos.id_producto=almacen.id_producto and productos.id_producto="' . $id_producto . '" and almacen.estado="Disponible" and almacen.cantidad_disponible>0';
            return $this->get_results_from_query();
        }
        if ($valor == "get_info_producto_lotes_tab_productos") {
            $this->query = 'select almacen.lote,almacen.fecha_caducidad,almacen.cantidad_disponible from almacen,productos WHERE productos.id_producto=almacen.id_producto AND productos.codigo_barras="' . $id_producto . '" and almacen.estado="Disponible" and almacen.cantidad_disponible>0';
            return $this->get_results_from_query();
        }
        if ($valor == "get_info_medicamento") {
            $this->query = 'select productos.nombre, productos.codigo_barras,productos.uso,productos.precio_mayoreo,productos.precio_publico,categoria_productos.titulo categoria,marcas.titulo marca,medicamentos.formula,medicamentos.docis,categoria_medicamentos.titulo cat_medicamento from productos,marcas,categoria_productos,medicamentos,categoria_medicamentos where productos.id_producto=medicamentos.id_producto and productos.id_categoria_producto=categoria_productos.id_categoria_producto and productos.id_marca=marcas.id_marca and medicamentos.id_categoria_medicamentos=categoria_medicamentos.id_categoria and productos.nombre="' . $nombre_busqueda . '" and productos.id_producto="' . $id_producto . '";';
            return $this->get_results_from_query();
        }
    }

    public function edit($valor = '', $id_producto = '', $nombre_producto = '', $uso_producto = '', $codigo_barras_producto = '', $precio_mayoreo_producto = '', $precio_publico_producto = '', $id_marca = '', $id_categoria = '', $formula = '', $dosis = '')
    {
        if ($valor == "update_producto") {
            $this->query = 'update productos set nombre="' . $nombre_producto . '",uso="' . $uso_producto . '",codigo_barras="' . $codigo_barras_producto . '",precio_mayoreo="' . $precio_mayoreo_producto . '",precio_publico="' . $precio_publico_producto . '",id_categoria_producto="' . $id_categoria . '",id_marca="' . $id_marca . '" where productos.id_producto="' . $id_producto . '";';
            return $this->get_results_from_query();
        }
        if ($valor == "update_medicamento") {
            $this->query = 'update medicamentos set formula="' . $formula . '",docis="' . $dosis . '",id_categoria_medicamentos="' . $id_categoria . '" where medicamentos.id_producto="' . $id_producto . '";';
            return $this->get_results_from_query();
        }
        if ($valor == "cancelar_venta") 
        {
            $this->query = 'update ventas set ventas.Estado="cancelada" where ventas.id_usuario="' . $id_producto . '" and ventas.Estado="espera";';
            return $this->get_results_from_query();
        }
        if ($valor == "delete_caducados") 
        {
            $this->query = 'update almacen set almacen.estado="Eliminado" where almacen.estado="Caducado"';
            return $this->get_results_from_query();
        }

    }

    public function delete()
    {
    }

    function __destruct()
    {
        //unset($this);
    }

}

?>