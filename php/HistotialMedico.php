<?php

class HistorialMedico {
    public $id;
    public $typeVacunas;
    public $raza;
    public $peso;
    public $talla ;
    function __construct($typeVacunas,$raza,$peso,$talla)
    {
        $this->typeVacunas = $typeVacunas;
        $this->raza = $raza;
        $this->peso = $peso;
        $this->talla = $talla;
    }


}