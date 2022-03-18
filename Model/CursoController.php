<?php

require_once('connection.php');


class CursoController{

	function __construct(){
		
	}

    function index(){
		require_once('Views/Curso/bienvenido.php');
	}
 
	function register(){
		require_once('Views/Curso/register.php');
	}

    function error(){
		require_once('Views/Curso/error.php');
	}
 

}