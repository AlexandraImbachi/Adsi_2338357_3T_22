<?php
require_once("01_clasePersona.php");

class Cliente extends Persona{

    private $credito;

    public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito)
    {
        // envio los atributos se asgnen a la clase persona 
        parent::__construct($vrcedula, $vrnombre, $vredad);
        $this->credito = $vrcredito;
    }
    public function getCredito()
    {
        return $this->credito;
    }

}
?>
