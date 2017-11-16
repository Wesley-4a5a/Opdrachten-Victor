<?php

class Car
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

  function showCar(){
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

  public function __destruct(){

  }

}


// Main code

$FO = new Car('Green', 'Ford', 'Mustang', 'Gasoline');
echo $FO->showCar();


$TY = new Car('Red', 'Toyota', 'Prius', 'Electricity');
echo $TY->showCar();


$VW = new Car('Blue', 'Volkswagen', 'Golf', 'Diesel');
echo $VW->showCar();

echo $FO->economyCheck();
echo $TY->economyCheck();
echo $VW->economyCheck();
echo $FO->setColour('Blauw');
echo $FO->getColour();
 ?>
