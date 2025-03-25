<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$model = array('LaporanModel');
		$helper = array('tgl_indo_helper');
		$this->load->model($model);
		$this->load->helper($helper);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function index(){
		$data = array(
			'title' => 'Laporan'
		);
		$this->load->view('templates/header',$data);
		$this->load->view('backend/laporan/index',$data);
		$this->load->view('templates/footer');
	}

	public function lihat($tahun,$bulan){
		$tanggal = $tahun.'-'.$bulan;
		echo json_encode($this->LaporanModel->lihat_laporan($tanggal));
	}
}
