<?php
class sum{
  public $a,$b;

function getinput($n1,$n2)
{
  $this->a=$n1;
  $this->b=$n2;
}
function calsum()
{
  $s=$this->a+$this->b;
  return $s;
}

function output($n)
{
  echo "Sum is: ".$n;
}

}

$add=new sum;
$add->getinput(10,20);
$m=$add->calsum();
$add->output($m);


 ?>
