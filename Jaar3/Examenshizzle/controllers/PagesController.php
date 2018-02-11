<?php
//Security tegen direct access
if(defined('APP_PATH') === false){
	die();
}
//of in kort
defined('APP_PATH') || die();


class PagesController extends AppControllerAbstract
{
	public function home()
	{
		// loginCheck();
		$this->loadCompleteView('pages/home');

	}


	public function about()
	{
		// loginCheck();
		$this->loadCompleteView('pages/about', [ 'name' => 'Kroket']);

	}

}

?>
