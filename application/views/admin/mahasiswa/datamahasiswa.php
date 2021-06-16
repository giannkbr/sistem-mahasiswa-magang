 <div class="row">
 	<div class="col-12">
 		<div class="card m-b-30">
 			<div class="card-body">
 				<a href="<?= base_url('add-mahasiswa'); ?>"><button class="btn btn-primary btn-block mb-2">
 						<i class="fa fa-plus-circle"></i> Tambah Data
 					</button>
 				</a>
 				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
 					<thead>
 						<tr>
 							<th>Nomor</th>
 							<th>Nama Mahasiswa</th>
 							<th>Username</th>
 							<th>NIM</th>
 							<th>NIK</th>
 							<th>Jenis Kelamin</th>
 							<th>TTL</th>
 							<th>Perguruan Tinggi</th>
 							<th>Program Studi</th>
 							<th>Photo</th>
 							<th>Opsi</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php $no = 1;
							foreach ($data as $mahasiswa) { ?>
 							<tr>
 								<td><?= $no++ ?></td>
 								<td><?= ucfirst($mahasiswa->nama) ?></td>
 								<td><?= ucfirst($mahasiswa->username) ?></td>
 								<td><?= ucfirst($mahasiswa->nim) ?></td>
 								<td><?= ucfirst($mahasiswa->nik) ?></td>
 								<td><?= ucfirst($mahasiswa->jenis_kelamin) ?></td>
 								<td><?= ucfirst($mahasiswa->tempat_lahir) ?><?= ", " ?><?= ($mahasiswa->tanggal_lahir) ?></td>
 								<td><?= ucfirst($mahasiswa->perguruan_tinggi) ?></td>
 								<td><?= ucfirst($mahasiswa->jurusan) ?></td>
 								<td> <small>Photo <a target="_blank" href="<?= base_url('images/users/' . $mahasiswa->photo) ?>">Klik disini</a></small></td>
 								<td>
 									<a href="<?= base_url('mahasiswa/editmahasiswa/' . $mahasiswa->nim) ?>" class="btn btn-sm btn-primary btn-sm"><span class="fa fa-edit"></span></a>
 									<a onclick="return confirm('Apakah anda yakin ingin menghapus data mahasiswa ini?')" href="<?= base_url('mahasiswa/deletemahasiswa/' . $mahasiswa->nim) ?>" class="btn btn-sm btn-danger btn-sm"><span class="fa fa-trash"></span></a>
 								</td>
 							</tr>
 						<?php } ?>
 					</tbody>
 				</table>

 			</div>
 		</div>
 	</div> <!-- end col -->
 </div> <!-- end row -->
