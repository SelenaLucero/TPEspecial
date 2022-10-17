<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:28:46
  from 'C:\xampp\htdocs\WEB2\TPEspecial\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d74ae795716_19255630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '028a64fd62f347cb429559cf96706762f32fd222' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPEspecial\\templates\\header.tpl',
      1 => 1666020421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d74ae795716_19255630 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
  <base href=<?php echo BASE_URL;?>
>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
  <title>Vinoteca</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg" style="background-color:transparent;">
    <div class="container-fluid">
      <a class="navbar-brand" href="home">Vinoteca</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" style="font-family:italic;" href="products">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="font-family:italic;" href="brands">Marcas</a>
          </li>
          <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <li class="nav-item">
              <a class="nav-link" style="font-family:italic;" href="formProd">Formulario Producto</a>
            </li>
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['admin']->value) {?>
            <li class="nav-item">
              <a class="nav-link " style="font-family:italic;" href="formBrand">Formulario Marcas</a>
            </li>
          <?php }?>
        </ul>
        <ul class="nav justify-content-end">
          <?php if (!($_smarty_tpl->tpl_vars['admin']->value)) {?>
            <li class="nav-item">
              <a class="nav-link" class="navbar-brand" style="color:black" href="login">Iniciar sesion</a>
            </li>
          <?php } else { ?>
            <li class="nav-item ml-auto">
              <a class="nav-link" class="navbar-brand" style="color:black; " href="logout">Cerrar sesion
                (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
            </li>
          <?php }?>
        </ul>
      </div>
    </div>
  </nav>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  <?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  <?php echo '</script'; ?>
>
</body>

</html><?php }
}
