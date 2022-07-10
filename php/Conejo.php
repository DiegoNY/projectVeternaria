<?php
require 'animal.php';

class Conejo extends Animal{

     public $id;
    function __construct($dueño,$typeVacunas,$nombre,$talla,$peso,$raza)
    {
        parent:: __construct($nombre,$dueño,$typeVacunas,$talla,$peso,$raza);

    }
}