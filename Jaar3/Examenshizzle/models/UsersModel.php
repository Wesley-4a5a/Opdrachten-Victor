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



}


?>
