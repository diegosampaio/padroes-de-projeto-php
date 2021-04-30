<?php
namespace FactoryMethod\Product;

class DodgeCharger implements CarroProduct
{
  public function acelerar(): void
  {
    echo "Acelerando o Dodge Charger";
  }

  public function frear(): void
  {
    echo "Freando o Modelo Dodge Charger";
  }

  public function trocarMarcha(): void
  {
    echo "Trocanco a Marcha do Dodge Charger";
  }
}