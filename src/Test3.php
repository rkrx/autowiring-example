<?php
namespace Di\Test;

use Psr\Log\LoggerInterface;

class Test3 {
	/**
	 * @var LoggerInterface
	 */
	private $logger;

	/**
	 * @param LoggerInterface $logger
	 */
	public function __construct(LoggerInterface $logger) {
		$this->logger = $logger;
	}

	/**
	 */
	public function someMoreAction() {
		$this->logger->notice(__METHOD__);
	}
}