<?php 

class Conexion{

    private $host; 
    private $usuario; 
    private $pass; 
    private $basededatos; 

    public function __construct()
    {
        $this->host = '192.168.0.206'; 
        $this->usuario = 'root'; 
        $this->pass = 'rootroot'; 
        $this->basededatos = 'tiendax'; 
    }

    public function obtenerConexion() {
        $conn = ""; 
        try{
            $conn = new 
               PDO("mysql:host=$this->host;dbname=$this->basededatos",
                        $this->usuario, $this->pass);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        }catch(PDOException $ex){
            echo $ex->getMessage(); 
        }
        return $conn; 
    }

}