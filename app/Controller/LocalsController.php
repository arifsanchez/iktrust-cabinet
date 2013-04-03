<?php
App::uses('AppController', 'Controller');
App::uses('HttpSocket', 'Network/Http');

class LocalsController extends AppController {



	public function adminview(){
		$this->layout = 'kabinet';
	}
	
	public function tradersindex(){
		$this->layout = 'kabinet';
	}
	public function test(){
	
		//$ch = curl_init();
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_URL, "http://iktrust.co.uk/webservice/api.php");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, true);

		// hantar parameter symbols dgn value EURUSD
		$data = array(
			'action' => 'getSpecifications',
			'symbols' => 'EURUSD'
		);

		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$output = curl_exec($ch);
		$info = curl_getinfo($ch);
		debug($output);die();
	

	}


}

?>
