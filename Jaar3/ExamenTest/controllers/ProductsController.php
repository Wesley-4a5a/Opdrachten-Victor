<?php

class ProductsController{

  private $ProductModel;

  public function __construct(){
    require_once(APP_PATH . '/models/ProductsModel.php');
    $this->ProductsModel = new ProductsModel();
  }

public function overview(){

  $product = $this->ProductsModel->getAll();
  loadView('theme/header');
  loadView('products/overview', ['product' => $product]);
  loadView('theme/footer');
}


public function addForm(){
  require_once(APP_PATH . '/models/FabriekenModel.php');
  $FabriekenModel = new FabriekenModel;
  $fabriek = $FabriekenModel->getAll();
  loadView('theme/header');
  loadView('products/addForm', ['fabriek' => $fabriek]);
  loadView('theme/footer');
}

public function addProduct(){
  $product = $_POST['product'];
  $voorraad = $_POST['voorraad'];
  $prijs = $_POST['prijs'];
  $fabriek = $_POST['fabriek'];
  $this->ProductsModel->addProduct($product, $voorraad, $prijs, $fabriek);
  internalRedirect('products', 'overview');
}

public function update(){

  loadView('theme/header');
  loadView('products/updateForm');
  loadView('theme/footer');
}

public function updateProduct(){
  $id = $_GET['id'];
  $product = $_POST['product'];
  $voorraad = $_POST['voorraad'];
  $prijs = $_POST['prijs'];
  $this->ProductsModel->update($id, $product, $voorraad, $prijs);
  internalRedirect('products', 'overview');

}

public function delete(){
  $id = $_GET['id'];
  $this->ProductsModel->delete($id);
  internalRedirect('products', 'overview');

}


}





?>
