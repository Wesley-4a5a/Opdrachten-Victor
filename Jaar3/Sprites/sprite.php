<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
   <link rel="stylesheet" href="sprite.css">

  </head>
  <body>
<?php

  class megamanCharacter{
    private $action = NULL;

    public function __construct($action){
        $this->action = $action;
    }

    public function getActionName(){
      return $this->action;
    }

    public function getAction(){
      return '<span class="megaman-character ' . $this->action . '" ></span>';
    }

    public function walk(){
      echo 'Walking ';
    }

    public function __toString(){
        return $this->getAction();
    }

    public function __destuct(){
        echo 'U bent vernietigd ';
    }

  }


  class megaman extends megamanCharacter
  {

    public function shoot(){
      echo 'Shooting ';
    }

    public function jump(){
      echo 'Jumping ';
    }


  }

  class metalman extends megamanCharacter
  {

    public function metalBlade(){
      echo 'Used Metal Blade! ';
    }

  }


    $stand = new megaman('act0');
    echo $stand->getAction(); ///spanneke
    $run1 = new megaman('act1');
    echo $run1->getAction(); ///spanneke
    $run2 = new megaman('act2');
    echo $run2->getAction(); ///spanneke
    $run3 = new megaman('act3');
    echo $run3->getAction(); ///spanneke
    $run4 = new megaman('act4');
    echo $run4->getAction(); ///spanneke
    $run5 = new metalman('act5');
    echo $run5->getAction(); ///spanneke
    $run6 = new megaman('act6');
    echo $run6->getAction(); ///spanneke
    $run6->shoot();
    $run6->walk();
    echo $run3->getActionName();

    $run5->metalBlade();

 ?>
    <!-- <span class="megaman-character act0" id='0'></span>
    <span class="megaman-character act1" id='1'></span>
    <span class="megaman-character act2" id='2'></span>
    <span class="megaman-character act3" id='3'></span> -->


    <!-- <script type="text/javascript">

   document.querySelector('body').addEventListener('keypress', run);
   document.querySelector('body').addEventListener('keyup', stand);
   function stand(){
             document.querySelector('.act0').style.visibility = 'visible';
             document.querySelector('.act1').style.visibility = 'hidden';
             document.querySelector('.act2').style.visibility = 'hidden';
             document.querySelector('.act3').style.visibility = 'hidden';
   }
      var i = 0;
    function run(){
      i++;
      console.log(i);
      var aap = '.act'+i;
      console.log(aap);
       document.querySelector('.act0').style.visibility = 'hidden';
       document.querySelector('.act1').style.visibility = 'hidden';
       document.querySelector('.act2').style.visibility = 'hidden';
       document.querySelector('.act3').style.visibility = 'hidden';
       document.querySelector(aap).style.visibility = 'visible';
       if (i >= 3) {
         i=0;
       }
    }


     </script> -->

     <script type="text/javascript">
       setTimeout(Animate, 300);

        Sprite_Index = 0;

        function Animate()
        {
          document.querySelector(".act"+Sprite_Index).style.visibility = 'hidden';
          Sprite_Index++;
          if(Sprite_Index >= 7)
          {
              Sprite_Index = 0;
          }
          document.querySelector(".act"+Sprite_Index).style.visibility = 'visible';

          setTimeout(Animate, 200);
        }
     </script>
  </body>
</html>
