<?php

namespace Domioedition\Logger;


class DbStorage
{
    public function __construct()
    {
        //setting connection to db
    }

    public function store($message)
    {
        //todo
        //if connection success store log message in database
        $sql = "INSERT INTO .....";
        $message = time() . "|" . $message . "\n";
    }

}