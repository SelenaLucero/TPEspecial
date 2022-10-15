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


  function showHome($admin)
  {
    $this->smarty->assign("admin",$admin);
    $this->smarty->display('templates/header.tpl');
    $this->smarty->display('templates/aboutUs.tpl');
    $this->smarty->display('templates/footer.tpl');
  }
  function showBrands($brands,$admin)
  {
    $this->smarty->assign("admin",$admin);
    $this->smarty->assign("brands", $brands);
    $this->smarty->display('templates/showBrands.tpl');
  }



  function showFormBrands($brands,$admin)
  {
    $this->smarty->assign("admin",$admin);
    $this->smarty->assign("brands", $brands);
    $this->smarty->display('templates/formBrand.tpl');
  }



  function showProdByBrand($products,$admin){ 
    //muestra los productos de cierta marca
    $this->smarty->assign("admin",$admin);
    $this->smarty->assign("products", $products);
    $this->smarty->display('templates/prodByBrand.tpl');

  }
  
  function showUpdateBrand($brand,$admin){
    $this->smarty->assign("admin",$admin);
    $this->smarty->assign("brand", $brand);
    $this->smarty->display('templates/formUpdateBrand.tpl');
  }
  


  //productos
  function showProducts($products,$admin)
  {
    $this->smarty->assign("admin",$admin);
    $this->smarty->assign("products", $products);
    $this->smarty->display('templates/showProducts.tpl');
  }

  function showDetail($product,$admin)
  {
    $this->smarty->assign("admin",$admin);
    $this->smarty->assign("product", $product);
    $this->smarty->display('templates/showDetail.tpl');
  }

  //aca va brands
  function showFormProd($brands, $products,$admin)
  {
    $this->smarty->assign("admin",$admin);
    $this->smarty->assign("brands", $brands);
    $this->smarty->assign("products", $products);
    $this->smarty->display('templates/formProd.tpl');
  }
  
   function showUpdateProduct($productUpdate,$brands,$admin){
    $this->smarty->assign("admin",$admin);
    $this->smarty->assign("product", $productUpdate);
    $this->smarty->assign("brands", $brands);

    $this->smarty->display('templates/formUpdateProd.tpl');
  }



}
