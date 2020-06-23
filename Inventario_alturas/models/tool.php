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
  private $foto;
  private $entidad_cert;
  private $fecha_fbc;
  private $norma_cert;
  private $limite_vid;
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
      $stm=$this->pdo->prepare("INSERT INTO ".self::TABLE." (nombre, marca, longitud, serie, descripcion, acomulado, foto, entidad_cert, fecha_fbc,norma_cert,limite_vid) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
      $stm->execute(array($this->nombre,$this->marca,$this->longitud,$this->serie,$this->descripcion,$this->acomulado,$this->foto,$this->entidad_cert,$this->fecha_fbc,$this->norma_cert,$this->limite_vid));
    }catch(PDOException $e){
      echo $e->getMessage();
   }
  }

  public function update(){
    try{
      $stm=$this->pdo->prepare("UPDATE ".self::TABLE." SET nombre=?, marca=?, longitud=?, serie=?, descripcion=?, acomulado=?, foto=?, entidad_cert=?,fecha_fbc=?,norma_cert=?,limite_vid=? WHERE id=?");
      $stm->execute(array($this->nombre,$this->marca,$this->longitud,$this->serie,$this->descripcion,$this->acomulado,$this->foto,$this->entidad_cert,$this->fecha_fbc,$this->norma_cert,$this->limite_vid,$this->id));
    }catch(PDOException $e){
      echo $e->getMessage();
   }
  }
}
?>
