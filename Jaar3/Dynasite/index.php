<?php
  require_once('database.php');

 ?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title><?php echo $_GET['view'] ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="home-page sidebar-layout">
  <footer id="header">
    <?php require('view/header.php') ?>
  </footer>
  <footer id="main-nav">
    <?php require('view/navigation.php') ?>
  </footer>
  <footer id="content-container">
    <?php require('view/content.php') ?>
  </footer>
  <footer id="footer">
    <?php require('view/footer.php') ?>
  </footer>
</body>
</html>
