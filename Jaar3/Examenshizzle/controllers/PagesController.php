<?php

class PagesController
{
	public function home()
	{
		loginCheck();
		loadView('theme/header');
		loadView('pages/home');
		loadView('theme/footer');
	}


	public function about()
	{
		loginCheck();
		loadView('theme/header');
		loadView('pages/about', [ 'name' => 'Kroket']);
		loadView('theme/footer');
	}

}

?>
