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


}

?>