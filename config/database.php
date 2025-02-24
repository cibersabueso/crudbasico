<?php
class Database {
    private $host = "localhost";
    private $db_name = "proyecto_db";
    private $username = "root";
    private $password = "tu_contraseña_de_tu_basededatos";
    private $conn = null;

    public function getConnection() {
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                                  $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}