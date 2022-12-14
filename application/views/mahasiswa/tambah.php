<div class="container">
	<div class="row mt-3 d-flex justify-content-center">
		<div class="col-md-6">
			<div class="card">
  			<div class="card-header">
					<h4 class="text-center">Form Tambah Data</h4>
  			</div>
				<div class="card-body">
					<?php if(validation_errors()) : ?>
						<div class="alert alert-danger text-center mx-auto" role="alert">
							<?= validation_errors() ?>
						</div>
					<?php endif; ?>
					<form action="" method="post">
						<div class="form-group">
							<label for="nama">Nama Mahasiswa</label> 
							<input type="text" class="form-control mt-2 mb-3" id="nama" name="nama">
						</div>
						<div class="form-group">
							<label for="nrp">NRP</label> 
							<input type="number" class="form-control mt-2 mb-3" id="nrp" name="nrp">
						</div>
						<div class="form-group">
							<label for="email">E-Mail</label> 
							<input type="email" class="form-control mt-2 mb-3" id="email" name="email">
						</div>
						<div class="form-group">
							<label for="jurusan">Jurusan</label> 
							<select class="form-control" id="jurusan" name="jurusan">
								<option value="Teknik Informatika">Teknik Informatika</option>
								<option value="Teknik Industri">Teknik Industri</option>
								<option value="Teknik Informatika">Teknik Informatika</option>
								<option value="Teknik Pangan">Teknik Pangan</option>
								<option value="Teknik Mesin">Teknik Mesin</option>
								<option value="Teknik Planologi">Teknik Planologi</option>
								<option value="Teknik Lingkungan">Teknik Lingkungan</option>
							</select> 
						</div>
						<button type='submit' name='tambah' class="btn btn-primary mt-3 float-none">
							Tambah
						</button>
					</form>
  			</div>
			</div>
		</div>
	</div>
</div>

