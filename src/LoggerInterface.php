<?php

namespace Domioedition\Logger;

interface LoggerInterface{
    const Error = 1;
    const Warning = 2;
    const Debug = 4;
    const Succes = 8;
    public function createEvent($eventType, $message);
    // public function error();
    // public function warning();
    // public function debug();
    // public function success();
}