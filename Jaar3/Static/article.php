<?php

class Article{

  private $name = null;
  private static $countArticles = null;

  public function __construct()
  {
  }

  public function setArticleName($name){
    $this->name = $name;
  }

  public function getArticleName(){
    return $this->name;
  }

  public function setCount(){
    static::$countArticles++;
  }

  public function getCount(){
    return static::$countArticles;
  }



}


$article1 = new Article();
$article1->setArticleName('Flikker');
echo $article1->getArticleName();
$article1->setCount();
echo $article1->getCount();
$article2 = new Article();
$article3 = new Article();

 ?>
