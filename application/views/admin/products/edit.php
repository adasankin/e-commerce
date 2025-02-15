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
												Produk
											</div>
											<div class="card-body">
												<div class="row">
													<div class="container-fluid">
														<?= validation_errors() ?>
														<form method="POST" enctype="multipart/form-data">
															<table class="table">
																<tr>
																	<td width=20%>Nama Produk</td>
																	<td><input type="text" name="name" class="form-control" required placeholder="Nama Produk" value="<?= $data->name; ?>"></td>
																</tr>
																<tr>
																	<td width=20%>Kategori</td>
																	<td>
																		<select name="category_id" class="form-control" required>
																			<option value="" selected disabled>Pilih Kategori</option>
																			<?php foreach ($category as $x) { ?>
																				<?php if ($x->id == $data->category_id) { ?>
																					<option value="<?= $x->id; ?>" selected><?= $x->name; ?></option>
																				<?php } else { ?>
																					<option value="<?= $x->id; ?>"><?= $x->name; ?></option>
																				<?php } ?>
																			<?php } ?>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td width=20%>Brand</td>
																	<td>
																		<select name="brand_id" class="form-control" required>
																			<option value="" selected disabled>Pilih Brand</option>
																			<?php foreach ($brand as $x) { ?>
																				<?php if ($x->id == $data->brand_id) { ?>
																					<option value="<?= $x->id; ?>" selected><?= $x->name; ?></option>
																				<?php } else { ?>
																					<option value="<?= $x->id; ?>"><?= $x->name; ?></option>
																				<?php } ?>
																			<?php } ?>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td width=20%>Deskripsi</td>
																	<td><textarea name="description" class="form-control" required placeholder="Deskripsi"><?= $data->description; ?></textarea></td>
																</tr>
																<tr>
																	<td width=20%>Harga</td>
																	<td><input type="number" name="price" class="form-control" required placeholder="Harga" value="<?= $data->price; ?>"></td>
																</tr>
																<tr>
																	<td width=20%>Diskon Persen</td>
																	<td><input type="number" name="discount_percent" class="form-control" required placeholder="Diskon Persen" value="<?= $data->discount_percent; ?>"></td>
																</tr>
																<tr>
																	<td width=20%>Stok</td>
																	<td><input type="number" name="stock" class="form-control" required placeholder="Stok" value="<?= $data->stock; ?>"></td>
																</tr>
																<tr>
																	<td width=20%>Gambar</td>
																	<td>
																		<img src="<?= assetsPath('img/products/') . $data->image; ?>" alt="<?= $data->name; ?>" class="rounded-0 my-2" id="preview" style="width: 200px; height: 200px">
																		<input type="file" name="image" class="form-control">
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