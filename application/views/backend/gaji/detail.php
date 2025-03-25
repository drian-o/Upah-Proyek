<div class="row d-print-none">
	<div class="col-md-12">
		<div class="card box-shadow-2">
			<?php
			if ($this->session->flashdata('alert') == 'tambah_absen'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Berhasil absen
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'update_gaji'):
				?>
				<div class="alert alert-success alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil diupdate
				</div>
			<?php
			elseif ($this->session->flashdata('alert') == 'hapus_absen'):
				?>
				<div class="alert alert-danger alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Data berhasil dihapus
				</div>
			<?php
			endif;
			?>
			<div class="card-header">
				<h1 style="text-align: center">Detail Gaji <?=$gaji[0]['karyawan_nama']?></h1>
			</div>
			<div class="card-body">
				<table class="table table-bordered zero-configuration" style="width: 100%">
					<thead>
					<tr>
						<td style="width: 2%">No</td>
						
						<td>Nama Tukang</td>
						<td>Gaji Minggu Ini</td>
						<td>Minggu ke</td>
						<td>Status Bayar</td>
						<td style="text-align: center"><i class="ft-settings spinner"></i></td>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($gaji as $key => $value):
						?>
						<tr>
							<td><?= $no ?></td>
							
							<td><?= $value['jabatan_nama'] ?></td>
							<td>Rp. <?= nominal($value['gaji_lembur'] + $value['gaji_total']) ?></td>
							<td><?= $value['gaji_bulan_ke'] ?></td>
							<td>
								<?php
								if ($value['gaji_status'] == 'belum'):
									?>
									<div class="badge badge-warning"><i class="ft-x-circle"></i> Belum</div>
								<?php
								else:
									?>
									<div class="badge badge-success"><i class="ft-check-circle"></i> Sudah</div>
								<?php
								endif;
								?>
							</td>
							<td>
								<button
									class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 gaji-lihat"
									data-toggle="modal" data-target="#lihat" value="<?= $value['gaji_id'] ?>"
									title="Lihat selengkapnya"><i class="ft-eye"></i></button>
								<?php if ($this->session->userdata('session_hak_akses') == 'manajer'): ?>
									<?php
									if ($value['gaji_status'] == 'belum'):
										?>
										<button
											class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 gaji-slip"
											data-toggle="modal" data-target="#slip" value="<?= $value['gaji_id'] ?>"
											title="Lihat slip gaji"><i class="ft-printer"></i></button>
										<button
											class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 gaji-bayar"
											data-toggle="modal" data-target="#bayar" value="<?= $value['gaji_id'] ?>"
											title="Sudah bayar ?"><i class="ft-check-square"></i></button>
									<?php
									else:
										?>
										<button
											class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 gaji-slip"
											data-toggle="modal" data-target="#slip" value="<?= $value['gaji_id'] ?>"
											title="Sudah bayar"><i class="ft-printer"></i></button>
										<button
											class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 gaji-bayar"
											data-toggle="modal" data-target="#bayar" value="<?= $value['gaji_id'] ?>"
											title="Sudah bayar" disabled><i class="ft-check-square"></i></button>
									<?php
									endif;
									?>
								<?php
								endif;
								?>
							</td>
						</tr>

						<?php
						$no++;
					endforeach;
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- Modal lihat -->
<div class="modal fade text-left" id="lihat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Lihat Data Gaji</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_jabatan">Nama Tukang </label>
					<input type="text" class="form-control" name="tempat_lahir" id="gaji_lihat_jabatan" value=""
						   placeholder="Tempat Lahir" autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_tg">Tanggal Bergabung</label>
					<div class='input-group'>
						<input type="date" class="form-control" id="gaji_lihat_tg" name="tanggal_gabung"
							   placeholder="Tanggal Bergabung" autocomplete="off" readonly>
						<div class="input-group-append">
										<span class="input-group-text">
											<span class="ft-calendar"></span>
										</span>
						</div>
					</div>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_lembur">Gaji Lembur</label>
					<input type="text" class="form-control" name="jabatan" id="gaji_lihat_lembur"
						   placeholder="Gaji lembur" autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_gaji">Gaji Biasa</label>
					<input type="text" class="form-control" id="gaji_lihat_gaji" name="nomor_hp"
						   placeholder="Nomor HP"
						   autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_total">Total Gaji</label>
					<input type="text" class="form-control" id="gaji_lihat_total" name="nomor_rekening"
						   placeholder="Nomor rekening boleh kosong"
						   autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_total">Pinjaman Bulan Ini</label>
					<input type="text" class="form-control" id="gaji_lihat_bayar_pinjaman" name="nomor_rekening"
						   placeholder="Nomor rekening boleh kosong"
						   autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_total">Gaji Bersih</label>
					<input type="text" class="form-control" id="gaji_lihat_bersih" name="nomor_rekening"
						   placeholder="Nomor rekening boleh kosong"
						   autocomplete="off" readonly>
				</fieldset>
				<fieldset class="form-group floating-label-form-group">
					<label for="gaji_lihat_bulan">Minggu 1</label>
					<input type="number" class="form-control" id="gaji_lihat_bulan" name="nomor_rekening"
						   placeholder="Nomor rekening boleh kosong"
						   autocomplete="off" readonly>
				</fieldset>
				</fieldset>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
			</div>
		</div>
	</div>
