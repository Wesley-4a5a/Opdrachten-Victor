<?php


class CategoriesController
{

	public function overview()
	{
		$this->showOverview();
	}

	public function delete()
	{
		//get id
		$id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
		//delete from database
		require_once(APP_PATH . '/models/CategoriesModel.php');
		$CategoriesModel = new CategoriesModel();
		$result = $CategoriesModel->delete($id);
		//redirect to overview
		redirect(APP_BASE_URL . '/index.php?controller=categories&action=overview');
	}

	private function showOverview()
	{
		require_once(APP_PATH . '/models/CategoriesModel.php');
		$CategoriesModel = new CategoriesModel();
		$Product_categories = $CategoriesModel->getAll();
		loadView('theme/header');
		loadView('product_categories/overview', [ 'product_categories' => $Product_categories]);
		loadView('theme/footer');
	}

	public function addForm()
	{
		loginCheck();
		loadView('theme/header');
		loadView('product_categories/form');
		loadView('theme/footer');
	}

	public function addLocation()
	{
		//get id
		$product_category = filter_input(INPUT_POST, 'product_category' , FILTER_SANITIZE_STRING);
		//add to database
		require_once(APP_PATH . '/models/CategoriesModel.php');
		$CategoriesModel = new CategoriesModel();
		$result = $CategoriesModel->addCategory($product_category);
		var_dump($result);
		//redirect to overview
		internalRedirect('categories', 'overview');
	}

	public function updateForm()
	{
		loginCheck();
		loadView('theme/header');
		loadView('product_categories/formUpdate');
		loadView('theme/footer');
	}

	public function updateCategory()
	{
		//get id
		$id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
		$category = filter_input(INPUT_POST, 'product_category' , FILTER_SANITIZE_STRING);
		//add to database
		require_once(APP_PATH . '/models/CategoriesModel.php');
		$CategoriesModel = new CategoriesModel();
		$result = $CategoriesModel->update($id, $category);
		var_dump($result);
		//redirect to overview
		internalRedirect('categories', 'overview');
	}


}



?>
