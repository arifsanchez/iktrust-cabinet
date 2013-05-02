<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
App::uses('HttpSocket', 'Network/Http');


class TradersController extends AppController {
	public $helpers = array('Menu');
	public $components = array('RequestHandler');	
	
		function bankwired_deposit(){
			//layout
			$this->layout = 'admin';	
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
			//debug($email);
			$mt4user = $this->paginate('Mt4User',
						array("Mt4User.EMAIL" => $email));
			$this->set('mt4user',$mt4user);
			
		}
		
		function bankwired_withdrawal(){
			//layout
			$this->layout = 'admin';	
			//load model
			$this->loadModel('Withdrawal');
			$this->loadModel('User');
			$this->loadmodel('Mt4User');
			//find user id
			$userId = $this->UserAuth->getUserId();
			$this->set('user_id', $userId);
			//find data frrom user
			$email = $this->Withdrawal->User->find('list' ,
						array( 'conditions' => array('User.id' => $userId),
								 'fields' => array('User.email' ),
								 ));
			//debug($email);
			$mt4user = $this->paginate('Mt4User',
						array("Mt4User.EMAIL" => $email));
			$this->set('mt4user',$mt4user);
			
		}
		
		function depositlogin($login=null){
			//layout
			$this->layout = 'admin';	
			$LOGIN = base64_decode($login);
			//load model
			$this->loadModel('Deposit');
			$this->loadModel('User');
			$this->loadmodel('Mt4User');
			//find user id
			$userId = $this->UserAuth->getUserId();
			$this->set('user_id', $userId);
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
								  'fields' => array('fullname'),
								  'order' => array('Ikbank.name ASC','Ikbank.bankname ASC')
								));
			//debug($ikbanks);die();
			if(!empty ($mt4user) ){
				$ecurrs= $this->Deposit->Ecurr->find('list', array(
						'conditions' => array('Ecurr.id' =>array(1)),
						'fields' => array('Ecurr.name'),
					));
			}else{
				$ecurrs= $this->Deposit->Ecurr->find('list', array(
						'conditions' => array('Ecurr.id' =>array(2)),
						'fields' => array('Ecurr.name')
					));
			}	
			$this->set(compact('ikbanks' , 'ecurrs'));
			if ($this->request->is('post')) {
				$this->request->data['Deposit']['local_status_id'] = 1;
				$this->Deposit->create();
				if ($this->Deposit->save($this->request->data)) {
					$this->Session->setFlash(__('Your deposit has been saved'));
					$this->redirect(array('action' => 'view_deposit',$this->Deposit->id));
				} else {
					$this->Session->setFlash(__('The deposit could not be saved. Please, try again.'));
				}
			}
		}
		
		function withdrawallogin($login=null){
			//layout
			$this->layout = 'admin';	
			$LOGIN = base64_decode($login);
			//load model
			$this->loadModel('Withdrawal');
			$this->loadModel('User');
			$this->loadmodel('Mt4User');
			//find user id
			$userId = $this->UserAuth->getUserId();
			$this->set('user_id', $userId);
			$mt4user  = $this->Withdrawal->Mt4User->find('first' ,
							array( 'conditions' => array('Mt4User.LOGIN' => $LOGIN),
								));
			$this->set('mt4user' , $mt4user);
			$mt4user  = $this->Withdrawal->Mt4User->find('list' ,
							array( 'conditions' => array('Mt4User.LOGIN' => $LOGIN),
								 'fields' => array('Mt4User.AGENT_ACCOUNT'),
								));
			$userbank =$this->Withdrawal->UserBank->find('first' ,
							array( 'conditions' => array('UserBank.user_id' => $userId),
								));
			$this->set('userbank' , $userbank);
		
			if ($this->request->is('post')) {
				//debug($this->request->data);die();
				$this->request->data['Withdrawal']['local_status_id'] = 1;
				$this->Withdrawal->create();
				if ($this->Withdrawal->save($this->request->data)) {
					$this->Session->setFlash(__('Your Withdrawal has been saved'));
					$this->redirect(array('action' => 'view_withdrawal',$this->Withdrawal->id));
				} else {
					$this->Session->setFlash(__('The Withdrawal could not be saved. Please, try again.'));
				}
			}
		}

		function view_deposit($id =null){
			//layout
			$this->layout = 'admin';	
			//load model
			$this->loadModel('Deposit');
			$this->loadModel('User');
			$this->loadmodel('Mt4User');
			$this->Deposit->id = $id;
			$deposit = $this ->Deposit->find('first' , array(
									'conditions' => array( 'Deposit.id' => $id)
									));
			$this->set('deposit', $deposit);
			
			if (isset($this->request->data['submit'])) {
				//send email
						/*$Email = new CakeEmail();
						$Email->template('newtrader');
						$Email->viewVars(array('deposit' => $deposit));
						$Email->emailFormat('both');
						$Email->from(array('admin@trustxe.com' => 'IKTust'));
						$Email->to('webteam@iktrust.com');
						$Email->subject('New Trader IKTrust');
						$Email->send();*/
				$this->redirect(array('action' => 'transaction_deposit'));
			}
			if(isset($this->request->data['print'])){
				$this->redirect(array('action' => 'view_pdf' ,$id));
			}
		}
		
		function view_withdrawal($id =null){
			//layout
			$this->layout = 'admin';	
			//load model
			$this->loadModel('Withdrawal');
			$this->loadModel('User');
			$this->loadmodel('Mt4User');
			$this->Withdrawal->id = $id;
			$withdrawal = $this ->Withdrawal->find('first' , array(
									'conditions' => array( 'Withdrawal.id' => $id)
									));
			//debug($withdrawal);die();
			$this->set('withdrawal', $withdrawal);
			
			if (isset($this->request->data['submit'])) {
				//send email
						/*$Email = new CakeEmail();
						$Email->template('newtrader');
						$Email->viewVars(array('withdrawal' => $withdrawal));
						$Email->emailFormat('both');
						$Email->from(array('admin@trustxe.com' => 'IKTust'));
						$Email->to('webteam@iktrust.com');
						$Email->subject('New Trader IKTrust');
						$Email->send();*/
				$this->redirect(array('action' => 'transaction_withdrawal'));
			}
			if(isset($this->request->data['print'])){
				$this->redirect(array('action' => 'view_pdf' ,$id));
			}
		}
		
		function transaction_deposit(){
			//layout
			$this->layout = 'admin';	
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
			//debug($email);
			$deposit = $this->paginate('Deposit',
						array('Deposit.email' => $email));
			$this->set('deposit', $deposit);			 
		
		}
		
		function view_pdf($id) {
			//load model
			$this->loadModel('admin');
			$this->loadModel('User');
			$this->loadModel('Mt4User');
			$this->Deposit->id = $id;
			$deposit = $this ->Deposit->find('first' , array(
									'conditions' => array( 'Deposit.id' => $id)
									));
			 
			$this->set('deposit', $deposit);
			$this->layout = 'pdf'; //this will use the pdf.ctp layout
			$this->render();
		}
		
		
	
}	
		
?>