<?php
/**
 * Mt4PriceFixture
 *
 */
class Mt4PriceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'SYMBOL' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'TIME' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'BID' => array('type' => 'float', 'null' => false, 'default' => null),
		'ASK' => array('type' => 'float', 'null' => false, 'default' => null),
		'LOW' => array('type' => 'float', 'null' => false, 'default' => null),
		'HIGH' => array('type' => 'float', 'null' => false, 'default' => null),
		'DIRECTION' => array('type' => 'integer', 'null' => false, 'default' => null),
		'DIGITS' => array('type' => 'integer', 'null' => false, 'default' => null),
		'SPREAD' => array('type' => 'integer', 'null' => false, 'default' => null),
		'MODIFY_TIME' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'SYMBOL', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'SYMBOL' => 'Lorem ipsum do',
			'TIME' => '2013-04-01 09:29:14',
			'BID' => 1,
			'ASK' => 1,
			'LOW' => 1,
			'HIGH' => 1,
			'DIRECTION' => 1,
			'DIGITS' => 1,
			'SPREAD' => 1,
			'MODIFY_TIME' => '2013-04-01 09:29:14'
		),
	);

}
