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
        
    }
}