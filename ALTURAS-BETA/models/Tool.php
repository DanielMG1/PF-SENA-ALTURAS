<?php
 
 class Tool extends BaseModel
 {
    private $id;
    private $nombre;
    private $marca;
    private $longitud;
    private $serie;
    private $descripcion;
    private $cantidad;
    private $foto;
    private $entidad_cert;
    private $fecha_fab;
    private $norma_cert;
    private $vencimiento;
    
    public function __construct($id=null,$nombre=null,$marca=null,$longitud=null,$serie=null,$descripcion=null,$cantidad=null,$foto=null,$entidad_cert=null,$fecha_fab=null,$norma_cert=null,$vencimiento=null)
    {
        parent::__construct();
        $this->id=$id;
        $this->nombre=$nombre;
        $this->marca=$marca;
        $this->longitud=$longitud;
        $this->serie=$serie;
        $this->descripcion=$descripcion;
        $this->cantidad=$cantidad;
        $this->foto=$foto;
        $this->entidad_cert=$entidad_cert;
        $this->fecha_fab=$fecha_fab;
        $this->norma_cert=$norma_cert;
        $this->vencimiento=$vencimiento;
        $this->table="herramientas";
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id=$id;
        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
        return $this;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marca)
    {
        $this->marca=$marca;
        return $this;
    }
    public function getLongitud()
    {
        return $this->longitud;
    }
    public function setLongitud($longitud)
    {
        $this->longitud=$longitud;
        return $this;
    }
    public function getSerie()
    {
        return $this->serie;
    }
    public function setSerie($serie)
    {
        $this->serie=$serie;
        return $this;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion=$descripcion;
        return $this;
    }
    public function getCantidad()
    {
        return $this->cantidad;
    }
    public function setCantidad($cantidad)
    {
        $this->cantidad=$cantidad;
        return $this;
    }
    public function getFoto()
    {
        return $this->foto;
    }
    public function setFoto($foto)
    {
        $this->foto=$foto;
        return $this;
    }
    public function getEntidad()
    {
        return $this->entidad_cert;
    }
    public function setEntidad($entidad_cert)
    {
        $this->entidad_cert=$entidad_cert;
        return $this;
    }
    public function getFechaFab()
    {
        return $this->fecha_fab;
    }
    public function setFechaFab($fecha_fab)
    {
        $this->fecha_fab=$fecha_fab;
        return $this;
    }
    public function getNorma()
    {
        return $this->norma_cert;
    }
    public function setNorma($norma_cert)
    {
        $this->norma_cert=$norma_cert;
        return $this;
    }
    public function getVencimiento()
    {
        return $this->vencimiento;
    }
    public function setVencimiento($vencimiento)
    {
        $this->vencimiento=$vencimiento;
        return $this;
    }

    //GUARDAR
    public function save()
    {
        $sql            = $this->dbConnection->prepare("INSERT INTO herramientas (nombre,marca,longitud,serie,descripcion,cantidad,entidad_cert,fecha_fbc,norma_cert,vencimiento) VALUES(:nombre,:marca,:longitud,:serie,:descripcion,:cantidad,:entidad_cert,:fecha_fbc,:norma_cert,:vencimiento)");
        $nombre         = $this->getNombre();
        $marca          = $this->getMarca();
        $longitud       = $this->getLongitud();
        $serie          = $this->getSerie();
        $descripcion    = $this->getDescripcion();
        $cantidad       = $this->getCantidad();
        $entidad_cert   = $this->getEntidad();
        $fecha_fab      = $this->getFechaFab();
        $norma_cert     = $this->getNorma();
        $vencimiento    = $this->getVencimiento();
        
        $sql->bindParam(':nombre',$nombre);
        $sql->bindParam(':marca',$marca);
        $sql->bindParam(':longitud',$longitud);
        $sql->bindParam(':serie',$serie);
        $sql->bindParam(':descripcion',$descripcion);
        $sql->bindParam(':cantidad',$cantidad);
        $sql->bindParam(':entidad_cert',$entidad_cert);
        $sql->bindParam(':fecha_fbc',$fecha_fbc);
        $sql->bindParam(':norma_cert',$norma_cert);
        $sql->bindParam(':vencimiento',$vencimiento);

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
        
    }

    public function find()
    {
        $sql = $this->dbConnection->prepare("SELECT*FROM herramientas WHERE id=:id");
        $id = $this->getId();

        $sql->bindParam(':id',$id);
        $sql->execute();
        if($row = $sql->fetch(PDO::FETCH_OBJ)){
            $herramienta_obj = new Tool($row->id,$row->nombre,$row->marca,$row->longitud,$row->serie,$row->descripcion,$row->cantidad,$row->foto,$row->entidad_cert,$row->fecha_fbc,$row->norma_cert,$row->vencimiento); 
        }else{
            $herramienta_obj = null;
        }
        return $herramienta_obj;
    }

    public function getAllToolsByStock()
    {
        $cantidad = $this->getCantidad();
        try {
            // Selecciona todos los campos de la tabla herramientas y solo el nombre de la tabla de roles con el alias nombre_rol
            $sql = $this->dbConnection->prepare("SELECT*FROM herramientas WHERE cantidad <= :cantidad");
            
            // Ejecutamos
            $sql->execute([
                ':cantidad'=>$cantidad
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
		$sql = $this->dbConnection->prepare("DELETE FROM herramientas WHERE id=:id");
		$sql->bindParam(':id',$id);
		$sql->execute();
	}

 }