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
				<h1 style="text-align: center">Gaji Karyawan</h1>
			</div>
			<div class="card-body">
				<table class="table table-bordered zero-configuration" style="width: 100%">
					<thead>
					<tr>
						<td style="width: 2%">No</td>
					
						<th>Nama Tukang</th>
						<th>Tanggal Bergabung</th>
						<th>Nomor Rekening</th>
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
							<td><?= date_indo($value['karyawan_tanggal_gabung']) ?></td>
							<td><?= $value['karyawan_no_rekening'] ?></td>
							<td>
								<a href="<?=base_url('gaji/detail/'.$value['karyawan_id'])?>"
									class="btn btn-success btn-sm  btn-bg-gradient-x-purple-blue box-shadow-2"
									 data-toggle="tooltip" data-placement="top"
									title="Lihat detail"><i class="ft-eye"></i></a>

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
