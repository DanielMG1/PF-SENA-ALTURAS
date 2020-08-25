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
        $prestamo_obj = new Loan(null,null,null,null,null,0);
        $all_loans = $prestamo_obj->getAllLoansByState();
        $herramienta_obj = new Tool(null,null,null,null,null,null,5,null,null,null,null,null);
        $all_tools = $herramienta_obj->getAllToolsByStock();
        require_once 'views/dashboard/index.php';
    }

    public function save()
    {
        
    }

}