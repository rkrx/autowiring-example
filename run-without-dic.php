<?php
use Di\Test;
use Kir\Logging\Essentials\Common\LoggerCollection;
use Kir\Logging\Essentials\Filters\LogLevelRangeFilterProxy;
use Kir\Logging\Essentials\Loggers\ResourceLogger;
use Psr\Log\LogLevel;

require 'vendor/autoload.php';

$logger = new LoggerCollection();
$logger->add(new LogLevelRangeFilterProxy(new ResourceLogger(STDOUT), LogLevel::DEBUG, LogLevel::WARNING));
$logger->add(new LogLevelRangeFilterProxy(new ResourceLogger(STDERR), LogLevel::ERROR));

$test1 = new Test\Test1($logger);
$test3 = new Test\Test3($logger);
$test2 = new Test\Test2($test3);

$test = new Test\Test($test1, $test2);