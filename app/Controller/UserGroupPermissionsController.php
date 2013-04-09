<?php


App::uses('UserMgmtAppController', 'Usermgmt.Controller');
class UserGroupPermissionsController extends UserMgmtAppController {
	
	var $uses = array('Usermgmt.UserGroupPermission','Usermgmt.UserGroup');
	
	var $components=array('Usermgmt.ControllerList','RequestHandler');

	public function beforeFilter() {
	$this->loadModel('Usermgmt.UserGroupPermission');
		parent::beforeFilter();
		if(isset($this->Security) &&  ($this->RequestHandler->isAjax() || $this->action == 'update')){
			$this->Security->csrfCheck = false;
			$this->Security->validatePost = false;
		}
	}

	
	public function index() {
	$this->loadModel('Usermgmt.UserGroupPermission');
		$c=-2;
		if (isset($_GET['c']) && $_GET['c'] !='') {
			$c=$_GET['c'];
		}
		$this->set('c',$c);
		$allControllers=$this->ControllerList->getControllers();
		$this->set('allControllers',$allControllers);
		if ($c >-2) {
			$con=array();
			$conAll=$this->ControllerList->get();
			if ($c ==-1) {
				$con=$conAll;
				$user_group_permissions=$this->UserGroupPermission->find('all', array('order'=>array('controller', 'action')));
			} else {
				$user_group_permissions=$this->UserGroupPermission->find('all', array('order'=>array('controller', 'action'), 'conditions'=>array('controller'=>$allControllers[$c])));
				$con[$allControllers[$c]]= (isset($conAll[$allControllers[$c]])) ? $conAll[$allControllers[$c]] : array();
			}
			foreach ($user_group_permissions as $row) {
				$cont=$row['UserGroupPermission']['controller'];
				$act=$row['UserGroupPermission']['action'];
				$ugname=$row['UserGroup']['alias_name'];
				$allowed=$row['UserGroupPermission']['allowed'];
				$con[$cont][$act][$ugname]=$allowed;
			}
			$this->set('controllers',$con);
			$result=$this->UserGroup->getGroupNamesAndIds();
			$groups=array();
			$groups2=array();
			foreach ($result as $row) {
				$groups[]= $row['alias_name'];
			}
			$groups = implode(',', $groups);
			$this->set('user_groups',$result);
			$this->set('groups',$groups);
		}
	}
	/**
	 *  Used to update permissions of site using Ajax by Admin
	 *
	 * @access public
	 * @return integer
	 */
	public function update() {
	$this->loadModel('Usermgmt.UserGroupPermission');
		$this->autoRender = false;
		$controller=$this->params['data']['controller'];
		$action=$this->params['data']['action'];
		$result=$this->UserGroup->getGroupNamesAndIds();
		$success=0;
		foreach ($result as $row) {
			if (isset($this->params['data'][$row['alias_name']])) {
				$res=$this->UserGroupPermission->find('first',array('conditions' => array('controller'=>$controller,'action'=>$action,'user_group_id'=>$row['id'])));
				if (empty($res)) {
					$data=array();
					$data['UserGroupPermission']['user_group_id']=$row['id'];
					$data['UserGroupPermission']['controller']=$controller;
					$data['UserGroupPermission']['action']=$action;
					$data['UserGroupPermission']['allowed']=$this->params['data'][$row['alias_name']];
					$data['UserGroupPermission']['id']=null;
					$rtn=$this->UserGroupPermission->save($data);
					if ($rtn) {
						$success=1;
					}
				} else {
					if ($this->params['data'][$row['alias_name']] !=$res['UserGroupPermission']['allowed']) {
						$data=array();
						$data['UserGroupPermission']['allowed']=$this->params['data'][$row['alias_name']];
						$data['UserGroupPermission']['id']=$res['UserGroupPermission']['id'];
						$rtn=$this->UserGroupPermission->save($data);
						if ($rtn) {
							$success=1;
						}
					} else {
						 $success=1;
					}
				}
			}
		}
		echo $success;
		$this->__deleteCache();
	}
	/**
	 * Used to delete cache of permissions and used when any permission gets changed by Admin
	 *
	 * @access private
	 * @return void
	 */
	private function __deleteCache() {
	$this->loadModel('Usermgmt.UserGroupPermission');
		$iterator = new RecursiveDirectoryIterator(CACHE);
		foreach (new RecursiveIteratorIterator($iterator, RecursiveIteratorIterator::CHILD_FIRST) as $file) {
			$path_info = pathinfo($file);
			if ($path_info['dirname']==TMP."cache" && $path_info['basename']!='.svn') {
				if (!is_dir($file->getPathname())) {
					unlink($file->getPathname());
				}
			}
		}
	}
}