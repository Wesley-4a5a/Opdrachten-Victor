<?php
//Security tegen direct access
if(defined('APP_PATH') === false){
	die();
}
//of in kort
defined('APP_PATH') || die();


class TestController extends AppControllerAbstract
{

	public function kroket()
	{
		echo '<img src="./assets/images/kroket.png">';
	}

}

?>
