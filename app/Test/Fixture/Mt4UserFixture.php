<?php
/**
 * Mt4UserFixture
 *
 */
class Mt4UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'LOGIN' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'GROUP' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ENABLE' => array('type' => 'integer', 'null' => false, 'default' => null),
		'ENABLE_CHANGE_PASS' => array('type' => 'integer', 'null' => false, 'default' => null),
		'ENABLE_READONLY' => array('type' => 'integer', 'null' => false, 'default' => null),
		'PASSWORD_PHONE' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'NAME' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COUNTRY' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'CITY' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'STATE' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ZIPCODE' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ADDRESS' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 128, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'PHONE' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'EMAIL' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 48, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'COMMENT' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ID' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 32, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'STATUS' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 16, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'REGDATE' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'LASTDATE' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'LEVERAGE' => array('type' => 'integer', 'null' => false, 'default' => null),
		'AGENT_ACCOUNT' => array('type' => 'integer', 'null' => false, 'default' => null),
		'TIMESTAMP' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'BALANCE' => array('type' => 'float', 'null' => false, 'default' => null),
		'PREVMONTHBALANCE' => array('type' => 'float', 'null' => false, 'default' => null),
		'PREVBALANCE' => array('type' => 'float', 'null' => false, 'default' => null),
		'CREDIT' => array('type' => 'float', 'null' => false, 'default' => null),
		'INTERESTRATE' => array('type' => 'float', 'null' => false, 'default' => null),
		'TAXES' => array('type' => 'float', 'null' => false, 'default' => null),
		'SEND_REPORTS' => array('type' => 'integer', 'null' => false, 'default' => null),
		'USER_COLOR' => array('type' => 'integer', 'null' => false, 'default' => null),
		'EQUITY' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'MARGIN' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'MARGIN_LEVEL' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'MARGIN_FREE' => array('type' => 'float', 'null' => false, 'default' => '0'),
		'MODIFY_TIME' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'API_DATA' => array('type' => 'binary', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'LOGIN', 'unique' => 1),
			'INDEX_STAMP' => array('column' => 'TIMESTAMP', 'unique' => 0)
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
			'LOGIN' => 1,
			'GROUP' => 'Lorem ipsum do',
			'ENABLE' => 1,
			'ENABLE_CHANGE_PASS' => 1,
			'ENABLE_READONLY' => 1,
			'PASSWORD_PHONE' => 'Lorem ipsum dolor sit amet',
			'NAME' => 'Lorem ipsum dolor sit amet',
			'COUNTRY' => 'Lorem ipsum dolor sit amet',
			'CITY' => 'Lorem ipsum dolor sit amet',
			'STATE' => 'Lorem ipsum dolor sit amet',
			'ZIPCODE' => 'Lorem ipsum do',
			'ADDRESS' => 'Lorem ipsum dolor sit amet',
			'PHONE' => 'Lorem ipsum dolor sit amet',
			'EMAIL' => 'Lorem ipsum dolor sit amet',
			'COMMENT' => 'Lorem ipsum dolor sit amet',
			'ID' => 'Lorem ipsum dolor sit amet',
			'STATUS' => 'Lorem ipsum do',
			'REGDATE' => '2013-04-01 09:26:28',
			'LASTDATE' => '2013-04-01 09:26:28',
			'LEVERAGE' => 1,
			'AGENT_ACCOUNT' => 1,
			'TIMESTAMP' => 1,
			'BALANCE' => 1,
			'PREVMONTHBALANCE' => 1,
			'PREVBALANCE' => 1,
			'CREDIT' => 1,
			'INTERESTRATE' => 1,
			'TAXES' => 1,
			'SEND_REPORTS' => 1,
			'USER_COLOR' => 1,
			'EQUITY' => 1,
			'MARGIN' => 1,
			'MARGIN_LEVEL' => 1,
			'MARGIN_FREE' => 1,
			'MODIFY_TIME' => '2013-04-01 09:26:28',
			'API_DATA' => 'Lorem ipsum dolor sit amet'
		),
	);

}
