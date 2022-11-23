<?php
interface Person {


  public function display();
  public function info() ;
}



class Student implements Person {
  public $name;
  public $roll;
  public $cg;
  public function __construct($n,$r, $c) {
    $this->name = $n;
    $this->roll = $r;
    $this->cg = $c;
  }
  public function display()
  {
    echo "Information about a student<br />";
  }
  public function info() {


    //  echo "Name is {$this->name} and Roll is {$this->roll} and cg is {$this->cg}.";
    echo "Name: ".$this->name." Roll: ".$this->roll." cg: ".$this->cg;
  }
}
$st= new Student("Munny",2520,3.89);  // OK. __construct() is public
$st->display();
$st->info(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>
