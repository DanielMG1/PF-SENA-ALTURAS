<?php
require_once './includes/crud.php';
class Instructor extends Crud{
  private $id;
  private $nombre;
  private $telefono;
  private $cargo;
  private $documento;
  private $email;
  private $ciudad;
  private $direccion;
  private $entidad;
  private $anio;
  const TABLE = 'instructor';
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
      $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE." (nombre, telefono, cargo, documento, email, ciudad, direccion, entidad, anio) VALUES (?,?,?,?,?,?,?,?,?)");
      $stm->execute(array($this->nombre,$this->telefono,$this->cargo,$this->documento,$this->email,$this->ciudad,$this->direccion,$this->entidad,$this->anio));
    }catch(PDOException $e){
      echo $e->getMessage();
   }
  }

  public function update(){
    try{
      $stm=$this->pdo->prepare("UPDATE ".self::TABLE." SET nombre=?, telefono=?, cargo=?, documento=?, email=?, ciudad=?, direccion=?, entidad=?, anio=? WHERE id=?");
      $stm->execute(array($this->nombre,$this->telefono,$this->cargo,$this->documento,$this->email,$this->ciudad,$this->direccion,$this->entidad,$this->anio,$this->id));
    }catch(PDOException $e){
      echo $e->getMessage();
   }
  }
}
?>
