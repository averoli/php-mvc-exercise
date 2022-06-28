<?php

class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
        
    }

    function render()
    {
        $this->view->render('login/index');  
    }

    function autUser()
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $success = $this->model->verify(['email' => $email, 'password' => $pass]);

        if ($success == 1) {
            header("Location: ../dashboard");
        } else {
            header("Location: ../errores");
        }
    }
}
