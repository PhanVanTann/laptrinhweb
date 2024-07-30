<?php

class Database {
    public $host= DB_HOST;
    public $user=DB_USER;
    public $pass =DB_PASS;
    public $dbname = DB_NAME;

    public $link ;
    public $error;


    public function __construct() {
        $this->connectDB();
    }

    private function connectDB() {
      
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->link) {
            $this->error ="Connection fail" .$this->link->connect_error;
            return false;
           
        }
    }

    public function select($query) {
        $result = $this->link->query($query);

        if ($this->link->error) {
            die("Query failed: " . $this->link->error);
        }

        return $result;
    }

    public function insert($query) {
        $this->link->query($query);

        if ($this->link->error) {
            die("Insert failed: " . $this->link->error);
        }
    }

    public function update($query) {
        $this->link->query($query);

        if ($this->link->error) {
            die("Update failed: " . $this->link->error);
        }
    }


    
    public function delete($query) {
        if ($this->link->query($query) === TRUE) {
            return true;
        } else {
           
            return false; 
        }
    }
}
?>