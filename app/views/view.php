<?php

class ProdView
{
  private $smarty;

  function __construct()
  {
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



  function showProdByBrand($products){ // seria los productos de cierta marca?
    $this->smarty->assign("product", $products);
    $this->smarty->display('templates/prodByBrand.tpl');

  }




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
  function showFormProd($brands)
  {
    $this->smarty->assign("brands", $brands);
    $this->smarty->display('templates/formProd.tpl');
  }

  
}
