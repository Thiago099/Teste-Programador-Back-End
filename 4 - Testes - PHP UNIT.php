<?php
include '2 - Funções e arrays.php';

use PHPUnit\Framework\TestCase;

class EncontrarTest extends TestCase
{
  public function test_recursao()
  {
    $this->assertEquals(60,recursivo());
  }
  public function test_repeticao()
  {
    $this->assertEquals(60,repeticao());
  }
}

?>
