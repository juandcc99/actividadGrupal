<?php

require_once('connection.php');

class AlumnoController{

	function __construct(){
		
	}

    function index(){
		require_once('Views/Alumno/bienvenido.php');
	}
 
	function register(){
		require_once('Views/Alumno/register.php');
	}

    function error(){
		require_once('Views/Alumno/error.php');
	}

	function save(){
		$alumno = new Alumno(NULL,$_POST['nombres'],$_POST['unidades'],$_POST['precio']);
		Alumno::save($alumno);
		require_once('Views/Alumno/save.php');
	}

	function show(){
		$base = new Db();
		$conexion = $base->getConnection();
		$resultado=$conexion->prepare("SELECT * FROM productos");
		$resultado->execute();

		require_once('Views/Alumno/show.php');
	}

}
