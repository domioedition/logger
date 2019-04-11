<?php

namespace Domioedition\Logger\Storage;


class FileStorage
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function store($eventType, $message)
    {
        $message = time() . "|" . $eventType . "|" . $message . "\n";
        file_put_contents($this->filename, $message, FILE_APPEND);
    }

}