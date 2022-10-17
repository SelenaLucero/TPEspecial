<?php
/* Smarty version 4.2.1, created on 2022-10-13 00:19:19
  from 'C:\xampp\htdocs\WEB2\TPEspecial\templates\formUpdateBrand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63473d6776a624_54096234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2f3e976247405e9fbd7aa588416bcef801ba7b47' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPEspecial\\templates\\formUpdateBrand.tpl',
      1 => 1665613154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
  ),
),false)) {
function content_63473d6776a624_54096234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<form action="newUpdateBrand/<?php echo $_smarty_tpl->tpl_vars['brand']->value->id_Marca;?>
" method="POST" class="my-4">
<div class="row">
    <div class="col-9">
        <div class="form-group">
        <div class="mb-3">
                    
            <label>Marca: <input name="Marca" value= "<?php echo $_smarty_tpl->tpl_vars['brand']->value->Marca;?>
" type="text" class="form-control"></label>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-outline-success">Guardar</button>
</form><?php }
}
