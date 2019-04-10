<?php

namespace Domioedition\Logger;

class Logger implements LoggerInterface
{
    public function __construct($location)
    {
        $this->location = $location;
    }

    public function createEvent($message)
    {
       $this->location->store($message);
    }
}
