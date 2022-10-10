<?php 
require_once 'app/models/auth.model.php';
require_once 'app/views/auth.view.php';

class AuthController{
    private $view;
    private $model;

    public function __construct()
    {
        $this->model = new AuthModel();
        $this->view = new AuthView();
    }

    public function showLogin(){

        $this->view->showLogin();
    }

    public function validateUser(){
         // agarro los datos del form
         $email = $_POST['email'];
         $password = $_POST['password'];
        
         // busco el usuario por email
        $user = $this->model->getUser($email);

        // verifico que el usuario existe y que las contraseñas son iguales
        if($user && password_verify($password, $user->password)){
            // inicio una sesion para este usuario
            session_start();
            // guarda los datos de la session (estado)
            $_SESSION['USER_ID'] = $user->id;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED']= true; //si es true esta logueado

            // si la contraseña es correcta entra a la home
            header('Location: ' . BASE_URL . 'home');
        }
        else{
             // si los datos son incorrectos muestro el form con un error
            //  le pasamos el error por el parametro
           $this->view->showLogin("El usuario o la contraseña no existe.");
        } 
    }
    
    public function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

}
    
