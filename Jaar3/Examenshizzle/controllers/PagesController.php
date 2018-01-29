<?php

class PagesController
{
	public function home()
	{
		loadView('theme/header');
		loadView('pages/home');
		loadView('theme/footer');
	}


	public function about()
	{
		loadView('theme/header');
		loadView('pages/about', [ 'name' => 'Kroket']);
		loadView('theme/footer');
	}

}

?>
