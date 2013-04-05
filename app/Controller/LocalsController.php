<?php
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');

class LocalsController extends AppController {



	public function adminview($id = null){
		$this->layout = 'kabinet';
		$this->Local->id = $id;
		$this->set('local', $this->Local->read(null, $id));
		$a = $this->Local->Find('all');
		$this->set('a',$a);
		//debug($a);die();
		$localStatuses = $this->Local->LocalStatus->find('list');
		//debug($localStatuses);die();
		$this->set(compact( 'localStatuses'));
		//save data
		if($this->request -> isPut() || $this->request -> isPost()){
						//debug($this->request->data);die();
						$this->Local->create();
			if($this->request->data['Local']['local_status_id'] ==2 ) {
			
						$ibagent = $this->request->data['Local']['ibagent'];
						$country = $this->request->data['Local']['country'];
						$state	 = $this->request->data['Local']['state'];
						$city		 = $this->request->data['Local']['city'];
						$address = $this->request->data['Local']['address'];
						$send_reports = $this->request->data['Local']['send_reports'];
						$readonly = $this->request->data['Local']['readonly'];
						$comment = $this->request->data['Local']['comment'];
						$acctype = $this->request->data['Local']['acctype'];
						$name = $this->request->data['Local']['name'];
						$email = $this->request->data['Local']['email'];
						$key = $this->request->data['Local']['key'];
						$investor = $this->request->data['Local']['investor'];
						$agent = $this->request->data['Local']['agent'];
						
						$ch = curl_init();
						curl_setopt($ch, CURLOPT_TIMEOUT, 5);
						curl_setopt($ch, CURLOPT_URL,"http://quaintxpress.com/mt4test/integration.php");
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_POST, true);

						// hantar parameter 
						$data = array(
							'ibagent' => $ibagent,
							'country' => $country,
							'state' => $state,
							'city' => $city,
							'address' => $address,
							'send_reports ' => $send_reports ,
							'readonly' => $readonly,
							'comment' => $comment,
							'acctype' => $acctype,
							'name' => $name,
							'email' => $email,
							'password' => $key,
							'investor' => $investor,
							'agent' => $agent,
						);

						curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
						$output = curl_exec($ch);
						$info = curl_getinfo($ch);
						debug($output);
						debug($info);die();
					
			}
						//if($this->Local->save($this->request->data)){
							
						//	$this->redirect(array('controller' => 'locals' , 'action' => 'tradersindex'));
		}
	}
		
	
	
	public function tradersindex(){
		$this->layout = 'kabinet';
		$this->Local->recursive = 0;
		$this->set('locals', $this->paginate('Local', array(), array()));
	}
	
	public function test(){
	
	debug($this->request->data);die();
	/*$ch = curl_init();
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_URL, "http://iktrust.co.uk/webservice/api.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, true);

		// hantar parameter symbols dgn value EURUSD
		$data = array(
			'action' => 'getSpecifications',
			'symbols' => 'EURUSD'
		);

		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$output = curl_exec($ch);
		$info = curl_getinfo($ch);
		debug($output);die();*/
	

	}
	
	public function delete($id = null) {
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

}

?>
