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
    //hago que vaya a productos porque en ese meti mis marcas??
    $this->smarty->display('templates/showBrands.tpl');
  }


  function showFormBrands($brands)
  {
    $this->smarty->assign("brands", $brands);
    $this->smarty->display('templates/formBrand.tpl');
  }



  // function showProdByBrand($brands){ // seria los productos de cierta marca?
  //   $this->smarty->assign("marcas", $brands);
  //   $this->smarty->display('templates/prodByBrand.tpl');

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

  function showFormProd($products)
  {
    $this->smarty->assign("products", $products);
    $this->smarty->display('templates/formProd.tpl');
  }
}
