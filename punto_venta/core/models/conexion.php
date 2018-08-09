<?php
abstract class DBAbstractModel {
private static $db_host = 'localhost';
private static $db_user = 'root';
private static $db_pass = '';
protected $db_name = 'ventas';
protected $query;
protected $rows = array();
private $conn;
public $mensaje = 'Hecho';
# métodos abstractos para ABM de clases que hereden

abstract protected function get();
abstract protected function set();
abstract protected function edit();
abstract protected function delete();
abstract protected function get_all();
# los siguientes métodos pueden definirse con exactitud
# y no son abstractos
# Conectar a la base de datos
private function open_connection() {
	$this->conn = new mysqli(self::$db_host, self::$db_user,
	self::$db_pass, $this->db_name);
	$this->conn->set_charset("utf8");
	}                                     /////el documento va aqui de la conexion
# Desconectar la base de datos
private function close_connection() {
	$this->conn->close();
	// $conn=null;
	}
# Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
protected function execute_single_query() {
	if($_POST || $_GET)
	{
		$this->open_connection();
		$this->conn->query($this->query);
		$this->close_connection();
	}
	else
	{
		$this->mensaje = 'Metodo no permitido';
	}
	}

	protected function get_results_from_query() {         
		$this->open_connection();         
		$result = $this->conn->query($this->query);
		
		printf($this->conn->error);

		while ($this->rows[] = $result->fetch_assoc());         
		$result->close();         
		$this->close_connection();         
	    array_pop($this->rows);
	    return json_encode($this->rows,JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE); 
	} 
}
?> 