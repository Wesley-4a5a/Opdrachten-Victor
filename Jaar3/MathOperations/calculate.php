<?php

class mathOperation{
  protected $a = null;
  protected $b = null;
  protected $result = null;
  protected $values = array();

  public function __construct(){

  }

  public function showResult(){
    return $this->result;
  }

  public function getA(){
    return $this->a;
  }

  public function getB(){
    return $this->b;
  }

  public function setArray($values){
      $this->values = $values;
  }

  public function __destruct(){
    echo 'Flikkers zijn kapot. ';
    var_dump($this->values);
  }

}

class addUp extends mathOperation{

  public function calculate(){
      $this->result = $this->a + $this->b;
  }

  public function calculateMultiple(){
    foreach ($this->values as $key => $value) {
      $this->result = ($this->result + $value);
    }
 }
}

class subtract extends mathOperation{

  public function calculate(){
      $this->result = $this->a - $this->b;
  }

  public function calculateMultiple(){
    foreach ($this->values as $key => $value) {
      $this->result = ($value - $this->result);
    }
 }


}

class multiply extends mathOperation{

  public function calculate(){
      $this->result = $this->a * $this->b;
  }

  public function calculateMultiple(){
    foreach ($this->values as $key => $value) {
     if($this->result === null){
        $this->result = $value;
    }
    else{
        $this->result = ($value * $this->result);
    }
    }
 }
}

class divide extends mathOperation{

    public function calculate(){
        $this->result = $this->a / $this->b;
    }

    public function calculateMultiple(){
      foreach ($this->values as $key => $value) {
        if($this->result === null){
          $this->result = $value;
        }
        else{
        $this->result = ($value / $this->result);
      }
      }
   }

}

$addUp = new addUp();
$addUp->setArray(array(5,8,3));
$addUp->calculateMultiple();
echo $addUp->showResult();
echo '<br />';

$subtract = new subtract();
$subtract->setArray(array(11,1,3));
$subtract->calculateMultiple();
echo $subtract->showResult();
echo '<br />';

$multiply = new multiply();
$multiply->setArray(array(11,5,3));
$multiply->calculateMultiple();
echo $multiply->showResult();
echo '<br />';

$divide = new divide();
$divide->setArray(array(11,1,3));
$divide->calculateMultiple();
echo $divide->showResult();
echo '<br />';

// $addUp = new addUp(5.4,9.3);
// $addUp->calculate();
// echo $addUp->showResult();
// echo '<br />';
//
// $subtract = new subtract(12,9.3);
// $subtract->calculate();
// echo $subtract->showResult();
// echo '<br />';
//
// $multiply = new multiply(12,9.3);
// $multiply->calculate();
// echo $multiply->showResult();
// echo '<br />';
//
// $divide = new divide(12,9.3);
// $divide->calculate();
// echo $divide->showResult();
// echo '<br />';

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Math Operations</title>
   </head>
   <body>

   </body>
 </html>
