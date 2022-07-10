<?php
require 'animal.php';
require 'HistotialMedico.php';
class Conejo extends HistorialMedico {

    public $nombre;
    function __construct($id,$typeVacunas,$nombre,$talla,$peso,$raza)
    {
        parent:: __construct($id,$typeVacunas,$talla,$peso,$raza);
        $this->nombre = $nombre;
    }
}