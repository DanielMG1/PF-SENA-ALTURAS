<?php

class Loan extends BaseModel
{
    private $id;
    private $fecha;
    private $herramienta_id;
    private $cantidad;
    private $usaurio_id;
    private $devuelto;

    public function __construct($id=null,$fecha=null,$herramienta_id=null,$cantidad=null,$usaurio_id=null,$devuelto=null)
    {
        parent::__construct();
        $this->id=$id;
        $this->fecha=$fecha;
        $this->herramienta_id=$herramienta_id;
        $this->cantidad=$cantidad;
        $this->usaurio_id=$usaurio_id;
        $this->devuelto=$devuelto;
        $this->table="prestamos";
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    public function getHerramientaId()
    {
        return $this->herramienta_id;
    }
    public function setHerramientaId($herramienta_id)
    {
        $this->herramienta_id = $herramienta_id;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }
    public function getUsuarioId()
    {
        return $this->usaurio_id;
    }
    public function setUsuarioId($usaurio_id)
    {
        $this->usaurio_id = $usaurio_id;
    }
    public function getDevuelto()
    {
        return $this->devuelto;
    }
    public function setDevuelto($devuelto)
    {
        $this->devuelto = $devuelto;
    }

    // Función especial de getAll para traer el nombre del rol.
    public function getAllLoans()
    {
        try {
            // Selecciona todos los campos de la tabla usuario y solo el nombre de la tabla de roles con el alias nombre_rol
            $sql = $this->dbConnection->prepare("SELECT prestamos.*,herramientas.nombre AS herramienta_nombre, usuarios.nombre AS usuario_nombre FROM prestamos INNER JOIN herramientas ON herramientas.id=prestamos.herramienta_id INNER JOIN usuarios ON usuarios.id=prestamos.usuario_id");
            
            // Ejecutamos
            $sql->execute();
            $resultSet = [];
            // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
            while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $resultSet[] = $row;
            }
            return $resultSet;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }

    //GUARDAR
    public function save()
    {
        $sql                = $this->dbConnection->prepare("INSERT INTO prestamos (fecha,herramienta_id,cantidad,usuario_id,devuelto) VALUES(:fecha,:herramienta_id,:cantidad,:usaurio_id,:devuelto)");
        $fecha              = $this->getFecha();
        $herramienta_id     = $this->getHerramientaId();
        $cantidad           = $this->getCantidad();
        $usaurio_id         = $this->getUsuarioId();
        $devuelto           = $this->getDevuelto();
        
        $sql->bindParam(':fecha',$fecha);
        $sql->bindParam(':herramienta_id',$herramienta_id);
        $sql->bindParam(':cantidad',$cantidad);
        $sql->bindParam(':usaurio_id',$usaurio_id);
        $sql->bindParam(':devuelto',$devuelto);

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
        
    }
    //EDITAR
    public function update()
    {
        $sql                = $this->dbConnection->prepare("UPDATE prestamos SET fecha=:fecha,herramienta_id=:herramienta_id,cantidad=:cantidad,devuelto=:devuelto WHERE usuario_id=:usaurio_id");
        $fecha              = $this->getFecha();
        $herramienta_id     = $this->getHerramientaId();
        $cantidad           = $this->getCantidad();
        $usaurio_id         = $this->getUsuarioId();
        $devuelto           = $this->getDevuelto();
        
        $sql->bindParam(':fecha',$fecha);
        $sql->bindParam(':herramienta_id',$herramienta_id);
        $sql->bindParam(':cantidad',$cantidad);
        $sql->bindParam(':usaurio_id',$usaurio_id);
        $sql->bindParam(':devuelto',$devuelto);

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
        
    }
    public function find()
    {
        $sql = $this->dbConnection->prepare("SELECT*FROM prestamos WHERE id=:id");
        $id = $this->getId();

        $sql->bindParam(':id',$id);
        $sql->execute();
        if($row = $sql->fetch(PDO::FETCH_OBJ)){
            $prestamo_obj = new Loan($row->id,$row->fecha,$row->herramienta_id,$row->cantidad,$row->usuario_id,$row->devuelto); 
        }else{
            $prestamo_obj = null;
        }
        return $prestamo_obj;
    }

    public function getAllLoansByState()
    {
        $estado = $this->getDevuelto();
        try {
            // Selecciona todos los campos de la tabla usuario y solo el nombre de la tabla de roles con el alias nombre_rol
            $sql = $this->dbConnection->prepare("SELECT prestamos.*,herramientas.nombre AS herramienta_nombre, usuarios.nombre AS usuario_nombre FROM prestamos INNER JOIN herramientas ON herramientas.id=prestamos.herramienta_id INNER JOIN usuarios ON usuarios.id=prestamos.usuario_id WHERE prestamos.devuelto=:devuelto");
            
            // Ejecutamos
            $sql->execute([
                ':devuelto'=>$estado
            ]);

            $resultSet = [];
            // Ahora vamos a indicar el fetch mode cuando llamamos a fetch:
            while ($row = $sql->fetch(PDO::FETCH_OBJ)) {
                $resultSet[] = $row;
            }
            return $resultSet;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }


    }

    public function supr($id){
		$sql = $this->dbConnection->prepare("DELETE FROM prestamos WHERE id=:id");
		$sql->bindParam(':id',$id);
		$sql->execute();
	}

}

?>