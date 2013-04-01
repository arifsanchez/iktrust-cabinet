<?php
/**
 * Mt4TradeFixture
 *
 */
class Mt4TradeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'TICKET' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'LOGIN' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'SYMBOL' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'DIGITS' => array('type' => 'integer', 'null' => false, 'default' => null),
		'CMD' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'VOLUME' => array('type' => 'integer', 'null' => false, 'default' => null),
		'OPEN_TIME' => array('type' => 'datetime', 'null' => false, 'default' => null, 'key' => 'index'),
		'OPEN_PRICE' => array('type' => 'float', 'null' => false, 'default' => null),
		'SL' => array('type' => 'float', 'null' => false, 'default' => null),
		'TP' => array('type' => 'float', 'null' => false, 'default' => null),
		'CLOSE_TIME' => array('type' => 'datetime', 'null' => false, 'default' => null, 'key' => 'index'),
		'EXPIRATION' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'CONV_RATE1' => array('type' => 'float', 'null' => false, 'default' => null),
		'CONV_RATE2' => array('type' => 'float', 'null' => false, 'default' => null),
		'COMMISSION' => array('type' => 'float', 'null' => false, 'default' => null),
		'COMMISSION_AGENT' => array('type' => 'float', 'null' => false, 'default' => null),
		'SWAPS' => array('type' => 'float', 'null' => false, 'default' => null),
		'CLOSE_PRICE' => array('type' => 'float', 'null' => false, 'default' => null),
		'PROFIT' => array('type' => 'float', 'null' => false, 'default' => null),
		'TAXES' => array('type' => 'float', 'null' => false, 'default' => null),
		'COMMENT' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'INTERNAL_ID' => array('type' => 'integer', 'null' => false, 'default' => null),
		'MARGIN_RATE' => array('type' => 'float', 'null' => false, 'default' => null),
		'TIMESTAMP' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'MODIFY_TIME' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'TICKET', 'unique' => 1),
			'INDEX_STAMP' => array('column' => 'TIMESTAMP', 'unique' => 0),
			'INDEX_LOGIN' => array('column' => 'LOGIN', 'unique' => 0),
			'INDEX_CMD' => array('column' => 'CMD', 'unique' => 0),
			'INDEX_OPENTIME' => array('column' => 'OPEN_TIME', 'unique' => 0),
			'INDEX_CLOSETIME' => array('column' => 'CLOSE_TIME', 'unique' => 0)
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
			'TICKET' => 1,
			'LOGIN' => 1,
			'SYMBOL' => 'Lorem ipsum do',
			'DIGITS' => 1,
			'CMD' => 1,
			'VOLUME' => 1,
			'OPEN_TIME' => '2013-04-01 09:27:56',
			'OPEN_PRICE' => 1,
			'SL' => 1,
			'TP' => 1,
			'CLOSE_TIME' => '2013-04-01 09:27:56',
			'EXPIRATION' => '2013-04-01 09:27:56',
			'CONV_RATE1' => 1,
			'CONV_RATE2' => 1,
			'COMMISSION' => 1,
			'COMMISSION_AGENT' => 1,
			'SWAPS' => 1,
			'CLOSE_PRICE' => 1,
			'PROFIT' => 1,
			'TAXES' => 1,
			'COMMENT' => 'Lorem ipsum dolor sit amet',
			'INTERNAL_ID' => 1,
			'MARGIN_RATE' => 1,
			'TIMESTAMP' => 1,
			'MODIFY_TIME' => '2013-04-01 09:27:56'
		),
	);

}
