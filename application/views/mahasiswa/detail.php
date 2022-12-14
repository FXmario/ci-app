<div class="container">
	<div class="row mt-3 d-flex justify-content-center">
		<div class="col-md-6">

			<div class="card">
  			<div class="card-header">
					<h3 class="text-center">
						<?= $mahasiswa['nama']?>
					</h3>
  			</div>
  			<div class="card-body">
					<table>
						<tr>
							<td>Nama Lengkap : </td>
							<td><?= $mahasiswa['nama']?> </td>
						</tr>
						<tr>
							<td>NRP</td>
							<td> : <?= $mahasiswa['nrp']?> </td>
						</tr>
						<tr>
							<td>E-Mail</td>
							<td> : <?= $mahasiswa['email']?> </td>
						</tr>
						<tr>
							<td>Jurusan</td>
							<td> : <?= $mahasiswa['jurusan']?> </td>
						</tr>
  			</div>
			</div>
		
		</div>
	</div>
</div>
