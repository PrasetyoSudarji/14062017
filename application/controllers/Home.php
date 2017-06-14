<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$_SESSION['login'] = null;
		$session = $_SESSION['login'];

		$data = array(
			'session' => $session,
			'page' => 'home',
			'link' => 'home'
		);
		
		$this->load->view('template/wrapper', $data);
	}
	
}
