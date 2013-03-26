<?php
App::uses('AppController', 'Controller');


class CabinetsController extends AppController {
	public $helpers = array('Menu');
	public $components = array();
			
			public function acc_type(){
				$this->layout = 'kabinet';
				//get userid
				$userId = $this->UserAuth->getUserId();
				$this->set('user',$userId);
				//get tradersid
				$this->loadModel('AccType');
				// save data
				if (!empty($userId)) {
				
					if($this->request -> isPut() || $this->request -> isPost()){
						debug($this->request->data);die();
						$this->AccType->create();
						//debug($this->request->data);die();
						if($this->AccType->save($this->request->data)){
							//$this->session->setFlash(_('The bank details have been saved'));
							$this->redirect(array('controller' => 'cabinets' , 'action' => 'client'));
						}
					
					}
				}
			}
			
			public function client(){
				$this->layout = 'kabinet';
				$this->loadModel('Usermgmt.User');
				$this->loadModel('Usermgmt.UserDetail');
				$userId = $this->UserAuth->getUserId();
				$this->set('user',$userId);
				$detail = $this->UserDetail->Find('list',array(
							'conditions' => array( 'UserDetail.user_id' => $userId),
							'fields'			 => array('UserDetail.id'),
							));
							//debug($detail);
				$this->set('detail',$detail);
				if (!empty($userId)) {
						if ($this->request -> isPut() || $this->request -> isPost()) {
							//debug($this->request->data);die();
							$this->User->set($this->data);
							$this->UserDetail->set($this->data);
							$this->User->saveAssociated($this->request->data);
							//$this->Session->setFlash(__('Your detail has been successfully saved'));
							$this->redirect(array('controller' => 'cabinets' , 'action' => 'bank'));
						}else{
						//$this->Session->setFlash(__('broken'));
						}
					
				}
				
			}
			
			public function bank(){
				$this->layout = 'kabinet';
				//get userid
				$userId = $this->UserAuth->getUserId();
				$this->set('user',$userId);
				//get tradersid
				$this->loadModel('Bank');
				// save data
				if (!empty($userId)) {
				
					if($this->request -> isPut() || $this->request -> isPost()){
						//debug($this->request->data);die();
						$this->Bank->create();
						//debug($this->request->data);die();
						if($this->Bank->save($this->request->data)){
							//$this->session->setFlash(_('The bank details have been saved'));
							$this->redirect(array('controller' => 'cabinets' , 'action' => 'ecurrency'));
						}
					
					}
				}
			}
				
			
			public function ecurrency(){
				$this->layout = 'kabinet';
				//get userid
				$userId = $this->UserAuth->getUserId();
				$this->set('user',$userId);
				//get tradersid
				$this->loadModel('Ecr');
				// save data
				if (!empty($userId)) {
				
					if($this->request -> isPut() || $this->request -> isPost()){
						//debug($this->request->data);die();
						$this->Ecr->create();
						//debug($this->request->data);die();
						if($this->Ecr->save($this->request->data)){
							//$this->session->setFlash(_('The bank details have been saved'));
							$this->redirect(array('controller' => 'cabinets' , 'action' => 'document'));
						}
					
					}
				}
			}
			
			public function document(){
				$this->layout = 'kabinet';
			}
						
			public function acknowledge(){
				$this->layout = 'kabinet';
			}
	
			public function myprofile(){
				$this->layout = 'kabinet';
				$userId = $this->UserAuth->getUserId();
				$this->loadModel('Usermgmt.User');
				$this->loadModel('Usermgmt.UserDetail');
				$user = $this->UserDetail->Find('first',array(
							'conditions' =>array( 'UserDetail.user_id' => $userId),
							'field'			=> 'UserDetail.photo',
							'recursive' 	=> -1,));
				//debug($user);die();
				$this->set('user',$user);
				if (!empty($userId)) {
						if ($this->request -> isPut() || $this->request -> isPost()) {
						$this->User->set($this->data);
						$this->UserDetail->set($this->data);
						$UserRegisterValidate = $this->User->RegisterValidate();
						$UserDetailRegisterValidate = $this->UserDetail->RegisterValidate();
						if($this->RequestHandler->isAjax()) {
							$this->layout = 'ajax';
							$this->autoRender = false;
							if ($UserRegisterValidate && $UserDetailRegisterValidate) {
								$response = array('error' => 0, 'message' => 'Succes');
								return json_encode($response);
							} else {
								$response = array('error' => 1,'message' => 'failure');
								$response['data']['User']   = $this->User->validationErrors;
								$response['data']['UserDetail'] = $this->UserDetail->validationErrors;
								return json_encode($response);
							}
						} else {
							if ($UserRegisterValidate && $UserDetailRegisterValidate) {
								if(is_uploaded_file($this->request->data['UserDetail']['photo']['tmp_name']) && !empty($this->request->data['UserDetail']['photo']['tmp_name'])) {
									$path_info = pathinfo($this->request->data['UserDetail']['photo']['name']);
									chmod ($this->request->data['UserDetail']['photo']['tmp_name'], 0644);
									$photo=time().mt_rand().".".$path_info['extension'];
									$fullpath= WWW_ROOT."img".DS.IMG_DIR;
									$res1 = is_dir($fullpath);
									if($res1 != 1)
										$res2= mkdir($fullpath, 0777, true);
									move_uploaded_file($this->request->data['UserDetail']['photo']['tmp_name'],$fullpath.DS.$photo);
									$this->request->data['UserDetail']['photo']=$photo;
								} else {
									unset($this->request->data['UserDetail']['photo']);
								}
								if(!ALLOW_CHANGE_USERNAME) {
									unset($this->request->data['User']['username']);
								}
								unset($this->request->data['User']['user_group_id']);
								$user =$this->User->getUserById($userId);
								if($user['User']['email'] != $this->request->data['User']['email']) {
									$this->request->data['User']['email_verified']=0;
									$user['User']['email']= $this->request->data['User']['email'];
									$this->User->sendVerificationMail($user);
									$this->LoginToken->deleteAll(array('LoginToken.user_id'=>$userId), false);
								}
								if(empty($user['User']['ip_address'])) {
									if(isset($_SERVER['REMOTE_ADDR'])) {
										$this->request->data['User']['ip_address']=$_SERVER['REMOTE_ADDR'];
									}
								}
								$this->User->saveAssociated($this->request->data);
								$this->Session->setFlash(__('Your profile has been successfully updated'));
								$this->redirect(array('controller' => 'cabinets' , 'action' => 'myprofile'));
							}
						}
					} else {
						$this->User->unbindModel(array('hasMany' => array('LoginToken')));
						$user = $this->User->read(null, $userId);
						$this->request->data=null;
						if (!empty($user)) {
							$user['User']['password']='';
							$this->request->data = $user;
						}
					}
				} else {
					$this->redirect(array('controller' => 'cabinets' , 'action' => 'myprofile'));
				}
				
			}
			
			
			
