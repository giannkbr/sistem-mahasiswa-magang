 <div class="row">
 	<div class="col-12">
 		<div class="card m-b-30">
 			<div class="card-body">
 				<a href="<?= base_url('add-nilai'); ?>"><button class="btn btn-primary btn-block mb-2">
 						<i class="fa fa-plus-circle"></i> Tambah Data
 					</button>
 				</a>
 				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
 					<thead>
 						<tr>
 							<th>Nomor</th>
 							<th>Nama Mahasiswa</th>
 							<th>Pemahaman Tentang Peran Mahasiswa Magang Dan Penyesuaian Diri</th>
 							<th>Pemahaman Terhadap Bidang Usaha Dan Proses Bisnis Perusahaan</th>
 							<th>Keberhasilan Pencapaian Learning Objectives Sesuai Learning Plan Yang Sudah Ditentukan</th>
 							<th>Keluasan Wawasan Keilmuan Dan Penerapannya</th>
 							<th>Kemampuan Merumuskan Permasalahan Dan Rencana Pemecehan</th>
 							<th>Kemampuan Mencapai Target Pekerjaan</th>
 							<th>Total Nilai Keseluruhan</th>
 							<th>Opsi</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php $no = 1;
							foreach ($data as $nilai) { ?>
 							<tr>
 								<td><?= $no++ ?></td>
 								<td><?= ucfirst($nilai->nama) ?></td>
 								<td><?= ucfirst($nilai->nilai_a) ?></td>
 								<td><?= ucfirst($nilai->nilai_b) ?></td>
 								<td><?= ucfirst($nilai->nilai_c) ?></td>
 								<td><?= ucfirst($nilai->nilai_d) ?></td>
 								<td><?= ucfirst($nilai->nilai_e) ?></td>
 								<td><?= ucfirst($nilai->nilai_f) ?></td>
 								<td><?= ucfirst($nilai->total) ?></td>
 								<td>
 									<a href="<?= base_url('nilai/editnilai/' . $nilai->nilai_id) ?>" class="btn btn-sm btn-primary btn-sm"><span class="fa fa-edit"></span></a>
 									<a onclick="return confirm('Apakah anda yakin ingin menghapus data nilai ini?')" href="<?= base_url('nilai/deletenilai/' . $nilai->nilai_id) ?>" class="btn btn-sm btn-danger btn-sm"><span class="fa fa-trash"></span></a>
 								</td>
 							</tr>
 						<?php } ?>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div> <!-- end col -->
 </div> <!-- end row -->
