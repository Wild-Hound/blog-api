<?php
class Database{
    private $host = 'localhost';
    private $db_name = 'myblog';
    private $username = 'root';
    private $password = '12345';
    private $conn;
    public function connect(){
        $this->conn=null;
        try{
            // likely error here
            $this->conn = new PDO('mysql:host='.$this->host.'; dbname='.$this->db_name, $this->username, $this->password);
            // unknown
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'Conntection Error: '.$e->getMessage();
        }

        return $this->conn;
    }
}