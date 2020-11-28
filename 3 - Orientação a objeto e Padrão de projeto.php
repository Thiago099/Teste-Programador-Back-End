<?php

class test
{
  private string $a;
  private string $b;
  private string $c;
  function __construct($a,$b,$c)
  {
    $this->a=$a;
    $this->b=$b;
    $this->c=$c;
  }
  function to_string(){
    return "{ $this->a, $this->b, $this->c }";
  }
    function get_a(){return $this->a;}
    function set_a($value){$this->a=$value;}

    function get_b(){return $this->b;}
    function set_b($value){$this->b=$value;}

    function get_c(){return $this->c;}
    function set_c($value){$this->c=$value;}
}

$t=new test('A','B','C');
echo $t->to_string();



 ?>
