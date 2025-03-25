<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class PinjamController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$model = array('PinjamModel');
		$helper = array('tgl_indo','nominal');
		$this->load->model($model);
		$this->load->helper($helper);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function index(){
		$data = array(
			'pinjam' => $this->PinjamModel->lihat_pinjaman(),
			'title' => 'Pinjaman'
		);
		$this->load->view('templates/header',$data);
		$this->load->view('backend/pinjam/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		if (isset($_POST['simpan'])){
			$generate = substr(time(), 5);
			$id = 'PJM-' . $generate;
			$nama = $this->input->post('nama');
			$jumlah = $this->input->post('jumlah');
			$keterangan = $this->input->post('keterangan');
			$data = array(
				'pinjam_id' => $id,
				'pinjam_karyawan_id' => $nama,
				'pinjam_jumlah' => $jumlah,
				'keterangan' => $keterangan,
			);
			$save = $this->PinjamModel->tambah_pinjaman($data);
			if ($save>0){
				$this->session->set_flashdata('alert', 'tambah_pinjam');
				redirect('pinjam');
			}
			else{
				redirect('pinjam');
			}
		}
	}
}