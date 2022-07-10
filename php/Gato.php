<?php
require 'animal.php';

class Gato extends Animal{

    public $id;

    function __construct($dueño,$nombre,$typeVacunas,$talla,$peso,$raza)
    {
        parent:: __construct($nombre,$dueño,$typeVacunas,$talla,$peso,$raza);
        $this->id;
    }
}