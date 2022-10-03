<?php
require_once 'libs/smarty/libs/Smarty.class.php';
require_once 'app/controllers/prod.controller.php';


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; //por defecto va al home 
}

$params = explode('/', $action);

// instancio el unico controller que existe por ahora
$ProdController = new ProdController();

//el switch guia a donde va a ir 
switch ($params[0]) {
    case 'home': {
            $ProdController->showHome();
            break;
        }
    case 'products': {
            $ProdController->showProduct();
            break;
        }
    case 'detail': {
            $ProdController->showDetail($params[1]);
            break;
        }
    case 'formProd': {
            $ProdController->FormProd();
            break;
        }
    case 'insertProduct':
        $ProdController->AddProduct();

        break;
    case 'deleteProduct':
        // obtengo el parametro de la acción
        $ProdController->deleteProduct($params[1]);
        break;
    case 'updateProd':
        // obtengo el parametro de la acción
        $id = $params[1];
        $ProdController->UpdateProduct($id);
        break;
    case 'brands': {
            $ProdController->showBrand();
            break;
        }
    case 'formBrands': {
            $ProdController->FormBrands();
            break;
    }
    case 'insertBrand':
        $ProdController->AddBrand();

        break;
    case 'deleteBrand':
            // obtengo el parametro de la acción
            $ProdController->deleteBrand($params[1]);
            break;
    case 'updateBrand':
     // obtengo el parametro de la acción
          $id = $params[1];
         $ProdController->UpdateBrand($id);
        break;
    // case 'FilterBrand':
    //     // obtengo el parametro de la acción
    //         $ProdController->FilterBrand($params[1]);
    //         break;
    default:
        break;
}
