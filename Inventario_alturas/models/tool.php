<?php
require_once './includes/crud.php';
class Tool extends Crud{
  private $id;
  private $nombre;
  private $marca;
  private $longitud;
  private $serie;
  private $descripcion;
  private $acomulado;
  const TABLE = 'tool';
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
      $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE." (nombre, marca, longitud, serie, descripcion, acomulado) VALUES (?,?,?,?,?,?)");
      $stm->execute(array($this->nombre,$this->marca,$this->longitud,$this->serie,$this->descripcion,$this->acomulado));
    }catch(PDOException $e){
      echo $e->getMessage();
   }
  }

  public function update(){
    try{
      $stm=$this->pdo->prepare("UPDATE ".self::TABLE." SET nombre=?, marca=?, longitud=?, serie=?, descripcion=?, acomulado=? WHERE id=?");
      $stm->execute(array($this->nombre,$this->marca,$this->longitud,$this->serie,$this->descripcion,$this->acomulado,$this->id));
    }catch(PDOException $e){
      echo $e->getMessage();
   }
  }
}
?>
