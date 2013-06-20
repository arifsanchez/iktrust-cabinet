<?php
App::uses('AppController', 'Controller');
/**
 * Mt4Users Controller
 *
 * @property Mt4User $Mt4User
 */
class Mt4UsersController extends AppController {

	public $paginate = array(
        'limit' => 15,
        'order' => array(
            'Mt4User.LOGIN' => 'desc'
        )
    );

/**
 * index method
 *
 * @return void
 */	
	public function trader() {
		$this->layout = 'admin';
		$this->Mt4User->recursive = -1;
		$this->set('mt4Users', $this->paginate('Mt4User', array('Mt4User.GROUP LIKE' => 'IK%')));

	}

	public function partner() {
		$this->layout = 'admin';
		$this->Mt4User->recursive = -1;
		$this->set('mt4Users', $this->paginate('Mt4User', array('Mt4User.COMMENT LIKE' => 'ML%')));

	}

	public function partner_client($acc = null) {
		$this->layout = 'admin';
		$this->Mt4User->recursive = -1;
		$this->set('mt4Users', $this->paginate('Mt4User', array('Mt4User.AGENT_ACCOUNT LIKE' => ''.$acc.'%')));

	}
	
	public function top_traders(){
		$this->layout = 'register_kabinet';		
	
		$data = $this->Mt4User->find('all', 
			array('conditions' => array(
				'Mt4User.BALANCE >' => '100', 
				'Mt4User.GROUP LIKE' => '%IK-i%',
				'Mt4User.COUNTRY !=' => array('Iran', 'India'),
			),
				'limit' => 1,
				'order' => array('Mt4User.BALANCE DESC')
		));
		debug($data);
		
        $this->loadModel('Countries');
		$flag = $this->Countries->find('all', 
			array('conditions' => array(
				'Countries.name' => $data[0]['Mt4User']['COUNTRY'],
			),
			'limit' => 1,
		)); 
		debug($flag);
		
       $this->set(compact('data', 'flag'));
	}	
	
	/*public function index() {
		$this->layout = 'admin';
		$this->Mt4User->recursive = -1;
		$this->set('mt4Users', $this->paginate());

		if($this->request->data){
			$VALUE = $this->request->data['Mt4User']['LOGIN'];
			
			if(!$this->Account->exists($VALUE)){
			} else {
				$this->redirect(array('action' => 'view',$VALUE));
			}
		}
	}*/
	
	public function search(){
		if($this->RequestHandler->isAjax() ) {
			Configure::write ('debug', 0);
			$this->autoRender=false;
			$this->Mt4User->recursive = -1;
			
			$users = $this->Mt4User->find('all',array('conditions'=>array('mt4Users.TICKET LIKE'=>'%'.$_GET['term'].'%')));
			$i=0;
			
			foreach($users as $user){
				$response[$i]['LOGIN']=$user['Mt4User']['LOGIN'];
				$i++;
			}
			echo json_encode($response);
	   }
	   
	   else{
			if (!empty($this->Mt4Trade->data)){
			}
			else{
				$this->redirect(array('action' => 'view', $this->data['Mt4User']['LOGIN']));
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
	public function view($id = null) {
		$this->layout = 'admin';
		
		if (!$this->Mt4User->exists($id)) {
			throw new NotFoundException(__('Invalid mt4 user'));
		}
		$options = array('conditions' => array('Mt4User.' . $this->Mt4User->primaryKey => $id));
		$this->set('mt4User', $this->Mt4User->find('first', $options));
		
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
		$this->layout = 'admin';
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
