<?php
 
 class Category extends BaseModel
 {
    private $id;
    private $nombre;
    private $descripcion;
    private $foto;
    
    public function __construct($id=null,$nombre=null,$descripcion=null,$foto=null)
    {
        parent::__construct();
        $this->id=$id;
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->foto=$foto;
        $this->table="categorias";
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
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripcion)
    {
        $this->descripcion=$descripcion;
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
    //GUARDAR
    public function save()
    {
        $sql = $this->dbConnection->prepare("INSERT INTO categorias (nombre,descripcion) VALUES(:nombre,:descripcion)");
        $nombre = $this->getNombre();
        $descripcion = $this->getDescripcion();
        
        $sql->bindParam(':nombre',$nombre);
        $sql->bindParam(':descripcion',$descripcion);

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
        
    }

    public function find()
    {
        $sql = $this->dbConnection->prepare("SELECT*FROM categorias WHERE id=:id");
        $id = $this->getId();

        $sql->bindParam(':id',$id);
        $sql->execute();
        if($row = $sql->fetch(PDO::FETCH_OBJ)){
            $categoria_obj = new Category($row->id,$row->nombre,$row->descripcion,$row->foto); 
        }else{
            $categoria_obj = null;
        }
        return $categoria_obj;
    }

    //Update
    

    //Delete


 }