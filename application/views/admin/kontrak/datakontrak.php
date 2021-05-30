 <div class="row">
 	<div class="col-12">
 		<div class="card m-b-30">
 			<div class="card-body">
 				<a href="<?= base_url('add-kontrak'); ?>"><button class="btn btn-primary btn-block mb-2">
 						<i class="fa fa-plus-circle"></i> Tambah Data
 					</button>
 				</a>
 				<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
 					<thead>
 						<tr>
 							<th>Nomor</th>
 							<th>Nama Mahasiswa</th>
 							<th>Nomor Kontrak</th>
 							<th>Tanggal Kontrak</th>
 							<th>Perihal</th>
 							<th>Uang Saku</th>
 							<th>File Kontrak</th>
 							<th>Opsi</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php $no = 1;
							foreach ($data as $kontrak) { ?>
 							<tr>
 								<td><?= $no++ ?></td>
 								<td><?= ucfirst($kontrak->nama) ?></td>
 								<td><?= ucfirst($kontrak->no_kontrak) ?></td>
 								<td><?= ucfirst($kontrak->tanggal_kontrak) ?></td>
 								<td><?= ucfirst($kontrak->perihal) ?></td>
 								<td><?= ucfirst($kontrak->upah) ?></td>
 								<td> <small>Data Kontrak <a target="_blank" href="<?= base_url('kontrak/' . $kontrak->kontrak) ?>">Klik disini</a></small></td>
 								<td>
 									<a href="<?= base_url('kontrak/editkontrak/' . $kontrak->kontrak_id) ?>" class="btn btn-sm btn-primary btn-sm"><span class="fa fa-edit"></span></a>
 									<a onclick="return confirm('Apakah anda yakin ingin menghapus data kontrak ini?')" href="<?= base_url('kontrak/deletekontrak/' . $kontrak->kontrak_id) ?>" class="btn btn-sm btn-danger btn-sm"><span class="fa fa-trash"></span></a>
 								</td>
 							</tr>
 						<?php } ?>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div> <!-- end col -->
 </div> <!-- end row -->
