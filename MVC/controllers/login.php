<?php



class Login extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->render('login/index');
        // echo "<p>New controller</p>";
    }



    function autUser()
    {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        $success = $this->model->verify(['email' => $email, 'password' => $pass]);
        if ($success == 1){
            echo "OK";
        } else {
            echo " NOK";
        }
    }
}
