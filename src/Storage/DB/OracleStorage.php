<?php


namespace Domioedition\Logger\Storage\DB;

use Domioedition\Logger\Storage\StorageInterface;

class OracleStorage implements StorageInterface
{
    private $conn;

    public function __construct()
    {
        //Connection to Oracle DB
    }

    public function store($message)
    {
        echo __CLASS__ . "\n";
        //store in Oracle DB
    }

    public function __destruct()
    {
        //Close Oracle Db connection, Clear memory
    }
}
