<?php
App::uses('AppController', 'Controller');

class LocalsController extends AppController {


	public function adminview(){
		$this->layout = 'kabinet';
	}
	
	public function tradersindex(){
		$this->layout = 'kabinet';
	}


}

?>
