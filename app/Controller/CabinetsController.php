<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'dompdf', array('file'=> 'dompdf' . DS . 'dompdf_config.inc.php'));
App::uses('CakeEmail', 'Network/Email');
App::uses('HttpSocket', 'Network/Http');


class CabinetsController extends AppController {
	public $helpers = array('Menu');
	public $components = array('RequestHandler');	
	
			function bankwired(){
			$this->layout = 'kabinet';	
			
			}
			
			
			function check_balance(){
			$this->layout = 'logmasuk';
			$userId = $this->UserAuth->getUserId();
			$this->loadModel('Mt4User');
				if($this->request -> isPut() || $this->request -> isPost()){
					$login = $this->request->data['Mt4User']['username'];
					$email = $this->request->data['Mt4User']['email'];
					$check = $this->Mt4User->Find('first' ,array(
						'conditions' => array('Mt4User.LOGIN' =>$login, 'Mt4User.EMAIL' =>$email),
					));
					
					if(!empty ($check)){
						$acc_id = base64_encode($login);
						$this->redirect(array('controller' => 'cabinets' , 'action' => 'account_balance' , $acc_id));
					}else{					
						$this->redirect(array('controller' => 'cabinets' , 'action' => 'check_balance' , "error:invalid_request"));
					}
				}
			}
			
			function account_balance($acc_id = null){
				if($acc_id){
					$this->layout = 'logmasuk';
					$this->loadModel('Mt4User');
					
					$login = base64_decode($acc_id);
					$check = $this->Mt4User->Find('first' ,array(
							'conditions' => array('Mt4User.LOGIN' =>$login)
							));
					if(empty($check)){
						$this->redirect(array('controller' => 'cabinets' , 'action' => 'check_balance'));
					} else {
						$this->set('check', $check);
					}
					
					return null;
				} else {
					$this->redirect(array('controller' => 'cabinets' , 'action' => 'check_balance'));
				}
			}
			
			function view_pdf() {
			
				$this->loadModel('Usermgmt.User');
				$userId = $this->UserAuth->getUserId();
				$user = $this->User->Find('all',array(
							'conditions' => array( 'User.id' => $userId),
							));
				$this->set('user',$user);
				//debug($user);die();	
				
				$this->loadModel('UserAcctypes');
				$acctypes = $this->UserAcctypes->Find('all',array(
							'conditions' => array( 'UserAcctypes.user_id' => $userId),
							));
				$this->set('acctypes',$acctypes);
				
				$this->loadModel('UserDetail');
				$userD = $this->UserDetail->Find('all',array(
							'conditions' => array( 'UserDetail.user_id' => $userId),
							));
				$this->set('userD',$userD);
				
				$this->loadModel('UserBank');
				$bank = $this->UserBank->Find('all',array(
							'conditions' => array( 'UserBank.user_id' => $userId),
							));
				$this->set('bank',$bank);
				
				$this->loadModel('UserEcr');
				$ecr = $this->UserEcr->Find('all',array(
							'conditions' => array( 'UserEcr.user_id' => $userId),
							));
				$this->set('ecr',$ecr);
				
				$this->layout = 'pdf'; //this will use the pdf.ctp layout
				$this->render();
				
				}
				
