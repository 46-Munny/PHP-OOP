<?php
class mobile{
  var $model;

  function showmodel($num)
  {
    $this->model=$num;
    echo"Model no is:".$this->model;
  }
}

$sumsung=new mobile;
$sumsung->showmodel("A4");



 ?>
