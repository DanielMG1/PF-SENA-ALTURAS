<?php
require_once 'models/categoria.php';
    class CategoriaController{
      private $model;
      public function __construct()
      {
        $this->model = new Categoria();
      }
      public function indexCategoria(){
        require_once 'views/categoria/categoria.php';
      }
      public function showById(){
        $categoria = new Categoria();
        if(isset($_REQUEST['id'])){
          $categoria = $this->model->getById($_REQUEST['id']);
        }
        require_once 'views/categoria/categoria_form.php';
      }
      public function snowById(){
        $categoria = new Categoria();
        if(isset($_REQUEST['id'])){
          $categoria = $this->model->getById($_REQUEST['id']);
        }
        require_once 'views/categoria/showbyid.php';
      }

      public function save(){
        $categoria = new Categoria();
        $categoria->id=$_REQUEST['id'];
        $categoria->nombre=$_REQUEST['nombre'];
        $categoria->descripcion=$_REQUEST['descripcion'];
        $categoria->foto=$_FILES['foto']['name'];
        // $categoria->fototemporal=$_FILES['foto']['tmp_name'];
        // $fotourl = "../views/" . $foto;
        // copy($fototemporal,$fotourl);
        $categoria->id>0?$categoria->update():$categoria->create();
        header('location: index.php');
      }
      public function quit(){
        $this->model->delete($_REQUEST['id']);
        header('location: index.php');
      }
    }
?>