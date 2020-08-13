<?php

class BaseController
{
    
    public function __construct()
    {
        require_once "Connection.php";
        require_once "BaseModel.php";
        
        //Incluir todos los modelos
        foreach (glob("models/*.php") as $file) {
            require_once $file;
        }
    }

    // Crear los Métodos que sean comunes para todos los controladores
}
?>