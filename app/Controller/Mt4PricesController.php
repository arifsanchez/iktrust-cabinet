<?php
App::uses('AppController', 'Controller');
/**
 * Mt4Prices Controller
 *
 * @property Mt4Price $Mt4Price
 */
class Mt4PricesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index(){
		$this->layout = 'admin';
		$this->Mt4Price->recursive = 0;
		$this->set('mt4Prices', $this->paginate());
	}
	
	public function quotes(){
		$this->layout = 'register_kabinet';
		$this->Mt4Price->recursive = 0;
		#$this->set('mt4Prices', $this->paginate());		
		
		//search data MYSQL like = '#'
		$time = $this->Mt4Price->find('all', array (
			'conditions' => array ("OR" => array ("Mt4Price.SYMBOL LIKE" => "%#%"))
		));
		$this->set('time', $time);	
		
		$quotes = $this->Mt4Price->find('all', array (
			'conditions' => array ("OR" => array ("Mt4Price.SYMBOL LIKE" => "%#%"))
		));

		$this->set('quotes', $quotes);	
		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mt4Price->exists($id)) {
			throw new NotFoundException(__('Invalid mt4 price'));
		}
		$options = array('conditions' => array('Mt4Price.' . $this->Mt4Price->primaryKey => $id));
		$this->set('mt4Price', $this->Mt4Price->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->layout = 'admin';
		if ($this->request->is('post')) {
			$this->Mt4Price->create();
			if ($this->Mt4Price->save($this->request->data)) {
				$this->Session->setFlash(__('The mt4 price has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mt4 price could not be saved. Please, try again.'));
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
	public function edit($id = null) {
		if (!$this->Mt4Price->exists($id)) {
			throw new NotFoundException(__('Invalid mt4 price'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mt4Price->save($this->request->data)) {
				$this->Session->setFlash(__('The mt4 price has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mt4 price could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mt4Price.' . $this->Mt4Price->primaryKey => $id));
			$this->request->data = $this->Mt4Price->find('first', $options);
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
	public function delete($id = null) {
		$this->Mt4Price->id = $id;
		if (!$this->Mt4Price->exists()) {
			throw new NotFoundException(__('Invalid mt4 price'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mt4Price->delete()) {
			$this->Session->setFlash(__('Mt4 price deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mt4 price was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
