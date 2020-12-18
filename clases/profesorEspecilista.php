<?php
include "Profesor.php";

class profesorExpecialista extends Profesor{
    private $horas;
    private $tarifa;
    private $base;
    

    public function __construct($nombre, $apellido, $numeroSeguirdadSocial, $horas, $tarifa, $base)
    {
        parent::__construct($nombre, $apellido, $numeroSeguirdadSocial);
        $this->tarifa = $tarifa;
        $this->base = $base;        
        $this->horas = $horas;        
    }

    public function getHoras(){
        return $this->horas;
    }

    public function getBase(){
        return $this->base;
    }

    public function getTarifa(){
        return $this->tarifa;
    }

    public function setHora($horas)
    {
        $this->horas = $horas;
    }

    public function setBase($base)
    {
        $this->base = $base;
    }

    public function setTarifa($tarifa)
    {
        $this->tarifa = $tarifa;
    }

    public function ingresos()
    {
        return $this->getBase() + $this->getHoras() * $this->getTarifa();
    }

    public function mostrar()
    {
        parent::mostrar();
        echo "<br>Los ingresos ". $this->ingresos();
    }
}


?>