<?php
class Database {
    private $host = "localhost";
    private $db_name = "biblioteka";
    private $username = "root";
    private $password = "";

    public function connect() {
        $conn = new PDO(
            "mysql:host=$this->host;dbname=$this->db_name",
            $this->username,
            $this->password
        );
        return $conn;
    }
}