			public function depositfund(){
				$this->layout = 'kabinet';
			}	
			
			public function login(){
				$this->layout = 'logmasuk';
			}	
			
			 
			public function withdrawfund(){
				$this->layout = 'kabinet';
			}
			
			public function myaccount(){
				$this->layout = 'kabinet';
				// load model user
				$this->loadModel('Usermgmt.User');
				//get user id
					$userId = $this->UserAuth->getUserId();
					//find email verified utk user
					$user = $this->User->find(
						'first',
						array(
							'conditions' =>array( 'User.id' => $userId),
							'fields' 		=> 'User.email_verified',
							'recursive' 	=> -1
						)
					);
					//keluarkan kat view
					$this -> set('user',$user);
					//debug($user);die();
			
			}	
			
			public function platformdownload(){
				$this->layout = 'kabinet';
			}	
				
			public function register(){
				$this->layout = 'register_kabinet';
				
				$this->loadModel('Usermgmt.User');
				$this->loadModel('Usermgmt.UserDetail');
				$userId = $this->UserAuth->getUserId();
				if ($userId) {
					$this->redirect(array('controller' => 'cabinets' , 'action' => 'myaccount'));
				}
				if (SITE_REGISTRATION) {
				
					if (isset($this->request->data['reset'])) {
					$this->redirect(array('controller' => 'cabinets' , 'action' => 'register'));
					}
					
						if (isset($this->request->data['signup'])) 	{	
								if ($this->request -> isPost()) {
									$this->User->set($this->data);
									$UserRegisterValidate = $this->User->RegisterValidate();
											if($this->RequestHandler->isAjax()) {
												$this->layout = 'ajax';
												$this->autoRender = false;
														if ($UserRegisterValidate) {
															$response = array('error' => 0, 'message' => 'Succes');
															return json_encode($response);
														} else {
															$response = array('error' => 1,'message' => 'failure');
															$response['data']['User']   = $this->User->validationErrors;
															return json_encode($response);
														}
											} else {
														if ($UserRegisterValidate) {
															
																	if (!EMAIL_VERIFICATION) {
																		$this->request->data['User']['email_verified']=1;
																	}
															$this->request->data['User']['active']=1;
																	if(isset($_SERVER['REMOTE_ADDR'])) {
																		$this->request->data['User']['ip_address']=$_SERVER['REMOTE_ADDR'];
																	}
															$salt = $this->UserAuth->makeSalt();
															$this->request->data['User']['salt']=$salt;
															$this->request->data['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
															$this->User->save($this->request->data,false);
															$userId=$this->User->getLastInsertID();
															$this->request->data['UserDetail']['user_id']=$userId;
															$this->UserDetail->save($this->request->data,false);
															$user = $this->User->findById($userId);
																	if (SEND_REGISTRATION_MAIL && !EMAIL_VERIFICATION) {
																		$this->User->sendRegistrationMail($user);
																	}
																	if (EMAIL_VERIFICATION) {
																		$this->User->sendVerificationMail($user);
																	}
																if (isset($this->request->data['User']['active']) && $this->request->data['User']['active'] && !EMAIL_VERIFICATION) {
																	$this->UserAuth->login($user);
																	$this->redirect(array('controller' => 'cabinets' , 'action' => 'myaccount'));
																} else {
																	$this->Session->setFlash(__('Please check your mail and confirm your registration'));
																	$this->redirect(array('controller' => 'cabinets' , 'action' => 'login'));
																}
														}
											}
								
								} else {
									$this->Session->setFlash(__('Sorry new registration is currently disabled, please try again later'));
									$this->redirect(array('controller' => 'cabinets' , 'action' => 'register'));
								}
						}
				}
			}
			
}
	
	
		
		
	
		
	