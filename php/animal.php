<?php

use JetBrains\PhpStorm\ArrayShape;

class Animal {
 
    public  $id    ;  
    public  $nombre; 
    public  $raza  ;
    public  $talla ; 
    public  $peso  ;  
 
    public function __construct( $nombre, $talla, $peso ,$raza)
    {
        $this->raza = $raza;
        $this->nombre = $nombre;
        $this->talla = $talla;
        $this->peso = $peso;
    }

    public function printDataAnimal()
    {
        echo "<h1>Informacion del Animal</h1>";
        echo "Nombre : $this->nombre <br/>";
        echo "Peso   : $this->talla <br/>";
        echo "Peso   : $this->talla <br/>";
        echo "Raza   : $this->raza ";

        
    }
}  