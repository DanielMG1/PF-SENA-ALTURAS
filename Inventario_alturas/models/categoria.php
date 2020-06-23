<?php
require_once './includes/crud.php';
class Categoria extends Crud{
  private $id;
  private $nombre;
  private $descripcion;
  private $foto;
  const TABLE = 'categoria';
  private $pdo;
  public function __construct(){
    parent::__construct(self::TABLE);
    $this->pdo=parent::conexion();
  }

  public function __set($name,$value){
    $this->$name=$value;
  }
  public function __get($name){
    return $this->$name;
  }

  public function create(){
    try{
      $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE." (nombre, descripcion, foto) VALUES (?,?,?)");
      $stm->execute(array($this->nombre,$this->descripcion,$this->foto));
    }catch(PDOException $e){
      echo $e->getMessage();
   }
  }

  public function update(){
    try{
      $stm=$this->pdo->prepare("UPDATE ".self::TABLE." SET nombre=?, descripcion=?, foto=? WHERE id=?");
      $stm->execute(array($this->nombre,$this->descripcion,$this->foto,$this->id));
    }catch(PDOException $e){
      echo $e->getMessage();
   }
  }
}
?>