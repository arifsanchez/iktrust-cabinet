<?php
App::uses('AppController', 'Controller');
/**
 * Mt4Trades Controller
 *
 * @property Mt4Trade $Mt4Trade
 */
class Mt4TradesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
	
		$this->layout = 'kabinet';
		
		$this->Mt4Trade->recursive = 0;
		$this->set('mt4Trades', $this->paginate());
		
		if($this->request->data){
			$VALUE = $this->request->data['Mt4Trade']['TICKET'];
			#check dulu kalau ade data , baru redirect
			#debug($TICKET); die();
			
			if(!$this->Account->exists($VALUE)){
			} else {
				$this->redirect(array('action' => 'view',$VALUE));
			}
		}
	}
	
			
	public function search(){
		if($this->RequestHandler->isAjax() ) {
			Configure::write ('debug', 0);
			$this->autoRender=false;
			$this->Mt4Trade->recursive = -1;
			
			$users = $this->Mt4Trade->find('all',array('conditions'=>array('mt4Trades.TICKET LIKE'=>'%'.$_GET['term'].'%')));
			$i=0;
			
			foreach($users as $user){
				$response[$i]['TICKET']=$user['Mt4Trade']['TICKET'];
				$i++;
			}
			echo json_encode($response);
	   }
	   
	   else{
			if (!empty($this->Mt4Trade->data)){
			}
			else{
				$this->redirect(array('action' => 'view', $this->data['Mt4Trade']['TICKET']));
			}
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($TICKET = null) {

		$this->layout = 'kabinet';
		
		$options = array('conditions' => array('Mt4Trade.' . $this->Mt4Trade->primaryKey => $TICKET));
		$this->set('mt4Trade', $this->Mt4Trade->find('first', $options));
		
		if ($this->request->is('post')) {
		$this->redirect(array('action' => 'index'));
		}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	
		$this->layout = 'kabinet';
		
		if ($this->request->is('post') ) {
			$this->Mt4Trade->create();
			if ($this->Mt4Trade->save($this->request->data)) {
				$this->Session->setFlash(__('The mt4 trade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mt4 trade could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($TICKET = null) {
	
	
		$this->layout = 'kabinet';
				
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mt4Trade->save($this->request->data)) {
				$this->Session->setFlash(__('The mt4 trade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mt4 trade could not be saved. Please, try again.'));
			}
		} else {
		$options = array('conditions' => array('Mt4Trade.TICKET' => $TICKET));
		
		$this->request->data = $this->Mt4Trade->find('first', $options);
		}
	}


/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($TICKET = null) {
	
		$this->layout = 'kabinet';
		
		$this->Mt4Trade->id = $TICKET;
		if (!$this->Mt4Trade->exists()) {
			throw new NotFoundException(__('Invalid mt4 trade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mt4Trade->delete()) {
			$this->Session->setFlash(__('Mt4 trade deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mt4 trade was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
}
