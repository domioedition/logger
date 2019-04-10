<?php
use Domioedition\Logger\FileStorage;
use Domioedition\Logger\Logger;
use Domioedition\Logger\DbStorage;

require 'vendor/autoload.php';

//Log message into file
$logger = new Logger(new FileStorage("logger.txt"));
$logger->createEvent("Some alarm event.");

//Log message into DB
$logger = new Logger(new DbStorage());
$logger->createEvent("Some alarm event.");