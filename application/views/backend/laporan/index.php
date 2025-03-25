<style type="text/css">
	.kotak {
		padding: 5px;
	}

	@page {
		size: A4;
		margin: 0;
	}

	@media print {
		body * {
			visibility: hidden;
		}

		.kotak, .kotak * {
			visibility: visible;
		}

		.kotak {
			z-index: 2;
			position: absolute;
			width: 100%;
			top: 0;
			left: 0;
		}
	}
</style>
<div class="row">
	<div class="col-md-12">
		<div class="card box-shadow-2">
			<div class="card-header">
				<h1 style="text-align: center">Laporan</h1>
			</div>
			<div class="card-body">
				<div>
					<fieldset class="form-group floating-label-form-group">
						<div class="row">
							<div class="col-3">
								<label for="laporan-tahun">Tahun</label>
								<input type="text" id="laporan-tahun" class="form-control" value="<?=date('Y')?>">
							</div>
							<div class="col-7">
								<label for="laporan-bulan">Bulan</label>
								<select name="bulan" id="laporan-bulan" class="form-control">
									<option value="01">Januari</option>
									<option value="02">Februari</option>
									<option value="03">Maret</option>
									<option value="04">April</option>
									<option value="05">Mei</option>
									<option value="06">Juni</option>
									<option value="07">Juli</option>
									<option value="08">Agustus</option>
									<option value="09">September</option>
									<option value="10">Oktober</option>
									<option value="11">November</option>
									<option value="12">Desember</option>
								</select>
							</div>
							<div class="col-2">
								<label for="laporan-btn-lihat" style="color: white">asdasd</label>
								<button class="btn btn-primary btn-block btn-bg-gradient-x-blue-cyan" id="laporan-btn-lihat">Lihat</button>
							</div>
						</div>
					</fieldset>
				</div>
				<hr>
				<div id="laporan" class="kotak">

				</div>
			</div>
		</div>
	</div>
</div>
