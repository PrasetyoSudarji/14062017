<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {
    
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
			$sumur = $this->Model->getSumurAll();
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
			$date_today = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")-1, date("Y")));
			
			$query_tab = $this->Model->getTab();
			foreach ($query_tab->result_array() as $query_tab) {
				if($query_tab['status']==1){
					$tab = $query_tab['name'];
				}
			}

			
			if($tab=="produksi_liquid"){
				$query_tampil = $this->Model->getProduksiLiquid();
			}else if($tab=="produksi_gas"){
				$query_tampil = $this->Model->getProduksiGas();
			}else if($tab=="press_temp"){
				$query_tampil = $this->Model->getPressureTemperature();
			}else{
				$query_tampil = $this->Model->getSAS();
			}
			$data = array(

				'tampil' => $query_tampil,
				'tab' => $tab,
				'today' => $date_today,
				'id_liquid' => $id_liquid,
				'id_gas' => $id_gas,
				'id_pt' => $id_pt,
				'sumur' => $sumur,
				'session' => $_SESSION['login'],
				'page' => 'input_data',
				'link' => 'input_data'
			);
		}	
		$this->load->view('template/wrapper', $data);
    }

    public function input(){
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
			$val="true";
			$query = $this->Model->getTanggal();
			foreach ($query->result_array() as $query) {
				if($query['tanggal']==$tanggal1){
					$val = "false";
				}
			}
			
			if ($val=="true"){
				if ($tanggal1 == null || $well1 == null || $choke1==null || $blpd1==null || $bopd1==null || $hp_scrubber1==null || $lp1==null || $thp1==null || $fl1==null || $chp1==null || $temp1==null || 
					$tanggal2 == null || $well2 == null || $choke2==null || $blpd2==null || $bopd2==null || $hp_scrubber2==null || $lp2==null || $thp2==null || $fl2==null || $chp2==null || $temp2==null || 
					$tanggal3 == null || $well3 == null || $choke3==null || $blpd3==null || $bopd3==null || $hp_scrubber3==null || $lp3==null || $thp3==null || $fl3==null || $chp3==null || $temp3==null || 
					$tanggal4 == null || $well4 == null || $choke4==null || $blpd4==null || $bopd4==null || $hp_scrubber4==null || $lp4==null || $thp4==null || $fl4==null || $chp4==null || $temp4==null ||
					$tanggal5 == null || $well5 == null || $choke5==null || $blpd5==null || $bopd5==null || $hp_scrubber5==null || $lp5==null || $thp5==null || $fl5==null || $chp5==null || $temp5==null ||
					$tanggal6 == null || $well6 == null || $choke6==null || $blpd6==null || $bopd6==null || $hp_scrubber6==null || $lp6==null || $thp6==null || $fl6==null || $chp6==null || $temp6==null ||
					$tanggal7 == null || $well7 == null || $choke7==null || $blpd7==null || $bopd7==null || $hp_scrubber7==null || $lp7==null || $thp7==null || $fl7==null || $chp7==null || $temp7==null || 
					$tanggal8 == null || $well8 == null || $choke8==null || $blpd8==null || $bopd8==null || $hp_scrubber8==null || $lp8==null || $thp8==null || $fl8==null || $chp8==null || $temp8==null ||
					$tanggal9 == null || $well9 == null || $choke9==null || $blpd9==null || $bopd9==null || $hp_scrubber9==null || $lp9==null || $thp9==null || $fl9==null || $chp9==null || $temp9==null || 
					$tanggal10 == null || $well10 == null || $choke10==null || $blpd10==null || $bopd10==null || $hp_scrubber10==null || $lp10==null || $thp10==null || $fl10==null || $chp10==null || $temp10==null || 
					$tanggal11 == null || $well11 == null || $choke11==null || $blpd11==null || $bopd11==null || $hp_scrubber11==null || $lp11==null || $thp11==null || $fl11==null || $chp11==null || $temp11==null || 
					$tanggal12 == null || $well12 == null || $choke12==null || $blpd12==null || $bopd12==null || $hp_scrubber12==null || $lp12==null || $thp12==null || $fl12==null || $chp12==null || $temp12==null || 
					$tanggal13 == null || $well13 == null || $choke13==null || $blpd13==null || $bopd13==null || $hp_scrubber13==null || $lp13==null || $thp13==null || $fl13==null || $chp13==null || $temp13==null || 
					$tanggal14 == null || $well14 == null || $choke14==null || $blpd14==null || $bopd14==null || $hp_scrubber14==null || $lp14==null || $thp14==null || $fl14==null || $chp14==null || $temp14==null || 
					$tanggal15 == null || $well15 == null || $choke15==null || $blpd15==null || $bopd15==null || $hp_scrubber15==null || $lp15==null || $thp15==null || $fl15==null || $chp15==null || $temp15==null || 
					$tanggal16 == null || $well16 == null || $choke16==null || $blpd16==null || $bopd16==null || $hp_scrubber16==null || $lp16==null || $thp16==null || $fl16==null || $chp16==null || $temp16==null || 
					$tanggal17 == null || $well17 == null || $choke17==null || $blpd17==null || $bopd17==null || $hp_scrubber17==null || $lp17==null || $thp17==null || $fl17==null || $chp17==null || $temp17==null || 
					$tanggal18 == null || $well18 == null || $choke18==null || $blpd18==null || $bopd18==null || $hp_scrubber18==null || $lp18==null || $thp18==null || $fl18==null || $chp18==null || $temp18==null || 
					$tanggal19 == null || $well19 == null || $choke19==null || $blpd19==null || $bopd19==null || $hp_scrubber19==null || $lp19==null || $thp19==null || $fl19==null || $chp19==null || $temp19==null || 
					$tanggal20 == null || $well20 == null || $choke20==null || $blpd20==null || $bopd20==null || $hp_scrubber20==null || $lp20==null || $thp20==null || $fl20==null || $chp20==null || $temp20==null || 
					$tanggal21 == null || $well21 == null || $choke21==null || $blpd21==null || $bopd21==null || $hp_scrubber21==null || $lp21==null || $thp21==null || $fl21==null || $chp21==null || $temp21==null || 
					$tanggal22 == null || $well22 == null || $choke22==null || $blpd22==null || $bopd22==null || $hp_scrubber22==null || $lp22==null || $thp22==null || $fl22==null || $chp22==null || $temp22==null || 
					$tanggal23 == null || $well23 == null || $choke23==null || $blpd23==null || $bopd23==null || $hp_scrubber23==null || $lp23==null || $thp23==null || $fl23==null || $chp23==null || $temp23==null 
					
				){
					$alert = "<script>
							alert('Data Tidak boleh kosong!!');
							window.location.href='".base_url()."index.php/data';
							</script>";
					$data = array(
						'alert' => $alert,
						'session' => $_SESSION['login'],
						'page' => 'notification',
						'link' => 'input_data'
					);
				}else{
					$counter_liquid = $this->Model->getCounterLiquid();
					foreach ($counter_liquid->result_array() as $counter) {
						$total_liquid = $counter['liquid'];
					}


					$kadar_air1 = (($blpd1-$bopd1)/$blpd1)*100;
					$kadar_air2 = (($blpd2-$bopd2)/$blpd2)*100;
					$kadar_air3 = (($blpd3-$bopd3)/$blpd3)*100;
					$kadar_air4 = (($blpd4-$bopd4)/$blpd4)*100;
					$kadar_air5 = (($blpd5-$bopd5)/$blpd5)*100;
					$kadar_air6 = (($blpd6-$bopd6)/$blpd6)*100;
					$kadar_air7 = (($blpd7-$bopd7)/$blpd7)*100;
					$kadar_air8 = (($blpd8-$bopd8)/$blpd8)*100;
					$kadar_air9 = (($blpd9-$bopd9)/$blpd9)*100;
					$kadar_air10 = (($blpd10-$bopd10)/$blpd10)*100;
					$kadar_air11 = (($blpd11-$bopd11)/$blpd11)*100;
					$kadar_air12 = (($blpd12-$bopd12)/$blpd12)*100;
					$kadar_air13 = (($blpd13-$bopd13)/$blpd13)*100;
					$kadar_air14 = (($blpd14-$bopd14)/$blpd14)*100;
					$kadar_air15 = (($blpd15-$bopd15)/$blpd15)*100;
					$kadar_air16 = (($blpd16-$bopd16)/$blpd16)*100;
					$kadar_air17 = (($blpd17-$bopd17)/$blpd17)*100;
					$kadar_air18 = (($blpd18-$bopd18)/$blpd18)*100;
					$kadar_air19 = (($blpd18-$bopd19)/$blpd19)*100;
					$kadar_air20 = (($blpd20-$bopd20)/$blpd20)*100;
					$kadar_air21 = (($blpd21-$bopd21)/$blpd21)*100;
					$kadar_air22 = (($blpd22-$bopd22)/$blpd22)*100;
					$kadar_air23 = (($blpd23-$bopd23)/$blpd23)*100;

					$data_insert1 = array(
						"id" => $liquid1,
						"tanggal" => $tanggal1,
						"well_name" => $well1,
						"choke" => floatval($choke1),
						"blpd" => floatval($blpd1),
						"bopd" => floatval($bopd1),
						"kadar_air" =>floatval( $kadar_air1)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert1);

					$data_insert2 = array(
						"id" => $liquid2,
						"tanggal" => $tanggal2,
						"well_name" => $well2,
						"choke" => floatval($choke2),
						"blpd" => floatval($blpd2),
						"bopd" => floatval($bopd2),
						"kadar_air" =>floatval( $kadar_air2)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert2);
					$data_insert3 = array(
						"id" => $liquid3,
						"tanggal" => $tanggal3,
						"well_name" => $well3,
						"choke" => floatval($choke3),
						"blpd" => floatval($blpd3),
						"bopd" => floatval($bopd3),
						"kadar_air" =>floatval( $kadar_air3)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert3);
					$data_insert4 = array(
						"id" => $liquid4,
						"tanggal" => $tanggal4,
						"well_name" => $well4,
						"choke" => floatval($choke4),
						"blpd" => floatval($blpd4),
						"bopd" => floatval($bopd4),
						"kadar_air" =>floatval( $kadar_air4)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert4);
					$data_insert5 = array(
						"id" => $liquid5,
						"tanggal" => $tanggal5,
						"well_name" => $well5,
						"choke" => floatval($choke5),
						"blpd" => floatval($blpd5),
						"bopd" => floatval($bopd5),
						"kadar_air" =>floatval( $kadar_air5)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert5);
					$data_insert6 = array(
						"id" => $liquid6,
						"tanggal" => $tanggal6,
						"well_name" => $well6,
						"choke" => floatval($choke6),
						"blpd" => floatval($blpd6),
						"bopd" => floatval($bopd6),
						"kadar_air" =>floatval( $kadar_air6)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert6);
					$data_insert7 = array(
						"id" => $liquid7,
						"tanggal" => $tanggal7,
						"well_name" => $well7,
						"choke" => floatval($choke7),
						"blpd" => floatval($blpd7),
						"bopd" => floatval($bopd7),
						"kadar_air" =>floatval( $kadar_air7)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert7);
					$data_insert8 = array(
						"id" => $liquid8,
						"tanggal" => $tanggal8,
						"well_name" => $well8,
						"choke" => floatval($choke8),
						"blpd" => floatval($blpd8),
						"bopd" => floatval($bopd8),
						"kadar_air" =>floatval( $kadar_air8)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert8);
					$data_insert9 = array(
						"id" => $liquid9,
						"tanggal" => $tanggal9,
						"well_name" => $well9,
						"choke" => floatval($choke9),
						"blpd" => floatval($blpd9),
						"bopd" => floatval($bopd9),
						"kadar_air" =>floatval( $kadar_air9)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert9);
					$data_insert10 = array(
						"id" => $liquid10,
						"tanggal" => $tanggal10,
						"well_name" => $well10,
						"choke" => floatval($choke10),
						"blpd" => floatval($blpd10),
						"bopd" => floatval($bopd10),
						"kadar_air" =>floatval( $kadar_air10)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert10);
					$data_insert11 = array(
						"id" => $liquid11,
						"tanggal" => $tanggal11,
						"well_name" => $well11,
						"choke" => floatval($choke11),
						"blpd" => floatval($blpd11),
						"bopd" => floatval($bopd11),
						"kadar_air" =>floatval( $kadar_air11)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert11);
					$data_insert12 = array(
						"id" => $liquid12,
						"tanggal" => $tanggal12,
						"well_name" => $well12,
						"choke" => floatval($choke12),
						"blpd" => floatval($blpd12),
						"bopd" => floatval($bopd12),
						"kadar_air" =>floatval( $kadar_air12)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert12);
					$data_insert13 = array(
						"id" => $liquid13,
						"tanggal" => $tanggal13,
						"well_name" => $well13,
						"choke" => floatval($choke13),
						"blpd" => floatval($blpd13),
						"bopd" => floatval($bopd13),
						"kadar_air" =>floatval( $kadar_air13)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert13);
					$data_insert14 = array(
						"id" => $liquid14,
						"tanggal" => $tanggal14,
						"well_name" => $well14,
						"choke" => floatval($choke14),
						"blpd" => floatval($blpd14),
						"bopd" => floatval($bopd14),
						"kadar_air" =>floatval( $kadar_air14)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert14);
					$data_insert15 = array(
						"id" => $liquid15,
						"tanggal" => $tanggal15,
						"well_name" => $well15,
						"choke" => floatval($choke15),
						"blpd" => floatval($blpd15),
						"bopd" => floatval($bopd15),
						"kadar_air" =>floatval( $kadar_air15)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert15);
					$data_insert16 = array(
						"id" => $liquid16,
						"tanggal" => $tanggal16,
						"well_name" => $well16,
						"choke" => floatval($choke16),
						"blpd" => floatval($blpd16),
						"bopd" => floatval($bopd16),
						"kadar_air" =>floatval( $kadar_air16)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert16);
					$data_insert17 = array(
						"id" => $liquid17,
						"tanggal" => $tanggal17,
						"well_name" => $well17,
						"choke" => floatval($choke17),
						"blpd" => floatval($blpd17),
						"bopd" => floatval($bopd17),
						"kadar_air" =>floatval( $kadar_air17)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert17);
					$data_insert18 = array(
						"id" => $liquid18,
						"tanggal" => $tanggal18,
						"well_name" => $well18,
						"choke" => floatval($choke18),
						"blpd" => floatval($blpd18),
						"bopd" => floatval($bopd18),
						"kadar_air" =>floatval( $kadar_air18)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert18);
					$data_insert19 = array(
						"id" => $liquid19,
						"tanggal" => $tanggal19,
						"well_name" => $well19,
						"choke" => floatval($choke19),
						"blpd" => floatval($blpd19),
						"bopd" => floatval($bopd19),
						"kadar_air" =>floatval( $kadar_air19)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert19);
					$data_insert20 = array(
						"id" => $liquid20,
						"tanggal" => $tanggal20,
						"well_name" => $well20,
						"choke" => floatval($choke20),
						"blpd" => floatval($blpd20),
						"bopd" => floatval($bopd20),
						"kadar_air" =>floatval( $kadar_air20)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert20);
					$data_insert21 = array(
						"id" => $liquid21,
						"tanggal" => $tanggal21,
						"well_name" => $well21,
						"choke" => floatval($choke21),
						"blpd" => floatval($blpd21),
						"bopd" => floatval($bopd21),
						"kadar_air" =>floatval( $kadar_air21)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert21);
					$data_insert22 = array(
						"id" => $liquid22,
						"tanggal" => $tanggal22,
						"well_name" => $well22,
						"choke" => floatval($choke22),
						"blpd" => floatval($blpd22),
						"bopd" => floatval($bopd22),
						"kadar_air" =>floatval( $kadar_air22)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert22);
					$data_insert23 = array(
						"id" => $liquid23,
						"tanggal" => $tanggal23,
						"well_name" => $well23,
						"choke" => floatval($choke23),
						"blpd" => floatval($blpd23),
						"bopd" => floatval($bopd23),
						"kadar_air" =>floatval( $kadar_air23)
					
					);
					$this->Model->insert_data("produksi_liquid",$data_insert23);

					//update counter
					$total_liquid+=23;
					$data_update = array(
						"liquid" => $total_liquid
					);
					$this->db->update("counter", $data_update);

					$counter_gas = $this->Model->getCounterGas();
					foreach ($counter_gas->result_array() as $counter) {
						$total_gas = $counter['gas'];
					}

					$total1 = $hp_scrubber1 + $lp1;
					$total2 = $hp_scrubber2 + $lp2;
					$total3 = $hp_scrubber3 + $lp3;
					$total4 = $hp_scrubber4 + $lp4;
					$total5 = $hp_scrubber5 + $lp5;
					$total6 = $hp_scrubber6 + $lp6;
					$total7 = $hp_scrubber7 + $lp7;
					$total8 = $hp_scrubber8 + $lp8;
					$total9 = $hp_scrubber9 + $lp9;
					$total10 = $hp_scrubber10 + $lp10;
					$total11 = $hp_scrubber11 + $lp11;
					$total12 = $hp_scrubber12 + $lp12;
					$total13 = $hp_scrubber13 + $lp13;
					$total14 = $hp_scrubber14 + $lp14;
					$total15 = $hp_scrubber15 + $lp15;
					$total16 = $hp_scrubber16 + $lp16;
					$total17 = $hp_scrubber17 + $lp17;
					$total18 = $hp_scrubber18 + $lp18;
					$total19 = $hp_scrubber19 + $lp19;
					$total20 = $hp_scrubber20 + $lp20;
					$total21 = $hp_scrubber21 + $lp21;
					$total22 = $hp_scrubber22 + $lp22;
					$total23 = $hp_scrubber23 + $lp23;

					$data_insert24 = array(
						"id" => $liquid1,
						"tanggal" => $tanggal1,
						"well_name" => $well1,
						"choke" => floatval($choke1),
						"hp_scrubber" => floatval($hp_scrubber1),
						"lp" => floatval($lp1),
						"total" =>floatval( $total1)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert24);

					$data_insert25 = array(
						"id" => $liquid2,
						"tanggal" => $tanggal2,
						"well_name" => $well2,
						"choke" => floatval($choke2),
						"hp_scrubber" => floatval($hp_scrubber2),
						"lp" => floatval($lp2),
						"total" =>floatval( $total2)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert25);
					$data_insert26 = array(
						"id" => $liquid3,
						"tanggal" => $tanggal3,
						"well_name" => $well3,
						"choke" => floatval($choke3),
						"hp_scrubber" => floatval($hp_scrubber3),
						"lp" => floatval($lp3),
						"total" =>floatval( $total3)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert26);
					$data_insert27 = array(
						"id" => $liquid4,
						"tanggal" => $tanggal4,
						"well_name" => $well4,
						"choke" => floatval($choke4),
						"hp_scrubber" => floatval($hp_scrubber4),
						"lp" => floatval($lp4),
						"total" =>floatval( $total4)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert27);
					$data_insert28 = array(
						"id" => $liquid5,
						"tanggal" => $tanggal5,
						"well_name" => $well5,
						"choke" => floatval($choke5),
						"hp_scrubber" => floatval($hp_scrubber5),
						"lp" => floatval($lp5),
						"total" =>floatval( $total5)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert28);
					$data_insert29 = array(
						"id" => $liquid6,
						"tanggal" => $tanggal6,
						"well_name" => $well6,
						"choke" => floatval($choke6),
						"hp_scrubber" => floatval($hp_scrubber6),
						"lp" => floatval($lp6),
						"total" =>floatval( $total6)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert29);
					$data_insert30 = array(
						"id" => $liquid7,
						"tanggal" => $tanggal7,
						"well_name" => $well7,
						"choke" => floatval($choke7),
						"hp_scrubber" => floatval($hp_scrubber7),
						"lp" => floatval($lp7),
						"total" =>floatval( $total7)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert30);
					$data_insert31 = array(
						"id" => $liquid8,
						"tanggal" => $tanggal8,
						"well_name" => $well8,
						"choke" => floatval($choke8),
						"hp_scrubber" => floatval($hp_scrubber8),
						"lp" => floatval($lp8),
						"total" =>floatval( $total8)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert31);
					$data_insert32 = array(
						"id" => $liquid9,
						"tanggal" => $tanggal9,
						"well_name" => $well9,
						"choke" => floatval($choke9),
						"hp_scrubber" => floatval($hp_scrubber9),
						"lp" => floatval($lp9),
						"total" =>floatval( $total9)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert32);
					$data_insert33 = array(
						"id" => $liquid10,
						"tanggal" => $tanggal10,
						"well_name" => $well10,
						"choke" => floatval($choke10),
						"hp_scrubber" => floatval($hp_scrubber10),
						"lp" => floatval($lp10),
						"total" =>floatval( $total10)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert33);
					$data_insert34 = array(
						"id" => $liquid11,
						"tanggal" => $tanggal11,
						"well_name" => $well11,
						"choke" => floatval($choke11),
						"hp_scrubber" => floatval($hp_scrubber11),
						"lp" => floatval($lp11),
						"total" =>floatval( $total11)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert34);
					$data_insert35 = array(
						"id" => $liquid12,
						"tanggal" => $tanggal12,
						"well_name" => $well12,
						"choke" => floatval($choke12),
						"hp_scrubber" => floatval($hp_scrubber12),
						"lp" => floatval($lp12),
						"total" =>floatval( $total12)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert35);
					$data_insert36 = array(
						"id" => $liquid13,
						"tanggal" => $tanggal13,
						"well_name" => $well13,
						"choke" => floatval($choke13),
						"hp_scrubber" => floatval($hp_scrubber13),
						"lp" => floatval($lp13),
						"total" =>floatval( $total13)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert36);
					$data_insert37 = array(
						"id" => $liquid14,
						"tanggal" => $tanggal14,
						"well_name" => $well14,
						"choke" => floatval($choke14),
						"hp_scrubber" => floatval($hp_scrubber14),
						"lp" => floatval($lp14),
						"total" =>floatval( $total14)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert37);
					$data_insert38 = array(
						"id" => $liquid15,
						"tanggal" => $tanggal15,
						"well_name" => $well15,
						"choke" => floatval($choke15),
						"hp_scrubber" => floatval($hp_scrubber15),
						"lp" => floatval($lp15),
						"total" =>floatval( $total15)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert38);
					$data_insert39 = array(
						"id" => $liquid16,
						"tanggal" => $tanggal16,
						"well_name" => $well16,
						"choke" => floatval($choke16),
						"hp_scrubber" => floatval($hp_scrubber16),
						"lp" => floatval($lp16),
						"total" =>floatval( $total16)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert39);
					$data_insert40 = array(
						"id" => $liquid17,
						"tanggal" => $tanggal17,
						"well_name" => $well17,
						"choke" => floatval($choke17),
						"hp_scrubber" => floatval($hp_scrubber17),
						"lp" => floatval($lp17),
						"total" =>floatval( $total7)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert40);
					$data_insert41 = array(
						"id" => $liquid18,
						"tanggal" => $tanggal18,
						"well_name" => $well18,
						"choke" => floatval($choke18),
						"hp_scrubber" => floatval($hp_scrubber18),
						"lp" => floatval($lp18),
						"total" =>floatval( $total18)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert41);
					$data_insert42 = array(
						"id" => $liquid19,
						"tanggal" => $tanggal19,
						"well_name" => $well19,
						"choke" => floatval($choke19),
						"hp_scrubber" => floatval($hp_scrubber19),
						"lp" => floatval($lp19),
						"total" =>floatval( $total19)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert42);
					$data_insert43 = array(
						"id" => $liquid20,
						"tanggal" => $tanggal20,
						"well_name" => $well20,
						"choke" => floatval($choke20),
						"hp_scrubber" => floatval($hp_scrubber20),
						"lp" => floatval($lp20),
						"total" =>floatval( $total20)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert43);
					$data_insert44 = array(
						"id" => $liquid21,
						"tanggal" => $tanggal21,
						"well_name" => $well21,
						"choke" => floatval($choke21),
						"hp_scrubber" => floatval($hp_scrubber21),
						"lp" => floatval($lp21),
						"total" =>floatval( $total21)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert44);
					$data_insert45 = array(
						"id" => $liquid22,
						"tanggal" => $tanggal22,
						"well_name" => $well22,
						"choke" => floatval($choke22),
						"hp_scrubber" => floatval($hp_scrubber22),
						"lp" => floatval($lp22),
						"total" =>floatval( $total22)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert45);
					$data_insert46 = array(
						"id" => $liquid23,
						"tanggal" => $tanggal23,
						"well_name" => $well23,
						"choke" => floatval($choke23),
						"hp_scrubber" => floatval($hp_scrubber23),
						"lp" => floatval($lp23),
						"total" =>floatval( $total23)
					
					);
					$this->Model->insert_data("produksi_gas",$data_insert46);
					
					//update counter
					$total_gas+=23;
					$data_update2 = array(
						"gas" => $total_gas
					);
					$this->db->update("counter", $data_update2);


					$counter_pt = $this->Model->getCounterPt();
					foreach ($counter_pt->result_array() as $counter) {
						$total_pt = $counter['pt'];
					}

					$data_insert47 = array(
						"id" => $liquid1,
						"tanggal" => $tanggal1,
						"well_name" => $well1,
						"choke" => floatval($choke1),
						"thp" => floatval($thp1),
						"fl" => floatval($fl1),
						"chp" =>floatval( $chp1),
						"temp" =>floatval( $temp1)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert47);

					$data_insert48 = array(
						"id" => $liquid2,
						"tanggal" => $tanggal2,
						"well_name" => $well2,
						"choke" => floatval($choke2),
						"thp" => floatval($thp2),
						"fl" => floatval($fl2),
						"chp" =>floatval( $chp2),
						"temp" =>floatval( $temp2)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert48);

					$data_insert49 = array(
						"id" => $liquid3,
						"tanggal" => $tanggal3,
						"well_name" => $well3,
						"choke" => floatval($choke3),
						"thp" => floatval($thp3),
						"fl" => floatval($fl3),
						"chp" =>floatval( $chp3),
						"temp" =>floatval( $temp3)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert49);

					$data_insert50 = array(
						"id" => $liquid4,
						"tanggal" => $tanggal4,
						"well_name" => $well4,
						"choke" => floatval($choke4),
						"thp" => floatval($thp4),
						"fl" => floatval($fl4),
						"chp" =>floatval( $chp4),
						"temp" =>floatval( $temp4)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert50);

					$data_insert51 = array(
						"id" => $liquid5,
						"tanggal" => $tanggal5,
						"well_name" => $well5,
						"choke" => floatval($choke5),
						"thp" => floatval($thp5),
						"fl" => floatval($fl5),
						"chp" =>floatval( $chp5),
						"temp" =>floatval( $temp5)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert51);

					$data_insert52 = array(
						"id" => $liquid6,
						"tanggal" => $tanggal6,
						"well_name" => $well6,
						"choke" => floatval($choke6),
						"thp" => floatval($thp6),
						"fl" => floatval($fl6),
						"chp" =>floatval( $chp6),
						"temp" =>floatval( $temp6)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert52);

					$data_insert53 = array(
						"id" => $liquid7,
						"tanggal" => $tanggal7,
						"well_name" => $well7,
						"choke" => floatval($choke7),
						"thp" => floatval($thp7),
						"fl" => floatval($fl7),
						"chp" =>floatval( $chp7),
						"temp" =>floatval( $temp7)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert53);

					$data_insert54 = array(
						"id" => $liquid8,
						"tanggal" => $tanggal8,
						"well_name" => $well8,
						"choke" => floatval($choke8),
						"thp" => floatval($thp8),
						"fl" => floatval($fl8),
						"chp" =>floatval( $chp8),
						"temp" =>floatval( $temp8)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert54);

					$data_insert55 = array(
						"id" => $liquid9,
						"tanggal" => $tanggal9,
						"well_name" => $well9,
						"choke" => floatval($choke9),
						"thp" => floatval($thp9),
						"fl" => floatval($fl9),
						"chp" =>floatval( $chp9),
						"temp" =>floatval( $temp9)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert55);

					$data_insert56 = array(
						"id" => $liquid10,
						"tanggal" => $tanggal10,
						"well_name" => $well10,
						"choke" => floatval($choke10),
						"thp" => floatval($thp10),
						"fl" => floatval($fl10),
						"chp" =>floatval( $chp10),
						"temp" =>floatval( $temp10)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert56);

					$data_insert57 = array(
						"id" => $liquid11,
						"tanggal" => $tanggal11,
						"well_name" => $well11,
						"choke" => floatval($choke11),
						"thp" => floatval($thp11),
						"fl" => floatval($fl11),
						"chp" =>floatval( $chp11),
						"temp" =>floatval( $temp11)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert57);

					$data_insert58 = array(
						"id" => $liquid12,
						"tanggal" => $tanggal12,
						"well_name" => $well12,
						"choke" => floatval($choke12),
						"thp" => floatval($thp12),
						"fl" => floatval($fl12),
						"chp" =>floatval( $chp12),
						"temp" =>floatval( $temp12)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert58);

					$data_insert59 = array(
						"id" => $liquid13,
						"tanggal" => $tanggal13,
						"well_name" => $well13,
						"choke" => floatval($choke13),
						"thp" => floatval($thp13),
						"fl" => floatval($fl13),
						"chp" =>floatval( $chp13),
						"temp" =>floatval( $temp13)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert59);

					$data_insert60 = array(
						"id" => $liquid14,
						"tanggal" => $tanggal14,
						"well_name" => $well14,
						"choke" => floatval($choke14),
						"thp" => floatval($thp14),
						"fl" => floatval($fl14),
						"chp" =>floatval( $chp14),
						"temp" =>floatval( $temp14)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert60);

					$data_insert61 = array(
						"id" => $liquid15,
						"tanggal" => $tanggal15,
						"well_name" => $well15,
						"choke" => floatval($choke15),
						"thp" => floatval($thp15),
						"fl" => floatval($fl15),
						"chp" =>floatval( $chp15),
						"temp" =>floatval( $temp15)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert61);

					$data_insert62 = array(
						"id" => $liquid16,
						"tanggal" => $tanggal16,
						"well_name" => $well16,
						"choke" => floatval($choke16),
						"thp" => floatval($thp16),
						"fl" => floatval($fl16),
						"chp" =>floatval( $chp16),
						"temp" =>floatval( $temp16)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert62);

					$data_insert63 = array(
						"id" => $liquid17,
						"tanggal" => $tanggal17,
						"well_name" => $well17,
						"choke" => floatval($choke17),
						"thp" => floatval($thp17),
						"fl" => floatval($fl17),
						"chp" =>floatval( $chp17),
						"temp" =>floatval( $temp17)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert63);

					$data_insert64 = array(
						"id" => $liquid18,
						"tanggal" => $tanggal18,
						"well_name" => $well18,
						"choke" => floatval($choke18),
						"thp" => floatval($thp18),
						"fl" => floatval($fl18),
						"chp" =>floatval( $chp18),
						"temp" =>floatval( $temp18)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert64);

					$data_insert65 = array(
						"id" => $liquid19,
						"tanggal" => $tanggal19,
						"well_name" => $well19,
						"choke" => floatval($choke19),
						"thp" => floatval($thp19),
						"fl" => floatval($fl19),
						"chp" =>floatval( $chp19),
						"temp" =>floatval( $temp19)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert65);

					$data_insert66 = array(
						"id" => $liquid20,
						"tanggal" => $tanggal20,
						"well_name" => $well20,
						"choke" => floatval($choke20),
						"thp" => floatval($thp20),
						"fl" => floatval($fl20),
						"chp" =>floatval( $chp20),
						"temp" =>floatval( $temp20)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert66);

					$data_insert67 = array(
						"id" => $liquid21,
						"tanggal" => $tanggal21,
						"well_name" => $well21,
						"choke" => floatval($choke21),
						"thp" => floatval($thp21),
						"fl" => floatval($fl21),
						"chp" =>floatval( $chp21),
						"temp" =>floatval( $temp21)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert67);

					$data_insert68 = array(
						"id" => $liquid22,
						"tanggal" => $tanggal22,
						"well_name" => $well22,
						"choke" => floatval($choke22),
						"thp" => floatval($thp22),
						"fl" => floatval($fl22),
						"chp" =>floatval( $chp22),
						"temp" =>floatval( $temp22)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert68);

					$data_insert69 = array(
						"id" => $liquid23,
						"tanggal" => $tanggal23,
						"well_name" => $well23,
						"choke" => floatval($choke23),
						"thp" => floatval($thp23),
						"fl" => floatval($fl23),
						"chp" =>floatval( $chp23),
						"temp" =>floatval( $temp23)
					
					);
					$this->Model->insert_data("pressure_temperature",$data_insert69);

					//update counter
					$total_pt+=23;
					$data_update3 = array(
						"pt" => $total_pt
					);
					$this->db->update("counter", $data_update3);

					$sumur = $this->Model->getSumurAll();

					$alert = "<script>
							alert('Input Success!!');
							window.location.href='".base_url()."index.php/data';
							</script>";
					
					$data = array(
						'alert' => $alert,
						'sumur' => $sumur,
						'session' => $_SESSION['login'],
						'page' => 'notification',
						'link' => 'input_data'
					);
				}
			}else{
				$alert = "<script>
							alert('Data sumur tidak boleh sama!!');
							window.location.href='".base_url()."index.php/data';
							</script>";
				$data = array(
					'alert' => $alert,
					'session' => $_SESSION['login'],
					'page' => 'notification',
					'link' => 'input_data'
				);
			}
		}
		
		$this->load->view('template/wrapper', $data);
    }

    public function input_liquid(){
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
			$val="true";
			$query = $this->Model->getProduksiLiquid();
			foreach ($query->result_array() as $query) {
				if($query['well_name']==$well && $query['tanggal']==$tanggal){
					$val = "false";
				}
			}

			if ($val=="true"){
				if ($tanggal == null || $choke==null || $blpd==null || $bopd==null ){
					$alert = "<script>
							alert('Data Tidak boleh kosong!!');
							window.location.href='".base_url()."index.php/data';
							</script>";
					$data = array(
						'alert' => $alert,
						'session' => $_SESSION['login'],
						'page' => 'notification',
						'link' => 'produksi_liquid'
					);
				}else{
					$counter = $this->Model->getCounterLiquid();
					foreach ($counter->result_array() as $counter) {
						$id = $counter['liquid'];
					}
					$kadar_air = (($blpd-$bopd)/$blpd)*100;
					$data_insert = array(
							"id" => $id,
							"tanggal" => $tanggal,
							"well_name" => $well,
							"choke" => floatval($choke),
							"blpd" => floatval($blpd),
							"bopd" => floatval($bopd),
							"kadar_air" =>floatval( $kadar_air)
						);
					$this->Model->insert_data("produksi_liquid",$data_insert);

					//update counter
					$id++;
					$data_update = array(
						"liquid" => $id
					);
					$this->db->update("counter", $data_update);

					//update status tab
					$data_update = array(
						"status" => "0"
					);
					$this->Model->update("status", "1", "tab", $data_update);

					$data_update2 = array(
						"status" => "1"
					);
					$this->Model->update("name", "produksi_liquid", "tab", $data_update2);

					$sumur = $this->Model->getSumurAll();
					$tampil = $this->Model->getProduksiLiquid();
					$data = array(
						'sumur' => $sumur,
						'tab' => "produksi_liquid",
						'tampil' => $tampil,
						'session' => $_SESSION['login'],
						'page' => 'input_data',
						'link' => 'produksi_liquid'
					);
				}
			}else{
				$alert = "<script>
							alert('Data sumur tidak boleh sama!!');
							window.location.href='".base_url()."index.php/data';
							</script>";
				$data = array(
					'alert' => $alert,
					'session' => $_SESSION['login'],
					'page' => 'notification',
					'link' => 'produksi_liquid'
				);
			}
		}
		$this->load->view('template/wrapper', $data);
    }

    public function input_gas(){
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
			$val="true";
			$query = $this->Model->getProduksiGas();
			foreach ($query->result_array() as $query) {
				if($query['well_name']==$well && $query['tanggal']==$tanggal){
					$val = "false";
				}
			}

			if ($val=="true"){
				if ($tanggal == null || $well == null || $choke==null || $hp_scrubber==null || $lp==null){
					$alert = "<script>
							alert('Data Tidak boleh kosong!!');
							window.location.href='".base_url()."index.php/data';
							</script>";
					$data = array(
						'alert' => $alert,
						'session' => $_SESSION['login'],
						'page' => 'notification',
						'link' => 'produksi_gas'
					);
				}else{
					$total = $lp + $hp_scrubber;

					$counter = $this->Model->getCounterGas();
					foreach ($counter->result_array() as $counter) {
						$id = $counter['gas'];
					}
					$data_insert = array(
							"id" => $id,
							"tanggal" => $tanggal,
							"well_name" => $well,
							"choke" => floatval($choke),
							"hp_scrubber" => floatval($hp_scrubber),
							"lp" => floatval($lp),
							"total" =>floatval($total)
						);
					$this->Model->insert_data("produksi_gas",$data_insert);

					//update counter
					$id++;
					$data_update = array(
						"gas" => $id
					);
					$this->db->update("counter", $data_update);

					//update status tab
					$data_update = array(
						"status" => "0",
					);
					$this->Model->update('status', '1', 'tab', $data_update);

					$data_update2 = array(
						"status" => "1",
					);
					$this->Model->update('name', 'produksi_gas', 'tab', $data_update2);

					$sumur = $this->Model->getSumurAll();
					$tampil = $this->Model->getProduksiGas();
					$data = array(
						'sumur' => $sumur,
						'tampil' => $tampil,
						'tab' => "produksi_gas",
						'session' => $_SESSION['login'],
						'page' => 'input_data',
						'link' => 'produksi_gas'
					);
				}
			}else{
				$alert = "<script>
							alert('Data sumur tidak boleh sama!!');
							window.location.href='".base_url()."index.php/data';
							</script>";
				$data = array(
					'alert' => $alert,
					'session' => $_SESSION['login'],
					'page' => 'notification',
					'link' => 'produksi_gas'
				);
			}
		}	
		$this->load->view('template/wrapper', $data);
    }

    public function input_presstemp(){
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
			$val="true";
			$query = $this->Model->getPressureTemperature();
			foreach ($query->result_array() as $query) {
				if($query['well_name']==$well && $query['tanggal']==$tanggal){
					$val = "false";
				}
			}

			if ($val=="true"){
				if ($tanggal == null || $well == null || $choke==null || $thp==null || $fl==null || $chp==null || $temp==null){
					$alert = "<script>
							alert('Data Tidak boleh kosong!!');
							window.location.href='".base_url()."index.php/data';
							</script>";
					$data = array(
						'alert' => $alert,
						'session' => $_SESSION['login'],
						'page' => 'notification',
						'link' => 'press_temp'
					);
				}else{
					$counter = $this->Model->getCounterPt();
					foreach ($counter->result_array() as $counter) {
						$id = $counter['pt'];
					}
					$data_insert = array(
							"id" => $id,
							"tanggal" => $tanggal,
							"well_name" => $well,
							"choke" => floatval($choke),
							"thp" => floatval($thp),
							"fl" => floatval($fl),
							"chp" =>floatval( $chp),
							"temp" =>floatval( $temp)
						);
					$this->Model->insert_data("pressure_temperature",$data_insert);

					//update counter
					$id++;
					$data_update = array(
						"pt" => $id
					);
					$this->db->update("counter", $data_update);

					//update status tab
					$data_update = array(
						"status" => "0",
					);
					$this->Model->update('status', '1', 'tab', $data_update);

					$data_update2 = array(
						"status" => "1",
					);
					$this->Model->update('name', 'press_temp', 'tab', $data_update2);

					$sumur = $this->Model->getSumurAll();
					$tampil = $this->Model->getPressureTemperature();
					$data = array(
						'sumur' => $sumur,
						'tampil' => $tampil,
						'tab' => "press_temp",
						'session' => $_SESSION['login'],
						'page' => 'input_data',
						'link' => 'press_temp'
					);
				}
			}else{
				$alert = "<script>
							alert('Data sumur tidak boleh sama!!');
							window.location.href='".base_url()."index.php/data';
							</script>";
				$data = array(
					'alert' => $alert,
					'session' => $_SESSION['login'],
					'page' => 'notification',
					'link' => 'press_temp'
				);
			}
		}
		$this->load->view('template/wrapper', $data);
    }

    public function input_sas(){
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
			$val="true";
			$query = $this->Model->getSAS();
			foreach ($query->result_array() as $query) {
				if($query['tanggal'] == $tanggal){
					$val = "false";
				}
				
			}

			if ($val=="true"){
				if ($tanggal == null || $oil==null || $gas==null){
					$alert = "<script>
							alert('Data Tidak boleh kosong!!');
							window.location.href='".base_url()."index.php/data';
							</script>";
					$data = array(
						'alert' => $alert,
						'session' => $_SESSION['login'],
						'page' => 'notification',
						'link' => 'sas'
					);
				}else{
					$counter = $this->Model->getCounterSAS();
					foreach ($counter->result_array() as $counter) {
						$id = $counter['sas'];
					}
					$data_insert = array(
						"id" => $id,	
						"tanggal" => $tanggal,
						"gas" =>floatval( $gas),
						"oil" =>floatval( $oil)
					);
					$this->Model->insert_data("SAS",$data_insert);
					
					//update counter
					$id++;
					$data_update = array(
						"sas" => $id
					);
					$this->db->update("counter", $data_update);

					//update status tab
					$data_update = array(
						"status" => "0",
					);
					$this->Model->update('status', '1', 'tab', $data_update);

					$data_update2 = array(
						"status" => "1",
					);
					$this->Model->update('name', 'sas', 'tab', $data_update2);

					$tampil = $this->Model->getSAS();
			
					$data = array(		
						'tampil' => $tampil,
						'tab' => "sas",
						'session' => $_SESSION['login'],
						'page' => 'input_data',
						'link' => 'sas'
					);
				}
			}else{
				$alert = "<script>
							alert('Data tanggal tidak boleh sama!!');
							window.location.href='".base_url()."index.php/data';
							</script>";
				$data = array(
					'alert' => $alert,
					'session' => $_SESSION['login'],
					'page' => 'notification',
					'link' => 'sas'
				);
			}
		}
		$this->load->view('template/wrapper', $data);
    }

    public function tab_liquid(){
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
			$this->load->view('template/wrapper', $data);
		}else{
	    	$produksi_liquid = $this->Model->getProduksiLiquid();
			$session = $_SESSION['login'];
			$sumur = $this->Model->getSumurAll();

			$data = array(
				'tampil' => $produksi_liquid,
				'sumur' => $sumur,
				'session' => $session,
				'page' => 'ajax_produksi_liquid',
				'link' => 'produksi_liquid'
			);
			
			$this->load->view('ajax_produksi_liquid', $data);
		}
	}

	public function tab_gas(){
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
			$this->load->view('template/wrapper', $data);
		}else{
			$produksi_gas = $this->Model->getProduksiGas();
			$session = $_SESSION['login'];
			$sumur = $this->Model->getSumurAll();
			$data = array(
				'tampil' => $produksi_gas,
				'sumur' => $sumur,
				'session' => $session,
				'page' => 'ajax_produksi_gas',
				'link' => 'produksi_gas'
			);
			
			$this->load->view('ajax_produksi_gas', $data);
		}
	}
	
	public function tab_presstemp(){
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
			$this->load->view('template/wrapper', $data);
		}else{
			$pt = $this->Model->getPressureTemperature();
			$session = $_SESSION['login'];
			$sumur = $this->Model->getSumurAll();
			$data = array(
				'tampil' => $pt,
				'sumur' => $sumur,
				'session' => $session,
				'page' => 'ajax_pressure_temperature',
				'link' => 'press_temp'
			);
			
			$this->load->view('ajax_pressure_temperature', $data);
		}
	}

	public function tab_sas(){
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
			$this->load->view('template/wrapper', $data);
		}else{
			$sas = $this->Model->getSAS();
			$session = $_SESSION['login'];
			$data = array(
				'tampil' => $sas,
				'session' => $session,
				'page' => 'ajax_sas',
				'link' => 'sas'
			);
			
			$this->load->view('ajax_sas', $data);
		}
	}

	public function delete_data_pt(){
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
			$this->load->view('template/wrapper', $data);
		}else{
			extract ($_GET);

			$query_delete = $this->Model->deleteData("id",$id,"pressure_temperature");
			$session = $_SESSION['login'];
			$sumur = $this->Model->getSumurAll();
			$pt = $this->Model->getPressureTemperature();
			$data = array(
				'tampil' => $pt,
				'sumur' => $sumur,
				'session' => $session,
				'page' => 'ajax_list_press_temp',
				'link' => 'press_temp'
			);

			$this->load->view('ajax_list_press_temp', $data);
		}
				
	}

	public function delete_data_gas(){
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
			$this->load->view('template/wrapper', $data);
		}else{
			extract ($_GET);

			$query_delete = $this->Model->deleteData("id",$id,"produksi_gas");
			$session = $_SESSION['login'];
			$sumur = $this->Model->getSumurAll();
			$produksi_gas = $this->Model->getProduksiGas();
			$data = array(
				'tampil' => $produksi_gas,
				'sumur' => $sumur,
				'session' => $session,
				'page' => 'ajax_list_gas',
				'link' => 'produksi_gas'
			);

			$this->load->view('ajax_list_gas', $data);
		}
				
	}

	public function delete_data_liquid(){
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
			$this->load->view('template/wrapper', $data);
		}else{
			extract ($_GET);

			$query_delete = $this->Model->deleteData("id",$id,"produksi_liquid");
			$session = $_SESSION['login'];
			$sumur = $this->Model->getSumurAll();
			$produksi_liquid = $this->Model->getProduksiLiquid();
			$data = array(
				'tampil' => $produksi_liquid,
				'sumur' => $sumur,
				'session' => $session,
				'page' => 'ajax_list_liquid',
				'link' => 'produksi_liquid'
			);

			$this->load->view('ajax_list_liquid', $data);
		}
				
	}

	public function delete_data_sas(){
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
			$this->load->view('template/wrapper', $data);
		}else{
			extract ($_GET);

			$query_delete = $this->Model->deleteData("id",$id,"SAS");
			$session = $_SESSION['login'];
			$data_sas = $this->Model->getSAS();
			$data = array(
				'tampil' => $data_sas,
				'session' => $session,
				'page' => 'ajax_list_sas',
				'link' => 'sas'
			);

			$this->load->view('ajax_list_sas', $data);
		}
				
	}

	public function update_data(){
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

			$alert = "<script>
						alert('update success!!');
						</script>";
			
			$data = array(
				'id_liquid' => $id_liquid,
				'id_gas' => $id_gas,
				'id_pt' => $id_pt,
				'blpd' => $blpd,
				'bopd' => $bopd,
				'kadar_air' => $kadar_air,
				'hp_scrubber' => $hp_scrubber,
				'lp' => $lp,
				'total' => $total,
				'thp' => $thp,
				'fl' => $fl,
				'chp' => $chp,
				'temp' => $temp,
				'alert' => $alert,
				'session' => $_SESSION['login'],
				'page' => 'notification',
				'link' => 'edit_data'
			);
		}	
		$this->load->view('template/wrapper', $data);
	}
}