<?php
header("Content-Type: application/json");

require 'Veicolo.php';
require 'Automobile.php';

$auto1 = new Automobile();
$auto1->setMarca('Fiat');
$auto1->setModello('500');
$auto1->setAnno(2020);

$auto2 = new Automobile();
$auto2->setMarca('Ford');
$auto2->setModello('Focus');
$auto2->setAnno(2019);

$auto3 = new Automobile();
$auto3->setMarca('Toyota');
$auto3->setModello('Corolla');
$auto3->setAnno(2020);

$auto = array($auto1, $auto2, $auto3);

$my_json = json_encode($auto);

echo $my_json;
?>
