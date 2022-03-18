<?php

require_once('connection.php');


class ProfesorController{

	function __construct(){
		
	}

    function index(){
		require_once('Views/Profesor/bienvenido.php');
	}
 
	function register(){
		require_once('Views/Profesor/register.php');
	}

    function error(){
		require_once('Views/Profesor/error.php');
	}
 

}