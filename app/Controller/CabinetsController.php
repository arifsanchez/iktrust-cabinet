<?php
App::uses('AppController', 'Controller');


class CabinetsController extends AppController {
	public $helpers = array('Menu');
	
	public function myprofile(){
		$this->layout = 'kabinet';
			
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
	}
	
	
}
	
	
	
		
		
	
		
	