<?php

include 'InformationInterface.php';

interface CarInterface{

  /**
  * @param string $colour
  * @param string $brand
  * @param string $type
  * @param string $fuel
  */
  public function __construct($colour, $brand, $type, $fuel);


  /**
  * @return boolean
  */
  public function economyCheck();

  /**
  * @param string $colourtje sets the colour of the car
  */
  public function setColour($colourtje);

  /**
  * @return string $colourtje returns the colour of the car
  */
  public function getColour();

}

class Car implements CarInterface, InformationInterface
{

  private $colour;
  public $brand;
  public $type;
  public $thestuffthatfuelshisdreams;


  public function __construct($colour, $brand, $type, $fuel){
    $this->colour = $colour;
    $this->brand = $brand;
    $this->type = $type;
    $this->thestuffthatfuelshisdreams = $fuel;
  }

  public function showInfo(){
    return 'Dit is een: ' . $this->brand . ' van het type: ' . $this->type . ' met de kleur: ' . $this->colour . ' en vergast de aarde met: ' . $this->thestuffthatfuelshisdreams . '<br />';
  }

  function economyCheck(){
    if($this->thestuffthatfuelshisdreams == 'Electricity'){
      // $this->economic = true;
      return true;
    }
    else{
      return false;
    }
  }

  function setColour($colourtje){
      $this->colour = $colourtje;
  }

  function getColour(){
      return 'De kleur: ' . $this->colour;
  }

  public function __set($name, $value){
      if($name === 'colour'){
        if($value === 'red' || $value === 'yellow' || $value = 'green')
        $this->colour = $value;
      }
  }

  public function __get($name){
    return $this->name;
  }

  public function __destruct(){

  }

}


// Main code

$FO = new Car('Green', 'Ford', 'Mustang', 'Gasoline');
echo $FO->showInfo();


$TY = new Car('Red', 'Toyota', 'Prius', 'Electricity');
echo $TY->showInfo();


$VW = new Car('Blue', 'Volkswagen', 'Golf', 'Diesel');
echo $VW->showInfo();

echo $FO->economyCheck();
echo $TY->economyCheck();
echo $VW->economyCheck();
echo $FO->setColour('Blauw');
echo $FO->getColour();
 ?>
