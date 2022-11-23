<?php
abstract class Person {
  public $name;
  public $ph;
  public function __construct($n, $p) {
    $this->name = $n;
    $this->ph = $p;
  }
  public function display()
  {
    echo "Class contains info about a person.";
  }
  abstract public function info() ;
}



class Student extends Person {
  public $roll;
  public $cg;
  public function __construct($r, $c) {
    parent:: __construct("Munny","01709216382");
    $this->roll = $r;
    $this->cg = $c;
  }
  public function info() {


      echo "Name is {$this->name} and Phone is {$this->ph}.  Roll is {$this->roll} and cg is {$this->cg}.";
  }
}
$st= new Student(2520,3.89);  // OK. __construct() is public
$st->info(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>
