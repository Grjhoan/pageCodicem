<?php
session_start();
class Conectar{
	public static function conexion(){
		$conexion=new mysqli("localhost","root","greidy100","inventariodtv");
		$conexion->query("SET NAMES 'utf8'");
		return $conexion;
	}//fin del metodo
}//fin de class
?>