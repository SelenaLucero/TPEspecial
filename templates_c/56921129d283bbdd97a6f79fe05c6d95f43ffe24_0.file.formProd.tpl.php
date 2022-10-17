<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:50:06
  from 'C:\xampp\htdocs\WEB2\TPEspecial\templates\formProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d95ceb3fc49_58520637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56921129d283bbdd97a6f79fe05c6d95f43ffe24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPEspecial\\templates\\formProd.tpl',
      1 => 1666020375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/showTableProd.tpl' => 1,
  ),
),false)) {
function content_634d95ceb3fc49_58520637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-uppercase" class="fw-3-lighter">Ingrese su nuevo producto</h4>
                </div>
                <form action="insertProduct" method="POST" class="p-4" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label> Marcas: </label>
                        <select name="id_Marca">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_Marca;?>
"><?php echo $_smarty_tpl->tpl_vars['brand']->value->Marca;?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label>Variedad: <input name="Variedad" type="text" class="form-control"></label>
                    </div>
                    <div class="mb-3">
                        <label>Descripcion:<input name="Descripcion" type="text" class="form-control"></label>
                    </div>
                    <div class="mb-3">
                        <label>Precio: <input name="Precio" type="text" class="form-control"></label>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-outline-success">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/showTableProd.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
