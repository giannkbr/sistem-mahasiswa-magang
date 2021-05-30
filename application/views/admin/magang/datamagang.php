 <div class="row">
 	<div class="col-12">
 		<div class="card m-b-30">
 			<div class="card-body">
 				<a href="<?= base_url('add-magang'); ?>"><button class="btn btn-primary btn-block mb-2">
 						<i class="fa fa-plus-circle"></i> Tambah Data
 					</button>
 				</a>
 				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
 					<thead>
 						<tr>
 							<th>Nomor</th>
 							<th>Nama Mahasiswa</th>
 							<th>Batch</th>
 							<th>Tahun Masuk</th>
 							<th>Divre</th>
 							<th>Sub Divisi</th>
 							<th>Job Deskripsi</th>
 							<th>Mentor</th>
 							<th>Opsi</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php $no = 1;
							foreach ($data as $magang) { ?>
 							<tr>
 								<td><?= $no++ ?></td>
 								<td><?= ucfirst($magang->nama) ?></td>
 								<td><?= ucfirst($magang->batch) ?></td>
 								<td><?= ucfirst($magang->tahun) ?></td>
 								<td><?= ucfirst($magang->divre) ?></td>
 								<td><?= ucfirst($magang->bagian_unit) ?></td>
 								<td><?= ucfirst($magang->jobdesk) ?></td>
 								<td><?= ucfirst($magang->mentor) ?></td>
 								<td>
 									<a href="<?= base_url('magang/editmagang/' . $magang->magang_id) ?>" class="btn btn-sm btn-primary btn-sm"><span class="fa fa-edit"></span></a>
 									<a onclick="return confirm('Apakah anda yakin ingin menghapus data magang ini?')" href="<?= base_url('magang/deletemagang/' . $magang->magang_id) ?>" class="btn btn-sm btn-danger btn-sm"><span class="fa fa-trash"></span></a>
 								</td>
 							</tr>
 						<?php } ?>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div> <!-- end col -->
 </div> <!-- end row -->
