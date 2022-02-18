<?php

require_once("02_class_cliente.php");
// **** crear el objeto o instancia
$objCliente = new Cliente(1002807518, "Alexandra Imbachi", "alex@gmail.com", 1300000);
echo $objCliente->nombres."<br>";
echo $objCliente->fecha_registro."<br>";
echo $objCliente->getCedula()."<br>";
echo $objCliente->getEmail();

?>