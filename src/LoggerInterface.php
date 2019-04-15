<?php

namespace Domioedition\Logger;

interface LoggerInterface{
    const Info = "Info";
    const Debug = "Debug";
    const Warn = "Warn";
    const Error = "Error";
    public function info($msg);
    public function debug($msg);
    public function warn($msg);
    public function error($msg);
    // public function log($level, $msg); //todo e need this declaratio or no?
}