<?php
namespace Di\Test;

class Test2 {
	/**
	 * @var Test3
	 */
	private $test3;

	/**
	 * @param Test3 $test3
	 */
	public function __construct(Test3 $test3) {
		$this->test3 = $test3;
	}
}