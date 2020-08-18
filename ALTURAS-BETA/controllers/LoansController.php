<?php 

class LoansController extends BaseController{
    public function __construct() {
        parent::__construct();
    }

    public function index()
    {
        require_once 'views/dashboard/loans/index.php';
    }

}