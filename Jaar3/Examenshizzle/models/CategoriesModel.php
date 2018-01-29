<?php

class CategoriesModel
{

	public function getAll()
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("SELECT * FROM product_categories");
		$stmt->execute();
		$arr = $stmt->fetchAll(PDO::FETCH_OBJ);
		return $arr;
	}

	public function delete($id)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("DELETE FROM product_categories WHERE id=:id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

	public function addCategory($category_name)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("INSERT INTO product_categories (category_name) VALUES (:category_name)");
		$stmt->bindParam(':category_name', $category_name);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

	public function update($id, $category_name)
	{
		$conn  = getDbConnection();
		$stmt = $conn->prepare("UPDATE product_categories SET category_name = :category_name WHERE id=:id");
		$stmt->bindParam(':id', $id);
		$stmt->bindParam(':category_name', $category_name);
		$stmt->execute();
		$affectedRows = $stmt->rowCount();
		return $affectedRows;
	}

}


?>
