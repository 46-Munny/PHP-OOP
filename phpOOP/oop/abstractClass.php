<?php
abstract class person{
public $a,$b;
function disp()
{
  $a=99;
  echo"a=".$a;
}

abstract function display($x);

}

class student extends person{

  function dp()
  {
    echo"hello";
  }
  function display($x)
  {

    $this->b=$x;
    echo"b is:".$this->b;
  }
}

$st=new student;
$st->display("A2");

 ?>
