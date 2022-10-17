<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:50:33
  from 'C:\xampp\htdocs\WEB2\TPEspecial\templates\formBrand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d95e90c0876_89077895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60cfed7c121602073cf51fce78a4047a4c76a872' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPEspecial\\templates\\formBrand.tpl',
      1 => 1666020272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/showTableBrand.tpl' => 1,
  ),
),false)) {
function content_634d95e90c0876_89077895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container mt-4">
    <div class="row justify-content-center">

        <form action="insertBrand" method="POST" class="p-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-uppercase" class="fw-3-lighter">Ingrese su nueva marca</h4>
                    </div>
                    <div class="d-grid">
                        <label>Marca: <input name="Marca" type="text" class="form-control"></label>
                        <button type="submit" class="btn btn-outline-success">Guardar</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>




<?php $_smarty_tpl->_subTemplateRender('file:templates/showTableBrand.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
