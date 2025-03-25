<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AbsenController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$model = array('KaryawanModel', 'AbsenModel', 'GajiModel');
		$helper = array('tgl_indo_helper');
		$this->load->model($model);
		$this->load->helper($helper);
		if (!$this->session->has_userdata('session_id')) {
			$this->session->set_flashdata('alert', 'belum_login');
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data = array(
			'absen' => $this->AbsenModel->lihat_absen(),
			'karyawan' => json_encode($this->KaryawanModel->lihat_karyawan()),
			'title' => 'Absen'
		);
		$this->load->view('templates/header',$data);
		$this->load->view('backend/absen/index', $data);
		$this->load->view('templates/footer');
	}

	public function tambah()
	{
		if (isset($_POST['simpan'])) {
			$generate = substr(time(), 5);
			$id = 'ABS-' . $generate;
			$nama = $this->input->post('nama');
			$hari = $this->input->post('hari');

			$data = array(
				'absen_id' => $id,
				'absen_karyawan_id' => $nama,
				'absen_hari' => $hari
			);

			$cekAbsen = $this->AbsenModel->cek_absen($nama, date('Y-m-d'));
			if ($cekAbsen == null) {

				$gaji = $this->GajiModel->lihat_satu_gaji($nama);
				$karyawan = $this->KaryawanModel->lihat_satu_karyawan($nama);
				$tgl = explode('-', $karyawan['karyawan_tanggal_gabung']);
				$tglgabung = $tgl[2];

				$karyawanId = $nama;
				$gajiTotal = $karyawan['jabatan_gaji'];
				$bulan = $gaji['gaji_bulan_ke'];

				if ($gaji == null) {
					$generate = substr(time(), 5);
					$gajiId = 'GJI-' . $generate;
					$gajiTotal = $karyawan['jabatan_gaji'];

					$dataGaji = array(
						'gaji_id' => $gajiId,
						'gaji_karyawan_id' => $karyawanId,
						'gaji_total' => $gajiTotal,
						'gaji_tanggal' => date('Y-m-d'),
						'gaji_bulan_ke' => 1
					);
					$saveGaji = $this->GajiModel->tambah_gaji($dataGaji);
				} else {
					if (date('d') == $tglgabung) {
						$generate = substr(time(), 5);
						$gajiId = 'GJI-' . $generate;
						$gajiTotal = $karyawan['jabatan_gaji'];
						$bulan = $bulan + 1;

						$dataGaji = array(
							'gaji_id' => $gajiId,
							'gaji_karyawan_id' => $karyawanId,
							'gaji_total' => $gajiTotal,
							'gaji_tanggal' => date('Y-m-d'),
							'gaji_bulan_ke' => $bulan
						);
						$saveGaji = $this->GajiModel->tambah_gaji($dataGaji);
					} else {
						$gajiId = $gaji['gaji_id'];
						$gajiTotal = $gajiTotal + $gaji['gaji_total'];
						$dataGaji = array(
							'gaji_total' => $gajiTotal,
							'gaji_tanggal' => date('Y-m-d')
						);
						$updateGaji = $this->GajiModel->update_gaji($gajiId, $dataGaji);
					}
				}

				$save = $this->AbsenModel->tambah_absen($data);

				if ($save > 0) {
					$this->session->set_flashdata('alert', 'tambah_absen');
					redirect('absen');
				} else {
					redirect('absen');
				}
			} else {
				$this->session->set_flashdata('alert', 'absen_sudah_ada');
				redirect('absen');
			}
		}
	}

	public function lembur($id){
		$dataAbsen = array(
			'absen_status' => 'lembur'
		);

		$updateAbsen = $this->AbsenModel->update_absen($id,$dataAbsen);
		if ($updateAbsen > 0) {
			$cekAbsen = $this->AbsenModel->lihat_satu_absen($id);

			$gaji = $this->GajiModel->lihat_satu_gaji($cekAbsen['karyawan_id']);
			$gajiId = $gaji['gaji_id'];
			$gajiLembur = $gaji['gaji_lembur'];
			$gajiLembur = $gajiLembur + $gaji['jabatan_gaji'];
			$dataGaji = array(
				'gaji_lembur' => $gajiLembur
			);
			$updateGaji = $this->GajiModel->update_gaji($gajiId,$dataGaji);

			$this->session->set_flashdata('alert', 'update_absen');
			redirect('absen');
		} else {
			redirect('absen');
		}
	}
}
