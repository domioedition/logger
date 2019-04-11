<?php

use Domioedition\Logger\Logger;
use Domioedition\Logger\Storage\DbStorage;
use Domioedition\Logger\Storage\FileStorage;

require 'vendor/autoload.php';

//Log message into file
$logger = new Logger(new FileStorage("logger.txt"));
$logger->createEvent(8, "Record added.");
$logger->createEvent(8, "Record added.");
$logger->createEvent(8, "Record added.");
$logger->createEvent(1, "Remote service is not available." . "|"  . __LINE__ . "|" . __FILE__);
$logger->createEvent(1, "Soap server is not available.");
$logger->createEvent(1, "DNS servers are down");
$logger->createEvent(2, "Something goes wrong.");



//Log message into DB
$logger = new Logger(new DbStorage());
$logger->createEvent(8, "Record added.");