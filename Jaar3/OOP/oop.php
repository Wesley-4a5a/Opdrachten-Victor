<?php

class Person
{

  public $name;
  public $age;

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }

  function showPerson(){
    return 'Deze flikker zijn naam is: ' . $this->name . ' en zijn/haar leeftijd is: '.$this->age . '<br />';
  }

  function setAge(){

  }

  function getAge(){
    
  }


  public function __destruct(){

  }

}


// Main code

$tim = new Person('Tim', 21);

echo $tim->showPerson();

$bassie = new Person('Bassie', 82);

echo $bassie->showPerson();



 ?>
