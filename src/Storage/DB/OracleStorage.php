<?php


namespace Domioedition\Logger\Storage\DB;

use Domioedition\Logger\Storage\StorageInterface;

class OracleStorage implements StorageInterface{

    private $conn;

    public function __construct()
    {
        // //setting connection to db
        // $servername = "127.0.0.1";
        // $username = "root";
        // $password = "";
        // $dbname = "logger";
        
        // // Create connection
        // $this->conn = new \mysqli($servername, $username, $password, $dbname);
        
        // // Check connection
        // if ($this->conn->connect_error) {
        //     die("Connection failed: " . $this->conn->connect_error);
        // } 
        // // echo "Connected successfully";

    }

    public function store($message)
    {
        echo __CLASS__ . "\n";
        // $sql = "INSERT INTO logger (`message`) VALUES ('$message')";

        // if ($this->conn->query($sql) === TRUE) {
        //     echo "New record:\n{$message}created successfully\n\n";
        // } else {
        //     echo "Error: " . $sql . "<br>" . $this->conn->error;
        // }
    }

    public function __destruct()
    {
        // $this->conn->close();
    }


}