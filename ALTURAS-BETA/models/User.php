<?php
 
 class User extends BaseModel
 {
    // private $id;
    private $nombre;
    private $email;
    private $rol_id;
    private $password;
    
    public function __construct($nombre=null,$email=null,$rol_id=null,$password=null)
    {
        parent::__construct();
        // $this->id=$id;
        $this->nombre=$nombre;
        $this->email=$email;
        $this->rol_id=$rol_id;
        $this->password=$password;
        $this->table="usuarios";
    }
    // public function getId()
    // {
    //     return $this->id;
    // }
    // public function setId($id)
    // {
    //     $this->id=$id;
    //     return $this;
    // }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email=$email;
        return $this;
    }
    public function getRolId()
    {
        return $this->rol_id;
    }
    public function setRolId($rol_id)
    {
        $this->rol_id=$rol_id;
        return $this;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password=$password;
        return $this;
    }

    public function login()
    {
        //Consulta la base de datos por el email
        $sql=$this->dbConnection->prepare("select * from usuarios where email =:email");
        $email=$this->getEmail();
        $sql->bindParam(':email',$email);
        $sql->execute();
        if($row=$sql->fetch(PDO::FETCH_OBJ))
        {
            //Crea el objeto
            $user_obj=new User($row->nombre,$row->email,$row->rol_id,$row->password);
        }
        else
        {
            $user_obj=null;
        }
        if($user_obj)
        {
            $password=$this->getPassword();
            if(password_verify($password,$user_obj->password))
            {
                // Se Integra el  uso de sesiones a partir de aquí
                session_start();
                $_SESSION['username']=$user_obj->nombre;
                $_SESSION['rol_id']=$user_obj->rol_id;
                return true;
            }
            else
            {
                return false;
            }
        }
        else 
        {
            return false;
        }
    
    }
    // Función especial de getAll para traer el nombre del rol.
    public function getAllUsers()
    {
        try {
            // Selecciona todos los campos de la tabla usuario y solo el nombre de la tabla de roles con el alias nombre_rol
            $sql = $this->dbConnection->prepare("SELECT usuarios.*,roles.nombre AS nombre_rol FROM usuarios INNER JOIN roles ON roles.id = usuarios.rol_id");
            
            // Ejecutamos
            $sql->execute();
            $resultSet = null;
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

    public function create()
    {
        try{
            //Consulta
            $sql = $this->dbConnection->prepare("INSERT INTO usuarios (nombre,email,rol_id,password) VALUES(:nombre,:email,:rol_id,:password)");

            $nombre     =$this->getNombre();
            $email      =$this->getEmail();
            $rol_id     =$this->getRolId();
            $password   =$this->getPassword();
            $password_hash = password_hash($password,PASSWORD_DEFAULT,['cost'=>12]);

            $sql->bindParam(':nombre',$nombre);
            $sql->bindParam(':email',$email);
            $sql->bindParam(':rol_id',$rol_id);
            $sql->bindParam(':password',$password_hash);

            if($sql->execute()){
                return true;
            }else{
                return false;
            }


        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }
    // public function find()
    // {
    //     $sql = $this->dbConnection->prepare("SELECT*FROM usuarios WHERE id=:id");
    //     $id = $this->getRolId();

    //     $sql->bindParam(':id',$id);
    //     $sql->execute();
    //     if($row = $sql->fetch(PDO::FETCH_OBJ)){
    //         $user_obj = new User($row->nombre,$row->email,$row->rol_id,$row->password);
    //     }else{
    //         $user_obj = null;
    //     }
    //     return $user_obj;
    // }

    public function supr($id){
		$sql = $this->dbConnection->prepare("DELETE FROM usuarios WHERE id=:id");
		$sql->bindParam(':id',$id);
		$sql->execute();
	}
 }