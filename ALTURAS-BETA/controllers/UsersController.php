<?php 

class UsersController extends BaseController{
    public function __construct() {
        parent::__construct();
        session_start();
        if(!isset($_SESSION['username']))
        {
            header('Location:index.php?');
        }
    }

    public function index()
    {
        // Se crea una nueva instancia de categorías
        $user_obj  = new User();
        $all_users = $user_obj->getAllUsers();
        require_once 'views/dashboard/users/index.php';
    }
    //GUARDAR
    public function create()
    {
        require_once 'views/dashboard/users/create.php';
    }

    public function save()
    {
        $nombre     = isset($_POST['nombre'])?$_POST['nombre']:'';
        $email      = isset($_POST['email'])?$_POST['email']:'';
        $rol_id     = isset($_POST['rol_id'])?$_POST['rol_id']:'';
        $password   = isset($_POST['password'])?$_POST['password']:'';

        $user_obj = new User($nombre,$email,$rol_id,$password);
        $resp = $user_obj->create();

        if($resp){
            header('Location:index.php?controller=users&action=index');
        }else{
            echo 'No fue posible crear el usuario';
        }
        
    }
    //DETALLE
    public function detail()
    {
        $email = isset($_GET['email'])?$_GET['email']:'';
        $user_obj = new User(null,$email,null,null);
        $usuario = $user_obj->find();
        require_once 'views/dashboard/users/detail.php';
    }


    //EDITAR REDIRECCIONAR
    public function edit()
    {
        $email = isset($_POST['email'])? $_POST['email'] : "";
        $user_obj = new User($email);
        $all_users = $user_obj->find();
        require_once 'views/dashboard/users/edit.php';
    }

    //ELIMINAR
    public function delete(){
        $id = isset($_GET['id'])? $_GET['id']: "";
        $user_obj = new User();
        $user_obj->supr($id);
        header("Location:index.php?controller=users&action=index");
    }
    

}