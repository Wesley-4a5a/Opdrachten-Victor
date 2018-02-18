<?php

class FabriekenController{

  private $FabriekenModel;

  public function __construct(){
    require_once(APP_PATH . '/models/FabriekenModel.php');
    $this->FabriekenModel = new FabriekenModel();
  }

public function overview(){

  $fabriek = $this->FabriekenModel->getAll();
  loadView('theme/header');
  loadView('fabrieken/overview', ['fabriek' => $fabriek]);
  loadView('theme/footer');
}


public function addForm(){

  loadView('theme/header');
  loadView('fabrieken/addForm');
  loadView('theme/footer');
}

public function addFabriek(){
  $fabriek = $_POST['fabriek'];
  $this->FabriekenModel->addFabriek($fabriek);
  internalRedirect('fabrieken', 'overview');
}

public function update(){

  loadView('theme/header');
  loadView('fabrieken/updateForm');
  loadView('theme/footer');
}

public function updateFabriek(){
  $id = $_GET['id'];
  $fabriek = $_POST['naam'];
  $this->FabriekenModel->update($id, $fabriek);
  internalRedirect('fabrieken', 'overview');

}

public function delete(){
  $id = $_GET['id'];
  $this->FabriekenModel->delete($id);
  internalRedirect('fabrieken', 'overview');

}


}





?>
