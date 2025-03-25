<div class="row">
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
			elseif ($this->session->flashdata('alert') == 'update_absen'):
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
			elseif ($this->session->flashdata('alert') == 'absen_sudah_ada'):
				?>
				<div class="alert alert-danger alert-dismissible animated fadeInDown" id="feedback" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Tukang sudah absen hari ini
				</div>
			<?php
			endif;
			?>
			<div class="card-header">
				<h1 style="text-align: center">Absen Tukang</h1>
				<?php if ($this->session->userdata('session_hak_akses') == 'manajer'): ?>
					<button type="button" class="btn btn-primary btn-bg-gradient-x-purple-blue box-shadow-2"
							data-toggle="modal" data-target="#tambah">
						<i class="ft-plus-circle"></i> Tambah data Absen
					</button>
				<?php endif; ?>
			</div>
			<hr>
			<div class="card-body">
				<table class="table table-bordered zero-configuration" style="width: 100%">
					<thead>
					<tr>
						<td>No</td>
						<td>Nama Tukang</td>
						<td>Hari</td>
						<td>Tanggal</td>
						<td>Status</td>
						<td style="text-align: center"><i class="ft-settings spinner"></i></td>
					</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($absen as $key => $value):
						?>
						<tr>
							<td><?= $no ?></td>
							<td><?= $value['karyawan_nama'] ?></td>
							<td><?= $value['absen_hari'] ?></td>
							<td><?php
								$tanggal = explode(' ', $value['absen_date_created']);
								echo date_indo($tanggal[0]);
								?>
							</td>
							<td>
								<?php
								if ($value['absen_status'] == 'normal'):
									?>
									<div class="badge badge-primary">
										<i class="ft-sun"></i> Normal
									</div>
								<?php
								elseif ($value['absen_status'] == 'lembur'):
									?>
									<div class="badge badge-secondary">
										<i class="ft-moon"></i> Lembur
									</div>
								<?php
								endif;
								?>
							</td>
							<td>
								<?php if ($this->session->userdata('session_hak_akses') == 'manajer'): ?>
									<?php
									if ($value['absen_status'] == 'normal'):
										?>
										<button
											class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 absen-lembur"
											data-toggle="modal" data-target="#lembur" value="<?= $value['absen_id'] ?>"
											title="<?= $value['karyawan_nama'] ?> lembur? "><i class="ft-moon"></i>
										</button>
									<?php
									elseif ($value['absen_status'] == 'lembur'):
										?>
										<button
											class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2 absen-lembur"
											data-toggle="modal" data-target="#lembur" value="<?= $value['absen_id'] ?>"
											title="<?= $value['karyawan_nama'] ?> lembur " disabled><i
												class="ft-moon"></i></button>
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

<!-- Modal tambah -->
<div class="modal fade text-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Tambah data Absen</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<?= form_open('absen/tambah') ?>
			<div class="modal-body">
				<div class="form-group floating-label-form-group">
					<label for="nama_karyawan">Nama Tukang</label>
					<input type="text" name="nama_autocomplete" id="nama_karyawan" class="form-control"
						   placeholder="Nama Karyawan" required>
					<input type="hidden" id="id_karyawan" name="nama">
				</div>
				<div class="form-group floating-label-form-group">
					<label for="hari">Hari</label>
					<input type="text" name="hari" id="hari" class="form-control" placeholder="Hari"
						   value="<?= hari_indo(date('l')) ?>" readonly required>
				</div>
				<div class="form-group floating-label-form-group">
					<label for="tanggal_absen">Tanggal</label>
					<input type="text" name="tanggal_absen" id="tanggal_absen" class="form-control"
						   placeholder="Tanggal" value="<?= date_indo(date('Y-m-d')) ?>" readonly>
				</div>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-red-pink" data-dismiss="modal"
					   value="Tutup">
				<input type="submit" class="btn btn-primary btn-bg-gradient-x-blue-cyan" name="simpan" value="Simpan">
			</div>
			<?= form_close() ?>
		</div>
	</div>
</div>


<!-- Modal lembur -->
<div class="modal fade text-left" id="lembur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h3 class="modal-title" id="myModalLabel35"> Tukang Lembur ?</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-footer">
				<input type="reset" class="btn btn-secondary btn-bg-gradient-x-blue-cyan" data-dismiss="modal"
					   value="Tutup">
				<div id="tombol-lembur">

				</div>
			</div>
		</div>
	</div>
</div>
