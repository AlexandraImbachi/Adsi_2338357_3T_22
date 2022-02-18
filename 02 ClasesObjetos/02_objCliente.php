<?php
require_once("02_claseCliente.php");

$objCliente = new Cliente(1000200,"Alexandra Imbachi", "aleximba@gmail.com");
$objCliente->getDatospersonales();
print_r('<pre>');
print_r($objCliente);
print_r('</pre>');

?>
