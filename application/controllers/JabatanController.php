<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class JabatanController extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('JabatanModel');
		$this->load->helper('nominal');
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function index(){
		$data = array(
			'jabatan' => $this->JabatanModel->lihat_jabatan(),
			'title' => 'Jabatan'
		);
		$this->load->view('templates/header',$data);
		$this->load->view('backend/jabatan/index',$data);
		$this->load->view('templates/footer');
	}

	public function tambah(){
		if (isset($_POST['simpan'])){
			$generate = substr(time(), 5);
			$id = 'JAB-' . $generate;
			$jabatan = $this->input->post('jabatan');
			$gaji = $this->input->post('gaji');
			$data = array(
				'jabatan_id' => $id,
				'jabatan_nama' => $jabatan,
				'jabatan_gaji' => $gaji
			);
			$save = $this->JabatanModel->tambah_jabatan($data);
			if ($save>0){
				$this->session->set_flashdata('alert', 'tambah_jabatan');
				redirect('jabatan');
			}
			else{
				redirect('jabatan');
			}
		}
	}

	public function updateForm($id){
		$data = $this->JabatanModel->lihat_satu_jabatan($id);
		echo json_encode($data);
	}

	public function update(){
		if (isset($_POST['update'])){
			$id = $this->input->post('id');
			$jabatan = $this->input->post('jabatan');
			$gaji = $this->input->post('gaji');
			$data = array(
				'jabatan_nama' => $jabatan,
				'jabatan_gaji' => $gaji
			);
			$update = $this->JabatanModel->update_jabatan($id,$data);
			if ($update > 0){
				$this->session->set_flashdata('alert', 'update_jabatan');
				redirect('jabatan');
			}
			else{
				redirect('jabatan');
			}
		}
	}

	public function hapus($id){
		$hapus = $this->JabatanModel->hapus_jabatan($id);
		if ($hapus > 0){
			$this->session->set_flashdata('alert', 'hapus_jabatan');
			redirect('jabatan');
		}else{
			redirect('jabatan');
		}
	}
}
