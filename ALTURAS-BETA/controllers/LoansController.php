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
    //GUARDAR
    public function create()
    {
        require_once 'views/dashboard/loans/create.php';
    }
    public function save ()
    {
        $fecha        = isset($_POST['fecha'])?$_POST['fecha']:'';
        $herramienta_id         = isset($_POST['herramienta_id'])?$_POST['herramienta_id']:'';
        $cantidad      = isset($_POST['cantidad'])?$_POST['cantidad']:'';
        $usaurio_id         = isset($_POST['usaurio_id'])?$_POST['usaurio_id']:'';
        $devuelto   = isset($_POST['devuelto'])?$_POST['devuelto']:'';
        
        $prestamo_obj = new Loan(null,$fecha,$herramienta_id,$cantidad,$usaurio_id,$devuelto);
        if($prestamo_obj->save()){
            header('Location: index.php?controller=loans&action=index');
        }else{
            echo "Error al guardar";
        }
        
    }
    //DETALLE
    public function detail()
    {
        $id = isset($_GET['id'])?$_GET['id']:'';
        $prestamo_obj = new Loan($id,null,null,null,null,null);
        $prestamo = $prestamo_obj->find();
        require_once 'views/dashboard/loans/detail.php';
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
    //EDITAR REDIRECCIONAR
    public function edit()
    {
        $id= isset($_POST['id'])? $_POST['id'] : "";
        $prestamo_obj = new Loan($id);
        $all_loans = $prestamo_obj->find();
        require_once 'views/dashboard/loans/edit.php';
    }

    //ELIMINAR
    public function delete(){
        $id = isset($_GET['id'])? $_GET['id']: "";
        $prestamo_obj = new loan();
        $prestamo_obj->supr($id);
        header("Location:index.php?controller=loans&action=index");
    }

}