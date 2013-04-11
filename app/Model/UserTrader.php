<?php
App::uses('AppModel', 'Model');
/**
 * PaymentMethod Model
 *
 * @property Order $Order
 */
class UserTrader extends AppModel {

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
		
		'acc_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		
		'mt4_user_LOGIN' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
		'UserAcctype' => array(
			'className' => 'UserAcctype',
			'foreignKey' => 'user_acctype_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'MT4User' => array(
			'className' => 'MT4User',
			'foreignKey' => 'mt4_user_LOGIN',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	

}