			public function acc_type(){
				$this->layout = 'kabinet';
				//get userid
				$userId = $this->UserAuth->getUserId();
				$this->set('user',$userId);
				//get tradersid
				$this->loadModel('UserAcctypes');
				// save data
				if (!empty($userId)) {
				
					if($this->request -> isPut() || $this->request -> isPost()){
						#debug($this->request->data);die();
						$this->UserAcctypes->create();
						//debug($this->request->data);die();
						if($this->UserAcctypes->save($this->request->data)){
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
				$this->loadModel('UserBank');
				// save data
				if (!empty($userId)) {
				
					if($this->request -> isPut() || $this->request -> isPost()){
						//debug($this->request->data);die();
						$this->UserBank->create();
						//debug($this->request->data);die();
						if($this->UserBank->save($this->request->data)){
							//$this->session->setFlash(_('The bank details have been saved'));
							$this->redirect(array('controller' => 'cabinets' , 'action' => 'ecurrency'));
						}
					
					}
				}
			}
			
			public function document(){
				$this->layout = 'kabinet';
			}				
			
			public function ecurrency(){
				$this->layout = 'kabinet';
				//get userid
				$userId = $this->UserAuth->getUserId();
				$this->set('user',$userId);
				//get tradersid
				$this->loadModel('UserEcr');
				// save data
				if (!empty($userId)) {
				
					if($this->request -> isPut() || $this->request -> isPost()){
						//debug($this->request->data);die();
						$this->UserEcr->create();
						//debug($this->request->data);die();
						if($this->UserEcr->save($this->request->data)){
							//$this->session->setFlash(_('The bank details have been saved'));
							$this->redirect(array('controller' => 'cabinets' , 'action' => 'document'));
						}
					
					}
				}
			}
	
			public function upload(){
				
				$this->layout = 'kabinet';
				if ($this->request->is('post')){
					$file1 = $this->request->data['UserDoc']['doc1'];
					$file2 = $this->request->data['UserDoc']['doc2'];					

					if ($file1['error'] == 0 && $file1['size'] > 0 && $file1['tmp_name'] != 'none'){
						if (is_uploaded_file($file1['tmp_name'])){
							$this->saveToFile($file1);
						}
					}
					
					if ($file2['error'] == 0 && $file2['size'] > 0 && $file2['tmp_name'] != 'none'){
						if (is_uploaded_file($file2['tmp_name'])){
							$this->saveToFile($file2);
						}
					}
				}
			}
			
				private function saveToFile($file){
					
					$info = pathinfo($file['name']); // split filename and extension
					$saveName = md5($info['basename']) . '.' . $info['extension'] ;
					$savePath = WWW_ROOT . 'img/uploads' . DS . $saveName;
					
					$userId = $this->UserAuth->getUserId();
					//get tradersid
				
					$this->loadModel('UserDoc');
					#$upload = $this->Doc->create();
					$upload['UserDoc']['user_id'] = $userId;
					$upload['UserDoc']['doc1'] = $saveName;
					$upload['UserDoc']['doc2'] = $saveName;
					$upload['UserDoc']['data'] = $savePath;
					$this->UserDoc->save($upload);
					#debug($upload);die(); 
					
					if (move_uploaded_file($file['tmp_name'], $savePath)){
						$this->set('fileURL', FULL_BASE_URL . $this->webroot . '/img/uploads' . $saveName);
					}					
				} 
				

			public function acknowledge(){
				$this->layout = 'kabinet';
				$this->loadModel('Usermgmt.User');
				$userId = $this->UserAuth->getUserId();
				
				$user = $this->User->Find('first',array(
							'conditions' => array( 'User.id' => $userId),
							));
				$this->set('user',$user);
				//debug($user);die();	
				
				$this->loadModel('UserAcctypes');
				$acctypes = $this->UserAcctypes->Find('first',array(
							'conditions' => array( 'UserAcctypes.user_id' => $userId),
							'field'          => array('UserAcctypes.id'),
							));
				$this->set('acctypes',$acctypes);
				//debug($acctypes);die();
				
				$this->loadModel('UserDetail');
				$userD = $this->UserDetail->Find('first',array(
							'conditions' => array( 'UserDetail.user_id' => $userId),
							'field'          => array('UserDetail.id'),
							));
				$this->set('userD',$userD);
				//debug($userD);die();	 
				
				$this->loadModel('UserBank');
				$bank = $this->UserBank->Find('first',array(
							'conditions' => array( 'UserBank.user_id' => $userId),
							'field'          => array('UserBank.id'),
							));
				$this->set('bank',$bank);
				
				$this->loadModel('UserEcr');
				$ecr = $this->UserEcr->Find('first',array(
							'conditions' => array( 'UserEcr.user_id' => $userId),
							'field'          => array('UserEcr.id'),
							));
				$this->set('ecr',$ecr);
				
				$this->loadModel('Local');
				if($this->request -> isPut() || $this->request -> isPost()){
				
				//send email
						$Email = new CakeEmail();
						$Email->template('newtrader');
						$Email->viewVars(array('user' => $user));
						$Email->emailFormat('both');
						$Email->from(array('admin@trustxe.com' => 'IKTust'));
						$Email->to('webteam@iktrust.com');
						$Email->subject('New Trader IKTrust');
						$Email->send();
						
				// send sms
						$HttpSocket = new HttpSocket();
						$results = $HttpSocket->post('http://bulk.ezlynx.net:7001/BULK/BULKMT.aspx', array(
						'user' => 'instafx', 
						'pass' => 'instafx8000',
						'msisdn' => '0136454001',
						'body' => 'iktrust test ',
						'smstype' => 'TEXT',
						'sender' => 'IKTRUST',
						#'Telco' => 'CELCOM'
					   ));
					   
						$this->Local->create();
						//debug($this->request->data);die();
						if($this->Local->save($this->request->data)){
							//$this->session->setFlash(_('The bank details have been saved'));
							
						}
					$this->redirect(array('controller' => 'cabinets' , 'action' => 'view_pdf'));
					}
				
				
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
					
					$this->loadModel('UserTrader');
					$a = $this->UserTrader->find('all');
					$this->set('a',$a);
					//debug($a);die();
			
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
	
	
		
		
	
		
	