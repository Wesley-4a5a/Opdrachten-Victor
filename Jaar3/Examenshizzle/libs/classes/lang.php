<?php



class Language
{
  public $langFile;

  function __construct($langFile)
  {
    require_once(APP_PATH . "/languages/" . $langFile . '.php');
    $this->langFile = $lang;
  }

  public function getLang($key)
  {
    return $this->langFile[$key];
  }

}




 ?>
