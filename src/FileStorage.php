<?php

namespace Domioedition\Logger;


class FileStorage
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function store($message)
    {
        $message = time() . "|" . $message . "\n";
        file_put_contents($this->filename, $message, FILE_APPEND);
    }

}