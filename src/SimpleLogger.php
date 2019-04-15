<?php

namespace Domioedition\Logger;

use Domioedition\Logger\Storage\StorageInterface;

/**
 * Classsimple logger
 */
class SimpleLogger implements LoggerInterface
{
    private $name;
    private $storage;
    private $format;

    public const DEBUG = 1;
    public const INFO = 2;
    public const WARNING = 4;
    public const ERROR = 8;

    protected static $levels = [
        self::DEBUG => 'DEBUG',
        self::INFO => 'INFO',
        self::WARNING => 'WARNING',
        self::ERROR => 'ERROR',
    ];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addHandler(StorageInterface $storage, MessageFormat $format)
    {
        $this->storage = $storage;
        $this->format = $format;
    }

    public function getLevels()
    {
        return self::$levels;
    }

    public function debug($message)
    {
        $this->log(SELF::DEBUG, $message);
    }

    public function info($message)
    {
        $this->log(SELF::INFO, $message);
    }

    public function warn($message)
    {
        $this->log(self::WARNING, $message);
    }

    public function error($message)
    {
        $this->log(self::ERROR, $message);
    }

    private function log($level, $message)
    {
        $this->storage->store($this->format->createMessage($level, $message));
    }
}
