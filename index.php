<?php
include "clases/Profesor.php";
include "clases/ProfesorPlantilla.php";
include "clases/profesorEspecilista.php";
include "clases/PruebaPolimorfismo.php";
include "vistas/cabecera.php";

$prof1 = new profesorPlantilla("Marta","Perez","asdf","12","20");
$prof2 = new profesorExpecialista("Marta","Perez","asdf","12","20","60");

echo "<h1>Profesor plantilla:</h1>";
$prof1->mostrar();

echo "<h1>Profesor Especialista:</h1>";
$prof2->mostrar();

echo "<h1>Prueba polimorfismo:</h1>";
echo PruebaPolimorfismo::calcular($prof1);
echo PruebaPolimorfismo::calcular($prof2);

include "vistas/pie.php";

?>