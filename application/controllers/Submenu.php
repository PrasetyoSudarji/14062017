<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Submenu extends CI_Controller {
	
	public function submenuNext(){

		$session = $_SESSION['login'];
		extract ($_GET);
		
		if($id_menu != 2){
			$data_updateSubmenu0 = array(
				"status" => "0"
			);
			$this->Model->update("id",$id_menu,"submenu",$data_updateSubmenu0);

			$id_menu += 1;
			$data_updateSubmenu1 = array(
				"status" => "1"
			);
			$this->Model->update("id",$id_menu,"submenu",$data_updateSubmenu1);
		}

		$submenu = $this->Model->getSubmenuAll();
		$alert = "<script>
				window.location.href='".base_url()."';
				</script>";
		$data = array(
			'submenu' => $submenu,
			'session' => $session,
			'alert' => $alert,
			'page' => 'ajax_submenu',
			'link' => 'home'
		);
		
		$this->load->view('ajax_submenu', $data);
	}

	public function submenuPrev(){
	
		$session = $_SESSION['login'];
		extract ($_GET);
		
		if($id_menu != 1){
			$data_updateSubmenu0 = array(
				"status" => "0"
			);
			$this->Model->update("id",$id_menu,"submenu",$data_updateSubmenu0);

			$id_menu -= 1;
			$data_updateSubmenu1 = array(
				"status" => "1"
			);
			$this->Model->update("id",$id_menu,"submenu",$data_updateSubmenu1);
		}
		$alert = "<script>
				window.location.href='".base_url()."';
				</script>";
		$submenu = $this->Model->getSubmenuAll();
		$data = array(
			'submenu' => $submenu,
			'session' => $session,
			'alert' => $alert,
			'page' => 'ajax_submenu',
			'link' => 'home'
		);
		
		$this->load->view('ajax_submenu', $data);
	}
}
