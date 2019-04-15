<?php

use Domioedition\Logger\SimpleLogger;
use Domioedition\Logger\Storage\DB\MySQLiStorage;
use Domioedition\Logger\Storage\DB\OracleStorage;
use Domioedition\Logger\Storage\FileStorage;

require 'vendor/autoload.php';

echo "<pre>";


//Simple logger - file storage
$simple_logger = new SimpleLogger(new FileStorage("simple_log.txt"));
$simple_logger->info("Script processing started!");
$simple_logger->warn("Warning. Alarm!");
$simple_logger->error("Error!");
$simple_logger->debug("Debug information!");

//Simple logger - Mysqli storage
$simple_logger = new SimpleLogger(new MySQLiStorage());
$simple_logger->info("Script processing started!");
$simple_logger->warn("Warning. Alarm!");
$simple_logger->error("Error!");
$simple_logger->debug("Debug information!");

//Simple logger - Oracle storage
$simple_logger = new SimpleLogger(new OracleStorage());
$simple_logger->info("Script processing started!");
$simple_logger->warn("Warning. Alarm!");
$simple_logger->error("Error!");
$simple_logger->debug("Debug information!");
