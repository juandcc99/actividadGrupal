<?php

class Alumno
{
	private $id;
	private $nombres;
	private $unidades;
	private $precio;
 
	
	function __construct($id, $nombres,$unidades, $precio)
	{
		$this->setId($id);
		$this->setNombres($nombres);
		$this->setUnidades($unidades);
		$this->setPrecio($precio);		
	}
 
	public function getId(){
		return $this->id;
	}
 
	public function setId($id){
		$this->id = $id;
	}
 
	public function getNombres(){
		return $this->nombres;
	}
 
	public function setNombres($nombres){
		$this->nombres = $nombres;
	}
 
	public function getUnidades(){
		return $this->unidades;
	}
 
	public function setUnidades($unidades){
		$this->unidades = $unidades;
	}
 
	public function getPrecio(){
		return $this->precio;
	}
 
	public function setPrecio($precio){
		$this->precio = $precio;
	}

	public static function save($alumno){
		$conexion=Db::getConnection();

		$insertar = $conexion->prepare('INSERT INTO productos (nombres,unidades,precio) VALUES(:nombres,:unidades,:precio)');
		$insertar->bindValue('nombres',$alumno->getNombres());
		$insertar->bindValue('unidades',$alumno->getUnidades());
		$insertar->bindValue('precio',$alumno->getPrecio());
		$insertar->execute();
	}

}
