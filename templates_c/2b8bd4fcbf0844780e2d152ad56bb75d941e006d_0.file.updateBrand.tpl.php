<?php
/* Smarty version 4.2.1, created on 2022-10-07 19:33:53
  from 'C:\xampp\htdocs\WEB2\TPEspecial\templates\updateBrand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63406301a85e36_33825744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b8bd4fcbf0844780e2d152ad56bb75d941e006d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPEspecial\\templates\\updateBrand.tpl',
      1 => 1665164031,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_63406301a85e36_33825744 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="updateBrand" method="POST" class="my-4">
<div class="row">
    <div class="col-9">
        <div class="form-group">
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
                        <input name="id_Marca" type="hidden" value= "id_Marca"type="text" class="form-control">
        </div>
    </div>
</div>
<button type="submit" class="btn btn-outline-success">Guardar</button>
</form><?php }
}
