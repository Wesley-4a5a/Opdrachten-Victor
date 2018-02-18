<?php

// initialization
// f.e. DB connection, session, config, language files
define('APP_PATH', __DIR__);
define('APP_BASE_URL', 'http://localhost/github/ExamenTest');
define('APP_LANG', 'nl');

require_once('libs/functions.php');


$controller = filter_input(INPUT_GET, 'controller' , FILTER_SANITIZE_URL);
$action = filter_input(INPUT_GET, 'action' , FILTER_SANITIZE_URL);

// $requestString = str_replace($_SERVER['SCRIPT_NAME'], '', $_SERVER['PHP_SELF']);
//
// $requestVars = explode("/", $requestString);
//
// if(ISSET($requestVars[1]) && $controller === NULL) {
// 	$controller = filter_var($requestVars[1]);
// }
// if(ISSET($requestVars[2]) && $action === NULL) {
// 	$action = filter_var($requestVars[2]);
// }

// exec controller action

// index.php?controller=pages&action=home
// index.php?controller=pages&action=about



if(($controller === NULL) || ($action === NULL))
{
	$controller = 'pages';
	$action = 'home';
}

$className = ucfirst($controller) . 'Controller';

$controllerFile = 'controllers/' . $className . '.php';
if(file_exists($controllerFile))
{
	require_once($controllerFile);
}
else
{
	throw new Exception('Controller file ' . $controllerFile . ' doesn\'t exist.');
}

if(class_exists($className))
{
	$controllerObject = new $className();
}
else
{
	throw new Exception('Class ' . $className . ' doesn\'t exist.');
}

if(method_exists($controllerObject, $action))
{
	$controllerObject->{$action}();
}
else
{
	throw new Exception('Action ' . $action . ' doesn\'t exist.');
}


?>
