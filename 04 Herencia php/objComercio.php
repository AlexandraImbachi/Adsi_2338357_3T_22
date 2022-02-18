<?php
require_once("01_clasePersona.php");
require_once("02_claseCliente.php");
require_once("03_claseEmpleado.php");

//instancia de la clase persona
$objPersona = new Persona(1002807518, "Alxendra Imbachi", 18);
echo "<h2> Llamado a la clase persona </h2><br>";
echo "Cedula: " . $objPersona->getCedula()."<br>";
echo "Nombre: " . $objPersona->nombre."<br>";
echo "Edad: " . $objPersona->edad."<br>";

//instancia de la clase cliente 
$objCliente = new Cliente(10807518, "Viviana Velasco", 18, 2450000);
echo "<h2> Llamado a la clase Cliente </h2><br>";
echo "Cedula: " . $objCliente->getCedula()."<br>";
echo "Nombre: " . $objCliente->nombre."<br>";
echo "Valor del credito: " . $objCliente->getCredito();

//instancia de la clase empleado
$objEmpleado = new Empleado(1254443532,"Sofia Ceron", 19, 1500000, 2340000);
echo "<h2> Llamado a la clase Empleado </h2><br>";
echo "Cedula: " . $objEmpleado->getCedula()."<br>";
echo "Nombre: " . $objEmpleado->nombre."<br>";
echo "Valor del credito: " . $objEmpleado->getCredito()."<br>";
echo "Salario: " . $objEmpleado->getSalario();


?>