<?php
App::uses('Mt4Trade', 'Model');

/**
 * Mt4Trade Test Case
 *
 */
class Mt4TradeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mt4_trade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mt4Trade = ClassRegistry::init('Mt4Trade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mt4Trade);

		parent::tearDown();
	}

}
