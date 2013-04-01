<?php
App::uses('Mt4User', 'Model');

/**
 * Mt4User Test Case
 *
 */
class Mt4UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mt4_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mt4User = ClassRegistry::init('Mt4User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mt4User);

		parent::tearDown();
	}

}
