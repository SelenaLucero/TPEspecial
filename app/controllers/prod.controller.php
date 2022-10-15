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
    // porque no me deja ver el formulario si esta logueado???!!!
    $admin = $this->authHelper->isLoggedIn();
    $this->view->showHome($admin);
  }

  ///marcas
  function ShowBrand()
  {
    $admin = $this->authHelper->isLoggedIn();
    $brands = $this->brandmodel->getAllBrands();
    $this->view->showBrands($brands,$admin);
  }


  
  function FilterBrand($id){
    $admin = $this->authHelper->isLoggedIn();
    $prodbyBrand = $this->prodmodel->getProdByBrand($id);
     $this->view->showProdByBrand($prodbyBrand,$admin);

  }

  function FormBrands()
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn(); // barrera para que solo el admin tenga acceso
    //contiene los productos del modelo
    $brands = $this->brandmodel->getAllBrands();

    //actualizo la vista 
    $this->view->showFormBrands($brands,$admin);
  }


  function AddBrand()
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn(); // barrera para que solo el admin tenga acceso
    $Marca = $_POST['Marca'];

    //inserta el producto a la base de datos
    $id = $this->brandmodel->insertBrand($Marca);

    header('Location: ' . BASE_URL . 'formBrand');
  }

  function deleteBrand($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn(); // barrera para que solo el admin tenga acceso
    $this->brandmodel->deleteBrandtById($id);

    header('Location: ' . BASE_URL . 'formBrand');
  }

  public function UpdateBrand($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn(); // barrera para que solo el admin tenga acceso

    $Marca= $_POST['Marca'];

    $this->brandmodel->updateBrand($Marca,$id);
    header('Location: ' . BASE_URL . 'brands');
      
    }
  
  function showUpdateBrand($id){
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn(); // barrera para que solo el admin tenga acceso
    $brand = $this->brandmodel->getBrand($id); //agarro la marca
    $this->view->showUpdateBrand($brand,$admin);
    

  }
 
  
  
  // productos
  function showProduct()
  { 
    
    $admin = $this->authHelper->isLoggedIn();
   
    //contiene los productos del modelo
    $products = $this->prodmodel->getAllProducts();

    //actualizo la vista 
    $this->view->showProducts($products,$admin);
  }


  function showDetail($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $product = $this->prodmodel->getProduct($id);
    $this->view->showDetail($product,$admin);
  }

  function FormProd()
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn(); // barrera para que solo el admin tenga acceso
     
    $products = $this->prodmodel->getAllProducts();
    $brands = $this->brandmodel->getAllBrands();
    $this->view->showFormProd($brands, $products,$admin);
    
  }

  //inserto un producto
  function AddProduct()
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn(); // barrera para que solo el admin tenga acceso

    $id_Marca = $_POST['id_Marca'];
    $Variedad = $_POST['Variedad'];
    $Descripcion = $_POST['Descripcion'];
    $Precio = $_POST['Precio'];
   $id = $this->prodmodel->insertProd($id_Marca,$Variedad, $Descripcion, $Precio);
  
    header('Location: ' . BASE_URL . 'products');
  }

  function deleteProduct($id)
  { 
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn(); // barrera para que solo el admin tenga acceso

    $this->prodmodel->deleteProductById($id);

    header('Location: ' . BASE_URL . 'formProd');
  }

  function showUpdateProduct($id){
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn(); // barrera para que solo el admin tenga acceso

  //producto que se va a editar por el id
  $productUpdate = $this->prodmodel->getProduct($id);
  $brands = $this->brandmodel->getAllBrands(); //agarro la marca
  $this->view->showUpdateProduct($productUpdate,$brands,$admin);

  
  }

  function UpdateProduct($id)
  {
    $admin = $this->authHelper->isLoggedIn();
    $this->authHelper->checkLoggedIn(); // barrera para que solo el admin tenga acceso

  $id_Marca = $_POST['id_Marca'];
  $Variedad = $_POST['Variedad'];
  $Descripcion = $_POST['Descripcion'];
  $Precio = $_POST['Precio'];

  $this->prodmodel->updateProduct($id_Marca,$Variedad,$Descripcion,$Precio,$id);
  header('Location: ' . BASE_URL . 'products');
  }
 

}
