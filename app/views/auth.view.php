<?php 

class AuthView{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showLogin($error = null){
        $this->smarty->assign("error", $error);
        $this->smarty->display('templates/formLogin.tpl');
    }
}