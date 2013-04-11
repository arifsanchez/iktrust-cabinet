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
	}
	
	function showAsFloat($VOLUME){
		return !Number($VOLUME) ? VOLUME : Number($VOLUME)%1 === 0 ? Number($VOLUME).toFixed(2) : VOLUME;
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($TICKET = null) {
		/*if (!$this->Mt4Trade->exists($TICKET)) {
			throw new NotFoundException(__('Invalid mt4 trade'));
		}*/
		$this->layout = 'kabinet';
		
		$options = array('conditions' => array('Mt4Trade.' . $this->Mt4Trade->primaryKey => $TICKET));
		$this->set('mt4Trade', $this->Mt4Trade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
	
		$this->layout = 'kabinet';
		
		if ($this->request->is('post')) {
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
		
		/*$options = array('conditions' => array('Mt4Trade.TICKET' => $TICKET));
		$this->set('mt4Trade', $this->Mt4Trade->find('first', $options));
		#debug($options); die();
		/*$TICKET = $this->Mt4Trade->Find('all',array(
			'conditions' => array( 'Mt4Trade.TICKET' => $TICKET),
		));
		
		$this->set('TICKET', $TICKET);*/
		#debug($TICKET); die();
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mt4Trade->save($this->request->data)) {
				$this->Session->setFlash(__('The mt4 trade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mt4 trade could not be saved. Please, try again.'));
			}
		} else {
		$options = array('conditions' => array('Mt4Trade.TICKET' => $TICKET));
		
	//	$this->set('Mt4Trade', $this->Mt4Trade->find('first', $options));
		//debug($a);die();
		#debug($options); die();
		
		$this->request->data = $this->Mt4Trade->find('first', $options);
		
	//	debug($this->Mt4Trade->find('first', $options));die();
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
