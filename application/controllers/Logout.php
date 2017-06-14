<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
    
    public function index(){
		$_SESSION['login'] = null;
		$_SESSION['status'] = null;
		$data = array(
			'session' => $_SESSION['login'],
			'page' => 'home',
			'link' => 'home'
		);
		
		$this->load->view('template/wrapper', $data);
    }
	
}