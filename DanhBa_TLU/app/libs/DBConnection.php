<?php 
require_once APP_ROOT.'/app/config/config.php';
class DBConnection{
    private $db;
    private $host;
    
    private $username;
    private $password;
    private $conn;
    public function __construct(){
        $this->db = DB_NAME;
        $this->host = DB_HOST;
        $this->username = DB_USERNAME;
        $this->password = DB_PASSWORD;
        try{
            $this->conn = new PDO("mysql:host{$this->host},db={$this->db}",$this->username,$this->password);

        }
        catch(PDOException $e){
            $this->conn = null;
        }
    }
    public function getConnection(){
        return $this->conn;
    }
}
   
?>