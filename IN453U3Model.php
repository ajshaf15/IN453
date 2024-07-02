<?php
//include the config file
include 'config.php';

class IN453U3Model
{
    private $conn;

    public function __construct($host, $database, $username, $password)
    {
        // Create a database connection
        $this->conn = new mysqli($host, $username, $password, $database);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function fetchIN453bName()
    {
        $query = "SELECT first_name, last_name FROM in453b_1";
        $result = $this->conn->query($query);

        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetchIN453aCount()
    {
        $query = "SELECT COUNT(*) AS count FROM in453a_1";
        $result = $this->conn->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            return $row['count'];
        } else {
            return false;
        }
    }

    public function fetchIN453cCount()
    {
        $query = "SELECT COUNT(*) AS count FROM in453c_1";
        $result = $this->conn->query($query);

        if ($result) {
            $row = $result->fetch_assoc();
            return $row['count'];
        } else {
            return false;
        }
    }

    public function fetchIN453bFullName()
    {
        $query = "SELECT CONCAT(first_name, ' ', last_name) AS full_name FROM in453b_1";
        $result = $this->conn->query($query);

        $data = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row['full_name'];
            }
        }
        return $data;
    }

    public function __destruct()
    {
        $this->conn->close();
    }

    public function _construct($host, $database, $username, $password)
    {
        $this->conn = new mysqli($host, $username, $password, $database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}


