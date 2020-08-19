<?php 

class RegisterController extends BaseController{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        require_once 'views/register.php';
    }

    public function save()
    {
        $nombre     = isset($_POST['nombre'])?$_POST['nombre']:'';
        $email      = isset($_POST['email'])?$_POST['email']:'';
        $password   = isset($_POST['password'])?$_POST['password']:'';

        $user_obj = new User($nombre,$email,2,$password);
        $resp = $user_obj->create();

        if($resp){
            header('Location:index.php?');
        }else{
            echo 'No fue posible crear el usuario';
        }
        
    }
}