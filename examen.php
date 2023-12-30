<?php
include_once 'clases/Melee.php';
include_once 'clases/Distancia.php';

$arma1 = new Melee("Cuchillo", 3);
$arma2 = new Distancia("Pistola", 2, 100, 5);
$arma2->setAlcance(7);
$arma2->setMunicion(100);

echo $arma1->getNombre() . " "  . $arma1->getPotencia() . PHP_EOL;
echo $arma2->getNombre() . " "  . $arma2->getPotencia() . " "  . $arma2->getAlcance() . " "  . $arma2->getMunicion() . PHP_EOL;
$arma2->disparar();
$arma2->disparar();
$arma2->disparar();
$arma2->disparar();
echo $arma2->getMunicion() . PHP_EOL;
$arma2->recargarArma();
echo $arma2->getMunicion() . PHP_EOL;
$arma2->recargarArma();
$arma2->dispararRafaga();
$arma2->disparar();
$arma2->dispararRafaga();
echo $arma2->getMunicion() . PHP_EOL;
?>