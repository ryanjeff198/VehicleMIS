<?php
//connection for DATABASE to ui
class DBcon {
    private $host = "localhost";
    private $db_name = "vehiclesys";
    private $username = "root";
    private $password = "";
    public $conn;

    public function connect(): PDO {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

        return $this->conn;
    }
}
?>