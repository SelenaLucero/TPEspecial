<?php
/* Smarty version 4.2.1, created on 2022-10-17 20:00:16
  from 'C:\xampp\htdocs\WEB2\TPEspecial\templates\showProducts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d98303d90c9_88354888',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6fbf780a597c88a09fd317b4d787abe32a3739aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPEspecial\\templates\\showProducts.tpl',
      1 => 1666029615,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634d98303d90c9_88354888 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1>Nuestros productos</h1>
<section class="card">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
    <div class="card">
      <div class="card-body">

        <h5 class="card-title">Marca: <?php echo $_smarty_tpl->tpl_vars['product']->value->Marca;?>
</h5>
        <p class="card-text">Variedad: <?php echo $_smarty_tpl->tpl_vars['product']->value->Variedad;?>
</p>
        <p class="card-text">Precio: $<?php echo $_smarty_tpl->tpl_vars['product']->value->Precio;?>
</p>
        <a href="detail/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="btn btn-outline-secondary">Detalle</a>
      </div>
    </div>

  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
