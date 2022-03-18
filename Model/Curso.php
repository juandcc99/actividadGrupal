<?php

class Curso{

    private $id;
	private $nombre;
	private $apellidos;
    private $estado;

    function __construct($id, $nombre, $apellidos, $estado){

        $id->setId($id);
        $Nombre->setNombre($nombre);
        $apellidos->setApellidos($apellidos);
        $estado->setEstado($estado);

    }

    public function getId(){
		return $this->id;
	}
 
	public function setId($id){
		$this->id = $id;
	}
 
	public function getNombre(){
		return $this->nombre;
	}
 
	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
 
	public function getApellidos(){
		return $this->apellidos;
	}
 
	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}
 
	public function getEstado(){
 
		return $this->estado;
	}

    public function setEstado($estado){
		
		if (strcmp($estado, 'on')==0) {
			$this->estado=1;
		} elseif(strcmp($estado, '1')==0) {
			$this->estado='checked';
		}elseif (strcmp($estado, '0')==0) {
			$this->estado='of';
		}else {
			$this->estado=0;
		}
 
	}

}