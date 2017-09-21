<?php
session_start();
if(!isset($_SESSION['login'])){
  $_SESSION['login'] = false;
}

if(isset($_POST['submit'])){
  if($_POST['user'] == 'open' && $_POST['pass'] == 'sesame'){
    $_SESSION['login'] = true;
  }
}

if(isset($_POST['logout'])){
    $_SESSION['login'] = false;
    session_destroy();
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if($_SESSION['login'] != true){
    ?>
    <form action='' method='POST'>
      <input type='name' name='user'/>
      <input type='password' name='pass'/>
      <input type='submit' name='submit' value='Login'/>
    </form>
    <?php
    }
    else {
    ?>
    <form action='' method='POST'>
      <input type='submit' name='logout' value='Logout'/>
    </form>
    <?php
    }
    ?>
  </body>
</html>
