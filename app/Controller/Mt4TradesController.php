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
		$this->Mt4Trade->recursive = 0;
		$this->set('mt4Trades', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mt4Trade->exists($id)) {
			throw new NotFoundException(__('Invalid mt4 trade'));
		}
		$options = array('conditions' => array('Mt4Trade.' . $this->Mt4Trade->primaryKey => $id));
		$this->set('mt4Trade', $this->Mt4Trade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
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
	public function edit($id = null) {
		if (!$this->Mt4Trade->exists($id)) {
			throw new NotFoundException(__('Invalid mt4 trade'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mt4Trade->save($this->request->data)) {
				$this->Session->setFlash(__('The mt4 trade has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mt4 trade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mt4Trade.' . $this->Mt4Trade->primaryKey => $id));
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
	public function delete($id = null) {
		$this->Mt4Trade->id = $id;
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
