<?php


namespace Domioedition\Logger\Format;

interface MessageFormat
{
    public function createMessage($level, $message);
}