</div>


<!-- Modal slip -->
<style type="text/css">
	.tengah {
		text-align: center;
	}

	.kotak {
		border: 1px solid rgba(0, 0, 0, 0.1);
		padding: 5px;
	}

	@media print {
		body * {
			visibility: hidden;
		}

		.kotak, .kotak * {
			visibility: visible;
		}

		.kotak {
			position: absolute;
			width: 100%;
			margin-top: 300px;
			transform: scale(2);
			left: 0;
			top: 0;
		}
	}
</style>

<div class="modal fade text-left" id="slip" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header d-print-none">
				<h3 class="modal-title" id="myModalLabel35"> Lihat Slip Gaji</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body ">
				<div class="kotak d-print-block">
					<div class="row">
						<div class="col-12">
						
						&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; <img src="<?= base_url() ?>assets/images/logo/new.png" height="80px">
						<br>
							<div class="tengah">Jl Muara Karang Elok XIX Kec Penjaringan Kel. Penjaringan Jakarta Utara</div>
							<hr>
							<div class="tengah"><b><u>SLIP GAJI TUKANG</u></b></div>
							<br>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<table>
								<tr>
									<td>Nama</td>
									<td>:</td>
									<td><span class="slip-nama"></span></td>
								</tr>
								

							</table>
						</div>
						<div class="col-1">
							<table>
								<tr>
								 	<td>Bulan</td>
									<td>:</td>
									<td><span class="slip-bulan"></span></td>
								</tr>
							
							</table>
						</div>
					</div>
					<br>
					<br>
					<div class="row">
						<div class="col-6">
							<p><b><u>Penghasilan</u></b></p>
							<table style="width: 100%">
								<tr>
									<td>Gaji Pokok</td>
									<td>:</td>
									<td>Rp. <span id="slip-gaji"></span></td>
								</tr>
								<tr>
									<td>Gaji Lembur</td>
									<td>:</td>
									<td>Rp. <span id="slip-lembur"></span></td>
								</tr>
								<tr>
									<td><b>Total</b></td>
									<td><b>:</b></td>
									<td><b>Rp. <span id="slip-total"></span></b></td>
								</tr>
							</table>
						</div>
						<div class="col-6">
							<p><b><u>Potongan</u></b></p>
							<table style="width: 100%">
								<tr>
									<td>Pinjaman</td>
									<td>:</td>
									<td>Rp. <span class="slip-pinjam"></span></td>
								</tr>
								<tr>
									<td style="color: white;"> .</td>
									<td></td>
									<td></td>
								</tr>
								<tr>
									<td><b>Total</b></td>
									<td><b>:</b></td>
									<td><b>Rp. <span class="slip-pinjam"></span></b></td>
								</tr>
							</table>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-12">
							<p class="tengah"><b>PENERIMAAN BERSIH = Rp. <span id="slip-bersih"></span></b></p>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<p class="tengah"><i>Terbilang : <span id="slip-terbilang"></span></i></p>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<p class="tengah"><i>Sisa Pinjaman : Rp. <span id="slip-sisa-pinjam"></span></i></p>
						</div>
					</div>
					<div class="row">
						<div class="col-6 text-center" >
							<p><br></p>
							<p>Penerima</p>
							<br>
							<br>
							<br>
							<p><b><u><span class="slip-nama"></span></u></b></p>
						</div>
						<div class="col-6 text-center">
							<p>Jakarta, <?= date_indo(date('Y-m-d')) ?></p>
							<p>Manajer</p>
							<br>
							<br>
							<br>
							<p><b><u>Daniel Gin</u></b></p>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer d-print-none">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
				<button onclick="window.print()" class="btn btn-primary btn-bg-gradient-x-purple-blue"><i
						class="fa fa-print"></i> Cetak
				</button>
			</div>
		</div>
	</div>
</div>


<!-- Modal hapus -->
<div class="modal fade text-left" id="bayar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Karyawan sudah menerima gaji ?</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
				<div id="tombol-konfirmasi">

				</div>
			</div>
		</div>
	</div>
</div>

