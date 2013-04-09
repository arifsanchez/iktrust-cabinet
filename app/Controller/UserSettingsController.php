<?php
App::uses('UserMgmtAppController', 'Usermgmt.Controller');
class UserSettingsController extends UserMgmtAppController {
	
	public $uses = array('Usermgmt.UserSetting');
	
	public $components = array('RequestHandler', 'Usermgmt.Search');
	
	public $helpers = array('Js');
	
	public $paginate = array(
		'limit' => 25
	);
	
	var $searchFields = array
		(
			'index' => array(
				'UserSetting' => array(
					'UserSetting.name_public'=> array(
						'type' => 'text',
						'label' => 'Setting Name',
						'inputOptions'=>array('style'=>'width:300px;')
					)
				)
			)
		);
	
	public function beforeFilter() {
		parent::beforeFilter();
		if(isset($this->Security) &&  $this->RequestHandler->isAjax()){
			$this->Security->csrfCheck = false;
			$this->Security->validatePost = false;
		}
	}
	
	public function index() {
	
		$this->loadModel('Usermgmt.UserSetting');
		$this->paginate = array('limit' => 10, 'order'=>'UserSetting.id');
		$userSettings = $this->paginate('UserSetting');
		$this->set('userSettings', $userSettings);
		if($this->RequestHandler->isAjax()) {
			$this->layout = 'ajax';
			$this->render('Elements/all_settings');
		}
	}
	
	public function editSetting($settingId=null) {
	
		$this->loadModel('Usermgmt.UserSetting');
		$page= (isset($this->request->params['named']['page'])) ? $this->request->params['named']['page'] : 1;
		if (!empty($settingId)) {
			if ($this->request -> isPut()) {
				$data = $this->UserSetting->read(null, $settingId);
				if(!empty($data)) {
					$data['UserSetting']['value'] = $this->request->data['UserSetting']['value'];
					$this->UserSetting->save($data,false);
					$this->Session->setFlash(__('Selected setting is successfully updated'));
				}
				$this->redirect(array('action'=>'index', 'page'=>$page));
			} else {
				$this->request->data = $this->UserSetting->read(null, $settingId);
				if(empty($this->request->data)) {
					$this->redirect(array('action'=>'index', 'page'=>$page));
				}
			}
		} else {
			$this->redirect(array('action'=>'index', 'page'=>$page));
		}
	}
}