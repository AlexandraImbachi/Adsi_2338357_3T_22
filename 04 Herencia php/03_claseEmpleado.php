<?php
require_once("02_claseCliente.php");

class Empleado extends Cliente{

    private $salario;

    public function __construct($vrcedula, $vrnombre, $vredad, $vrcredito, $vrsalario)
    {
        parent::__construct($vrcedula, $vrnombre, $vredad, $vrcredito);
        $this->salario = $vrsalario;
    }
    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($vrsalario)
    {
        $this->salario =$vrsalario;
    }





}



?>