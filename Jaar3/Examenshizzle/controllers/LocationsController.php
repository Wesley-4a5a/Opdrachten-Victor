<?php
//Security tegen direct access
if(defined('APP_PATH') === false){
	die();
}
//of in kort
defined('APP_PATH') || die();


class LocationsController extends AppControllerAbstract
{

	public function overview()
	{
			loginCheck();
			$this->showOverview();
	}

	public function delete()
	{
		//get id
		$id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
		//delete from database
		require_once(APP_PATH . '/models/LocationsModel.php');
		$LocationsModel = new LocationsModel();
		$result = $LocationsModel->delete($id);
		//redirect to overview
		redirect(APP_BASE_URL . '/index.php?controller=locations&action=overview');
	}

	private function showOverview()
	{
		require_once(APP_PATH . '/models/LocationsModel.php');
		$LocationsModel = new LocationsModel();
		$locations = $LocationsModel->getAll();
		$this->loadCompleteView('locations/overview', [ 'location' => $locations]);

	}

	public function addForm()
	{
		loginCheck();
				$this->loadCompleteView('locations/form');
	}

	public function addLocation()
	{
		//get id
		$location = filter_input(INPUT_POST, 'location' , FILTER_SANITIZE_STRING);
		//add to database
		require_once(APP_PATH . '/models/LocationsModel.php');
		$LocationsModel = new LocationsModel();
		$result = $LocationsModel->addLocation($location);
		var_dump($result);
		//redirect to overview
		internalRedirect('locations', 'overview');
	}

	public function updateForm()
	{
		loginCheck();
		$this->loadCompleteView('locations/formUpdate');
	}

	public function updateLocation()
	{
		//get id
		$id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
		$location = filter_input(INPUT_POST, 'location' , FILTER_SANITIZE_STRING);
		//add to database
		require_once(APP_PATH . '/models/LocationsModel.php');
		$LocationsModel = new LocationsModel();
		$result = $LocationsModel->update($id, $location);
		var_dump($result);
		//redirect to overview
		internalRedirect('locations', 'overview');
	}


}



?>
