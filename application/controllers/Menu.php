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

			//untuk sas
			$awal_bulan = date("Y-m-d", mktime(0, 0, 0, date("m"), date("1") , date("Y")));
			
			$query_sas = $this->Model->getSasOn($awal_bulan);
			foreach ($query_sas->result_array() as $query_sas) {
				$sas_oil = $query_sas['oil'];
				$sas_gas = $query_sas['gas'];
			}
					
			$persen_oil = ($total_bopd_now / $sas_oil) * 100;
			$persen_gas = ($total_gas_total_now / $sas_gas) * 100;
			$updown_oil = $total_bopd_now - $total_bopd_yest;
			$updown_gas = $total_gas_total_now - $total_gas_total_yest;
			$ytd_oil = $total_bopd / $total_data_bopd;
			$ytd_gas = $total_gas_total / $total_data_gas;
			$persen_ytd_oil = $ytd_oil / $sas_oil;
			$persen_ytd_gas = $ytd_gas / $sas_gas;

			$query_sumur = $this->Model->getSumurAll();
			$data = array(
				'sas_gas' => $sas_gas,
				'sas_oil' => $sas_oil,
				'ytd_oil' => number_format($ytd_oil,2),
				'ytd_gas' => number_format($ytd_gas,2),
				'persen_oil' => number_format($persen_oil,2),
				'persen_gas' => number_format($persen_gas,2),
				'persen_ytd_oil' => number_format($persen_ytd_oil,2),
				'persen_ytd_gas' => number_format($persen_ytd_gas,2),
				'updown_oil' => number_format($updown_oil,2),
				'updown_gas' => number_format($updown_gas,2),
				'total_bopd_now' => number_format($total_bopd_now,2),
				'total_bopd_yest' => number_format($total_bopd_yest,2),
				'total_gas_total_now' => number_format($total_gas_total_now,2),
				'total_gas_total_yest' => number_format($total_gas_total_yest,2),
				'total_gas_serah' => number_format($total_gas_serah,2),
				'sumur' => $query_sumur,
				'today' => $date_today,
				'session' => $session,
				'page' => 'home',
				'link' => 'home'
			);
		}	
		$this->load->view('template/wrapper', $data);
	}
	
	public function laporan_total(){
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
			$total_data_bopd_monthly = 0;
			$total_data_gas = 0;
			$total_data_gastotal_monthly = 0;
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

				$orderdate = explode('-', $query_liquid['tanggal']);
				$month   = $orderdate[1];

				$month_today = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
				$month_today = explode('-', $month_today);
				$month_today = $month_today[1];
				//bopd bulanan
				if($month == $month_today){
					$total_data_bopd_monthly += $query_liquid['bopd'];
				}

				//total semua data bopd
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

				$orderdate = explode('-', $query_gas['tanggal']);
				$month   = $orderdate[1];

				$month_today = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
				$month_today = explode('-', $month_today);
				$month_today = $month_today[1];
				//bopd bulanan
				if($month == $month_today){
					$total_data_gastotal_monthly += $query_gas['total'];
				}

				$total_gas_total += $query_gas['total'];
				$total_gas_serah += $query_gas['hp_scrubber'];
				$total_data_gas++;
			}
			//ubah bulannya
			$awal_bulan = date("Y-m-d", mktime(0, 0, 0, date("m"), date("1") , date("Y")));
			
			$query_sas = $this->Model->getSasOn($awal_bulan);
			foreach ($query_sas->result_array() as $query_sas) {
				$sas_oil = $query_sas['oil'];
				$sas_gas = $query_sas['gas'];
			}
			
			$persen_oil = ($total_bopd_now / $sas_oil) * 100;
			$persen_gas = ($total_gas_total_now / $sas_gas) * 100;
			$updown_oil = $total_bopd_now - $total_bopd_yest;
			$updown_gas = $total_gas_total_now - $total_gas_total_yest;
			$ytd_oil = $total_data_bopd_monthly / $total_data_bopd;
			$ytd_gas = $total_data_gastotal_monthly / $total_data_gas;
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
				'updown_oil' => number_format($updown_oil,2),
				'updown_gas' => number_format($updown_gas,2),
				'total_bopd_now' => number_format($total_bopd_now,2),
				'total_bopd_yest' => number_format($total_bopd_yest,2),
				'total_gas_total_now' => number_format($total_gas_total_now,2),
				'total_gas_total_yest' => number_format($total_gas_total_yest,2),
				'total_gas_serah' => number_format($total_gas_serah,2),
				'total_data_gastotal_monthly' => $total_data_gastotal_monthly,
				'total_gas_total' => $total_gas_total,
				'today' => $date_today,
				'session' => $_SESSION['login'],
				'page' => 'laporan',
				'link' => 'laporan_total'
			);
		}	
		$this->load->view('template/wrapper', $data);

	}

	public function laporan_sumur(){
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
			$total_data_bopd = 0;
			$total_data_gas = 0;
			$query_liquid = $this->Model->getProduksiLiquid()->result_array();
			$query_gas = $this->Model->getProduksiGas()->result_array();
			$query_sumur = $this->Model->getSumurAll();
			//based on date now
			$date_today = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
			$date_yesterday = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-2, date("Y")));
			//base on june
			//$date_today = date("Y-m-d", mktime(0, 0, 0, date("6"), date("15"), date("Y")));
			//$date_yesterday = date("Y-m-d", mktime(0, 0, 0, date("6"), date("14"), date("Y")));

			$awal_bulan = date("Y-m-d", mktime(0, 0, 0, date("m"), date("1") , date("Y")));
			
			$query_sas = $this->Model->getSasOn($awal_bulan);
			foreach ($query_sas->result_array() as $query_sas) {
				$sas_oil = $query_sas['oil'];
				$sas_gas = $query_sas['gas'];
			}
			foreach ($query_liquid as $key => $value) {
                # code...
                $total_data_bopd +=1;
            }

            foreach ($query_gas as $key => $value) {
                # code...
                $total_data_gas +=1;
            }


			$data = array(
				'sas_oil' => $sas_oil,
				'sas_gas' => $sas_gas,
				'produksi_liquid' => $query_liquid,
				'produksi_gas' => $query_gas,
				'total_data_bopd' => $total_data_bopd,
				'total_data_gas' => $total_data_gas,
				'today' => $date_today,
				'yesterday' => $date_yesterday,
				'sumur' => $query_sumur,
				'liquid' => $query_liquid,
				'gas' => $query_gas,
				'session' => $_SESSION['login'],
				'page' => 'laporan_harian',
				'link' => 'laporan_harian'
			);
		}	
		$this->load->view('template/wrapper', $data);

	}

	public function view_data($tab = 0){
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

			if($tab=="produksi_liquid"){
				$query_tampil = $this->Model->getProduksiLiquid();
				$link = "produksi_liquid";
			}else if($tab=="produksi_gas"){
				$query_tampil = $this->Model->getProduksiGas();
				$link = "produksi_gas";
			}else if($tab=="press_temp"){
				$query_tampil = $this->Model->getPressureTemperature();
				$link = "press_temp";
			}else{
				$query_tampil = $this->Model->getSAS();
				$link = "sas";
			}
			
			$query_sumur = $this->Model->getSumurAll();
			$date_today = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
			$date_yesterday = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-2, date("Y")));

			$data = array(
				'tampil' => $query_tampil,
				'today' => $date_today,
				'tab' => $tab,
				'yesterday' => $date_yesterday,
				'sumur' => $query_sumur,
				'session' => $_SESSION['login'],
				'page' => 'view_datav2',
				'link' => $link
			);
		}	
		$this->load->view('template/wrapper', $data);

	}


	public function edit_data(){
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
			$counter_liquid = $this->Model->getCounterLiquid();
			foreach ($counter_liquid->result_array() as $counter) {
				$id_liquid = $counter['liquid'];
			}
			$counter_gas = $this->Model->getCounterGas();
			foreach ($counter_gas->result_array() as $counter) {
				$id_gas = $counter['gas'];
			}
			$counter_pt = $this->Model->getCounterPt();
			foreach ($counter_pt->result_array() as $counter) {
				$id_pt = $counter['pt'];
			}

			$query_liquid = $this->Model->getProduksiLiquid()->result_array();
			$query_gas = $this->Model->getProduksiGas()->result_array();
			$query_pt = $this->Model->getPressureTemperature()->result_array();
			$query_sumur = $this->Model->getSumurAll();

			$date_today = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
			$date_yesterday = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-2, date("Y")));

			$data = array(
				'id_liquid' => $id_liquid,
				'id_gas' => $id_gas,
				'id_pt' => $id_pt,
				'produksi_liquid' => $query_liquid,
				'produksi_gas' => $query_gas,
				'pt' => $query_pt,
				'sumur' => $query_sumur,
				'today' => $date_today,
				'yesterday' => $date_yesterday,
				'session' => $_SESSION['login'],
				'page' => 'edit_data',
				'link' => 'edit_data'
			);
		}	
		$this->load->view('template/wrapper', $data);

	}

	public function change_sumur(){
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
			$query_sumur = $this->Model->getSumurAll();

			$data = array(
				'sumur' => $query_sumur,
				'session' => $_SESSION['login'],
				'page' => 'change_sumur_stats',
				'link' => 'change_sumur'
			);
		}	
		$this->load->view('template/wrapper', $data);

	}

	public function proses_change_sumur($no = 0){
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
			$query_sumur = $this->Model->getSumurAll();
			foreach ($query_sumur->result_array() as $key => $value) {
				# code...
				if($value['no'] == $no){
					$value['status'] == "active" ? $status="dry" : $status="active";
					$data_update = array(
						"status" => $status
					);
					
					$this->Model->update("no",$no,"well",$data_update);
				}
			}

			
			$data = array(
				'sumur' => $query_sumur,
				'session' => $_SESSION['login'],
				'page' => 'ajax_change_sumur',
				'link' => 'change_sumur'
			);
		}	
		$this->load->view('ajax_change_sumur', $data);

	}

	public function grafik(){
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

			$data = array(
				'session' => $_SESSION['login'],
				'page' => 'grafik_pilih_tahun',
				'link' => 'grafik'
			);
		}	
		$this->load->view('template/wrapper', $data);

	}

	public function proses_grafik(){
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
			extract ($_POST);

			$total_bopd_jan = 0;
			$total_bopd_feb = 0;
			$total_bopd_mar = 0;
			$total_bopd_apr = 0;
			$total_bopd_mei = 0;
			$total_bopd_jun = 0;
			$total_bopd_jul = 0;
			$total_bopd_aug = 0;
			$total_bopd_sep = 0;
			$total_bopd_oct = 0;
			$total_bopd_nov = 0;
			$total_bopd_des = 0;


			$today = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
			$query_liquid = $this->Model->getProduksiLiquid();
			$query_gas = $this->Model->getProduksiGas();
			
			foreach($query_liquid->result_array() as $query_liquid){
				//$month_today = explode('-', $today);
				//$month_today = $month_today[1];
				//bopd bulanan

				$orderdate = explode('-', $query_liquid['tanggal']);
				$month   = $orderdate[1];
				$year = $orderdate[0];

				if($month == '01'){
					$total_bopd_jan += $query_liquid['bopd'];
				}
				else if($month == '02'){
					$total_bopd_feb += $query_liquid['bopd'];
				}
				else if($month == '03'){
					$total_bopd_mar += $query_liquid['bopd'];
				}
				else if($month == '04'){
					$total_bopd_apr += $query_liquid['bopd'];
				}
				else if($month == '05'){
					$total_bopd_mei += $query_liquid['bopd'];
				}
				else if($month == '06'){
					$total_bopd_jun += $query_liquid['bopd'];
				}
				else if($month == '07'){
					$total_bopd_jul += $query_liquid['bopd'];
				}
				else if($month == '08'){
					$total_bopd_aug += $query_liquid['bopd'];
				}
				else if($month == '09'){
					$total_bopd_sep += $query_liquid['bopd'];
				}
				else if($month == '10'){
					$total_bopd_oct += $query_liquid['bopd'];
				}
				else if($month == '11'){
					$total_bopd_nov += $query_liquid['bopd'];
				}
				else if($month == '12'){
					$total_bopd_des += $query_liquid['bopd'];
				}

				$data_update = array(
						'jan' => $total_bopd_jan,
						'feb' => $total_bopd_feb,
						'mar' => $total_bopd_mar,
						'apr' => $total_bopd_apr,
						'mei' => $total_bopd_mei,
						'jun' => $total_bopd_jun,
						'jul' => $total_bopd_jul,
						'aug' => $total_bopd_aug,
						'sep' => $total_bopd_sep,
						'oct' => $total_bopd_oct,
						'nov' => $total_bopd_nov,
						'des' => $total_bopd_des
					);
					
					$this->Model->update("id",$year,"report",$data_update);
			}
			//ambil data dari tabel report dengan id/tahun
			$id = $tahun;
			$query_report = $this->Model->getReportOn($id);
			$alert = "<script>
						alert('Maaf Laporan belum tersedia!!');
						window.location.href='".base_url()."index.php/menu/grafik';
						</script>";
			if($query_report->result_array() == null){
				$data = array(
					'alert' => $alert,
					'session' => $_SESSION['login'],
					'page' => 'notification',
					'link' => 'grafik'
				);
			}else{
				$data = array(
					'year' => $id,
					'report' => $query_report,
					'session' => $_SESSION['login'],
					'page' => 'grafik',
					'link' => 'grafik'
				);
			}
		}	
		$this->load->view('template/wrapper', $data);

	}

}
