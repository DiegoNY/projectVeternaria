<?php
require 'animal.php';

class Gato extends Animal{

    public $id;

    function __construct($nombre,$talla,$peso,$raza)
    {
        parent:: __construct($nombre,$talla,$peso,$raza);
        $this->id;
    }
}