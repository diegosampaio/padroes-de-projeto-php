<?php
require_once("../autoloader.php");

$teslaFactory = new \FactoryMethod\TeslaFactory();

$dodgeFactory = new \FactoryMethod\DodgeFactory();

try {

  $teslaModeloS = $teslaFactory->criarCarro('modelo_s');
  echo $teslaModeloS->acelerar();
  echo $teslaModeloS->frear();
  echo $teslaModeloS->trocarMarcha();

  $teslaModeloX = $teslaFactory->criarCarro('modelo_x');
  echo $teslaModeloX->acelerar();
  echo $teslaModeloX->frear();
  echo $teslaModeloX->trocarMarcha();

  $dodgeCharger = $dodgeFactory->criarCarro('charger');
  echo $dodgeCharger->acelerar();
  echo $dodgeCharger->frear();
  echo $dodgeCharger->trocarMarcha();

  $dodgeDart = $dodgeFactory->criarCarro('dart');
  echo $dodgeDart->acelerar();
  echo $dodgeDart->frear();
  echo $dodgeDart->trocarMarcha();

  $fox = $teslaFactory->criarCarro('fox');

} catch (Exception $e) {
  echo $e->getMessage();
}