<?php


class LocationsController
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
		loadView('theme/header');
		loadView('locations/overview', [ 'locations' => $locations]);
		loadView('theme/footer');
	}

	public function addForm()
	{
		loadView('theme/header');
		loadView('locations/form');
		loadView('theme/footer');
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
		loadView('theme/header');
		loadView('locations/formUpdate');
		loadView('theme/footer');
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
