<?php

namespace Amien\ComposerLibrary;

class Customer
{
  private string $name;
  public function __construct($name)
  {
    $this->name = $name;
  }
  public function sayHello(string $name): string
  {
    return "hello $name, my name is $this->name";
  }
}
