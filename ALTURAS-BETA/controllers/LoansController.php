<?php 

class LoansController extends BaseController{
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
        // Se crea una nueva instancia de prestamos
        $prestamo_obj  = new Loan();
        $all_loans = $prestamo_obj->getAllLoans();
        require_once 'views/dashboard/loans/index.php';
    }

    public function export() 
    {
        $prestamo_obj  = new Loan();
        $all_loans = $prestamo_obj->getAllLoans();
        $filename = "prestamos_".date('Ymd') . ".xls";
        header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
        header("Content-Disposition: attachment; filename=".$filename);
        $show_coloumn = false;
        if(!empty($all_loans)) 
        {
            foreach($all_loans as $record) 
            {
                $array = get_object_vars($record);
                $array['devuelto'] = $array['devuelto']==0?'No':'Si';
                if(!$show_coloumn) 
                {
                    // display field/column names in first row
                    echo implode("\t", array_keys($array)) . "\n";
                    $show_coloumn = true;
                }
                echo implode("\t", array_values($array)) . "\n";
                
            }
        }
        exit;
    }

}