<?php


class Model extends CI_Model {
    /*
    function simpan_data($data, $table){
        $this->db->insert($table,$data);
        return true;
    }
    
    function list_data($table, $limit, $start){
         return $query = $this->db->get($table, $limit, $start)->result();  
    }
	
    function list_data_all($table){
         return $query = $this->db->get($table);  
    }
    
    function hitung($param_id, $id, $table){
        return $this->db->get_where($table, array($param_id => $id))->num_rows();
    }
    
    function hapus($param_id, $id, $table){
        $this->db->delete($table, array($param_id => $id)); 
        return true;
    }
    
    function ambil($param_id, $id, $table){
       return $this->db->get_where($table, array($param_id => $id));
    }
    
    function update($param_id, $id, $table, $data){       
        $this->db->where($param_id, $id);
        $this->db->update($table, $data); 
        return true;
    }

    function autocomplete($table, $param_table, $id){
        //$this->db->order_by('id', 'DESC');
        $this->db->like($param_table, $id);
        $this->db->limit(5);
        return $this->db->get($table);
    }
	
	public function getProfileMhs($nim)
	{	
		return $data = $this->db->select("*")
							->from("mahasiswa")
							->join("data_alamat","mahasiswa.nim = data_alamat.nim")
							->where("mahasiswa.nim",$nim)
							->get();
	
	}
	
	public function getProdiAll()
	{	
		return $data = $this->db->select("nama")
							->from("prodi")
							->get();
	
	}
	
	public function getNamaMhs($email)
	{	
		return $data = $this->db->select("username")
							->from("mahasiswa")
							->where("email",$email)
							->get();
	
	}
	
	public function getNamaAdm($email)
	{	
		return $data = $this->db->select("username")
							->from("admin")
							->where("email",$email)
							->get();
	
	}
	
	public function getUsernameAdm($username)
	{	
		return $data = $this->db->select("username")
							->from("admin")
							->where("username",$username)
							->get();
	
	}
	
	public function getEmailAdm($email)
	{	
		return $data = $this->db->select("email")
							->from("admin")
							->where("email",$email)
							->get();
	
	}
	
	public function getNim($email)
	{	
		return $data = $this->db->select("nim")
							->from("mahasiswa")
							->where("email",$email)
							->get();
	
	}
	
	public function getPassMhs($email)
	{	
		return $data = $this->db->select("password")
							->from("mahasiswa")
							->where("email",$email)
							->get();
	
	}
	
	public function getIdProdi($prodi)
	{	
		return $data = $this->db->select("id")
							->from("prodi")
							->where("nama",$prodi)
							->get();
	
	}
	
	public function getCounterLowongan($id_prodi)
	{	
		return $data = $this->db->select("counter")
							->from("lowongan_counter")
							->where("prodi",$id_prodi)
							->get();
	
	}
	
	public function getCounterSkill($id_prodi)
	{	
		return $data = $this->db->select("counter")
							->from("skill_counter")
							->where("prodi",$id_prodi)
							->get();
	
	}

	
	public function getStatusAdm($email)
	{	
		return $data = $this->db->select("status")
							->from("admin")
							->where("email",$email)
							->get();
	}
	
	public function getOwnSkill($kode)
	{	
		return $data = $this->db->select("*")
							->from("owned_skill")
							->join("skill","owned_skill.kode = skill.kode")
							->where("owned_skill.kode",$kode)
							->get();
	
	}
	*/
	public function ambil($param_id, $id, $table){
       return $this->db->get_where($table, array($param_id => $id));
    }

    public function getNameUser($id)
	{	
		return $data = $this->db->select("name")
							->from("data_user")
							->where("id",$id)
							->get();
	
	}

	public function getSubMenuAll()
	{	
		return $data = $this->db->select("*")
							->from("submenu")
							->get();
	
	}

	public function getSubMenu($id)
	{	
		return $data = $this->db->select("*")
							->from("submenu")
							->where("status",$id)
							->get();
	}

	public function update($param_id, $id, $table, $data)
	{	
		$this->db->where($param_id, $id);
        $this->db->update($table, $data); 
        return true;
	}

	function insert_data($table,$data){
        $this->db->insert($table,$data);
        return true;
    }

	public function getSumurAll()
	{	
		return $data = $this->db->select("*")
							->from("well")
							->get();
	
	}

	public function getTanggal()
	{	
		return $data = $this->db->select("tanggal")
							->from("produksi_liquid")
							->get();
	
	}

	public function getProduksiLiquid()
	{	
		return $data = $this->db->select("*")
							->from("produksi_liquid")
							->get();
	
	}

	public function getProduksiGas()
	{	
		return $data = $this->db->select("*")
							->from("produksi_gas")
							->get();
	
	}

	public function getPressureTemperature()
	{	
		return $data = $this->db->select("*")
							->from("pressure_temperature")
							->get();
	
	}

	public function getSAS()
	{	
		return $data = $this->db->select("*")
							->from("SAS")
							->get();
	
	}

	public function getTab()
	{	
		return $data = $this->db->select("*")
							->from("tab")
							->get();
	
	}

	public function getCounterLiquid()
	{	
		return $data = $this->db->select("liquid")
							->from("counter")
							->get();
	
	}

	public function getCounterGas()
	{	
		return $data = $this->db->select("gas")
							->from("counter")
							->get();
	
	}

	public function getCounterPt()
	{	
		return $data = $this->db->select("pt")
							->from("counter")
							->get();
	
	}

	public function getCounterSAS()
	{	
		return $data = $this->db->select("sas")
							->from("counter")
							->get();
	
	}

	public function deleteData($param_id, $id, $table){
        $this->db->delete($table, array($param_id => $id)); 
        return true;
    }

	public function getSasOn($tanggal)
	{	
		return $data = $this->db->select("*")
							->from("SAS")
							->where("tanggal",$tanggal)
							->get();
	
	}

}