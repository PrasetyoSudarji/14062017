<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	public function index(){
		if($_SESSION['login']==null){
			$alert = "<script>
						alert('Akses di tolak!!');
						window.location.href='".base_url()."';
						</script>";
				$data = array(
				'alert' => $alert,
				'session' => $_SESSION['login'],
				'page' => 'notification',
				'link' => 'home'
			);
		}else{
			$session = $_SESSION['login'];
			$total_bopd = 0;
			$total_gas_total = 0;
			$total_gas_serah = 0;
			$total_bopd_now = 0;
			$total_bopd_yest = 0;
			$total_gas_serah_now = 0;
			$total_gas_serah_yest = 0;
			$total_gas_total_now = 0;
			$total_gas_total_yest = 0;
			$total_data_bopd = 0;
			$total_data_gas = 0;
			$query_liquid = $this->Model->getProduksiLiquid();
			$query_gas = $this->Model->getProduksiGas();
			$date_today = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
			$date_yesterday = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-2, date("Y")));
			foreach($query_liquid->result_array() as $query_liquid){
				if($query_liquid['tanggal'] == $date_today){
					$total_bopd_now += $query_liquid['bopd'];
				}
				
				if($query_liquid['tanggal'] == $date_yesterday){
					$total_bopd_yest += $query_liquid['bopd'];
				}
				$total_bopd += $query_liquid['bopd'];
				$total_data_bopd++;
			}
			foreach($query_gas->result_array() as $query_gas){
				if($query_gas['tanggal'] == $date_today){
					$total_gas_total_now += $query_gas['total'];
				}
				
				if($query_gas['tanggal'] == $date_yesterday){
					$total_gas_total_yest += $query_gas['total'];
				}
				$total_gas_total += $query_gas['total'];
				$total_gas_serah += $query_gas['hp_scrubber'];
				$total_data_gas++;
			}

			$awal_bulan = date("Y-m-d", mktime(0, 0, 0, date("m"), date("1") , date("Y")));
			
			$query_sas = $this->Model->getSasOn($awal_bulan);
			foreach ($query_sas->result_array() as $query_sas) {
				$sas_oil = $query_sas['oil'];
				$sas_gas = $query_sas['gas'];
			}

			$persen_oil = ($total_bopd_now / $sas_oil) * 100;
			$persen_gas = ($total_bopd_now / $sas_gas) * 100;
			$updown_oil = $total_bopd_now - $total_bopd_yest;
			$updown_gas = $total_gas_total_now - $total_gas_total_yest;
			$ytd_oil = $total_bopd / $total_data_bopd;
			$ytd_gas = $total_gas_total / $total_data_gas;
			$persen_ytd_oil = $ytd_oil / $sas_oil;
			$persen_ytd_gas = $ytd_gas / $sas_gas;
			$data = array(
				'sas_gas' => $sas_gas,
				'sas_oil' => $sas_oil,
				'ytd_oil' => number_format($ytd_oil,2),
				'ytd_gas' => number_format($ytd_gas,2),
				'persen_oil' => number_format($persen_oil,2),
				'persen_gas' => number_format($persen_gas,2),
				'persen_ytd_oil' => number_format($persen_ytd_oil,2),
				'persen_ytd_gas' => number_format($persen_ytd_gas,2),
				'updown_oil' => $updown_oil,
				'updown_gas' => $updown_gas,
				'total_bopd_now' => $total_bopd_now,
				'total_bopd_yest' => $total_bopd_yest,
				'total_gas_total_now' => $total_gas_total_now,
				'total_gas_total_yest' => $total_gas_total_yest,
				'total_gas_serah' => $total_gas_serah,
				'session' => $session,
				'page' => 'home',
				'link' => 'home'
			);
		}	
		$this->load->view('template/wrapper', $data);
	}
	
	public function laporan(){
	if($_SESSION['login']==null){
			$alert = "<script>
						alert('Akses di tolak!!');
						window.location.href='".base_url()."';
						</script>";
				$data = array(
				'alert' => $alert,
				'session' => $_SESSION['login'],
				'page' => 'notification',
				'link' => 'home'
			);
		}else{
			$total_bopd = 0;
			$total_gas_total = 0;
			$total_gas_serah = 0;
			$total_bopd_now = 0;
			$total_bopd_yest = 0;
			$total_gas_serah_now = 0;
			$total_gas_serah_yest = 0;
			$total_gas_total_now = 0;
			$total_gas_total_yest = 0;
			$total_data_bopd = 0;
			$total_data_gas = 0;
			$query_liquid = $this->Model->getProduksiLiquid();
			$query_gas = $this->Model->getProduksiGas();
			$date_today = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
			$date_yesterday = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-2, date("Y")));
			foreach($query_liquid->result_array() as $query_liquid){
				if($query_liquid['tanggal'] == $date_today){
					$total_bopd_now += $query_liquid['bopd'];
				}
				
				if($query_liquid['tanggal'] == $date_yesterday){
					$total_bopd_yest += $query_liquid['bopd'];
				}
				$total_bopd += $query_liquid['bopd'];
				$total_data_bopd++;
			}
			foreach($query_gas->result_array() as $query_gas){
				if($query_gas['tanggal'] == $date_today){
					$total_gas_total_now += $query_gas['total'];
				}
				
				if($query_gas['tanggal'] == $date_yesterday){
					$total_gas_total_yest += $query_gas['total'];
				}
				$total_gas_total += $query_gas['total'];
				$total_gas_serah += $query_gas['hp_scrubber'];
				$total_data_gas++;
			}

			$awal_bulan = date("Y-m-d", mktime(0, 0, 0, date("m"), date("1") , date("Y")));
			
			$query_sas = $this->Model->getSasOn($awal_bulan);
			foreach ($query_sas->result_array() as $query_sas) {
				$sas_oil = $query_sas['oil'];
				$sas_gas = $query_sas['gas'];
			}

			$persen_oil = ($total_bopd_now / $sas_oil) * 100;
			$persen_gas = ($total_bopd_now / $sas_gas) * 100;
			$updown_oil = $total_bopd_now - $total_bopd_yest;
			$updown_gas = $total_gas_total_now - $total_gas_total_yest;
			$ytd_oil = $total_bopd / $total_data_bopd;
			$ytd_gas = $total_gas_total / $total_data_gas;
			$persen_ytd_oil = $ytd_oil / $sas_oil;
			$persen_ytd_gas = $ytd_gas / $sas_gas;
			$data = array(
				'sas_gas' => $sas_gas,
				'sas_oil' => $sas_oil,
				'ytd_oil' => number_format($ytd_oil,2),
				'ytd_gas' => number_format($ytd_gas,2),
				'persen_oil' => number_format($persen_oil,2),
				'persen_gas' => number_format($persen_gas,2),
				'persen_ytd_oil' => number_format($persen_ytd_oil,2),
				'persen_ytd_gas' => number_format($persen_ytd_gas,2),
				'updown_oil' => $updown_oil,
				'updown_gas' => $updown_gas,
				'total_bopd_now' => $total_bopd_now,
				'total_bopd_yest' => $total_bopd_yest,
				'total_gas_total_now' => $total_gas_total_now,
				'total_gas_total_yest' => $total_gas_total_yest,
				'total_gas_serah' => $total_gas_serah,
				'session' => $_SESSION['login'],
				'page' => 'laporan',
				'link' => 'laporan'
			);
		}	
		$this->load->view('template/wrapper', $data);

	}

}
