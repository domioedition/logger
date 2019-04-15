<?php

namespace Domioedition\Logger;

use Domioedition\Logger\Storage\StorageInterface;

/**
 * Classsimple logger
 */
class SimpleLogger implements LoggerInterface
{
    private $storage;
    
    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function error($message)
    {
        $this->log(LoggerInterface::Error, $message);
    }

    public function warn($message)
    {
        $this->log(LoggerInterface::Warn, $message);
    }

    public function debug($message)
    {
        $this->log(LoggerInterface::Debug, $message);
    }

    public function info($message)
    {
        $this->log(LoggerInterface::Info, $message);
    }

    private function log($level, $message)
    {
        $final_message = date("Y-m-d H:i:s", time()) . " - " . $level . " - " . $message . "\n";
        $this->storage->store($final_message);
    }
}
