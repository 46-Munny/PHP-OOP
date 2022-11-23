<?php
class mobile{
  static $model;

  public static function showmodel($num)
  {
    self::$model=$num;
    echo"Model no is:".self::$model=$num;
  }
}

mobile::showmodel("W#");



 ?>
