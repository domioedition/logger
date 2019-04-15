<?php


namespace Domioedition\Logger;


class DefaultMessageFormat implements MessageFormat
{
    public function createMessage($level, $message)
    {
        return $message . "\n";
    }
}