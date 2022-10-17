<?php
require_once 'app/models/auth.model.php';
require_once 'app/views/auth.view.php';

class AuthController
{
    private $view;
    private $model;
    private $authHelper;

    public function __construct()
    {
        $this->model = new AuthModel();
        $this->view = new AuthView();
        $this->authHelper = new AuthHelper();
    }

    public function showLogin()
    {
        $admin = $this->authHelper->isLoggedIn();
        $this->view->showLogin($admin);
    }

    public function validateUser()
    {

        $email = $_POST['email'];

        $password = $_POST['password'];


        $user = $this->model->getUser($email);


        if ($user && password_verify($password, $user->password)) {

            session_start();

            $_SESSION['USER_ID'] = $user->id_user;
            $_SESSION['USER_EMAIL'] = $user->email;
            $_SESSION['IS_LOGGED'] = true;


            header('Location: ' . BASE_URL . 'home');
        } else {

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
