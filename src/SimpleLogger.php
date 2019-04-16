<?php

namespace Domioedition\Logger;

use Domioedition\Logger\Storage\StorageInterface;
use Domioedition\Logger\Format\MessageFormat;

/**
 * Classsimple logger
 */
final class SimpleLogger implements LoggerInterface
{
    private $name;
    private $storage;
    private $format;
    private static $instance;

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

    //is not allowed to call from outside to prevent from creating multiple instances,
    // * to use the singleton, you have to obtain the instance from Singleton::getInstance() instead
    private function __construct()
    {
        
    }
    
    public static function getInstance(): SimpleLogger
    {
        if (null === static::$instance) {
            static::$instance = new static();// what difference?
            static::$instance = new SimpleLogger();
        }

        return static::$instance;
    }

    //prevent the instance from being cloned (which would create a second instance of it)
    private function __clone()
    {

    }
    
    //prevent from being unserialized (which would create a second instance of it)
    private function __wakeup()
    {

    }

    public function setHandler(StorageInterface $storage, MessageFormat $format)
    {
        $this->storage = $storage;
        $this->format = $format;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
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
