<?php

class Departamento{
    private $departamento = array();

    

    public function addProfesor($profesor){
        array_push($this->departamento,$profesor);
    }

    public function listarProfesores()
    {
        foreach ($this->departamento as $key => $value) {
                $value->mostrar();
        }
    }
    

    public function sumarIngresos()
    {
        $totalIngreso = 0;
        foreach ($this->departamento as $key => $value) {
            $totalIngreso += $value->ingreso();
        }
        return $totalIngreso;
    }
}

?>