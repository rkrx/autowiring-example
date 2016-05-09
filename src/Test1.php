<?php
namespace Di\Test;

use Psr\Log\LoggerInterface;

class Test1 {
	/** @var LoggerInterface */
	private $logger;

	/**
	 * @param LoggerInterface $logger
	 */
	public function __construct(LoggerInterface $logger) {
		$this->logger = $logger;
	}

	/**
	 */
	public function someAction() {
		$this->logger->notice(__METHOD__);
	}
}
