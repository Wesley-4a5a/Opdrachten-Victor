<?php
//Security tegen direct access
if(defined('APP_PATH') === false){
	die();
}
//of in kort
defined('APP_PATH') || die();


class AppControllerAbstract
{


  function __construct()
  {

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
