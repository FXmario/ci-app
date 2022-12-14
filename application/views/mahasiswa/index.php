<div class="container">
	<?php if ($this->session->flashdata('flash')) : ?>
	<div class="row mt-3 d-flex justify-content-center">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			Data Mahasiswa
			<strong>
				Berhasil
			</strong> 
			<?= $this->session->flashdata('flash') ?>.
  		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
		</div>
	</div>
	<?php endif; ?>

	<div class="row mt-3 d-flex justify-content-center">
		<div class="col-md-6 d-grid gap-3">
			<a href="<?= base_url()?>mahasiswa/tambah" class="btn btn-outline-primary">
				Tambah Data Mahasiswa
			</a>
		</div>
	</div>

	<div class="row mt-3 d-flex justify-content-center">
		<div class="col-md-6">
			<h3>Daftar Mahasiswa</h3>
			<ul class="list-group">
				<?php foreach($mahasiswa as $mhs) : ?>
				<li class="list-group-item">
					<?= $mhs['nama']?>
					<a href="<?= base_url() ?>mahasiswa/delete/<?= $mhs['id']; ?>" class="btn btn-outline-danger btn-sm float-end" onclick="return confirm('Ingin hapus?');">
						Delete
					</a>
					<a href="<?= base_url() ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="btn btn-outline-primary btn-sm float-end">
						Detail
					</a>
				</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>

</div>

