<?php
namespace FactoryMethod\Product;

class DodgeCharger implements CarroProduct
{
  public function acelerar(): void
  {
    echo "Acelerando o Dodge Charger <br>";
  }

  public function frear(): void
  {
    echo "Freando o Modelo Dodge Charger <br>";
  }

  public function trocarMarcha(): void
  {
    echo "Trocanco a Marcha do Dodge Charger <br>";
  }
}