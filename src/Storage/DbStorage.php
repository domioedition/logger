<?php

namespace Domioedition\Logger\Storage;


class DbStorage
{
    public function __construct()
    {
        //setting connection to db
    }

    public function store($eventType, $message)
    {
        //todo
        //if connection success store log message in database
        $sql = "INSERT INTO .....";
        $message = time() . "|" . $message . "\n";
        // echo "$eventType\nWriting to DB $sql\n$message\n";
    }

}