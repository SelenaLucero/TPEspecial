<?php
include_once 'app/models/prod.model.php';
include_once 'app/models/brand.model.php';
include_once 'app/views/view.php';

include_once 'app/helpers/auth.helper.php';

class ProdController
{

  private $prodmodel;
  private $brandmodel;
  private $view;
  private $authHelper;



  function __construct()
  {
    $this->prodmodel = new ProdModel();
    $this->brandmodel = new brandModel();
    $this->view = new ProdView();
    $this->authHelper = new AuthHelper();
  }

  function showHome()
  {


    $admin = $this->authHelper->isLoggedIn();
    $this->view->showHome($admin);
  }

  ///marcas

  function ShowBrand()
  {
    $admin = $this->authHelper->isLoggedIn();
    $brands = $this->brandmodel->getAllBrands();
    $this->view->showBrands($brands, $admin);
  }



  function FilterBrand($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $prodbyBrand = $this->prodmodel->getProdByBrand($id);
    $this->view->showProdByBrand($prodbyBrand, $admin);
  }

  function FormBrands()
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn();

    $brands = $this->brandmodel->getAllBrands();


    $this->view->showFormBrands($brands, $admin);
  }


  function AddBrand()
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn();
    $Marca = $_POST['Marca'];


    $id = $this->brandmodel->insertBrand($Marca);

    header('Location: ' . BASE_URL . 'formBrand');
  }

  function deleteBrand($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn();
    $this->brandmodel->deleteBrandtById($id);

    header('Location: ' . BASE_URL . 'formBrand');
  }

  public function UpdateBrand($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn();

    $Marca = $_POST['Marca'];

    $this->brandmodel->updateBrand($Marca, $id);
    header('Location: ' . BASE_URL . 'brands');
  }

  function showUpdateBrand($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn();
    $brand = $this->brandmodel->getBrand($id);
    $this->view->showUpdateBrand($brand, $admin);
  }


  // productos

  function showProduct()
  {

    $admin = $this->authHelper->isLoggedIn();


    $products = $this->prodmodel->getAllProducts();


    $this->view->showProducts($products, $admin);
  }


  function showDetail($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $product = $this->prodmodel->getProduct($id);
    $this->view->showDetail($product, $admin);
  }

  function FormProd()
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn();

    $products = $this->prodmodel->getAllProducts();
    $brands = $this->brandmodel->getAllBrands();
    $this->view->showFormProd($brands, $products, $admin);
  }


  function AddProduct()
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn();

    $id_Marca = $_POST['id_Marca'];
    $Variedad = $_POST['Variedad'];
    $Descripcion = $_POST['Descripcion'];
    $Precio = $_POST['Precio'];
    $id = $this->prodmodel->insertProd($id_Marca, $Variedad, $Descripcion, $Precio);

    header('Location: ' . BASE_URL . 'products');
  }

  function deleteProduct($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn();

    $this->prodmodel->deleteProductById($id);

    header('Location: ' . BASE_URL . 'formProd');
  }

  function showUpdateProduct($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn();


    $productUpdate = $this->prodmodel->getProduct($id);
    $brands = $this->brandmodel->getAllBrands();
    $this->view->showUpdateProduct($productUpdate, $brands, $admin);
  }

  function UpdateProduct($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn();

    $id_Marca = $_POST['id_Marca'];
    $Variedad = $_POST['Variedad'];
    $Descripcion = $_POST['Descripcion'];
    $Precio = $_POST['Precio'];

    $this->prodmodel->updateProduct($id_Marca, $Variedad, $Descripcion, $Precio, $id);
    header('Location: ' . BASE_URL . 'products');
  }
}
