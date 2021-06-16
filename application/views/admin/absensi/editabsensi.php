<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<form action="<?= base_url('absen/editabsensi/' . $data->id_absen) ?>" method="post" enctype="multipart/form-data">

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for=" nama">Nama Mahasiswa</label>
						<div class="col-sm-10">
							<input type="text" id="nama" name="nama" value="<?= $data->nama ?>" class=" form-control" placeholder="Nama Mahasiswa">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="jam_masuk">Jam Masuk</label>
						<div class="col-sm-10">
							<input type="time" id="jam_masuk" name="jam_masuk" value="<?= $data->jam_masuk ?>" class="form-control" placeholder="Jam Masuk">
							<?= form_error('jam_masuk', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="jam_pulang">Jam Pulang</label>
						<div class="col-sm-10">
							<input type="time" id="jam_pulang" name="jam_pulang" value="<?= $data->jam_pulang ?>" class="form-control" placeholder="Jam Masuk">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="deskripsi">Deskripsi Kegiatan</label>
						<div class="col-sm-10">
							<textarea class="form-control" name="deskripsi"><?= $data->deskripsi ?></textarea>
						</div>
					</div>

					<div class="form-group row">
						<div class="col-sm-12">

							<button class="btn btn-primary btn-block" type="submit"><i class="fa fa-plus-circle"></i> Edit Data</button>

						</div>
					</div>
				</form>
				<a href="<?= base_url('data-absensi'); ?>">
					<button class="btn btn-danger btn-block"> <i class="far fa-arrow-alt-circle-left"></i> Kembali</button>
				</a>
			</div>
		</div>
	</div>
</div>
