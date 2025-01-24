 </div>
 <!-- main-panel ends -->
 </div>
 <!-- page-body-wrapper ends -->
 </div>
 <!-- container-scroller -->

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 	<div class="modal-dialog" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin keluar ?</h5>
 				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">×</span>
 				</button>
 			</div>
 			<div class="modal-body">Klik Tombol Untuk Keluar</div>
 			<div class="modal-footer">
 				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
 				<a class="btn btn-primary" href="<?= base_url('logout') ?>">Keluar</a>
 			</div>
 		</div>
 	</div>
 </div>

 <script src="<?= assetsPath('js/jquery.min.js') ?>"></script>
 <script src="<?= assetsPath('skydash/vendors/js/vendor.bundle.base.js') ?>"></script>
 <script src="<?= assetsPath('vendors/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
 <script src="<?= assetsPath('vendors/datatables/jquery.dataTables.min.js') ?>"></script>
 <script src="<?= assetsPath('vendors/datatables/dataTables.bootstrap4.min.js') ?>"></script>
 <script src="<?= assetsPath('vendors/fontawesome/js/all.min.js') ?>"></script>
 <script src="<?= assetsPath('skydash/js/off-canvas.js') ?>"></script>
 <script src="<?= assetsPath('skydash/js/hoverable-collapse.js') ?>"></script>
 <script src="<?= assetsPath('skydash/js/template.js') ?>"></script>
 <script src="<?= assetsPath('skydash/js/settings.js') ?>"></script>
 <script src="<?= assetsPath('skydash/js/todolist.js') ?>"></script>

 <script>
 	$(document).ready(function() {
 		$('#dataTable').DataTable();
 		$(document).on("click", ".browse", function() {
 			var file = $(this).parents().find(".file");
 			file.trigger("click");
 		});
 		$('input[type="file"]').change(function(e) {
 			var fileName = e.target.files[0].name;
 			$("#file").val(fileName);

 			var reader = new FileReader();
 			reader.onload = function(e) {
 				// get loaded data and render thumbnail.
 				document.getElementById("preview").src = e.target.result;
 			};
 			// read the image file as a data URL.
 			reader.readAsDataURL(this.files[0]);
 		});
 	});
 </script>
 </body>

 </html>