<?php

class Db{

    function __construct(){

    }

    public static function getConnection(){

        $conexion = new PDO('pgsql:host=localhost;port=5432;dbname=mvc','postgres','Curso2021.');
        
        //var_dump($conexion);
        return $conexion;

    }

}