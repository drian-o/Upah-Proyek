<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class GajiModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_gaji(){
		$this->db->select('*');
		$this->db->from('sigaka_karyawan');
		$this->db->join('sigaka_jabatan', 'sigaka_jabatan.jabatan_id = sigaka_karyawan.karyawan_jabatan_id');
		$this->db->order_by('karyawan_nama','ASC');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lihat_gaji_perorang($id){
		$this->db->select('*');
		$this->db->from('sigaka_gaji');
		$this->db->join('sigaka_karyawan', 'sigaka_karyawan.karyawan_id = sigaka_gaji.gaji_karyawan_id');
		$this->db->join('sigaka_jabatan', 'sigaka_jabatan.jabatan_id = sigaka_karyawan.karyawan_jabatan_id');
		$this->db->order_by('gaji_bulan_ke','DESC');
		$this->db->order_by('karyawan_nama','ASC');
		$this->db->where('gaji_karyawan_id',$id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function lihat_satu_gaji($id){
		$this->db->select('*');
		$this->db->from('sigaka_gaji');
		$this->db->join('sigaka_karyawan', 'sigaka_karyawan.karyawan_id = sigaka_gaji.gaji_karyawan_id');
		$this->db->join('sigaka_jabatan', 'sigaka_jabatan.jabatan_id = sigaka_karyawan.karyawan_jabatan_id');
		$this->db->where('gaji_karyawan_id',$id);
		$this->db->order_by('gaji_bulan_ke','DESC');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function lihat_satu_gaji_by_id($id){
		$this->db->select('*');
		$this->db->from('sigaka_gaji');
		$this->db->join('sigaka_karyawan', 'sigaka_karyawan.karyawan_id = sigaka_gaji.gaji_karyawan_id');
		$this->db->join('sigaka_jabatan', 'sigaka_jabatan.jabatan_id = sigaka_karyawan.karyawan_jabatan_id');
//		$this->db->join('sigaka_pinjam', 'sigaka_pinjam.pinjam_karyawan_id = sigaka_gaji.gaji_karyawan_id');
		$this->db->where('gaji_id',$id);
		$this->db->order_by('gaji_bulan_ke','DESC');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function lihat_satu_gaji_pinjam($id){
		$this->db->select('*');
		$this->db->from('sigaka_gaji');
		$this->db->join('sigaka_karyawan', 'sigaka_karyawan.karyawan_id = sigaka_gaji.gaji_karyawan_id');
		$this->db->join('sigaka_jabatan', 'sigaka_jabatan.jabatan_id = sigaka_karyawan.karyawan_jabatan_id');
		$this->db->join('sigaka_pinjam', 'sigaka_pinjam.pinjam_karyawan_id = sigaka_gaji.gaji_karyawan_id');
		$this->db->where('gaji_id',$id);
		$this->db->order_by('gaji_bulan_ke','DESC');
		$query = $this->db->get();
		return $query->row_array();
	}

	public function tambah_gaji($data){
		$this->db->insert('sigaka_gaji', $data);
		return $this->db->affected_rows();
	}

	public function update_gaji($id,$data){
		$this->db->where('gaji_id', $id);
		$this->db->update('sigaka_gaji', $data);
		return $this->db->affected_rows();
	}

}
