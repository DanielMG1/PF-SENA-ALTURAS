<?php 

class LoginController extends BaseController{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        require_once 'views/login.php';
    }

    public function login()
    {
        $email=isset($_POST['email'])?$_POST['email']:'';
        $password=isset($_POST['password'])?$_POST['password']:'';
        $user_obj = new User(null,$email,null,$password);
        if($user_obj->login())
        {
            header('Location:index.php?controller=dashboard&action=index');
        }
        else
        {
            echo "Contraseña o email invalidos";
        }
    }
}