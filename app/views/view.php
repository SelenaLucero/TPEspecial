<?php
require_once 'libs/smarty/libs/Smarty.class.php'; 
class ProdView
{
  private $smarty;


  function __construct()
  {
    // inicializo Smarty
    $this->smarty = new Smarty();
  }


  function showHome()
  {

    $this->smarty->display('templates/header.tpl');
    $this->smarty->display('templates/aboutUs.tpl');
    $this->smarty->display('templates/footer.tpl');
  }
  function showBrands($brands)
  {
    $this->smarty->assign("brands", $brands);
    $this->smarty->display('templates/showBrands.tpl');
  }



  function showFormBrands($brands)
  {
    $this->smarty->assign("brands", $brands);
    $this->smarty->display('templates/formBrand.tpl');
  }



  function showProdByBrand($products){ //muestra los productos de cierta marca
    $this->smarty->assign("products", $products);
    $this->smarty->display('templates/prodByBrand.tpl');

  }

  // function showUpdateBrand($brands){
  //   $this->smarty->assign("brands", $brands);
  //   $this->smarty->display('formUpdateBrand.tpl');
  // }


  //productos
  function showProducts($products)
  {
    $this->smarty->assign("products", $products);
    $this->smarty->display('templates/showProducts.tpl');
  }

  function showDetail($product)
  {
    $this->smarty->assign("product", $product);
    $this->smarty->display('templates/showDetail.tpl');
  }

  //aca va brands
  function showFormProd($brands, $products)
  {
    $this->smarty->assign("brands", $brands);
    $this->smarty->assign("products", $products);
    $this->smarty->display('templates/formProd.tpl');
  }

  
}
