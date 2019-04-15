<?php

namespace Domioedition\Logger;

use Domioedition\Logger\Storage\StorageInterface;

/**
 * Classsimple logger
 */
class SimpleLogger implements LoggerInterface
{
    private $storage;
    private $format;

    public function __construct(StorageInterface $storage, MessageFormat $format)
    {
        $this->storage = $storage;
        $this->format = $format;
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
        $this->storage->store($this->format->createMessage($level, $message));
    }
}
