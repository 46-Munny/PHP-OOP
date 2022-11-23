<?php
class mobile{
  const model=101;

  function showmodel()
  {

    echo"Model no is:".self::model;
  }
}

$sumsung=new mobile;
$sumsung->showmodel();



 ?>
