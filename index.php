<?php

use Domioedition\Logger\SimpleLogger;
use Domioedition\Logger\Storage\MySQLiStorage;
use Domioedition\Logger\Storage\OracleStorage;
use Domioedition\Logger\Storage\FileStorage;
use Domioedition\Logger\Format\FullMessageFormat;
use Domioedition\Logger\Format\DefaultMessageFormat;

require 'vendor/autoload.php';

echo "<pre>";

//Simple logger - file storage
$simple_logger = SimpleLogger::getInstance();

$simple_logger->setHandler(new FileStorage("simple_log.txt"), new FullMessageFormat());
$simple_logger->info("Script processing started!");
$simple_logger->warn("Warning. Alarm!");
$simple_logger->error("Error! Something broke.");
$simple_logger->debug("Debug information!");


$simple_logger->setHandler(new OracleStorage(), new DefaultMessageFormat());
$simple_logger->info("Script processing started!");
$simple_logger->warn("Warning. Alarm!");
$simple_logger->error("Error!");
$simple_logger->debug("Debug information!");


// $simple_logger->setHandler(new MySQLiStorage(), new DefaultMessageFormat());
// $simple_logger->info("Script processing started!");
// $simple_logger->warn("Warning. Alarm!");
// $simple_logger->error("Error!");
// $simple_logger->debug("Debug information!");


