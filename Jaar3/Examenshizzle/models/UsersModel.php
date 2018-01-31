<?php

class UsersModel
{

	public function getUser(){
		$conn = getDbConnection();
		$stmt = $conn->prepare("SELECT * FROM users");
		$stmt->execute();
		$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $arr;
	}

	public function addUser($email, $password)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("INSERT INTO users (email, password) VALUES (:email, :password)");
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

}


?>
