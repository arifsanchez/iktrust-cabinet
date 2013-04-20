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
			//debug($email);
			$mt4user = $this->paginate('Mt4User',
						array("Mt4User.EMAIL" => $email));
			$this->set('mt4user',$mt4user);
			
		}
		
		function depositlogin($login=null){
			//layout
			$this->layout = 'kabinet';	
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
								  'fields' => array('Ikbank.name'),
								));
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

		function view_deposit($id =null){
			//layout
			$this->layout = 'kabinet';	
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
						$Email->viewVars(array('user' => $user));
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
		
		function transaction_deposit(){
			//layout
			$this->layout = 'kabinet';	
			//load model
			$this->loadModel('Deposit');
			$this->loadModel('User');
			$this->loadmodel('Mt4User');
			$deposit = $this->paginate('Deposit');
			$this->set('deposit', $deposit);			 
		
		}
		
		function view_pdf($id) {
			//load model
			$this->loadModel('Deposit');
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