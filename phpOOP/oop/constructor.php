<?php
class mobile{
  var $model;

  function __construct($num)
  {
    $this->model=$num;
    echo "parameterized constructor<br />";
    echo"Model no is:".$this->model;
  }

  function __destruct()
  {
    echo "<br />obj destroyed.";
  }
}

$sumsung=new mobile(10);




 ?>
