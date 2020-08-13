<?php 

class UsersController extends BaseController{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        require_once 'views/dashboard/users/index.php';
    }

}