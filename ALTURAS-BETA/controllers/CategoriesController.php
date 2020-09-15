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
    //EDITAR
    public function update ()
    {
        $id          = isset($_POST['id'])?$_POST['id']:'';
        $nombre      = isset($_POST['nombre'])?$_POST['nombre']:'';
        $descripcion = isset($_POST['descripcion'])?$_POST['descripcion']:'';
        
        $categoria_obj = new Category($id,$nombre,$descripcion,null);
        if($categoria_obj->update()){
            header('Location: index.php?controller=categories&action=index');
        }else{
            echo "Error al Actualizar";
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

    //EDITAR REDIRECCIONAR
    public function edit()
    {
        $id = isset($_POST['id'])?$_POST['id']:'';
        $categoria_obj = new Category($id);
        $all_categorias = $categoria_obj->find();
        require_once 'views/dashboard/categories/edit.php';
    }

    //Eliminar
    public function delete()
    {
        $id = isset($_GET['id'])?$_GET['id']:'';
        $categoria_obj = new Category();
        $categoria_obj->supr($id);
        header("Location:index.php?controller=categories&action=index");
    }


}