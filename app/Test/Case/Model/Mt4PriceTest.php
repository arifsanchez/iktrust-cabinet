<?php
App::uses('Mt4Price', 'Model');

/**
 * Mt4Price Test Case
 *
 */
class Mt4PriceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mt4_price'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mt4Price = ClassRegistry::init('Mt4Price');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mt4Price);

		parent::tearDown();
	}

}
