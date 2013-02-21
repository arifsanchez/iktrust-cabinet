<?php
App::uses('AppController', 'Controller');


class CabinetsController extends AppController {
	
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
	}	
	
	public function platformdownload(){
		$this->layout = 'kabinet';
	}	
		
		
	}
	
	
	
		
		
	
		
	