<?php 

class DashboardController extends BaseController{
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
        require_once 'views/dashboard/index.php';
    }

    public function save()
    {
        
    }
}