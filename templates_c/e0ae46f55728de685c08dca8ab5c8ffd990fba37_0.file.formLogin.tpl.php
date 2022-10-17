<?php
/* Smarty version 4.2.1, created on 2022-10-17 17:28:51
  from 'C:\xampp\htdocs\WEB2\TPEspecial\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634d74b339bdd9_98788297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0ae46f55728de685c08dca8ab5c8ffd990fba37' => 
    array (
      0 => 'C:\\xampp\\htdocs\\WEB2\\TPEspecial\\templates\\formLogin.tpl',
      1 => 1666020311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_634d74b339bdd9_98788297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-uppercase" class="fw-3-lighter">Iniciar sesion</h4>
                </div>
                <form action="validate" method="POST" class="p-4" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input name="email" placeholder="email" type="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <input name="password" placeholder="password" type="password" id="password"
                            class="form-control">
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                        <div class="alert alert-danger mt-3">
                            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                        </div>
                    <?php }?>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>
        </div>

    </div>
</div>



<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
