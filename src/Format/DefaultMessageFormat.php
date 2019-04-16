<?php


namespace Domioedition\Logger\Format;

class DefaultMessageFormat implements MessageFormat
{
    public function createMessage($level, $message)
    {
        return $message . "\n";
    }
}
