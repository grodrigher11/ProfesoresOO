<?php
//include "clases/Profesor.php";
include "clases/ProfesorPlantilla.php";
include "vistas/cabecera.php";

$marta = new ProfesorPlantilla("Marta","Perez","asdf","12","20");

$marta->mostrar();

include "vistas/pie.php";

?>