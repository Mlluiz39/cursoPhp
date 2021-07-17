<?php

class Main
{
  public function __construct()
  {
    echo "Hello\n";
  }
  /**
   * just a test
   *
   * @param string $name
   * @return void
   */
  public function teste(string $name): void
  {
    
  }
}


(new Main())->teste('Marcelo');
