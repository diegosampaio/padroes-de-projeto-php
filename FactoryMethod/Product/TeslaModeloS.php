<?php
namespace FactoryMethod\Product;

class TeslaModeloS implements CarroProduct
{

  public function acelerar(): void
  {
    echo "Acelerando Tesla Modelo S <br>";
  }

  public function frear(): void
  {
    echo "Freando Tesla Modelos S <br>";
  }

  public function trocarMarcha(): void
  {
    echo "Trocando a marcha do Tesla Modelo S <br>";
  }
}