<?php

class Profesor {
    private $nombre;
    private $apellido;
    private $numeroSeguirdadSocial;
   

    public function __construct($nombre, $apellido, $numeroSeguirdadSocial){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguirdadSocial = $numeroSeguirdadSocial;
    }

    public function setNombre($nombre){
        $this->$nombre = $nombre;
    }
    
    public function setApellido($apellido){
        $this->$apellido = $apellido;
    }

    public function setNumeroSeguirdadSocial($numeroSeguirdadSocial){
        $this->$numeroSeguirdadSocial = $numeroSeguirdadSocial;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellido(){
        return $this->apellido;
    }

    public function getNumeroSeguirdadSocial(){
        return $this->numeroSeguirdadSocial;
    }

    public function ingreso(){
        
    }

    public function mostrar(){        
        echo "Esta enplead@ ". $this->getNombre() ." ". $this->getApellido()." con el NSS: " . $this->getNumeroSeguirdadSocial();
    }
}
?>