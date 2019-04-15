<?php


namespace Domioedition\Logger;

class FullMessageFormat implements MessageFormat
{
    public function createMessage($level, $message)
    {
        return date("Y-m-d H:i:s", time()) . " - " . $level . " - " . $message . "\n";
    }
}
