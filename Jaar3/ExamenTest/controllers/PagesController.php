<?php
//Security tegen direct access
if(defined('APP_PATH') === false){
	die();
}
//of in kort
defined('APP_PATH') || die();


class PagesController
{
	public function home()
	{
		// loginCheck();
		loadView('theme/header');
		loadView('pages/home');
		loadView('theme/footer');

	}


	public function about()
	{
		// loginCheck();
		loadView('theme/header');
		loadView('pages/about');
		loadView('theme/footer');

	}

}

?>
