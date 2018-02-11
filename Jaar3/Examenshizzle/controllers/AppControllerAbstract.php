<?php
//Security tegen direct access
if(defined('APP_PATH') === false){
	die();
}
//of in kort
defined('APP_PATH') || die();


class AppControllerAbstract
{
  protected $language = null;

  function __construct()
  {
    $this->language = new Language(APP_LANG);
  }

  function loadCompleteView($contentView, $vars = [])
  {
    $basicVars = [
      'language' => $this->language
    ];

    $allVars = array_merge($basicVars, $vars);

    loadView('theme/header', $allVars);
    loadView($contentView, $allVars);
    loadView('theme/footer', $allVars);
  }

}



 ?>
