<?php
class Database{
    private $host= 'localhost';
    private $db_name= 'bdgestorlb';
    private $username='root';
    private $password='';
    public $conexion;

    public function conectar(){
        try{
            $this->conexion=new PDO(
                "mysql:host".$this->host.";dbname=".$this->db_name,
                $this->username,
                $this->password
            );
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conexion;
        }catch(PDOException $e){
            echo "Error de conexión: ".$e->getMessage();
            return null;
        }

    }
}
