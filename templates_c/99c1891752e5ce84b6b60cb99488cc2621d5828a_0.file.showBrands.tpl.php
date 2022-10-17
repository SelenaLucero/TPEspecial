<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:52:18
  from 'C:\xampp\htdocs\WEB2\TPEspecial\templates\showBrands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d96522c0183_87571993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99c1891752e5ce84b6b60cb99488cc2621d5828a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPEspecial\\templates\\showBrands.tpl',
      1 => 1666021302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_634d96522c0183_87571993 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1>Marcas de vinos</h1>

<section>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>
    <div class="list-group">
      <ul class="list-group list-group-flush">
        <li><a href="filterBrand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_Marca;?>
" class="list-group-item list-group-item-action"><?php echo $_smarty_tpl->tpl_vars['brand']->value->Marca;?>
</a>
        </li>
      </ul>
    </div>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section><?php }
}
