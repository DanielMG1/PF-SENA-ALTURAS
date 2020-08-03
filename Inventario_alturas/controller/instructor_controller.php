<?php
require_once 'models/instructor.php';
    class InstructorController{
      private $model;
      public function __construct()
      {
        $this->model = new Instructor();
      }
      public function indexInstructor(){
        require_once 'views/instructor/instructor.php';
      }
      public function showById(){
        $instructor = new Instructor();
        if(isset($_REQUEST['id'])){
          $instructor = $this->model->getById($_REQUEST['id']);
        }
        require_once 'views/instructor/instructor_form.php';
      }
      public function snowById(){
        $instructor = new Instructor();
        if(isset($_REQUEST['id'])){
          $instructor = $this->model->getById($_REQUEST['id']);
        }
        require_once 'views/instructor/showbyid.php';
      }

      public function save(){
        $instructor = new Instructor();
        $instructor->id=$_REQUEST['id'];
        $instructor->nombre=$_REQUEST['nombre'];
        $instructor->telefono=$_REQUEST['telefono'];
        $instructor->cargo=$_REQUEST['cargo'];
        $instructor->documento=$_REQUEST['documento'];
        $instructor->email=$_REQUEST['email'];
        $instructor->ciudad=$_REQUEST['ciudad'];
        $instructor->direccion=$_REQUEST['direccion'];
        $instructor->entidad=$_REQUEST['entidad'];
        $instructor->anio=$_REQUEST['anio'];
        $instructor->id>0?$instructor->update():$instructor->create();
        require_once 'views/instructor/instructor.php';
      }
      public function quit(){
        $this->model->delete($_REQUEST['id']);
        require_once 'views/instructor/instructor.php';
      }
    }
?>