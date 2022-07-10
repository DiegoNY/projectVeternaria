<?php
require_once('animal.php');
require_once ('Conejo.php');
require_once ('HistorialMedico.php');
// $Animal = new animal("Diego",172,72,'1',"otro");
// $Animal->printDataAnimal();

$conejo = new Conejo(15,"todas","Abrazos",15,5,"cariñosa");
$conejo->printDataAnimal();

$conejo = new Conejo("Diego","todas","bolitas",15,2,"BOlas");
$conejo->printDataAnimal();

$Animal = new Animal("diego","yo","todas",12,4,"PErrros");
$Animal->printDataAnimal();