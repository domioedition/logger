<?php

namespace Domioedition\Logger;

interface LoggerInterface{
    public function info($msg);
    public function debug($msg);
    public function warn($msg);
    public function error($msg);
}