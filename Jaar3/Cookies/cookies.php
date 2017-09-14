<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
      #alinea{
        border: 2px groove black;
        background-color: black;
        color: white;
      }
      #submit{
        background-color: green;
        color: white;
      }
    </style>
  </head>
  <body>
<?php
  if(!isset($_COOKIE['acceptTerms'])){
?>
    <div id='alinea'>
      Deze website maakt gebruik van cookies... etc...
      <form method='POST' action=''>
        <input id='submit' type='submit' name='submit' value='Acepetere' />
      </form>
    </div>
<?php
  }
?>
  </body>
</html>
<?php
  if(ISSET($_POST['submit'])){
    setcookie('acceptTerms', 'true');
  }
?>
