<?php

class FabriekenModel
{

	public function getAll()
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("SELECT * FROM fabriek");
		$stmt->execute();
		$arr = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $arr;
	}

	public function delete($id)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("DELETE FROM fabriek WHERE id=:id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

	public function addFabriek($naam)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("INSERT INTO fabriek (naam) VALUES (:naam)");
		$stmt->bindParam(':naam', $naam);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

	public function update($id, $fabriek)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("UPDATE fabriek SET naam = :naam WHERE id=:id");
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':naam', $fabriek);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

}


?>
