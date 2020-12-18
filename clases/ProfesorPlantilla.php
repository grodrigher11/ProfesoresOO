<?php
include "Profesor.php";

class ProfesorPlantilla extends Profesor{
    private $sueldo;
    private $dietas;


    public function __construct($nombre, $apellido, $numeroSeguirdadSocial, $sueldo, $dietas){
        parent::__construct($nombre, $apellido, $numeroSeguirdadSocial);
        $this->sueldo = $sueldo;
        $this->dietas = $dietas;
    }

    public function setSueldo($sueldo){
        $this->$sueldo = $sueldo;
    }

    public function setdietas($dietas){
        $this->$dietas = $dietas;
    }

    public function getSueldo(){
        return $this->sueldo;
    }

    public function getDietas(){
        return $this->dietas;
    }

    public function mostrar(){   
        echo parent::mostrar();     
        echo "<br>Los ingresos ".$this->ingresos();
    }

    public function ingresos(){
        return $this->getDietas() + $this->getSueldo();
    }

}
?>