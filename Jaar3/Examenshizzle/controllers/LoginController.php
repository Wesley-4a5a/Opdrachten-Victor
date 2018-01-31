<?php


class LoginController
{
	public function overview()
	{
			// loginCheck();
			$this->showLogin();
	}

	private function showlogin()
	{
		loadView('theme/header');
		loadView('login/form');
		loadView('theme/footer');
	}

	public function login()
	{
		//get user/pass
		$email = filter_input(INPUT_POST, 'email' , FILTER_SANITIZE_STRING);
		$password = filter_input(INPUT_POST, 'password' , FILTER_SANITIZE_STRING);
		// $passwordHash = $password_hash($password, PASSWORD_DEFAULT);

		//add to database
		require_once(APP_PATH . '/models/UsersModel.php');
		$UsersModel = new UsersModel();
		$result = $UsersModel->getUser();
		var_dump($result);
		//redirect to overview
		// internalRedirect('locations', 'overview');

		foreach($result as $row){
			$passwordVerify = password_verify($password, $row['password']);
			if($email == $row['email'] && $passwordVerify){
				$_SESSION['login'] = true;
				$_SESSION['email'] = $email;
				internalRedirect('pages', 'home&login=correct');
			}
			else{
				internalRedirect('login', 'overview&login=wrong');
			}
		}

	}

	public function logout()
	{
		session_unset();
		session_destroy();
		redirect(APP_BASE_URL);
	}

}



?>
