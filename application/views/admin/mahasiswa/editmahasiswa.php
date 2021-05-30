 <div class="row">
 	<div class="col-12">
 		<div class="card">
 			<div class="card-body">
 				<form action="<?= base_url('Mahasiswa/editmahasiswa/' . $data->nim) ?>" method="post">
 					<h4 class="text-primary font-weight-bold">Data Pribadi</h4>
 					<br>
 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" nama">Nama Mahasiswa</label>
 						<div class="col-sm-10">
 							<input type="text" id="nama" name="nama" value="<?= $data->nama ?>" class=" form-control" placeholder="Nama Mahasiswa">
 							<?= form_error('nama', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" email">Email</label>
 						<div class="col-sm-10">
 							<input type="text" id="email" name="email" value="<?= $data->email ?>" class=" form-control" placeholder="Email">
 							<?= form_error('email', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" nim">NIM</label>
 						<div class="col-sm-10">
 							<input type="text" id="nim" name="nim" value="<?= $data->nim ?>" class=" form-control" placeholder="NIM">
 							<?= form_error('nim', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>
 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" nik">NIK</label>
 						<div class="col-sm-10">
 							<input type="text" id="nik" name="nik" value="<?= $data->nik ?>" class=" form-control" placeholder="NIK">
 							<?= form_error('nik', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" jenis_kelamin">Jenis Kelamin</label>
 						<div class="col-sm-10">
 							<div class="custom-control custom-radio">
 								<input <?= $data->jenis_kelamin == 'laki-laki' ? 'checked' : ''; ?><?= set_radio('jenis_kelamin', 'laki-laki'); ?> type="radio" value="laki-laki" id="laki-laki" name="jenis_kelamin" class="custom-control-input">
 								<label class="custom-control-label" for="laki-laki">Laki- Laki</label>
 							</div>
 							<div class="custom-control custom-radio">
 								<input <?= $data->jenis_kelamin == 'perempuan' ? 'checked' : ''; ?><?= set_radio('jenis_kelamin', 'perempuan'); ?> value="perempuan" type="radio" id="perempuan" name="jenis_kelamin" class="custom-control-input">
 								<label class="custom-control-label" for="perempuan">Perempuan</label>
 							</div>
 							<?= form_error('jenis_kelamin', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" tempat_lahir">Tempat Lahir</label>
 						<div class="col-sm-10">
 							<input type="text" id="tempat_lahir" value="<?= $data->tempat_lahir ?>" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir">
 							<?= form_error('tempat_lahir', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" tanggal_lahir">Tanggal lahir</label>
 						<div class="col-sm-10">
 							<input name="tanggal_lahir" id="tanggal_lahir" value="<?= $data->tanggal_lahir ?>" type="date" class="form-control date" placeholder="Tanggal Lahir">
 							<?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" perguruan_tinggi">Perguruan Tinggi</label>
 						<div class="col-sm-10">
 							<input type="text" id="perguruan_tinggi" value="<?= $data->perguruan_tinggi ?>" name="perguruan_tinggi" class="form-control" placeholder="Perguruan Tinggi">
 							<?= form_error('perguruan_tinggi', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" jurusan">Program Studi</label>
 						<div class="col-sm-10">
 							<input type="text" id="jurusan" name="jurusan" value="<?= $data->jurusan ?>" class="form-control" placeholder="Program Studi">
 							<?= form_error('jurusan', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" telepon">Nomer Telepon</label>
 						<div class="col-sm-10">
 							<input type="text" id="telepon" name="telepon" value="<?= $data->telepon ?>" class="form-control" placeholder="Nomer Telepon">
 							<?= form_error('telepon', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" akun_ig">Akun Instagram</label>
 						<div class="col-sm-10">
 							<input type="text" id="akun_ig" value="<?= $data->akun_ig ?>" name="akun_ig" class="form-control" placeholder="Akun Instagram">
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" akun_fb">Akun Facebook</label>
 						<div class="col-sm-10">
 							<input type="text" id="akun_fb" name="akun_fb" value="<?= $data->akun_fb ?>" class="form-control" placeholder="Akun Facebook">
 						</div>
 					</div>

 					<div class="form-group row">
 						<label for="photo" class="col-sm-2 col-form-label">Foto</label>
 						<div class="col-sm-10">
 							<?php if (!empty($data->photo)) : ?>
 								<img src="<?= base_url('images/users/' . $data->photo) ?>" height="150">
 							<?php else : ?>
 								<p>No Photo</p>
 							<?php endif; ?>

 							<input name="photo" type="file" class="form-control-file">
 						</div>
 					</div>

 					<hr>
 					<h4 class="text-primary font-weight-bold">Keluarga</h4>
 					<br>
 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" nama_keluarga">Nama Keluarga</label>
 						<div class="col-sm-10">
 							<input type="text" id="nama_keluarga" name="nama_keluarga" value="<?= $data->nama_keluarga ?>" class="form-control" placeholder="Nama Keluarga">
 							<?= form_error('nama_keluarga', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" hubungan">Hubungan</label>
 						<div class="col-sm-10">
 							<input type="text" id="hubungan" name="hubungan" value="<?= $data->hubungan ?>" class="form-control" placeholder="Hubungan">
 							<?= form_error('hubungan', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" telepon_kel">Nomor Telepon Keluarga</label>
 						<div class="col-sm-10">
 							<input type="text" id="telepon_kel" name="telepon_kel" value="<?= $data->telepon_kel ?>" class="form-control" placeholder="Nomor Telepon Keluarga">
 							<?= form_error('telepon_kel', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>
 					<hr>
 					<h4 class="text-primary font-weight-bold">Data Bank</h4>
 					<br>
 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" bank">Nama Bank</label>
 						<div class="col-sm-10">
 							<input type="text" id="bank" name="bank" class="form-control" value="<?= $data->bank ?>" placeholder="Nama Bank">
 							<?= form_error('bank', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" nomer_rek">Nomor Rekening</label>
 						<div class="col-sm-10">
 							<input type="text" id="nomor_rek" name="nomor_rek" value="<?= $data->nomor_rek ?>" class="form-control" placeholder="Nomor Rekening">
 							<?= form_error('nomor_rek', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>

 					<div class="row form-group">
 						<label class="col-sm-2 col-form-label" for=" bank">Nama Pemilik</label>
 						<div class="col-sm-10">
 							<input type="text" id="nama_pemilik" name="nama_pemilik" value="<?= $data->nama_pemilik ?>" class="form-control" placeholder="Nama Pemilik">
 							<?= form_error('nama_pemilik', '<span class="text-danger small">', '</span>'); ?>
 						</div>
 					</div>
 					<br>
 					<div class="form-group row">
 						<div class="col-sm-12">

 							<button class="btn btn-primary btn-block" type="submit"><i class="fa fa-plus-circle"></i> Tambah Data</button>

 						</div>
 					</div>
 				</form>
 				<a href="<?= base_url('data-mahasiswa'); ?>">
 					<button class="btn btn-danger btn-block"> <i class="far fa-arrow-alt-circle-left"></i> Kembali</button>
 				</a>
 			</div>
 		</div>
 	</div>
 </div>
