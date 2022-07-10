<?php

use JetBrains\PhpStorm\ArrayShape;
require 'HistorialMedico.php';
class Animal extends HistorialMedico{
 
    public  $id    ;  
    public  $nombre; 
    public  $dueño;
 
    public function __construct( $nombre, $dueño,$typeVacunas,$talla, $peso ,$raza)
    {

        parent:: __construct($typeVacunas,$raza,$peso,$talla);
        $this->nombre=$nombre;
        $this->dueño=$dueño;
    }

    public function printDataAnimal()
    {
        echo "<h1>Informacion del Animal</h1>";
        echo "Nombre : $this->nombre <br/>";
        echo "Peso   : $this->talla <br/>";
        echo "Peso   : $this->talla <br/>";
        echo "Raza   : $this->raza   ";
        echo "Dueño  : $this->dueño ";
        echo "Vacunas : $this->typeVunas";
        
    }
}  