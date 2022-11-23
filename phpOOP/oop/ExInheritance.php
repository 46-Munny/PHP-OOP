<?php
class Person {
  public $name;
  public $ph;
  public function __construct($n, $p) {
    $this->name = $n;
    $this->ph = $p;
  }
  public function intro() {
    echo "Name is {$this->name} and Phone is {$this->ph}.";
  }
}

class Student extends Person {
  public $roll;
  public $cg;
  public function __construct($r, $c) {
    parent:: __construct("Munny","01709216382");
    $this->roll = $r;
    $this->cg = $c;
  }
  public function message() {

    $this -> intro();
      echo "Roll is {$this->roll} and cg is {$this->cg}.";
  }
}
$st= new Student(2520,3.89);  // OK. __construct() is public
$st->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>
