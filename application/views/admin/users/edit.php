<body class="bg-gradient-success">
	<div class="mbr-slider slide carousel" data-keyboard="false" data-ride="carousel" data-interval="2000" data-pause="true">
		<div class="container">
			<div class="row">
				<div class="col">
					<?php if ($this->session->flashdata('error')) : ?>
						<div class="alert alert-danger alert-dismissible fade show my-3" role="alert">
							<?= $this->session->flashdata('error'); ?>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="card o-hidden border-0 shadow-lg my-5 ">
						<div class="card-body p-0">
							<div class="row">
								<div class="col-lg">
									<div class="p-5">
										<!-- Page Heading -->
										<div class="card">
											<div class="card-header">
												Akun
											</div>
											<div class="card-body">
												<div class="row">
													<div class="container-fluid">
														<?= validation_errors() ?>
														<form method="POST" enctype="multipart/form-data">
															<table class="table">
																<tr>
																	<td width=20%>Nama Depan</td>
																	<td><input type="text" name="first_name" value="<?= $data->f_name ?>" class="form-control" required placeholder="Nama Depan"></td>
																</tr>
																<tr>
																	<td width=20%>Nama Belakang</td>
																	<td><input type="text" name="last_name" value="<?= $data->l_name ?>" class="form-control" required placeholder="Nama Belakang"></td>
																</tr>
																<tr>
																	<td width=20%>Jenis Kelamin</td>
																	<td>
																		<input type="radio" name="gender" value="male" required <?= $data->gender == "male" ? 'checked' : '' ?>> Laki-laki
																		<input type="radio" name="gender" value="female" required <?= $data->gender == "female" ? 'checked' : '' ?>> Perempuan
																	</td>
																</tr>
																<tr>
																	<td width=20%>Email</td>
																	<td><input type="email" name="email" value="<?= $data->email ?>" class="form-control" required placeholder="Email"></td>
																</tr>
																<tr>
																	<td width=20%>Password</td>
																	<td><input type="password" name="password" class="form-control" placeholder="Password"></td>
																</tr>
																<tr>
																	<td width=20%>Role</td>
																	<td>
																		<input type="radio" name="role" value="user" required <?= $data->role == "user" ? 'checked' : '' ?>> User
																		<input type="radio" name="role" value="admin" required <?= $data->role == "admin" ? 'checked' : '' ?>> Admin
																	</td>
																</tr>
															</table>
															<div class="text-center mt-5">
																<button class="btn btn-success">Simpan</button>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>