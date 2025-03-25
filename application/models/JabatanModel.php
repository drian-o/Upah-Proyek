<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class JabatanModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_jabatan(){
		$this->db->select('*');
		$this->db->from('sigaka_jabatan');
		$this->db->order_by('jabatan_date_created','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function tambah_jabatan($data){
		$this->db->insert('sigaka_jabatan', $data);
		return $this->db->affected_rows();
	}

	public function lihat_satu_jabatan($id){
		$this->db->select('*');
		$this->db->from('sigaka_jabatan');
		$this->db->where('jabatan_id',$id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function update_jabatan($id,$data){
		$this->db->where('jabatan_id',$id);
		$this->db->update('sigaka_jabatan',$data);
		return $this->db->affected_rows();
	}

	public function hapus_jabatan($id){
		$this->db->where('jabatan_id', $id);
		$this->db->delete('sigaka_jabatan');
		return $this->db->affected_rows();
	}


}
