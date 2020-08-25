<?php 

class CategoriesController extends BaseController{
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
        $categoria_obj  = new Category();
        $all_categorias = $categoria_obj->getAll();
        require_once 'views/dashboard/categories/index.php';
    }
    
    //GUARDAR
    public function create()
    {
        require_once 'views/dashboard/categories/create.php';
    }
    public function save ()
    {
        $nombre      = isset($_POST['nombre'])?$_POST['nombre']:'';
        $descripcion = isset($_POST['descripcion'])?$_POST['descripcion']:'';
        
        $categoria_obj = new Category(null,$nombre,$descripcion,null);
        if($categoria_obj->save()){
            header('Location: index.php?controller=categories&action=index');
        }else{
            echo "Error al guardar";
        }
        
    }
    //DETALLE
    public function detail()
    {
        $id = isset($_GET['id'])?$_GET['id']:'';
        $categoria_obj = new Category($id,null,null,null);
        $categoria = $categoria_obj->find();
        require_once 'views/dashboard/categories/detail.php';
    }

    //EDITAR
    public function edit()
    {
        $id = isset($_GET['id'])?$_GET['id']:'';
        $categoria_obj = new Category($id,null,null,null);
        $categoria = $categoria_obj->find();
        require_once 'views/dashboard/categories/edit.php';
    }

    //Eliminar
    public function destroy()
    {
        $id = isset($_GET['id'])?$_GET['id']:'';
        $categoria_obj = new Category($id,null,null,null);
        $categoria = $categoria_obj->delete();
        require_once 'views/dashboard/categories/index.php';
    }


}