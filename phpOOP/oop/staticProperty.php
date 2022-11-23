<?php
class mobile{
  static $model;

  function showmodel($num)
  {
    self::$model=$num;
    echo"Model no is:".self::$model=$num;
  }
}

$sumsung=new mobile;
$sumsung->showmodel("A4");



 ?>
