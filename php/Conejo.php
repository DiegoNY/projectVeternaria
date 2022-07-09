<?php
require 'HistotialMedico.php';
class Conejo extends HistorialMedico {

    public $id;
    public $nombre;
    function __construct($typeVacunas,$nombre,$talla,$peso,$raza)
    {
        parent:: __construct($typeVacunas,$raza,$peso,$talla);
        $this->nombre = $nombre;
    }
}