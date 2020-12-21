<?php
include "clases/Profesor.php";
include "clases/ProfesorPlantilla.php";
include "clases/profesorEspecilista.php";
include "clases/PruebaPolimorfismo.php";
include "clases/Departamento.php";
include "vistas/cabecera.php";

$prof1 = new profesorPlantilla("Luis","Rodriguez","asdf","12","20");
$prof2 = new profesorExpecialista("Marta","Hernandez","asdf","12","20","60");
$prof3 = new profesorExpecialista("Jose","Perez","asdf","12","20","60");

echo "<h1>Profesor plantilla:</h1>";
$prof1->mostrar();

echo "<h1>Profesor Especialista:</h1>";
$prof2->mostrar();

echo "<h1>Profesor Especialista:</h1>";
$prof3->mostrar();

echo "<h1>Prueba polimorfismo:</h1>";
echo "Los ingresoso de ". $prof1->getApellido()." son ".PruebaPolimorfismo::calcular($prof1)."<br>";
echo "Los ingresoso de ".$prof2->getApellido()." son ".PruebaPolimorfismo::calcular($prof2)."<br>";
echo "Los ingresoso de ".$prof3->getApellido()." son ".PruebaPolimorfismo::calcular($prof3)."<br>";

echo "<h1>Listado Deparmento:</h1>";
$departamemento = new Departamento();
$departamemento->addProfesor($prof1);
$departamemento->addProfesor($prof2);
$departamemento->addProfesor($prof3);
$departamemento->listarProfesores();

include "vistas/pie.php";

?>