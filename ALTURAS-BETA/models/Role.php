<?php 

class Role extends BaseModel
{
    private $id;
    private $nombre;

    public function __construct($id=null,$nombre=null)
    {
        parent::__construct();
        $this->id=$id;
        $this->nombre=$nombre;
        $this->table="roles";
    }

    
}

?>