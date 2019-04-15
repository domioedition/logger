<?php


namespace Domioedition\Logger;

interface MessageFormat
{
    public function createMessage($level, $message);
}
