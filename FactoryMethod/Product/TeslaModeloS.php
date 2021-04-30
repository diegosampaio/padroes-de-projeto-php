<?php
namespace FactoryMethod\Product;

class TeslaModeloS implements CarroProduct
{

  public function acelerar(): void
  {
    echo "acelerando Tesla Modelo S\n";
  }

  public function frear(): void
  {
    echo "Freando Tesla Modelos S\n";
  }

  public function trocarMarcha(): void
  {
    echo "Trocando a marcha do Tesla Modelo S\n";
  }
}