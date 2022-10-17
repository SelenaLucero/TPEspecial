<?php
/* Smarty version 4.2.1, created on 2022-10-17 19:59:32
  from 'C:\xampp\htdocs\WEB2\TPEspecial\templates\showTableProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d9804491484_16545978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f34e22a1e0afa04557f5968dc1908c80bc5a85f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPEspecial\\templates\\showTableProd.tpl',
      1 => 1666029571,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634d9804491484_16545978 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
      <table class="table">
            <thead>
                  <th>Marca</th>
                  <th>Variedad</th>
                  <th> Descripcion</th>
                  <th>Precio</th>
                  <tr>
                        <td scope="cow"><?php echo $_smarty_tpl->tpl_vars['product']->value->Marca;?>
</td>
                        <td scope="cow"><?php echo $_smarty_tpl->tpl_vars['product']->value->Variedad;?>
</td>
                        <td scope="row"><?php echo $_smarty_tpl->tpl_vars['product']->value->Descripcion;?>
</td>
                        <td scope="row">$<?php echo $_smarty_tpl->tpl_vars['product']->value->Precio;?>
 </td>
                  </tr>

            </thead>
      </table>
      <div>
            <a href="updateProd/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" class="btn btn-outline-warning">Editar</a>
            <a href="deleteProduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" type='button' class='btn btn-outline-danger ml-auto'>Borrar</a>
      </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
