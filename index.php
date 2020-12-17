<?php
include "clases/Profesor.php";
include "vistas/cabecera.php";

$marta = new Profesor("Marta","Perez","asdf");

$marta->mostrar();

include "vistas/pie.php";

?>