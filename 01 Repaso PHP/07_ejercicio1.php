<?php

// convertir un texto dado deacuerdo a la solicitud a mayusculas o minusculas

$vrTexto = "Centro de Teleinformatica y produccion Industrial";
$vrConventir = "Minusculas";

function convertir_texto($convertir, $texto)
{

    if ($convertir == "Minusculas") {
        $vr_convertir_texto = strtolower($texto);
    } elseif ($convertir == "Mayuscula") {
        $vr_convertir_texto = strtoupper($texto);
    }
    return $vr_convertir_texto;
}

echo convertir_texto($vrConvertir, $vrTexto);

?>