<?php
class Cliente
{

    public $cedula;
    public $nombres;
    public $email;
    public $fecha_registro;
    public $pasword;


    function __construct(int $vr_cedula, $vr_nombre, string $vr_email)
    {
        $this->cedula = $vr_cedula;
        $this->nombres = $vr_nombre;
        $this->email = $vr_email;
        $this->fecha_registro = date('Y-m-d');
        $this->pasword = rand();
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

}

?>