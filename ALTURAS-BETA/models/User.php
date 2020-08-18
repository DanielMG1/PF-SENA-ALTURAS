<?php
 
 class User extends BaseModel
 {
    private $nombre;
    private $email;
    private $rol_id;
    private $password;
    
    public function __construct($nombre=null,$email=null,$rol_id=null,$password=null)
    {
        parent::__construct();
        $this->nombre=$nombre;
        $this->email=$email;
        $this->rol_id=$rol_id;
        $this->password=$password;
        $this->table="usuarios";
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
                // Integrar uso de sesiones a partir de aquí
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
 }