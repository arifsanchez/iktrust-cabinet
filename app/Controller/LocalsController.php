<?php
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');
//s
class LocalsController extends AppController {

	public function adminview($now = null){
		$this->layout = 'admin';
		$id = base64_decode($now);
		$this->loadModel('UserDoc');
		$this->Local->id = $id;
		$this->set('local', $this->Local->read(null, $id));
		$a = $this->Local->Find('first',array(
											'conditions' =>array( 'Local.id' => $id),
											));
		$try = $this->Local->Find('list',array(
												'conditions' =>array( 'Local.id' => $id),
												'fields' => 'Local.user_id' ,
												));
		
		$b = $this->UserDoc->find('first' , array(
												'conditions' => array( 'user_id' => $try),
												));
		$this->set('b',$b);
		$this->set('a',$a);
		$localStatuses = $this->Local->LocalStatus->find('list');
		$this->set(compact( 'localStatuses'));
		//save data ,,,,
		if($this->request -> isPost()){
			$this->Local->id = $id;
			$status = $this->request->data['Local']['local_status_id'];
			if($status ==2 ) {
			
				$ibagent 			= $this->request->data['Local']['agent'];
				$country 			= $this->request->data['Local']['country'];
				$state				= $this->request->data['Local']['state'];
				$city		 			= $this->request->data['Local']['city'];
				$address 			= $this->request->data['Local']['address'];
				$comment 		= $this->request->data['Local']['comment'];
				$acctype 			= $this->request->data['Local']['acctype'];
				$test		 			= $this->request->data['Local']['leverage'];
				$name 				= $this->request->data['Local']['name'];
				$email 				= $this->request->data['Local']['email'];
				$key 				= $this->request->data['Local']['key'];
				$investor 			= $this->request->data['Local']['investor'];
				$agent 				= $this->request->data['Local']['agent'];
				$phone				= $this->request->data['Local']['phone'];
				
				//parameter
				$fields = array(
				
					'action' 				=> 'register',
					'agent' 				=> $ibagent,
					'country' 			=> $country,
					'state' 				=> $state,
					'city' 					=> $city,
					'address' 			=> $address,
					'leverage'			=> $test,
					'phone'				=> $phone,
					'comment' 		=> $comment,
					'acctype' 			=> $acctype,
					'name' 				=> $name,
					'email' 				=> $email,
					'mpass' 			=> $key,
					'ipass' 				=> $investor,
					
				);
				
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_TIMEOUT, 5);
				curl_setopt($ch, CURLOPT_URL,"http://www.iktrust.co.uk/webservice/api.php");
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS,$fields);
				$output = curl_exec($ch);
				$info = curl_getinfo($ch);
				curl_close($ch);
			}
				if($this->Local->save($this->request->data)){
					$this->redirect(array('controller' => 'locals' , 'action' => 'tradersindex'));
				}
		}
	}
	
	public function tradersindex($id = null){
		$this->layout = 'admin';
		if(!empty($this->request->params['named'])){
			$data = $this->params['named'];
			$locals = $this->paginate('Local',
						array("Local.local_status_id" => $data['s'],
						));
			$this->set('locals',$locals);
		} else {
			$locals = $this->paginate('Local');
			$this->set('locals',$locals);
		}
	}
	
	
	public function delete($now = null) {
		$id = base64_decode($now);
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Local->id = $id;
		
		if (!$this->Local->exists()) {
			throw new NotFoundException(__('Invalid trader'));
		}
		
		if ($this->Local->delete()) {
			$this->Session->setFlash(__('Trader deleted'));
			$this->redirect(array('action' => 'tradersindex'));
		}
		
		$this->Session->setFlash(__('Trader was not deleted'));
		$this->redirect(array('action' => 'tradersindex'));
	}
	
	public function affilliateindex($now = null) {
		$this->layout = 'admin';
		$id = base64_decode($now);
		
		$this->loadModel('Affilliate');
		$locals = $this->Affilliate->find('all');
		$this->set('locals',$locals);
		
		if(!empty($this->request->params['named'])){
			$data = $this->params['named'];
			$locals = $this->paginate('Affilliate',
				array("Affilliate.local_status_id" => $data['s'],
			));
			$this->set('locals',$locals);
		} else {
			$locals = $this->paginate('Affilliate');
			$this->set('locals',$locals);
		}
	} 
	
	
	public function affilliateview($now = null) {
		$this->layout = 'admin';
		$id = base64_decode($now);
		
		$this->loadModel('Affilliate');
		$locals = $this->Affilliate->find('first', array(
			'conditions' => array('Affilliate.id' => $id)
		));
		//debug($locals); die();
		$this->set('locals',$locals);
		
		if($this->request -> isPost()){
			$this->Affilliate->id = $id;
			$status = $this->request->data['Affilliate']['local_status_id'];
			
			if($this->Affilliate->save($this->request->data)){
				$this->Session->setFlash(_('The details have been saved'));
				$this->redirect(array('controller' => 'locals' , 'action' => 'affilliateindex'));
			}
		
		}
	}
	
	
		public function affilliatedelete($now = null) {
		$id = base64_decode($now);
		$this->loadModel('Affilliate');
		
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Affilliate->id = $id;
		
		if (!$this->Affilliate->exists()) {
			throw new NotFoundException(__('Invalid Affilliate'));
		}
		
		if ($this->Affilliate->delete()) {
			$this->Session->setFlash(__('Affilliate Deleted'));
			$this->redirect(array('action' => 'affilliateindex'));
		}
		
		$this->Session->setFlash(__('Affilliate was not deleted'));
		$this->redirect(array('action' => 'affilliateindex'));
	}
	
	public function edit_deposit($now = null) {
		$id = base64_decode($now);
		//layout
		$this->layout = 'admin';	
		//load model
		$this->loadModel('Deposit');
		$this->loadModel('DepositComment');
		//find user id
		$userId = $this->UserAuth->getUserId();
		$this->set('user_id', $userId);
		//display details
		$this->Deposit->id = $id;
		
		$deposit = $this ->Deposit->find('first' , array(
			'conditions' => array( 'Deposit.id' => $id)
		));
		$this->set('deposit', $deposit);
		//display table....
		
		$login = $deposit['Deposit']['mt4_user_LOGIN'];
		$dc = $this->paginate('DepositComment',
			array("DepositComment.mt4_user_LOGIN" => $login)
		);
		$this->set('dc', $dc);
		//submit form
		
		if($this->request -> isPut() || $this->request -> isPost()){
			$status = $this->request->data['Deposit']['status'];
			//debug($this->request->data);die();
			$data = array('id' => $id , 'local_status_id' => $status );
			$this->Deposit->save($data);
			$this->DepositComment->create();
			if($this->DepositComment->save($this->request->data)){
				//$this->session->setFlash(_('The bank details have been saved'));
				$this->redirect(array('action' => 'transaction_deposit'));
			}
			if($this->request->data['Deposit']['status'] ==2 ) {
				//send data using curl
				$amount 		= $this->request->data['DepositComment']['amount'];
				$comment	= $this->request->data['DepositComment']['comment'];
				$login 			= $this->request->data['DepositComment']['mt4_user_LOGIN'];
				
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_TIMEOUT, 5);
				curl_setopt($ch, CURLOPT_URL,'http://iktrust.co.uk/webservice/api.php');
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POST, true);

				// hantar parameter 
				$data = array(
					'action'   		=> 'deposit',
					'amount'	 	=> $amount,
					'comment' 	=> $comment,
					'login'			=> $login,
					
				);
				
				//debug($key);die();
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				$output = curl_exec($ch);
				$info = curl_getinfo($ch);
				curl_close($ch);
				
				// send sms
				$HttpSocket = new HttpSocket();
				$results = $HttpSocket->post('http://bulk.ezlynx.net:7001/BULK/BULKMT.aspx', array(
					'user' => 'instafx', 
					'pass' => 'instafx8000',
					'msisdn' => '0136454001',
					'body' => 'iktrust test ',
					'smstype' => 'TEXT',
					'sender' => 'IKTRUST',
					#'Telco' => 'CELCOM'
					));	   
			}
		}
	}
	
	function transaction_deposit(){
			//layout
			$this->layout = 'admin';	
			//load model
			$this->loadModel('Deposit');
			$this->loadModel('User');
			$this->loadmodel('Mt4User');
			$this->loadModel('DepositComment');
			
		if(!empty($this->request->params['named'])){
			$data = $this->params['named'];
			$locals = $this->paginate('Deposit',
						array("Deposit.local_status_id" => $data['s'],
						));
			$this->set('deposit', $deposit);
		} else {
			$deposit = $this->paginate('Deposit');
			$this->set('deposit', $deposit);
		}
			
						 
		//
	}
	
	public function edit_withdrawal($now = null) {
		$id = base64_decode($now);
		//layout
		$this->layout = 'admin';	
		//load model
		$this->loadModel('Withdrawal');
		$this->loadModel('WdComment');
		//find user id
		$userId = $this->UserAuth->getUserId();
		$this->set('user_id', $userId);
		//display details
		$this->Withdrawal->id = $id;
		
		$withdrawal = $this ->Withdrawal->find('first' , array(
			'conditions' => array( 'Withdrawal.id' => $id)
		));
		$this->set('withdrawal', $withdrawal);
		//debug($withdrawal);die();
		//display table
		
		$login = $withdrawal['Withdrawal']['mt4_user_LOGIN'];
		//debug($login);die();
		$dc = $this->paginate('WdComment',
			array('WdComment.mt4_user_LOGIN' => $login)
		);
		
		$this->set('dc', $dc);
		//submit form test cc
		
		if($this->request -> isPost()){
			//debug($this->request->data);die();
			$this->WdComment->create();
			$status = $this->request->data['Withdrawal']['status'];
			$data = array('id' => $id , 'local_status_id' => $status );
			$this->Withdrawal->save($data);
			if($this->WdComment->save($this->request->data)){
				//$this->session->setFlash(_('The bank details have been saved'));
				$this->redirect(array('action' => 'transaction_withdrawal'));
			}
			
			if($this->request->data['Withdrawal']['status'] ==2 ) {
				//send data using curl
				$amount 		= $this->request->data['WithdrawalComment']['amount'];
				$comment		= $this->request->data['WithdrawalComment']['comment'];
				$login 			= $this->request->data['WithdrawalComment']['mt4_user_LOGIN'];
				
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_TIMEOUT, 5);
				curl_setopt($ch, CURLOPT_URL,'http://iktrust.co.uk/webservice/api.php');
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_POST, true);

				// hantar parameter 
				$data = array(
					'action' 			=> 'withdrawal',
					'amount'	 	=> $amount,
					'comment' 	=> $comment,
					'login'			=> $login,
					
				);
				
				//debug($key);die();
				curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
				$output = curl_exec($ch);
				$info = curl_getinfo($ch);
				curl_close($ch);
				
				
				// send sms
				$HttpSocket = new HttpSocket();
				$results = $HttpSocket->post('http://bulk.ezlynx.net:7001/BULK/BULKMT.aspx', array(
					'user' => 'instafx', 
					'pass' => 'instafx8000',
					'msisdn' => '0136454001',
					'body' => 'iktrust test ',
					'smstype' => 'TEXT',
					'sender' => 'IKTRUST',
					#'Telco' => 'CELCOM'
					));	   
			}
		}
	}
	
	function transaction_withdrawal(){
			//layout
			$this->layout = 'admin';	
			//load model
			$this->loadModel('Withdrawal');
			$this->loadModel('User');
			$this->loadmodel('Mt4User');
			//$this->loadModel('DepositComment');
			if(!empty($this->request->params['named'])){
			$data = $this->params['named'];
			$locals = $this->paginate('Withdrawal',
						array("Withdrawal.local_status_id" => $data['s'],
						));
			$this->set('withdrawal', $withdrawal);
		} else {
			$withdrawal = $this->paginate('Withdrawal');
			$this->set('withdrawal', $withdrawal);	
		}
					 
		//
	}

}

?>
