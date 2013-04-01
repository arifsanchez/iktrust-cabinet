<?php
App::uses('AppController', 'Controller');
/**
 * Mt4Users Controller
 *
 * @property Mt4User $Mt4User
 */
class Mt4UsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Mt4User->recursive = 0;
		$this->set('mt4Users', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Mt4User->exists($id)) {
			throw new NotFoundException(__('Invalid mt4 user'));
		}
		$options = array('conditions' => array('Mt4User.' . $this->Mt4User->primaryKey => $id));
		$this->set('mt4User', $this->Mt4User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Mt4User->create();
			if ($this->Mt4User->save($this->request->data)) {
				$this->Session->setFlash(__('The mt4 user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mt4 user could not be saved. Please, try again.'));
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
		if (!$this->Mt4User->exists($id)) {
			throw new NotFoundException(__('Invalid mt4 user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Mt4User->save($this->request->data)) {
				$this->Session->setFlash(__('The mt4 user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The mt4 user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Mt4User.' . $this->Mt4User->primaryKey => $id));
			$this->request->data = $this->Mt4User->find('first', $options);
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
		$this->Mt4User->id = $id;
		if (!$this->Mt4User->exists()) {
			throw new NotFoundException(__('Invalid mt4 user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Mt4User->delete()) {
			$this->Session->setFlash(__('Mt4 user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Mt4 user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
