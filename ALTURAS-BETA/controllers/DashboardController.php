<?php 

class DashboardController extends BaseController{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        require_once 'views/dashboard/index.php';
    }

    public function save()
    {
        
    }
}