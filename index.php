<?php
//include "clases/Profesor.php";
//include "clases/ProfesorPlantilla.php";
include "clases/profesorEspecilista.php";
include "vistas/cabecera.php";

$marta = new profesorExpecialista("Marta","Perez","asdf","12","20","60");

$marta->mostrar();

include "vistas/pie.php";

?>