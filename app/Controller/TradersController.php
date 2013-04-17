<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'dompdf', array('file'=> 'dompdf' . DS . 'dompdf_config.inc.php'));
App::uses('CakeEmail', 'Network/Email');
App::uses('HttpSocket', 'Network/Http');


class TradersController extends AppController {
	public $helpers = array('Menu');
	public $components = array('RequestHandler');	
	
		function bankwired(){
			//layout
			$this->layout = 'kabinet';	
			//load model
			$this->loadModel('Deposit');
			$this->loadModel('User');
			$this->loadmodel('Mt4User');
			//find user id
			$userId = $this->UserAuth->getUserId();
			$this->set('user_id', $userId);
			//find data frrom user
			$email = $this->Deposit->User->find('list' ,
						array( 'conditions' => array('User.id' => $userId),
								 'fields' => array('User.email' ),
								 ));
			//login id
			//debug($email);
			
			$mt4user  = $this->Deposit->Mt4User->find('all' ,
						array( 'conditions' => array('Mt4User.EMAIL' => $email),
								 ));
			$this->set('mt4user',$mt4user);
		}
		
		function depositlogin($LOGIN=null){
			//layout
			$this->layout = 'kabinet';	
			//load model
			$this->loadModel('Deposit');
			$this->loadModel('User');
			$this->loadmodel('Mt4User');
			
			$mt4user  = $this->Deposit->Mt4User->find('first' ,
						array( 'conditions' => array('Mt4User.LOGIN' => $LOGIN),
								));
			$this->set('mt4user' , $mt4user);
			$mt4user  = $this->Deposit->Mt4User->find('list' ,
						array( 'conditions' => array('Mt4User.LOGIN' => $LOGIN),
								 'fields' => array('Mt4User.AGENT_ACCOUNT'),
								));
			$ikbanks = $this->Deposit->Ikbank->find('list', 
						array( 'conditions' => array('Ikbank.agentid' => $mt4user ),
								  'fields' => array('Ikbank.name'),
							));
			$ecurrs = $this->Deposit->Ecurr->find('list');
						
			$this->set(compact('ikbanks' , 'ecurrs'));
			
			 if ($this->request->is('post')) {
			$this->request->data['Deposit']['local_status_id'] = 1;
			$this->Deposit->create();
			//debug($this->request->data);die();
			if ($this->Deposit->save($this->request->data)) {
				
				//send email
						$Email = new CakeEmail();
						$Email->template('newtrader');
						$Email->viewVars(array('user' => $user));
						$Email->emailFormat('both');
						$Email->from(array('admin@trustxe.com' => 'IKTust'));
						$Email->to('webteam@iktrust.com');
						$Email->subject('New Trader IKTrust');
						$Email->send();
				
				$this->Session->setFlash(__('The deposit has been saved'));
				$this->redirect(array('action' => 'bankwired')
				);
			} else {
				$this->Session->setFlash(__('The deposit could not be saved. Please, try again.'));
			}
			}
			
			
		}	
	
}	
		
	?>