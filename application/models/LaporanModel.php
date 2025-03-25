<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanModel extends CI_Model{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function lihat_laporan($tanggal){
		$this->db->select('*');
		$this->db->from('sigaka_gaji');
		$this->db->join('sigaka_karyawan', 'sigaka_karyawan.karyawan_id = sigaka_gaji.gaji_karyawan_id');
		$this->db->join('sigaka_jabatan', 'sigaka_jabatan.jabatan_id = sigaka_karyawan.karyawan_jabatan_id');
		$this->db->like('gaji_tanggal',$tanggal);
		$this->db->where('gaji_status','sudah');
		$this->db->order_by('gaji_bulan_ke','DESC');
		$query = $this->db->get();
		return $query->result_array();
	}
}
