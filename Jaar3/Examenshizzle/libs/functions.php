<?php


function loadView($path , $vars = [])
{
	$viewPath = APP_PATH . '/views/' . $path . '.php';
	extract($vars);
	include $viewPath;



	//require_once(APP_PATH . '/libs/classes/viewClass.php');
	//$$path = new View($viewPath, $vars);
	//$$path->loadView();
	//$$path->renderView();
}

function getDbConnection($server = 'localhost', $database = 'my_web_app', $user = 'root', $pass = '')
{
	static $conn = null;
	if($conn === null)
	{
		$conn = new PDO("mysql:host=$server;dbname=". $database, $user, $pass);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $conn;
}

function redirect($url)
{
	header('Location: '. $url);
	die;
}

function internalRedirect($controller, $action)
{
	header('Location: ' . APP_BASE_URL . '/index.php?controller=' . $controller . '&action=' . $action);
	die;
}


?>
