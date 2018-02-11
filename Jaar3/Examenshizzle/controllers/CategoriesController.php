<?php
//Security tegen direct access
if(defined('APP_PATH') === false){
	die();
}
//of in kort
defined('APP_PATH') || die();


class CategoriesController extends AppControllerAbstract
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
		$this->loadCompleteView('product_categories/form');
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
		$this->loadCompleteView('product_categories/formUpdate');
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
