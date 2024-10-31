<?php
class DaoProducto{

    private $conn; 

    public function __construct($conn)
    {
        $this->conn = $conn; 
    }

    /// AQUI VIENEN TODAS MIS OPERACIONES

    public function buscarTodos() {
        $R['estado'] = 'OK'; 
        $c  = $this->conn; 
        try {
            $sql = $c->query("SELECT * FROM productos;"); 
            $R['filas'] = $sql->rowCount(); 
            $R['datos'] = $sql->fetchAll(PDO::FETCH_ASSOC); 
        }catch(PDOException $ex){
            echo 'DaoProducto'; 
            echo $ex->getMessage(); 
        }
        return $R; 
    }
}