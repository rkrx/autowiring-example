<?php
namespace Di\Test;

use Psr\Log\LoggerInterface;

class Test {
	/** @var Test1 */
	private $test1;
	/** @var Test2 */
	private $test2;

	/**
	 * @param Test1 $test1
	 * @param Test2 $test2
	 */
	public function __construct(Test1 $test1, Test2 $test2) {
		$this->test1 = $test1;
		$this->test2 = $test2;
	}

	/**
	 * @param int $id
	 * @param LoggerInterface $logger
	 */
	public function test($id, LoggerInterface $logger) {
		$logger->info("Start");
		$this->test1->someAction();
		$this->test2->someOtherAction();
		$logger->info("End");
	}
}
