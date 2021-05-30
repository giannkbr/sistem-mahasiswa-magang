<div class="row">
	<div class="col-lg-8">
		<div class="card mb-4">
			<?= form_open('konfigurasi/submit', ['class' => 'formtambah']) ?>
			<div class="card-body">
				<i class="mdi mdi-circle-edit-outline"></i> Konfigurasi Website
				<hr>
				<input type="hidden" class="form-control" id="konfigurasi_id" value="" name="konfigurasi_id" readonly>
				<div class="form-group">
					<label> <i class="mdi mdi-text-shadow"></i>
						Judul Halaman Website
					</label>
					<input type="text" id="nama_web" value="" name="nama_web" class="form-control">
					<div class="invalid-feedback errorNama">
					</div>
				</div>

				<div class="form-group">
					<label> <i class=" mdi mdi-playlist-star"></i>
						Deskripsi
					</label>
					<textarea type="text" id="deskripsi" name="deskripsi" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<label> <i class="mdi mdi-chevron-triple-up"></i>
						Visi
					</label>
					<input type="text" id="visi" name="visi" value="" class="form-control">
				</div>

				<div class="form-group">
					<label> <i class="mdi mdi-chevron-triple-up"></i>
						Misi
					</label>
					<input type="text" id="misi" name="misi" value="" class="form-control">
				</div>

				<div class="row">
					<div class="form-group col-md-6 col-12">
						<label> <i class="mdi mdi-instagram"></i>
							Instagram
						</label>
						<input type="text" id="instagram" name="instagram" value="" class="form-control">
					</div>

					<div class="form-group col-md-6 col-12">
						<label> <i class="mdi mdi-facebook"></i>
							Facebook
						</label>
						<input type="text" id="facebook" name="facebook" value="" class="form-control">
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-6 col-12">
						<label> <i class="mdi mdi-whatsapp"></i>
							Whatsapp
						</label>
						<input type="text" id="whatsapp" name="whatsapp" value="" class="form-control">
					</div>

					<div class="form-group col-md-6 col-12">
						<label> <i class="mdi mdi-email"></i>
							Email
						</label>
						<input type="text" id="email" name="email" value="" class="form-control">
					</div>
				</div>

				<div class="form-group">
					<label> <i class="mdi mdi-office-building"></i>
						Alamat
					</label>
					<input type="text" id="alamat" name="alamat" value="" class="form-control">
				</div>

				<button class="btn btn-primary btnsimpan"><i class="fa fa-paper-plane"></i> Update</button>
			</div>
			<?= form_close() ?>
		</div>
	</div>
	<!-- <div class="col-lg-4">
		<div class="card mb-4">
			<div class="card-body">
				<i class="mdi mdi-image-filter-hdr"></i> Logo Website <br>
				<small>*Klik foto untuk mengganti foto.</small>
				<hr>
				<div class="form-group text-center">
					<img class="img-thumbnail logoweb" onclick="logo('<?= $konfigurasi_id ?>')" src="<?= site_url('img/konfigurasi/logo/' . $logo) ?>" width="200px" alt="Foto">
				</div>
			</div>
		</div>
		<div class="card mb-4">
			<div class="card-body">
				<i class="mdi mdi-image-filter-vintage"></i> Icon Website <br>
				<small>*Klik foto untuk mengganti foto.</small>
				<hr>
				<div class="form-group text-center">
					<img class="img-thumbnail" onclick="icon('<?= $konfigurasi_id ?>')" src="<?= site_url('img/konfigurasi/icon/'  . $icon) ?>" width="60%" alt="Foto">
				</div>
			</div>
		</div>
	</div> -->
</div>
