<?php
require_once 'models/tool.php';
    class ToolController{
      private $model;
      public function __construct()
      {
        $this->model = new Tool();
      }
      public function indexTool(){
        require_once 'views/tool/tool.php';
      }
      public function showById(){
        $tool = new Tool();
        if(isset($_REQUEST['id'])){
          $tool = $this->model->getById($_REQUEST['id']);
        }
        require_once 'views/tool/tool_form.php';
      }

      public function save(){
        $tool = new Tool();
        $tool->id=$_REQUEST['id'];
        $tool->nombre=$_REQUEST['nombre'];
        $tool->marca=$_REQUEST['marca'];
        $tool->longitud=$_REQUEST['longitud'];
        $tool->serie=$_REQUEST['serie'];
        $tool->descripcion=$_REQUEST['descripcion'];
        $tool->acomulado=$_REQUEST['acomulado'];
        $tool->id>0?$tool->update():$tool->create();
        header('location: index.php');
      }
      public function quit(){
        $this->model->delete($_REQUEST['id']);
        header('location: index.php');
      }
    }
?>
