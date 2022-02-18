<?php
// nombres, documento, salario, fecha_ingreso, clave

// dias trabajados - salario minimo
$vr_nombres = "Juan Perez";
$vr_dcumento = 1002897528;
$vr_fevha_ingreso = date('y-m-d');
$vr_salario = 1000000;
$vr_dias_trabajados = 27;

$vr_dia_salario = $vr_salario/30;
$vr_calcular_salario =$vr_dia_salario*$vr_dias_trabajados;
"Su salario es de: ". number_format($vr_calcular_salario,2);


?>