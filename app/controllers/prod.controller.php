<?php
include_once 'app/models/prod.model.php'; //modelo de productos
include_once 'app/models/brand.model.php'; //modelo de marcas (category)
include_once 'app/views/view.php'; // view de ambos 


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

  function FormBrands()
  {
    //contiene los productos del modelo
    $brands = $this->brandmodel->getAllBrands();

    //actualizo la vista 
    $this->view->showFormBrands($brands);
  }


  function AddBrand()
  {


    // $id_Marca = $_POST['id_Marca'];
    $Marca = $_POST['Marca'];

    //inserta el producto a la base de datos
    $id = $this->brandmodel->insertBrand( $Marca);


    header('Location: ' . BASE_URL . '/formBrand');
  }

  function deleteBrand($id)
  {
    $this->brandmodel->deleteBrandtById($id);

    header('Location: ' . BASE_URL . '/formBrands');
  }

  function UpdateBrand($id_Marca)
  {
    $this->brandmodel->updateBrandById($id_Marca);

    header('Location: ' . BASE_URL . '/formBrand');
  }

  function FilterBrand($id){
    $prodbyBrand = $this->prodmodel->getProdByBrand($id);

    $this->view->showProdByBrand($prodbyBrand);

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
    //contiene los productos del modelo
    $products = $this->prodmodel->getAllProducts();

    //actualizo la vista 
    $this->view->showFormProd($products);
  }

  //inserto un producto
  function AddProduct()
  {


    $id_Marca = $_POST['id_Marca'];
    $Variedad = $_POST['Variedad'];
    $Precio = $_POST['Precio'];
    $Descripcion = $_POST['Descripcion'];

    //inserta el producto a la base de datos
    $id = $this->prodmodel->insertProd($id_Marca, $Variedad, $Precio, $Descripcion);


    header('Location: ' . BASE_URL . '/products');
  }

  function deleteProduct($id)
  {
    $this->prodmodel->deleteProductById($id);

    header('Location: ' . BASE_URL . '/formProd');
  }

  function UpdateProduct($id)
  {
    
     
      $id_Marca = $_POST['id_Marca'];
      $Variedad = $_POST['Variedad'];
      $Precio = $_POST['Precio'];
      $Descripcion = $_POST['Descripcion'];
      $this->prodmodel->updateProductById($id);
  
    header('Location: ' . BASE_URL . '/formProd');
  }
}
