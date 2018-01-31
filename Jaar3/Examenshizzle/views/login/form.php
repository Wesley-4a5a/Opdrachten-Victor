<h1>Login</h1>
<hr>
<form action="index.php?controller=Login&action=login" method='POST'>
	Email address:<br>
	<input type="text" name="email" id="email"><br>
  Password:<br>
	<input type="text" name="password" id="password"><br>
	<?php
	if(ISSET($_GET['login'])){
		if($_GET['login'] === 'wrong'){
			echo '<div style="color: red">
			Email of password onjuist kerel.
			</div>';
		}
	}

	 ?>
	<hr>
	<input type="submit" value="Login">
</form>
