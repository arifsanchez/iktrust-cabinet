<?php
App::uses('AppController', 'Controller');
App::import('Vendor', 'dompdf', array('file'=> 'dompdf' . DS . 'dompdf_config.inc.php'));
App::uses('CakeEmail', 'Network/Email');
App::uses('HttpSocket', 'Network/Http');


class CabinetsController extends AppController {
	 var $name = 'Cabinets';
	public $helpers = array('Menu');
	public $components = array('RequestHandler');

	function ext_reg(){
		$this->loadModel('Usermgmt.User');
		$this->loadModel('Usermgmt.UserDetail');
		if(!empty($this->params['named'])){
			$data = $this->params['named'];
			if($data['k'] = 'syui9f8as9dgas89dfg9as7dgaos879tdas8odgas87sa'){
				if($data['k1'] = 'qwwoiutjncyh58jdbt'){
					#susun data
					$this->request->data['User']['first_name'] = $data['fn'] ;
					$this->request->data['User']['user_group_id'] = 2 ;
					$this->request->data['User']['email'] 		= $data['e'];
					$this->request->data['User']['password'] 	= $data['m'];
					$this->request->data['User']['agent'] 		= $data['ag'];
					$this->request->data['User']['country'] = $data['c'];
					$this->request->data['UserDetail']['cellphone'] = $data['p'];
					$this->request->data['UserDetail']['address'] = $data['a'];
					$this->request->data['UserDetail']['city'] = $data['c'];
					$this->request->data['UserDetail']['state'] = $data['s'];
					$this->request->data['UserDetail']['postal'] = $data['po'];
					#send to user table ..		
					$salt = $this->UserAuth->makeSalt();
					$this->request->data['User']['salt']=$salt;
					$this->request->data['User']['password'] = $this->UserAuth->makePassword($this->request->data['User']['password'], $salt);
					
					$this->User->save($this->request->data,false);
					$userId=$this->User->getLastInsertID();
					$this->request->data['UserDetail']['user_id']=$userId;
					$this->UserDetail->save($this->request->data,false);
					$user = $this->User->findById($userId);
					//debug($user);die();
					$this->User->sendRegistrationMail($user);
					$this->User->sendVerificationMail($user);
					
					if (isset($this->request->data['User']['active']) && $this->request->data['User']['active'] && !EMAIL_VERIFICATION) {
							$this->UserAuth->login($user);
							$this->redirect(array('controller' => 'cabinets' , 'action' => 'myaccount'));
						} else {
						$this->Session->setFlash(__('Please check your mail and confirm your registration'));
						$this->redirect(array('controller' => 'cabinets' , 'action' => 'login'));
						}
					#sent user registration notification to admin & client
				}
			}else{
				$this->redirect(array('controller' => 'cabinets' , 'action' => 'ext_reg' , "error:invalid_request"));
			}
		}
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
				'conditions' => array('Mt4User.LOGIN' =>$login),
				'fields'		=>array ('Mt4User.LOGIN', 'Mt4User.BALANCE', 'Mt4User.MARGIN_FREE', 'Mt4User.MODIFY_TIME'),
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
	
	function acc_bal_mt4() {
		$this->autoRender = false;
		$x = $this->params['named']['x'];
		$this->loadModel('Mt4User');			
	
			$query = $this->Mt4User->Find('first' ,array(
				'conditions' => array('Mt4User.LOGIN' =>$x),
				'fields'		=>array ('Mt4User.LOGIN', 'Mt4User.BALANCE','Mt4User.MARGIN_FREE', 'Mt4User.REGDATE'),
			));
			
			if($query['Mt4User']['MARGIN_FREE']  >= $query['Mt4User']['BALANCE']){
				$avail = $query['Mt4User']['BALANCE'];
			} else {
				$avail = $query['Mt4User']['BALANCE'] - $query['Mt4User']['MARGIN_FREE'];
			}
			return number_format($avail, 2 , '.' , '');
	}
	
	
	function reg_date_mt4() {
		$this->autoRender = false;
		$x = $this->params['named']['x'];
		$this->loadModel('Mt4User');
			$reg = $this->Mt4User->Find('first' ,array(
				'conditions' => array('Mt4User.LOGIN' =>$x),
				'fields'		=>array ( 'Mt4User.REGDATE'),
			));
			$date = $reg['Mt4User']['REGDATE'];
			return $date;
			debug($date); die();
	}
	
	function view_pdf() {
		$this->loadModel('Usermgmt.User');
		$userId = $this->UserAuth->getUserId();
		
		$user = $this->User->Find('first',array(
			'conditions' => array( 'User.id' => $userId),
		));	
		$this->set('user',$user);
		
		$this->loadModel('UserAcctypes');
		$acctypes = $this->UserAcctypes->Find('first',array(
			'conditions' => array( 'UserAcctypes.user_id' => $userId),
		));
		$this->set('acctypes',$acctypes);

		$this->loadModel('UserDetail');
		$userD = $this->UserDetail->Find('first',array(
			'conditions' => array( 'UserDetail.user_id' => $userId),
		));
		$this->set('userD',$userD);

		$this->loadModel('UserBank');
		$bank = $this->UserBank->Find('first',array(
			'conditions' => array( 'UserBank.user_id' => $userId),
		));
		$this->set('bank',$bank);

		$this->loadModel('UserEcr');
		$ecr = $this->UserEcr->Find('first',array(
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
				$this->Cookie->write('user_acc', $this->request->data);
				$this->redirect(array('controller' => 'cabinets' , 'action' => 'client'));
			}
		}
	}

	
	public function client(){
		if($this->RequestHandler->isAjax()) {
			configure::write('debug', 0);
			$this->layout = 'kabinet';     // uses an empty layout
			$this->autoRender = false;  // renders nothing by default
		}
		
		$this->layout = 'kabinet';
		$this->loadModel('Usermgmt.User');
		$this->loadModel('Usermgmt.UserDetail');

		$userId = $this->UserAuth->getUserId();
		$this->set('user',$userId);

		$detail = $this->UserDetail->Find('list',array(
			'conditions' => array( 'UserDetail.user_id' => $userId),
			'fields'			 => array('UserDetail.id'),
		));
		$this->set('detail', $detail);

		if (!empty($userId)) {
			if ($this->request -> isPut() || $this->request -> isPost()) {
				$this->Cookie->write('user_cl' , $this->request->data);
				$this->redirect(array('controller' => 'cabinets' , 'action' => 'bank'));
			}
		}
	}

	
	public function bank(){
		$this->layout = 'kabinet';
		$this->loadModel('Usermgmt.User');
		$this->loadModel('Usermgmt.UserDetail');
		//get userid
		$userId = $this->UserAuth->getUserId();
		$this->set('user',$userId);
		$detail = $this->UserDetail->Find('list',array(
			'conditions' => array( 'UserDetail.user_id' => $userId),
			'fields'			 => array('UserDetail.id'),
		));
		$this->set('detail', $detail);
		//get tradersid
		$this->loadModel('UserBank');
		// save data
		if (!empty($userId)) {
			if($this->request -> isPut() || $this->request -> isPost()){
				$this->Cookie->write('user_b' , $this->request->data);
				$this->redirect(array('controller' => 'cabinets' , 'action' => 'ecurrency'));
			}
		}
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
				$this->Cookie->write('user_eC' , $this->request->data);
				$this->redirect(array('controller' => 'cabinets' , 'action' => 'document'));
			}
		}
	}
	
	
	public function document(){		
		$this->layout = 'kabinet';
		$ud = $this->Cookie->read($user_eC);
	//	debug($ud);
		$this->loadModel('UserAcctypes');
		$this->UserAcctypes->UserId = $ud['user_acc']['UserAcctypes']['user_id'];
		$this->UserAcctypes->save($ud['user_acc']['UserAcctypes']);
		$this->Cookie->write('latest', $this->UserAcctypes->id); 	//sent current id
		//debug($this->UserAcctypes->id);
		$this->loadModel('User');
		$this->User->UserId = $ud['user_cl']['User']['id'];
		$this->User->save($ud['user_cl']['User']);
		$this->loadModel('UserDetail');
		$this->UserDetail->UserId = $ud['user_cl']['UserDetail']['id'];
		$this->UserDetail->save($ud['user_cl']['UserDetail']);
		//create new row jika empty finding user id yg matching (BANK)
		$userId 	= $this->UserAuth->getUserId();
		$this->loadModel('UserBank');
		$checkB = $this->UserBank->find('first' , array(
			'conditions' => array( 'user_id' => $userId),
			'fields' => 'id',
		));		
		//create new row jika empty finding user id yg matching (BANK)
		if (($ud['user_b']['UserBank']['user_id']) == ($ud['user_b']['UserBank']['user_id'])){
			$this->UserBank->id = $checkB;
			$replaceB = $ud['user_b']['UserBank'];
			$this->UserBank->save($replaceB);
		}else{
			$NewBdata = $this->UserBank->save($ud['user_b']['UserBank']);
			$this->UserBank->save($NewBdata);
		}
		//create new row jika empty finding user id yg matching (ECURRENCY)
		$userId 	= $this->UserAuth->getUserId();
		$this->loadModel('UserEcr');
		$checkEc = $this->UserEcr->find('first' , array(
			'conditions' => array( 'user_id' => $userId),
			'fields' => 'id',
		));
		//create new row jika empty finding user id yg matching (ECURRENCY)
		if (($ud['user_eC']['UserEcr']['user_id']) == ($ud['user_eC']['UserEcr']['user_id'])){
			$this->UserEcr->id = $checkEc;
			$replaceEc = $ud['user_eC']['UserEcr'];
			$this->UserEcr->save($replaceEc);
		}else{
			$NewEdata = $this->UserEcr->save($ud['user_eC']['UserEcr']);
			$this->UserEcr->save($NewEdata);
		}
	}
	
	public function acknowledge(){		
		$this->layout = 'kabinet';
		$this->loadModel('Usermgmt.User');
		$this->loadModel('Local');
		$userId 	= $this->UserAuth->getUserId();
		//test
		$this->loadModel('UserAcctypes');		
		$data = $this->Cookie->read($latest);	
		$acc = $this->UserAcctypes->find('first', array(
							'conditions' => array('UserAcctypes.id'  => $data['latest']),
							//'fields' => array('UserAcctypes.id'),
							//'order' => array( 'UserAcctypes.modified' => 'desc'),
							//'recursive' => 0
								));
		$this->set('acc',$acc);
		$user = $this->User->find('first', array(
			'conditions' => array('User.id'  => $userId),
			'recursive' => 0
		));
		$this->set('user',$user);
		
		$this->loadModel('Usermgmt.UserDetail');
		$userD = $this->UserDetail->find('first', array(
								'conditions' => array('UserDetail.user_id'  => $userId),
								//'fields' => array('UserDetail.id'),
			//'recursive' => 0
								));
		$this->set('userD',$userD);
		
		$this->loadModel('UserBank');
		$bank = $this->UserBank->find('first', array(
							'conditions' => array('UserBank.user_id'  => $userId),
							//'fields' => array('UserBank.id'),
			//'recursive' => 0
							));
		$this->set('bank',$bank);
		
		$this->loadModel('UserEcr');
		$ecr = $this->UserEcr->find('first', array(
								'conditions' => array('UserEcr.user_id'  => $userId),
								//'fields' => array('UserEcr.id'),
								//'recursive' => 0
							));
		$this->set('ecr',$ecr);
		
		if( $this->request -> isPost()){
			$this->Local->create();
			$this->request->data['Local']['local_status_id'] = 1 ;
			$this->request->data['Local']['user_id'] =$userId;
			//$this->request->data['Local']['user_detail_id'] = $userD;
			//$this->request->data['Local']['user_bank_id'] = $bank;
			//$this->request->data['Local']['user_ecr_id'] = $ecr;
			//$this->request->data['Local']['user_acctype_id'] = $acc;
			//debug($this->request->data); die();
			if($this->Local->save($this->request->data)){
				
					//send email
					$Email = new CakeEmail();
					$Email->template('newtrader');
					$Email->viewVars(array('user' => $user));
					$Email->emailFormat('html');
					$Email->from(array('support@iktrust.com' => 'IKTust'));
					$Email->to('webteam@iktrust.com');
					$Email->subject('New Trader IKTrust');
					$Email->send();

					// send sms
					$HttpSocket = new HttpSocket();
					$results = $HttpSocket->post('http://bulk.ezlynx.net:7001/BULK/BULKMT.aspx', 
					array(
						'user' => 'instafx', 
						'pass' => 'instafx8000',
						'msisdn' => '0136454001',
						'body' => 'iktrust test ',
						'smstype' => 'TEXT',
						'sender' => 'IKTRUST',
						#'Telco' => 'CELCOM'
					));
					
					$this->redirect(array('controller' => 'cabinets' , 'action' => 'view_pdf'));
			}
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
	
	public function change_pass(){
		$this->layout = 'kabinet';
	}	
	
	public function pending(){
		$this->layout = 'kabinet';
	}	
	
	public function depositfund(){
		$this->layout = 'kabinet';
	}	

	
	public function login($connect=null, $from=null){
		$this->loadModel('Usermgmt.User');
		$this->layout = 'logmasuk';
		$userId = $this->UserAuth->getUserId();
		if ($userId) {
			if($connect) {
				$this->render('popup');
			} else {
				$this->redirect("/dashboard");
			}
		}
		if($connect=='fb') {
			$this->Session->read();
			$this->layout=NULL;
			$fbData=$this->UserConnect->facebook_connect();
			if(isset($_GET['error'])) {
				/* Do nothing user canceled authentication */
			} elseif(!empty($fbData['loginUrl'])) {
				$this->redirect($fbData['loginUrl']);
			} else {
				$emailCheck=true;
				if(!empty($fbData['user_profile']['id'])) {
					$user = $this->User->findByFbId($fbData['user_profile']['id']);
					if(empty($user)) {
						$user = $this->User->findByEmail($fbData['user_profile']['email']);
						$emailCheck=false;
					}
					if(empty($user)) {
						if(SITE_REGISTRATION) {
							$user['User']['fb_id']=$fbData['user_profile']['id'];
							$user['User']['fb_access_token']=$fbData['user_profile']['accessToken'];
							$user['User']['user_group_id']=DEFAULT_GROUP_ID;
							if(!empty($fbData['user_profile']['username'])) {
								$user['User']['username']= $this->generateUserName($fbData['user_profile']['username']);
							} else {
								$user['User']['username']= $this->generateUserName($fbData['user_profile']['name']);
							}
							$password = $this->UserAuth->generatePassword();
							$user['User']['password'] = $this->UserAuth->generatePassword($password);
							$user['User']['email']=$fbData['user_profile']['email'];
							$user['User']['first_name']=$fbData['user_profile']['first_name'];
							$user['User']['last_name']=$fbData['user_profile']['last_name'];
							$user['User']['active']=1;
							$user['User']['email_verified']=1;
							if(isset($_SERVER['REMOTE_ADDR'])) {
								$user['User']['ip_address']=$_SERVER['REMOTE_ADDR'];
							}
							$userImageUrl = 'http://graph.facebook.com/'.$fbData['user_profile']['id'].'/picture?type=large';
							$photo = $this->updateProfilePic($userImageUrl);
							$user['UserDetail']['photo']=$photo;
							$user['UserDetail']['gender']=$fbData['user_profile']['gender'];
							$this->User->save($user,false);
							$userId=$this->User->getLastInsertID();
							$user['UserDetail']['user_id']=$userId;
							$this->UserDetail->save($user,false);
							$user = $this->User->findById($userId);
							$this->UserAuth->login($user);
							$this->Session->write('UserAuth.FacebookLogin', true);
							$this->Session->write('UserAuth.FacebookChangePass', true);
						} else {
							$this->Session->setFlash(__('Sorry new registration is currently disabled, please try again later'));
						}
					} else {
						if($user['User']['id'] !=1) {
							$user['User']['fb_id']=$fbData['user_profile']['id'];
							$user['User']['fb_access_token']=$fbData['user_profile']['accessToken'];
							$login=false;
							if(!$emailCheck) {
								$user['User']['email_verified']=1;
								$login=true;
							} else if($user['User']['email_verified']==1) {
								$login=true;
							} else if($user['User']['email']==$fbData['user_profile']['email']) {
								$user['User']['email_verified']=1;
								$login=true;
							}
							$this->User->save($user,false);
							if($login) {
								$user = $this->User->findById($user['User']['id']);
								if ($user['User']['active']==0) {
									$this->Session->setFlash(__('Sorry your account is not active, please contact to Administrator'));
								} else {
									$this->UserAuth->login($user);
									$this->Session->write('UserAuth.FacebookLogin', true);
								}
							} else {
								$this->Session->setFlash(__('Sorry your email is not verified yet'));
							}
						}
					}
				}
			}
			$this->render('popup');
		} elseif($connect=='twt') {
			$this->Session->read();
			$this->layout=NULL;
			$twtData=$this->UserConnect->twitter_connect();
			if(isset($twtData['url'])) {
				$this->redirect($twtData['url']);
			} else if(!empty($twtData['user_profile'])) {
				if(!empty($twtData['user_profile']['id'])) {
					$twtId  = $twtData['user_profile']['id'];
					$user = $this->User->findByTwtId($twtId);
					if(empty($user)) {
						if(SITE_REGISTRATION) {
							$user['User']['twt_id']=$twtData['user_profile']['id'];
							$user['User']['twt_access_token']=$twtData['user_profile']['accessToken'];
							$user['User']['twt_access_secret']=$twtData['user_profile']['accessSecret'];
							$user['User']['user_group_id']=DEFAULT_GROUP_ID;
							$user['User']['username']= $this->generateUserName($twtData['user_profile']['screen_name']);
							$password = $this->UserAuth->generatePassword();
							$user['User']['password'] = $this->UserAuth->generatePassword($password);
							$name=preg_replace("/ /", "~", $twtData['user_profile']['name'], 1);
							$name= explode('~', $name);
							$user['User']['first_name']=$name[0];
							$user['User']['last_name']=(isset($name[1])) ? $name[1] : "";
							$user['User']['active']=1;
							if(isset($_SERVER['REMOTE_ADDR'])) {
								$user['User']['ip_address']=$_SERVER['REMOTE_ADDR'];
							}
							$user['UserDetail']['location']=$twtData['user_profile']['location'];
							$userImageUrl = 'http://api.twitter.com/1/users/profile_image?screen_name='.$twtData['user_profile']['screen_name'].'&size=original';
							$photo = $this->updateProfilePic($userImageUrl);
							$user['UserDetail']['photo']=$photo;
							$this->User->save($user,false);
							$userId=$this->User->getLastInsertID();
							$user['UserDetail']['user_id']=$userId;
							$this->UserDetail->save($user,false);
							$user = $this->User->findById($userId);
							$this->UserAuth->login($user);
							$this->Session->write('UserAuth.TwitterLogin', true);
							$this->Session->write('UserAuth.TwitterChangePass', true);
						} else {
							$this->Session->setFlash(__('Sorry new registration is currently disabled, please try again later'));
						}
					} else {
						if($user['User']['id'] !=1) {
							if ($user['User']['id'] != 1 and $user['User']['active']==0) {
								$this->Session->setFlash(__('Sorry your account is not active, please contact to Administrator'));
							} else {
								$user['User']['twt_access_token']=$twtData['user_profile']['accessToken'];
								$user['User']['twt_access_secret']=$twtData['user_profile']['accessSecret'];
								$this->User->save($user,false);
								$this->UserAuth->login($user);
								$this->Session->write('UserAuth.TwitterLogin', true);
							}
						}
					}
				}
			}
			$this->render('popup');
		} elseif($connect=='gmail') {
			$this->Session->read();
			$this->layout=NULL;
			$gmailData=$this->UserConnect->gmail_connect();
			if(!isset($_GET['openid_mode'])) {
				$this->redirect($gmailData['url']);
			} else {
				if(!empty($gmailData)) {
					if(!empty($gmailData['email'])) {
						$user = $this->User->findByEmail($gmailData['email']);
						if(empty($user)) {
							if(SITE_REGISTRATION) {
								$user['User']['user_group_id']=DEFAULT_GROUP_ID;
								if(!empty($gmailData['name'])) {
									$user['User']['username']= $this->generateUserName($gmailData['name']);
								} else {
									$emailArr = explode('@', $gmailData['email']);
									$user['User']['username']= $this->generateUserName($emailArr[0]);
								}
								$password = $this->UserAuth->generatePassword();
								$user['User']['password'] = $this->UserAuth->generatePassword($password);
								$user['User']['first_name']=$gmailData['first_name'];
								$user['User']['last_name']=$gmailData['last_name'];
								$user['User']['email']=$gmailData['email'];
								$user['User']['active']=1;
								$user['User']['email_verified']=1;
								if(isset($_SERVER['REMOTE_ADDR'])) {
									$user['User']['ip_address']=$_SERVER['REMOTE_ADDR'];
								}
								$user['UserDetail']['location']=$gmailData['location'];
								$this->User->save($user,false);
								$userId=$this->User->getLastInsertID();
								$user['UserDetail']['user_id']=$userId;
								$this->UserDetail->save($user,false);
								$user = $this->User->findById($userId);
								$this->UserAuth->login($user);
								$this->Session->write('UserAuth.GmailLogin', true);
								$this->Session->write('UserAuth.GmailChangePass', true);
							} else {
								$this->Session->setFlash(__('Sorry new registration is currently disabled, please try again later'));
							}
						} else {
							if($user['User']['id'] !=1) {
								if($user['User']['email_verified'] !=1) {
									$user['User']['email_verified']=1;
									$this->User->save($user,false);
								}
								$user = $this->User->findById($user['User']['id']);
								if ($user['User']['active']==0) {
									$this->Session->setFlash(__('Sorry your account is not active, please contact to Administrator'));
								} else {
									$this->UserAuth->login($user);
									$this->Session->write('UserAuth.GmailLogin', true);
								}
							}
						}
					}
				}
			}
			$this->render('popup');
		} elseif($connect=='ldn') {
			$this->Session->read();
			$this->layout=NULL;
			$ldnData=$this->UserConnect->linkedin_connect();
			if(!$_GET[LINKEDIN::_GET_RESPONSE]) {
				$this->redirect($ldnData['url']);
			} else {
				$ldnData = json_decode(json_encode($ldnData['user_profile']),TRUE);
				if(!empty($ldnData)) {
					if(!empty($ldnData['id'])) {
						$user = $this->User->findByLdnId($ldnData['id']);
						if(empty($user)) {
							if(SITE_REGISTRATION) {
								$user['User']['ldn_id']=$ldnData['id'];
								$user['User']['user_group_id']=DEFAULT_GROUP_ID;
								$user['User']['username']= $this->generateUserName($ldnData['first-name']. ' '.$ldnData['last-name']);
								$password = $this->UserAuth->generatePassword();
								$user['User']['password'] = $this->UserAuth->generatePassword($password);
								$user['User']['first_name']=$ldnData['first-name'];
								$user['User']['last_name']=$ldnData['last-name'];
								$user['User']['active']=1;
								if(isset($ldnData['picture-url'])) {
									$photo = $this->updateProfilePic($ldnData['picture-url']);
									$user['UserDetail']['photo']=$photo;
								}
								if(isset($_SERVER['REMOTE_ADDR'])) {
									$user['User']['ip_address']=$_SERVER['REMOTE_ADDR'];
								}
								$this->User->save($user,false);
								$userId=$this->User->getLastInsertID();
								$user['UserDetail']['user_id']=$userId;
								$this->UserDetail->save($user,false);
								$user = $this->User->findById($userId);
								$this->UserAuth->login($user);
								$this->Session->write('UserAuth.LinkedinLogin', true);
								$this->Session->write('UserAuth.LinkedinChangePass', true);
							} else {
								$this->Session->setFlash(__('Sorry new registration is currently disabled, please try again later'));
							}
						} else {
							if($user['User']['id'] !=1) {
								if ($user['User']['active']==0) {
									$this->Session->setFlash(__('Sorry your account is not active, please contact to Administrator'));
								} else {
									$this->UserAuth->login($user);
									$this->Session->write('UserAuth.LinkedinLogin', true);
								}
							}
						}
					}
				}
			}
			$this->render('popup');
		} elseif($connect=='fs') {
			$this->Session->read();
			$this->layout=NULL;
			$fsData=$this->UserConnect->foursquare_connect();
			if(!isset($_GET['code']) && !isset($_GET['error']) && empty($_SESSION['fs_access_token'])) {
				$this->redirect($fsData['url']);
			} else {
				$fsData = json_decode(json_encode($fsData['user_profile']),TRUE);
				if(!empty($fsData) && isset($fsData['user']['contact']['email'])) {
					$user = $this->User->findByEmail($fsData['user']['contact']['email']);
					if(empty($user)) {
						if(SITE_REGISTRATION) {
							$user['User']['user_group_id']=DEFAULT_GROUP_ID;
							$user['User']['username']= $this->generateUserName($fsData['user']['firstName']. ' '.$fsData['user']['lastName']);
							$password = $this->UserAuth->generatePassword();
							$user['User']['password'] = $this->UserAuth->generatePassword($password);
							$user['User']['email']=$fsData['user']['contact']['email'];
							$user['User']['first_name']=$fsData['user']['firstName'];
							$user['User']['last_name']=$fsData['user']['lastName'];
							$user['UserDetail']['gender']=$fsData['user']['gender'];
							if(isset($fsData['user']['photo'])) {
								$user['UserDetail']['photo']=$this->updateProfilePic($fsData['user']['photo']);
							}
							$user['User']['active']=1;
							$user['User']['email_verified']=1;
							if(isset($_SERVER['REMOTE_ADDR'])) {
								$user['User']['ip_address']=$_SERVER['REMOTE_ADDR'];
							}
							$this->User->save($user,false);
							$userId=$this->User->getLastInsertID();
							$user['UserDetail']['user_id']=$userId;
							$this->UserDetail->save($user,false);
							$user = $this->User->findById($userId);
							$this->UserAuth->login($user);
							$this->Session->write('UserAuth.FoursquareLogin', true);
							$this->Session->write('UserAuth.FoursquareChangePass', true);
						} else {
							$this->Session->setFlash(__('Sorry new registration is currently disabled, please try again later'));
						}
					} else {
						if($user['User']['id'] !=1) {
							if ($user['User']['active']==0) {
								$this->Session->setFlash(__('Sorry your account is not active, please contact to Administrator'));
							} else {
								$this->UserAuth->login($user);
								$this->Session->write('UserAuth.FoursquareLogin', true);
							}
						}
					}
				}
			}
			$this->render('popup');
		} elseif($connect=='yahoo') {
			$this->Session->read();
			$this->layout=NULL;
			$yahooData=$this->UserConnect->yahoo_connect();
			if(!isset($_GET['openid_mode'])) {
				$this->redirect($yahooData['url']);
			} else {
				if(!empty($yahooData)) {
					if(!empty($yahooData['email'])) {
						$user = $this->User->findByEmail($yahooData['email']);
						if(empty($user)) {
							if(SITE_REGISTRATION) {
								$user['User']['user_group_id']=DEFAULT_GROUP_ID;
								if(!empty($yahooData['name'])) {
									$user['User']['username']= $this->generateUserName($yahooData['name']);
								} else {
									$emailArr = explode('@', $yahooData['email']);
									$user['User']['username']= $this->generateUserName($emailArr[0]);
								}
								$password = $this->UserAuth->generatePassword();
								$user['User']['password'] = $this->UserAuth->generatePassword($password);
								$user['User']['first_name']=$yahooData['first_name'];
								$user['User']['last_name']=$yahooData['last_name'];
								$user['User']['email']=$yahooData['email'];
								$user['User']['active']=1;
								$user['User']['email_verified']=1;
								if(isset($_SERVER['REMOTE_ADDR'])) {
									$user['User']['ip_address']=$_SERVER['REMOTE_ADDR'];
								}
								$user['UserDetail']['gender']=$yahooData['gender'];
								$this->User->save($user,false);
								$userId=$this->User->getLastInsertID();
								$user['UserDetail']['user_id']=$userId;
								$this->UserDetail->save($user,false);
								$user = $this->User->findById($userId);
								$this->UserAuth->login($user);
								$this->Session->write('UserAuth.YahooLogin', true);
								$this->Session->write('UserAuth.YahooChangePass', true);
							} else {
								$this->Session->setFlash(__('Sorry new registration is currently disabled, please try again later'));
							}
						} else {
							if($user['User']['id'] !=1) {
								if($user['User']['email_verified'] !=1) {
									$user['User']['email_verified']=1;
									$this->User->save($user,false);
								}
								if ($user['User']['active']==0) {
									$this->Session->setFlash(__('Sorry your account is not active, please contact to Administrator'));
								} else {
									$this->UserAuth->login($user);
									$this->Session->write('UserAuth.YahooLogin', true);
								}
							}
						}
					}
				}
			}
			$this->render('popup');
		} else {
			if ($this->request -> isPost()) {
				$errorMsg="";
				$this->User->set($this->data);
				$UserLoginValidate = $this->User->LoginValidate();
				if($UserLoginValidate) {
					$email  = $this->data['User']['email'];
					$password = $this->data['User']['password'];
					$user = $this->User->findByUsername($email);
					if(empty($user)) {
						$user = $this->User->findByEmail($email);
						if (empty($user)) {
							$errorMsg = __('Incorrect Email/Username or Password', true);
						}
					}
					if($user) {
						$hashed = $this->UserAuth->makePassword($password, $user['User']['salt']);
						if ($user['User']['password'] !== $hashed) {
							$errorMsg = __('Incorrect Email/Username or Password', true);
						} else if ($user['User']['id'] != 1 and $user['User']['active']==0) {
							// check for inactive account
							$errorMsg = __('Sorry your account is not active, please contact to Administrator', true);
						} else if ($user['User']['id'] != 1 and $user['User']['email_verified']==0) {
							// check for verified account
							$errorMsg = __('Your email has not been confirmed please verify your email or contact to Administrator', true);
						}
					}
				}
				if($this->RequestHandler->isAjax()) {
					$this->layout = 'ajax';
					$this->autoRender = false;
					if ($UserLoginValidate && empty($errorMsg)) {
						$response = array('error' => 0, 'message' => 'Succes');
						return json_encode($response);
					} else {
						$response = array('error' => 1,'message' => 'failure');
						if(empty($errorMsg)) {
							$response['data']['User'] = $this->User->validationErrors;
						} else {
							$response['data']['User'] = array('email'=>array($errorMsg));
						}
						return json_encode($response);
					}
				} else {
					if ($UserLoginValidate && empty($errorMsg)) {
						$this->UserAuth->login($user);
						$remember = (!empty($this->data['User']['remember']));
						if ($remember) {
							$this->UserAuth->persist('2 weeks');
						}
						$OriginAfterLogin=$this->Session->read('Usermgmt.OriginAfterLogin');
						$this->Session->delete('Usermgmt.OriginAfterLogin');
						$redirect = (!empty($OriginAfterLogin)) ? $OriginAfterLogin : LOGIN_REDIRECT_URL;
						$this->redirect($redirect);
					} else {
						$this->Session->setFlash($errorMsg);
					}
				}
			}
		}
	}		


	public function withdrawfund(){
		$this->layout = 'kabinet';
	}

	public function upload(){
		$this->layout = 'kabinet';
		$userId = $this->UserAuth->getUserId();
		#debug($userId); die();
		$this->loadModel('UserDoc');
		
		$userId 		= $this->UserAuth->getUserId();
		$check = $this->UserDoc->find('first' , array(
			'conditions' => array( 'user_id' => $userId),
			'fields' => 'id',
		));

		if ($this->request->is('post')){
		debug($this->request->data);die();
			if (!empty($this->request->data['UserDoc']['form'])){
				$form 				= $this->request->data['UserDoc']['form'];
				$info1				= pathinfo($form['name']); // split filename and extension
				$saveName1 = md5($info1['basename']) . '.' . $info1['extension'] ;
				$savePath1 	= WWW_ROOT . 'img/uploads' . DS . $saveName1;
			}
			
			if (!empty($this->request->data['UserDoc']['doc1'])){
				$file1 				= $this->request->data['UserDoc']['doc1'];
				$info2				= pathinfo($file1['name']); // split filename and extension
				$saveName2 = md5($info2['basename']) . '.' . $info2['extension'] ;
				$savePath2 	= WWW_ROOT . 'img/uploads' . DS . $saveName2;
			}
			
			if (!empty($this->request->data['UserDoc']['doc2'])){
				$file2 				= $this->request->data['UserDoc']['doc2'];
				$info3				= pathinfo($file2['name']); // split filename and extension
				$saveName3	= md5($info3['basename']) . '.' . $info3['extension'] ;
				$savePath3 	= WWW_ROOT . 'img/uploads' . DS . $saveName3;
			}
			
			if (move_uploaded_file($form['tmp_name'], $savePath1)){
				$this->set('fileURL', FULL_BASE_URL . $this->webroot . '/img/uploads' . $saveName1);
				if(!empty($check)){
					$this->UserDoc->id = $check;
					$data1 = array('user_id' => $userId , 'form' =>$saveName1 );
					$this->UserDoc->save($data1);
				}else{
					$data1 = array('user_id' => $userId , 'form' =>$saveName1 );
					$this->UserDoc->save($data1);
			
				}
			}
			
			if (move_uploaded_file($file1['tmp_name'], $savePath2)){
				$this->set('fileURL', FULL_BASE_URL . $this->webroot . '/img/uploads' . $saveName2);
				if(!empty($check)){
					$this->UserDoc->id = $check;
					$data2 = array('user_id' => $userId , 'doc1' =>$saveName2 );
					$this->UserDoc->save($data2);
				}else{
					$data2 = array('user_id' => $userId ,  'doc1' =>$saveName2 );
					$this->UserDoc->save($data2);
				
				}
			}
			
			if (move_uploaded_file($file2['tmp_name'], $savePath3)){
				$this->set('fileURL', FULL_BASE_URL . $this->webroot . '/img/uploads' . $saveName3);
					if(!empty($check)){
					$this->UserDoc->id = $check;
					$data3 = array('user_id' => $userId ,  'doc2' =>$saveName3 );
					$this->UserDoc->save($data3);
				}else{
					$data3 = array('user_id' => $userId , 'doc2' =>$saveName3 );
					$this->UserDoc->save($data3);
				}
			}
			$this->redirect(array( 'action' => 'myaccount'));
		}
	}
	
	public function myaccount(){
		$this->loadModel('Usermgmt.User');
		if($this->UserAuth->isLogged()){
			if ($this->UserAuth->isAdmin()) { 
				$this->redirect(array('controller' => 'locals' , 'action' => 'tradersindex'));
			}else{
				//get user id
				$userId = $this->UserAuth->getUserId();
					$this->layout = 'kabinet';
					//find email verified utk user
				$this->loadModel('Local');	
					$status = $this->Local->find(
						'first', array(
							'conditions' =>array( 'Local.user_id' => $userId),
							'fields' 		=> 'Local.local_status_id',
						)
					);
					$this -> set('status',$status);
					//debug($status);die();//
					$user = $this->User->find(
						'first', array(
							'conditions' =>array( 'User.id' => $userId),
							'fields' 		=> 'User.email_verified',
							'recursive' 	=> -1
						)
					);
					//keluarkan kat view
					$this -> set('user',$user);
					//debug($user);die();
					$email = $this->User->find(
						'list', array(
							'conditions' =>array( 'User.id' => $userId),
							'fields' 		=> 'User.email',
							'recursive' 	=> -1,
						)
					);
					$this->loadModel('Mt4User');
					$a = $this->Mt4User->find('all',
						array(
							'conditions' =>array( 'Mt4User.EMAIL' => $email)
						));
					$this->set('a',$a);

					$a = $this->paginate('Mt4User',
						array("Mt4User.EMAIL" => $email)
				   );
					$this->set('a',$a);
			}
		}
	}	

	
	public function trader_details($login){
		#debug($login);die();
		$this->layout = 'kabinet';
		$this->loadModel('Mt4User');
		$b = $this->Mt4User->find('first', array('conditions' =>
			array( 'Mt4User.LOGIN' => $login)
		));
		$this->set('b',$b);
	}

	
	public function platformdownload(){
		$this->layout = 'kabinet';
	}		
	
	
	public function forgot_password(){
		$this->layout = 'register_kabinet';
		$this->loadModel('Usermgmt.User');
		$this->loadModel('Usermgmt.UserDetail');
		$userId = $this->UserAuth->getUserId();
		if ($this->request -> isPost()) {
			$this->User->set($this->data);
			if ($this->User->LoginValidate()) {
				$email  = $this->data['User']['email'];
				$user = $this->User->findByUsername($email);
				if (empty($user)) {
					$user = $this->User->findByEmail($email);
					if (empty($user)) {
						$this->Session->setFlash(__('Incorrect Email/Username'));
						return;
					}
				}
				// check for unverified account
				if ($user['User']['id'] != 1 and $user['User']['email_verified']==0) {
					$this->Session->setFlash(__('Your registration has not been confirmed yet please verify your email before reset password'));
					return;
				}
				$this->User->sendForgotPasswordMail($user);
				$this->Session->setFlash(__('Please check your mail for reset your password'));
				$this->redirect('/login');
			}
		}
	}


	public function affilliate(){
		$this->layout = 'register_kabinet';

		$this->loadModel('Affilliate'); 
		if($this->request -> isPut() || $this->request -> isPost()){
			$this->Affilliate->create();
			$this->request->data['Affilliate']['local_status_id'] = 1 ;
			$this->request->data['Affilliate']['key'] = base64_encode($this->request->data['Affilliate']['key']);
			debug($this->request->data); die();
			if($this->Affilliate->save($this->request->data)){
				$this->Session->setFlash('Your have successful registered.');
			}
			$this->redirect(array('controller' => 'cabinets' , 'action' => 'login'));
		}
	}	
	
	public function pro_upload($mail){
		$this->layout = 'register_kabinet';
		$email = base64_decode ($mail);
		$this->loadModel('ProDoc');
		$this->loadModel('Provault');
		
	
		if($this->request -> isPost()){
			if (!empty($this->request->data['ProDoc']['doc1'])){
				$file1 				= $this->request->data['ProDoc']['doc1'];
				$info2				= pathinfo($file1['name']); // split filename and extension
				$saveName2 = md5($info2['basename']) . '.' . $info2['extension'] ;
				$savePath2 	= WWW_ROOT . 'img/uploads/' . DS . $saveName2;
			}
			if (!empty($this->request->data['ProDoc']['doc2'])){
				$file2 				= $this->request->data['ProDoc']['doc2'];
				$info3				= pathinfo($file2['name']); // split filename and extension
				$saveName3	= md5($info3['basename']) . '.' . $info3['extension'] ;
				$savePath3 	= WWW_ROOT . 'img/uploads/' . DS . $saveName3;
			}
			if (move_uploaded_file($file1['tmp_name'], $savePath2)){
				$this->set('fileURL', FULL_BASE_URL . $this->webroot . '/img/uploads' . $saveName2);
					$data2 = array('email' => $email ,'doc1' =>$saveName2 );
					$this->ProDoc->save($data2);
			}
			if (move_uploaded_file($file2['tmp_name'], $savePath3)){
				$this->set('fileURL', FULL_BASE_URL . $this->webroot . '/img/uploads' . $saveName3);
					$data3 = array('email' => $email ,'doc2' =>$saveName3 );
					$this->ProDoc->save($data3);
			}
						
			$this->Session->setFlash('Your have successful registered.');
			$this->redirect(array('controller' => 'cabinets' , 'action' => 'login'));
		}
	}
	
	public function register_pro(){
	$this->layout = 'register_kabinet';
		$this->loadModel('Usermgmt.User');
		$this->loadModel('Usermgmt.UserDetail');
		$userId = $this->UserAuth->getUserId();
		
		if ($userId) {
			$this->redirect(array('controller' => 'cabinets' , 'action' => 'myaccount'));
		}
			if (SITE_REGISTRATION) {
			
				if (isset($this->request->data['reset'])) {
					$this->redirect(array('controller' => 'cabinets' , 'action' => 'register_pro'));
				}
					if (isset($this->request->data['signup'])){	
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
												
											if (isset($this->request->data['User']['active']) && $this->request->data['User']['active'] && !EMAIL_VERIFICATION) {
												$this->UserAuth->login($user);
												$this->redirect(array('controller' => 'cabinets' , 'action' => 'myaccount'));
											} else {
												//$this->Session->setFlash(__('Please check your mail and confirm your registration'));
												$mail = base64_encode ($this->request->data['User']['email']);
												$this->redirect(array('controller' => 'cabinets' , 'action' => 'pro_upload' ,$mail));
											}
									}
								}
						} else {
							$this->Session->setFlash(__('Sorry new registration is currently disabled, please try again later'));
							$this->redirect(array('controller' => 'cabinets' , 'action' => 'pro_register'));
						}
					}
			}
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
					if (isset($this->request->data['signup'])){	
						if ($this->request -> isPost()) {
							$a = $this->request ->data['location'];
							$b = $this->request ->data['country'];
							if (!empty( $a)){
								$this->request ->data['User']['country']  = $a;
							}else{
								$this->request ->data['User']['country']  = $b;
							}
							//debug ($test);die();
							//debug($this->request->data);die();
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
