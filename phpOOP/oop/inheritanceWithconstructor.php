<?php
class A{
public $a;
function __construct($x)
{
  echo "Constructor of class A";
  $this->a=$x;
  echo"<br />Value is:".$this->a;
}

}


class B extends A{
public $b;
function __construct($x,$y)
{
  A::__construct($x);
  echo "<br />Constructor of class B";
  $this->b=$y;
  echo"<br />Value is:".$this->b;
}

}

$v=new B(10,20);

 ?>
