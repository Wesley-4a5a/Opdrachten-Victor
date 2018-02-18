<?php

class ProductsModel
{

	public function getAll()
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("SELECT * FROM Product INNER JOIN fabriek ON product.fabriek_id = fabriek.id");
		$stmt->execute();
		$arr = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $arr;
	}

	public function delete($id)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("DELETE FROM Product WHERE id=:id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

	public function addProduct($product, $voorraad, $prijs, $fabriek)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("INSERT INTO Product (fabriek_id, product, voorraad, prijs) VALUES (:fabriek_id, :product, :voorraad, :prijs)");
		$stmt->bindParam(':fabriek_id', $fabriek);
		$stmt->bindParam(':product', $product);
		$stmt->bindParam(':voorraad', $voorraad);
		$stmt->bindParam(':prijs', $prijs);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

	public function update($id, $product, $voorraad, $prijs)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("UPDATE Product SET product = :product WHERE id=:id");
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':product', $product);
		// $stmt->bindParam(':voorraad', $voorraad);
		// $stmt->bindParam(':prijs', $prijs);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

}


?>
