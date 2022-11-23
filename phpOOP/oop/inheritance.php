<?php
class Person{
  public $name,$address,$phnNo;

  function getinput1($n,$add,$phn)
  {
    $this->name=$n;
    $this->address=$add;
    $this->phnNo=$phn;
  }

  function getoutput()
  {
    echo "Name: ".$this->name."<br />";
    echo "Address: ".$this->address."<br />";
    echo "Phone No: ".$this->phnNo."<br />";
  }

}

class Student extends Person{
  public $rollNo;

  function getinput($n,$add,$phn,$roll)
  {
    Person::getinput1($n,$add,$phn);
    $this->rollNo=$roll;
  }

  function getoutput()
  {
    parent::getoutput();
    echo "Roll No: ".$this->rollNo."<br />";

  }
}

$st=new Student;
$st->getinput("Munny","Gazipur","01709216382",1);
$st->getoutput();



 ?>
