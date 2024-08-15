<?php 
include "config.php";
?>

<?php

class Database {
    private $connection;

    public function __construct() {
        $this->connect();
    }

    private function connect() {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'my_website';

        $this->connection = new mysqli($host, $user, $pass, $db);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function select($query, $params = [], $types = "") {
        $stmt = $this->connection->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $this->connection->error);
        }

        if (!empty($params)) {
            $stmt->bind_param($types, ...$params);
        }

        $stmt->execute();
        $result = $stmt->get_result();
        if ($this->connection->error) {
            die("Query failed: " . $this->connection->error);
        }
        $stmt->close();
        return $result;
    }

    public function insert($query, $params = [], $types = "") {
        $stmt = $this->connection->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $this->connection->error);
        }

        if (!empty($params)) {
            $stmt->bind_param($types, ...$params);
        }

        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }
        $stmt->close();
    }

    public function update($query, $params = [], $types = "") {
        $stmt = $this->connection->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $this->connection->error);
        }

        if (!empty($params)) {
            $stmt->bind_param($types, ...$params);
        }

        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }
        $stmt->close();
    }

    public function delete($query, $params = [], $types = "") {
        $stmt = $this->connection->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $this->connection->error);
        }

        if (!empty($params)) {
            $stmt->bind_param($types, ...$params);
        }

        if (!$stmt->execute()) {
            die("Execute failed: " . $stmt->error);
        }
        $stmt->close();
    }

    //lấy id
    public function getInsertId() {
        return $this->connection->insert_id;
    }
}


?>