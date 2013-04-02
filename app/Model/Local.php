<?php
App::uses('AppModel', 'Model');
/**
 * PaymentMethod Model
 *
 * @property Order $Order
 */
class Bank extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'user_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'user_bank_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'user_trader_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'user_doc_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_acctype_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'local_status_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
 
 public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);
	
	 public $belongsTo = array(
		'UserBank' => array(
			'className' => 'UserBank',
			'foreignKey' => 'user_bank_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);
	
	 public $belongsTo = array(
		'UserTrader' => array(
			'className' => 'UserTrader',
			'foreignKey' => 'user_trader_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);
	
	 public $belongsTo = array(
		'UserDoc' => array(
			'className' => 'UserDoc',
			'foreignKey' => 'user_doc_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);
	
	 public $belongsTo = array(
		'UserAcctype' => array(
			'className' => 'UserAcctype',
			'foreignKey' => 'user_acctype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);
	
	 public $belongsTo = array(
		'LocalStatus' => array(
			'className' => 'LocalStatus',
			'foreignKey' => 'local_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);
	
	

}
