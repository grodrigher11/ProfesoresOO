<?php
class Profesor {
    private $nombre;
    private $apellido;
    private $numeroSeguirdadSocial;
   

    function __construct($nombre, $apellido, $numeroSeguirdadSocial){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguirdadSocial = $numeroSeguirdadSocial;
    }

    function setNombre($nombre){
        $this->$nombre = $nombre;
    }
    
    function setApellido($apellido){
        $this->$apellido = $apellido;
    }

    function setNumeroSeguirdadSocial($numeroSeguirdadSocial){
        $this->$numeroSeguirdadSocial = $numeroSeguirdadSocial;
    }

    function getNombre(){
        return $this->nombre;
    }

    function getApellido(){
        return $this->apellido;
    }

    function getNumeroSeguirdadSocial(){
        return $this->numeroSeguirdadSocial;
    }

    function mostrar(){        
        echo "Esta enplead@ ". $this->getNombre() ." ". $this->getApellido()." con el NSS: " . $this->getNumeroSeguirdadSocial();
    }
}

?>