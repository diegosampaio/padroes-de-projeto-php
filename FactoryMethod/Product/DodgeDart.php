<?php
namespace FactoryMethod\Product;

class DodgeDart implements CarroProduct
{
  public function acelerar(): void
  {
    echo "Acelerando o Dodge Dart";
  }

  public function frear(): void
  {
    echo "Freando o Dodge Dart";
  }

  public function trocarMarcha(): void
  {
    echo "Trocando a marcha do Dodge Dart";
  }
}