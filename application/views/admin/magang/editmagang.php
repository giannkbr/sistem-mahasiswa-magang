<div class="row">
	<div class="col-12">
		<div class="card m-b-30">
			<div class="card-body">
				<form action="<?= base_url('Magang/editmagang/' . $detail->magang_id) ?>" method="post">
					<div class="form-group row">
						<label for="nim" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
						<div class="col-sm-10">
							<select name="nim" class="form-control">
								<option value="" selected="" disabled="">Pilih Nama Mahasiswa</option>
								<?php foreach ($data as $mahasiswa) { ?>
									<option <?php if ($detail->nim == $mahasiswa->nim) {
												echo "selected";
											} ?> value="<?= $mahasiswa->nim ?>"><?= $mahasiswa->nama ?></option>
								<?php } ?>
							</select>
							<?= form_error('nim', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
						</div>
					</div>

					<div class=" form-group row">
						<label class="col-sm-2 col-form-label" for="tahun">Tahun Masuk</label>
						<div class="col-sm-10">
							<input type="text" id="tahun" name="tahun" value="<?= $detail->tahun ?>" class=" form-control" placeholder="Tahun Masuk">
							<?= form_error('tahun', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class=" form-group row">
						<label class="col-sm-2 col-form-label" for="batch">Batch Masuk</label>
						<div class="col-sm-10">
							<input type="text" id="batch" name="batch" value="<?= $detail->batch ?>" class=" form-control" placeholder="Batch Masuk">
							<?= form_error('batch', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="divre">Divre</label>
						<div class="col-sm-10">
							<input type="text" id="divre" name="divre" value="<?= $detail->divre ?>" class=" form-control" placeholder="Divre">
							<?= form_error('divre', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="divre">Job Description</label>
						<div class="col-sm-10">
							<textarea name="jobdesk" id="jobdesk" cols=" 20" rows="5" class="form-control" placeholder="Job Description"><?= $detail->jobdesk ?></textarea>
							<?= form_error('jobdesk', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="bagian_unit">Bagian Unit</label>
						<div class="col-sm-10">
							<input type="text" id="bagian_unit" value="<?= $detail->bagian_unit ?>" name="bagian_unit" class="form-control" placeholder="Bagian Unit">
							<?= form_error('bagian_unit', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label" for="mentor">Mentor</label>
						<div class="col-sm-10">
							<input type="text" id="mentor" value="<?= $detail->mentor ?>" name="mentor" class="form-control" placeholder="Mentor">
							<?= form_error('mentor', '<span class="text-danger small">', '</span>'); ?>
						</div>
					</div>
					<div class="form-group row align-items-center">
						<div class="col-sm-12">
							<button class="btn btn-primary btn-block" type="submit"><i class="fa fa-plus-circle"></i> Edit Data</button>
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
