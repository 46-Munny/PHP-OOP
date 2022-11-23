<?php
abstract class shape{
protected $color,$filled;
function __construct()
{
  $color="green";
  $filled=true;
}

/*function __construct($c,$f)
{
  $this->color=$c;
  $this->filled=$f;
}*/
function setColor($c)
{
    $this->color=$c;
}

function setFilled($f)
{
  $this->filled=$f;
}

function getColor()
{
  return $this->color;
}

function isFilled()
{
  return $this->filled;
}

function toString()
{
  $f=$this->filled;
  if($f==true)
  {
    echo"A shape with color of ".$this->color." and filled";
  }
  else{
    echo"A shape with color of ".$this->color." and filled";
  }


}

abstract function getArea();
abstract function getPerimeter();

}

class circle extends  shape{
  function getArea()
  {
    $a=3.14*4*4;
    return $a;
  }
  function getPerimeter()
  {
    $p=3.14*2*4;
    return $p;
  }

  function toString()
  {
    shape::toString();
    echo "<br />Circle area is:".$this->getArea()." Perimeter is: ".$this->getPerimeter()."<br />";
  }
}
$cl=new circle;
$cl->setColor("Blue");
$cl->setFilled(false);
$cl->toString();

 ?>
