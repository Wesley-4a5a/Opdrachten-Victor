<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
   <link rel="stylesheet" href="sprite2.css">

  </head>
  <body>
<?php

  class gameCharacter{
    protected $gameName = NULL;

    public function __construct($game){
      $this->gameName = $game.'-character';
    }

  }

  class megamanCharacter extends gameCharacter{
    protected $action = NULL;


    public function getActionName(){
      return $this->action;
    }

    public function getAction(){
      return '<span class="'.$this->gameName .' ' . $this->action . '" ></span>';
    }

    public function standStill(){
      echo 'Standing still like the lazy piece of shit he is';
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
    protected $action = 'act0';

    public function shoot(){
      echo 'Shooting ';
    }

    public function walk(){
      echo 'Walking ';
    }


  }

  class metalman extends megamanCharacter
  {
    protected $action = 'act1';

    public function metalBlade(){
      echo 'Used Metal Blade! ';
    }

  }


    $mega = new megaman('megaman');
    echo $mega->getAction(); ///spanneke
    $mega->standStill();
    echo '<br /><hr />';
    $metal = new metalman('megaman');
    echo $metal->getAction(); ///spanneke
    // $mega->shoot();




 ?>

<!-- MOVEMENT SHIT -->
<!-- . -->
<!-- NEGEER DIT VOOR DE OPDRACHT. Just for fun. -->
<?php
     class megamanCharacterOLD{
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


     class megamanOLD extends megamanCharacterOLD
     {

       public function shoot(){
         echo 'Shooting ';
       }

       public function jump(){
         echo 'Jumping ';
       }


     }

     class metalmanOLD extends megamanCharacterOLD
     {

       public function metalBlade(){
         echo 'Used Metal Blade! ';
       }

     }



       $run2 = new megamanOLD('act2');
       echo $run2->getAction(); ///spanneke
       $run3 = new megamanOLD('act3');
       echo $run3->getAction(); ///spanneke
       $run4 = new megamanOLD('act4');
       echo $run4->getAction(); ///spanneke
       $run5 = new metalmanOLD('act5');
       echo $run5->getAction(); ///spanneke
       $run6 = new megamanOLD('act6');
       echo $run6->getAction(); ///spanneke
       $run6->shoot();
       $run6->walk();
       echo $run3->getActionName();
       $run5->walk();
       $run5->metalBlade();
 ?>


       <script type="text/javascript">
       console.log('lol');
         setTimeout(Animate, 200);

          Sprite_Index = 1;

          function Animate()
          {
            document.querySelector(".act"+Sprite_Index).style.visibility = 'hidden';
            Sprite_Index++;
            if(Sprite_Index >= 7)
            {
                Sprite_Index = 1;
            }
            document.querySelector(".act"+Sprite_Index).style.visibility = 'visible';

            setTimeout(Animate, 200);
          }
</script>
  </body>
</html>
