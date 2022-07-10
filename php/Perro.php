<?php
require 'animal.php';
class Perro extends Animal{

    public $id;

    function __construct($nombre,$talla,$peso,$raza,$typeVacunas)
    {
        parent:: __construct($nombre,$typeVacunas,$talla,$peso,$raza);
    }
}