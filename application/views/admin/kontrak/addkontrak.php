<div class="row">
	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">
				<form enctype="multipart/form-data" autocomplete="off" method="post" action="<?= base_url('add-kontrak') ?>">
					<div class="form-group row">
						<label for="nim" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
						<div class="col-sm-10">
							<select name="nim" class="form-control">
								<option value="" selected="" disabled="">Pilih Mahasiswa</option>
								<?php foreach ($mahasiswa as $mahasiswas) { ?>
									<option value="<?= $mahasiswas->nim ?>"><?= $mahasiswas->nama ?></option>
								<?php } ?>
							</select>
							<?= form_error('nim', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
						</div>
					</div>


					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="no_kontrak">Nomor Kontrak</label>
						<div class="col-sm-10">
							<input type="text" id="no_kontrak" name="no_kontrak" class="form-control" placeholder="Nomor Kontrak">
							<?= form_error('no_kontrak', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="tanggal_kontrak">Tanggal Kontrak</label>
						<div class="col-sm-10">
							<input type="date" id="tanggal_kontrak" name="tanggal_kontrak" class="form-control" placeholder="Tanggal Kontrak">
							<?= form_error('tanggal_kontrak', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="perihal">Perihal</label>
						<div class="col-sm-10">
							<input type="text" id="perihal" name="perihal" class="form-control" placeholder="Perihal">
							<?= form_error('perihal', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="kontrsk">Uang Saku</label>
						<div class="col-sm-10">
							<input type="text" id="upah" name="upah" class="form-control" placeholder="Uang Saku">
							<?= form_error('Uang Saku', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="kontrak">File Kontrak</label>
						<div class="col-sm-10">
							<input type="file" id="kontrak" name="kontrak" class="form-control" placeholder="File Kontrak">
							<?= form_error('kontrak', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row align-items-center">
						<div class="col-sm-12">
							<button class="btn btn-primary btn-block" type="submit"><i class="fa fa-plus-circle"></i> Tambah Data</button>
						</div>
					</div>
				</form>
				<a href="<?= base_url('data-magang'); ?>">
					<button class="btn btn-danger btn-block"> <i class="far fa-arrow-alt-circle-left"></i> Kembali</button>
				</a>
			</div>
		</div>
	</div> <!-- end col -->
</div> <!-- end row -->
