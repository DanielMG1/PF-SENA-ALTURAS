<?php 

class UsersController extends BaseController{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        // Se crea una nueva instancia de categorías
        $user_obj  = new User();
        $all_users = $user_obj->getAll();
        require_once 'views/dashboard/users/index.php';
    }

}