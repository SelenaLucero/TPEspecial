<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:52:15
  from 'C:\xampp\htdocs\WEB2\TPEspecial\templates\showDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d964f0568c3_54350915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25a33cce1065db644b7022552e2295b354d13989' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPEspecial\\templates\\showDetail.tpl',
      1 => 1666020475,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634d964f0568c3_54350915 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="card">

  <p class="card-text">Marca: <?php echo $_smarty_tpl->tpl_vars['product']->value->Marca;?>
</p>
  <p class="card-text">Variedad: <?php echo $_smarty_tpl->tpl_vars['product']->value->Variedad;?>
</p>
  <p class="card-text">Precio: <?php echo $_smarty_tpl->tpl_vars['product']->value->Precio;?>
</p>
  <p class="card-text">Descripcion: <?php echo $_smarty_tpl->tpl_vars['product']->value->Descripcion;?>
</p>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
