<?php

class LocationsModel
{

	public function getAll()
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("SELECT * FROM locations");
		$stmt->execute();
		$arr = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $arr;
	}

	public function delete($id)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("DELETE FROM locations WHERE id=:id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

	public function addLocation($location)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("INSERT INTO locations (location) VALUES (:location)");
		$stmt->bindParam(':location', $location);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

	public function update($id, $location)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("UPDATE locations SET location = :location WHERE id=:id");
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':location', $location);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

}


?>
