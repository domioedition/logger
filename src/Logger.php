<?php

namespace Domioedition\Logger;

class Logger implements LoggerInterface
{
    public function __construct($location)
    {
        $this->location = $location;
    }

    private function error($message)
    {
        return "\n\nError in step. Send error message all team.\n$message";
    }

    private function warning($message)
    {
        return "\n\nWarning. Restart all cron jobs.\n$message";
    }

    private function debug()
    {
        return "Debug action";
    }

    private function success($message)
    {
        return "\n\nSuccess action.\n$message";
    }

    public function createEvent($eventType, $message)
    {
        if($eventType == LoggerInterface::Error){
            echo $this->error($message);
        }
        if($eventType == LoggerInterface::Warning){
            echo $this->warning($message);
        }
        if($eventType == LoggerInterface::Debug){
            echo $this->debug();
        }
        if($eventType == LoggerInterface::Succes){
            echo $this->success($message);
        }
        
        $this->location->store($eventType, $message);
    }
}
