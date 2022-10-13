<?php
include_once 'app/models/prod.model.php'; //modelo de productos
include_once 'app/models/brand.model.php'; //modelo de marcas (category)
include_once 'app/views/view.php'; // view de ambos 

include_once 'app/helpers/auth.helper.php';

class ProdController
{
  //declaramos como atributo de clase 
  private $prodmodel;
  private $brandmodel;
  private $view;
  private $authHelper;
  
  //en el constructor instanciamos los dos atributos

  function __construct()
  {
    $this->prodmodel = new ProdModel();
    $this->brandmodel = new brandModel();
    $this->view = new ProdView();
    $this->authHelper= new AuthHelper();
    //  barrera de seguridad
    // cuando lo intento asi el localhost me lo impide haciendo bucle
    //  $authHelper = new AuthHelper();
    //  $authHelper->checkLoggedIn();
   
  }

  function showHome()
  {
    //muestro mi home
   
    $this->view->showHome();
  }

  ///marcas
  function ShowBrand()
  {
    
    $brands = $this->brandmodel->getAllBrands();
    $this->view->showBrands($brands);
  }


  
  function FilterBrand($id){
    
    $prodbyBrand = $this->prodmodel->getProdByBrand($id);
     $this->view->showProdByBrand($prodbyBrand);

  }

  function FormBrands()
  {
    $this->authHelper->checkLoggedIn();
    //contiene los productos del modelo
    $brands = $this->brandmodel->getAllBrands();

    //actualizo la vista 
    $this->view->showFormBrands($brands);
  }


  function AddBrand()
  {
    $this->authHelper->checkLoggedIn();
    $Marca = $_POST['Marca'];

    //inserta el producto a la base de datos
    $id = $this->brandmodel->insertBrand( $Marca);

    header('Location: ' . BASE_URL . 'formBrand');
  }

  function deleteBrand($id)
  {
    $this->authHelper->checkLoggedIn();
    $this->brandmodel->deleteBrandtById($id);

    header('Location: ' . BASE_URL . 'formBrand');
  }

  public function UpdateBrand($id)
  {
    
    $this->authHelper->checkLoggedIn();
    $Marca= $_POST['Marca'];
  
    $this->brandmodel->updateBrand($Marca,$id);
    header('Location: ' . BASE_URL . 'brands');
      
    }
  
  function showUpdateBrand($id){
    $this->authHelper->checkLoggedIn();
    $brand = $this->brandmodel->getBrand($id); //agarro la marca
    $this->view->showUpdateBrand($brand);
    

  }
 
  
  
  // productos
  function showProduct()
  { 
  
    //contiene los productos del modelo
    $products = $this->prodmodel->getAllProducts();

    //actualizo la vista 
    $this->view->showProducts($products);
  }


  function showDetail($id)
  {
    
    $product = $this->prodmodel->getProduct($id);
    $this->view->showDetail($product);
  }

  function FormProd()
  {
    $this->authHelper->checkLoggedIn();
    $products = $this->prodmodel->getAllProducts();
    $brands = $this->brandmodel->getAllBrands();
    $this->view->showFormProd($brands, $products);
    
  }

  //inserto un producto
  function AddProduct()
  {
    
    $this->authHelper->checkLoggedIn();
    $id_Marca = $_POST['id_Marca'];
    $Variedad = $_POST['Variedad'];
    $Descripcion = $_POST['Descripcion'];
    $Precio = $_POST['Precio'];
   $id = $this->prodmodel->insertProd($id_Marca,$Variedad, $Descripcion, $Precio);
  
    header('Location: ' . BASE_URL . 'products');
  }

  function deleteProduct($id)
  { $this->authHelper->checkLoggedIn();
    $this->prodmodel->deleteProductById($id);

    header('Location: ' . BASE_URL . 'formProd');
  }

  function showUpdateProduct($id){
    $this->authHelper->checkLoggedIn();
  //producto que se va a editar por el id
  $productUpdate = $this->prodmodel->getProduct($id);
  $brands = $this->brandmodel->getAllBrands(); //agarro la marca
  $this->view->showUpdateProduct($productUpdate,$brands);

  
  }

  function UpdateProduct($id){
    $this->authHelper->checkLoggedIn();
  $id_Marca = $_POST['id_Marca'];
  $Variedad = $_POST['Variedad'];
  $Descripcion = $_POST['Descripcion'];
  $Precio = $_POST['Precio'];

  $this->prodmodel->updateProduct($id_Marca,$Variedad,$Descripcion,$Precio,$id);
  header('Location: ' . BASE_URL . 'products');
  }
 

}
