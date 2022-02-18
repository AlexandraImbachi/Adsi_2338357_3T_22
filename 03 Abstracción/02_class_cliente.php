<?php
class Cliente
{

    protected $cedula;
    public $nombres;
    protected $email;
    public $fecha_registro;
    public $pasword;
    public $salario;




    function __construct(int $vr_cedula, $vr_nombre, string $vr_email, $vr_salario)
    {
        $this->cedula = $vr_cedula;
        $this->nombres = $vr_nombre;
        $this->email = $vr_email;
        $this->fecha_registro = date('Y-m-d');
        $this->pasword = rand(111111,555555);
        $this->salario = $vr_salario;
    }

    public function getDatospersonales()
    {
        $arrayDatos = array(
            'Cedula: ' => $this->cedula,
            'Nombres: ' => $this->nombres,
            'Fecha registro: ' => $this->fecha_registro,
        );
        return $arrayDatos;
    }
    public function getCedula()
    {
        return $this->cedula;
    }
    public function setCedula($Cedula)
    {
        $this->cedula = $Cedula;
    }
    public function getEmail()
    {
        return $this->email;
    }

}



?>