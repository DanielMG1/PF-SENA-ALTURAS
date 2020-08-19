<?php 

class ToolsController extends BaseController{
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
        $herramienta_obj  = new Tool();
        $all_herramientas = $herramienta_obj->getAll();
        require_once 'views/dashboard/tools/index.php';
    }
    
    //GUARDAR
    public function create()
    {
        require_once 'views/dashboard/tools/create.php';
    }
    public function save ()
    {
        $nombre        = isset($_POST['nombre'])?$_POST['nombre']:'';
        $marca         = isset($_POST['marca'])?$_POST['marca']:'';
        $longitud      = isset($_POST['longitud'])?$_POST['longitud']:'';
        $serie         = isset($_POST['serie'])?$_POST['serie']:'';
        $descripcion   = isset($_POST['descripcion'])?$_POST['descripcion']:'';
        $cantidad      = isset($_POST['cantidad'])?$_POST['cantidad']:'';

        $entidad_cert  = isset($_POST['entidad_cert'])?$_POST['entidad_cert']:'';
        $fecha_fbc     = isset($_POST['fecha_fbc'])?$_POST['fecha_fbc']:'';
        $norma_cert    = isset($_POST['norma_cert'])?$_POST['norma_cert']:'';
        $vencimiento   = isset($_POST['vencimiento'])?$_POST['vencimiento']:'';
        
        
        $herramienta_obj = new Tool(null,$nombre,$marca,$longitud,$serie,$descripcion,$cantidad,null,$entidad_cert,$fecha_fbc,$norma_cert,$vencimiento);
        if($herramienta_obj->save()){
            header('Location: index.php?controller=tools&action=index');
        }else{
            echo "Error al guardar";
        }
        
    }
    //DETALLE
    public function detail()
    {
        $id = isset($_GET['id'])?$_GET['id']:'';
        $herramienta_obj = new Tool($id,null,null,null,null,null,null,null,null,null,null,null);
        $herramienta = $herramienta_obj->find();
        require_once 'views/dashboard/tools/detail.php';
    }

    //EDITAR
    public function edit()
    {
        require_once 'views/dashboard/tools/edit.php';
    }

}