<?php

require '../vendor/autoload.php';

use App\Models\Carros;

$carro = new Carros();

$carro->modelo = "Uno";
$carro->marca = "Fiat";
$carro->ano = "2015";

if (!$carro->save()) {
    echo $carro->fail()->getMessage();
}