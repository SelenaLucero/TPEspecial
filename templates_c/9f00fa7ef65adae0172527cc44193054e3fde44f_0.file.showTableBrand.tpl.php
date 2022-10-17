<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:50:33
  from 'C:\xampp\htdocs\WEB2\TPEspecial\templates\showTableBrand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d95e90ecc22_60732905',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f00fa7ef65adae0172527cc44193054e3fde44f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPEspecial\\templates\\showTableBrand.tpl',
      1 => 1666020580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d95e90ecc22_60732905 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand');
$_smarty_tpl->tpl_vars['brand']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
$_smarty_tpl->tpl_vars['brand']->do_else = false;
?>

  <table class="table">
    <thead>
      <th>Marca</th>
      <tr>
        <td scope="cow"><?php echo $_smarty_tpl->tpl_vars['brand']->value->Marca;?>
</td>
        <a href="updateBrand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_Marca;?>
" class="btn btn-outline-warning">Editar</a>
        <a href='deleteBrand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_Marca;?>
' class='btn btn-outline-danger '>Borrar</a>
      </tr>
    </thead>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
