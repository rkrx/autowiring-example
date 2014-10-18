<?php
use Kir\Logging\Essentials\Common\LoggerCollection;
use Kir\Logging\Essentials\Filters\LogLevelRangeFilterProxy;
use Kir\Logging\Essentials\Loggers\ResourceLogger;
use Psr\Log\LoggerInterface;
use Psr\Log\LogLevel;

return [
	LoggerInterface::class => DI\factory(function () {
		$logger = new LoggerCollection();
		$logger->add(new LogLevelRangeFilterProxy(new ResourceLogger(STDOUT), LogLevel::DEBUG, LogLevel::WARNING));
		$logger->add(new LogLevelRangeFilterProxy(new ResourceLogger(STDERR), LogLevel::ERROR));
		return $logger;
	}),
];