<?php
require 'animal.php';
require 'Conejo.php';
require 'HistotialMedico.php';
$Animal = new Animal("Diego",172,72,'1',"otro");
$Animal->printDataAnimal();

$conejo = new Conejo(15,"todas","Abrazos",15,5,"cariñosa");
