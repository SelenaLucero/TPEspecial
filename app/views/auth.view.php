<?php 

class AuthView{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    // si los datos son incorrecto le muestro el error que se lo paso por una variable
    function showLogin($error = null){
        $this->smarty->assign("error", $error);
        $this->smarty->display('templates/formLogin.tpl');
    }
}