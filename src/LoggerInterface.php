<?php

namespace Domioedition\Logger;

interface LoggerInterface{
    public function createEvent($message);
}