<?php

include 'InformationInterface.php';

class Person implements InformationInterface
{

  public $name;
  public $age;

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }

  public function showInfo(){
    return 'Deze flikker zijn naam is: ' . $this->name . ' en zijn/haar leeftijd is: '.$this->age . '<br />';
  }

  public function setAge($age)
	{
		if(($age >= 0 ) && ($age <= 150))
		{
			$this->age = $age;
		}
	}

	public function getAge()
	{
		return $this->age;
	}

	public function CheckAge()
	{
		if($this->age < 18)
		{
			return false;
		}
		else
		{
			return true;
		}
	}

  public function __destruct(){

  }

}


// Main code

$tim = new Person('Tim', 21);

echo $tim->showInfo();

$bassie = new Person('Bassie', 82);

echo $bassie->showInfo();

$tim->setAge(24);
$bassie->setAge(82);

 ?>
