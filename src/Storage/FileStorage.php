<?php

namespace Domioedition\Logger\Storage;

class FileStorage implements StorageInterface
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function store($message)
    {
        echo __CLASS__ . "\t" . __FUNCTION__ . "\n";
        file_put_contents($this->filename, $message, FILE_APPEND);
    }
}
