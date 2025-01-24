<div class="container-fluid">

	<div class="row">
		<div class="col">
			<?php if ($this->session->flashdata('success')) : ?>
				<div class="alert alert-success alert-dismissible fade show my-3" role="alert">
					<?= $this->session->flashdata('success'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif; ?>
			<?php if ($this->session->flashdata('error')) : ?>
				<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
					<?= $this->session->flashdata('error'); ?>
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			<?php endif; ?>
		</div>
	</div>
	<div class="card shadow mb-4">
		<div class="card-header py-3 d-flex justify-content-between align-items-center">
			<h6 class="m-0 font-weight-bold ">Data Pengguna</h6>
			<a href="<?= base_url('admin/users/add') ?>" class="btn btn-primary"><i class="fa fa-plus fs-5" aria-hidden="true"></i></a>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr class="text-center">
							<th style="width: 50px;">No</th>
							<th>Nama Depan</th>
							<th>Nama Belakang</th>
							<th>Jenis Kelamin</th>
							<th>Email</th>
							<th style="width: 50px;">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$nomor = 1;
						foreach ($data as $x) { ?>
							<tr class=" text-center">
								<td><?= $nomor++; ?></td>
								<td><?= $x->f_name; ?></td>
								<td><?= $x->l_name; ?></td>
								<td><?= $x->gender == "male" ? 'Laki-laki' : 'Perempuan'; ?></td>
								<td><?= $x->email; ?></td>
								<td align="center">
									<a href="<?= base_url('admin/users/edit/') . $x->id; ?>" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i></a>
									<a href="<?= base_url('admin/users/delete/') . $x->id; ?>" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>