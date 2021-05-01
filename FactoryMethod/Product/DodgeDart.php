<?php
namespace FactoryMethod\Product;

class DodgeDart implements CarroProduct
{
  public function acelerar(): void
  {
    echo "Acelerando o Dodge Dart <br>";
  }

  public function frear(): void
  {
    echo "Freando o Dodge Dart <br>";
  }

  public function trocarMarcha(): void
  {
    echo "Trocando a marcha do Dodge Dart <br>";
  }
}