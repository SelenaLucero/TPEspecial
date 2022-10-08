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

  //en el constructor instanciamos los dos atributos
  function __construct()
  {
    $this->prodmodel = new ProdModel();
    $this->brandmodel = new brandModel();
    $this->view = new ProdView();

     // barrera de seguridad
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
    //contiene los productos del modelo
    $brands = $this->brandmodel->getAllBrands();

    //actualizo la vista 
    $this->view->showFormBrands($brands);
  }


  function AddBrand()
  {
    $Marca = $_POST['Marca'];

    //inserta el producto a la base de datos
    $id = $this->brandmodel->insertBrand( $Marca);

    header('Location: ' . BASE_URL . 'formBrand');
  }

  function deleteBrand($id)
  {
    $this->brandmodel->deleteBrandtById($id);

    header('Location: ' . BASE_URL . 'formBrand');
  }

  public function UpdateBrand()
  {
    // Devuelvetrue si la variable existe y tiene un valor distinto de null , false de lo contrario.
    if(isset($_POST['id_Marca'],$_POST['id_Marca'])){
    $id_Marca = $_GET['id_Marca'];
    $Marca = $_GET['Marca'];
  
      $this->brandmodel->updateBrandById($id_Marca,$Marca);
    }
  }
//esta bien que haga una funcion para mostrar el form
 public function showUpdateBrand($id){
  // $brands = $this->brandmodel->updateBrandById();
  // $this->view->showUpdateBrand($brands);

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
    $products = $this->prodmodel->getAllProducts();
    $brands = $this->brandmodel->getAllBrands();
    $this->view->showFormProd($brands, $products);
    
  }

  //inserto un producto
  function AddProduct()
  {
    $id_Marca = $_POST['id_Marca'];
    $Variedad = $_POST['Variedad'];
    $Descripcion = $_POST['Descripcion'];
    $Precio = $_POST['Precio'];
    
    

    //inserta el producto a la base de datos
    $id = $this->prodmodel->insertProd($id_Marca,$Variedad, $Descripcion, $Precio);


    header('Location: ' . BASE_URL . 'products');
  }

  function deleteProduct($id)
  {
    $this->prodmodel->deleteProductById($id);

    header('Location: ' . BASE_URL . 'formProd');
  }

  function UpdateProduct($id)
  {
    
     
      $id_Marca = $_POST['id_Marca'];
      $Variedad = $_POST['Variedad'];
      $Precio = $_POST['Precio'];
      $Descripcion = $_POST['Descripcion'];
      $this->prodmodel->updateProductById($id);
  
    header('Location: ' . BASE_URL . 'formProd');
  }
}
