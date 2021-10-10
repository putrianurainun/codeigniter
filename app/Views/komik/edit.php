<?php echo $this->extend('layouts/template');?>
<?php echo $this->section('content');?>

<div class="container">
	<div class="row">
		<div class="col-8">
		<h2 class="my-3">Form Edit Data</h2>
		<form action="/komik/update/<?php echo $komik ['id'] ?>" method="post" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
			<div class="row mb-3">
				<label for="judul" class="col-sm-2 col-form-label">Judul</label>
				<div class="col-sm-10">
					<input type="text" class="form-control <?php echo($validation->hasError('judul') ? 'is-invalid' : '')?>" id="judul" name="judul" autofocus="" value="<?php echo (old('judul'))? old('judul'):$komik['judul'];?>"value ="<?php echo $komik ['judul']?>" autofocus="">
					<div id="validationServer03Feedback" class="invalid-feedback">
						<?php echo $validation->getError('judul');?>
					</div>
				</div>
				
			</div>

			<div class="row mb-3">
				<label for="penulis" class="col-sm-2 col-form-label">Penulis</label>
				<div class="col-sm-10">
					<input type="text" class="form-control <?php echo($validation->hasError('penulis') ? 'is-invalid' : '')?>" id="penulis" name="penulis" autofocus="" value="<?php echo (old('penulis'))? old('penulis'):$komik['penulis'];?>" value ="<?php echo $komik ['penulis']?>" autofocus="">
					<div id="validationServer03Feedback" class="invalid-feedback">
						<?php echo $validation->getError('penulis');?>
					</div> 
				</div>
				
			</div>

			<div class="row mb-3">
				<label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
				<div class="col-sm-10">
					<input type="text" class="form-control <?php echo($validation->hasError('penerbit') ? 'is-invalid' : '')?>" id="penerbit" name="penerbit" autofocus="" value="<?php echo (old('penerbit'))? old('penerbit'):$komik['penerbit'];?>" value ="<?php echo $komik ['penerbit']?>" autofocus="">

					<div id="validationServer03Feedback" class="invalid-feedback">
						<?php echo $validation->getError('penerbit');?>
					</div>
				</div>
				
			</div>
			<div class="row mb-3">
				<label for="sampul" class="col-sm-2 col-form-label">sampul</label>
				<div class="col-sm-10">
					<input type="file" class="form-control <?php echo($validation->hasError('sampul') ? 'is-invalid' : '')?>" id="sampul" name="sampul" autofocus="" value="<?php echo (old('sampul'))? old('sampul'):$komik['sampul'];?>" value ="<?php echo $komik ['sampul']?>" autofocus="">
					<input type="hidden" class="form-control <?php echo($validation->hasError('sampul') ? 'is-invalid' : '')?>" id="sampul" name="sampul_lama" autofocus="" value="<?php echo (old('sampul'))? old('sampul'):$komik['sampul'];?>" value ="<?php echo $komik ['sampul']?>" autofocus="">
					<div id="validationServer03Feedback" class="invalid-feedback">
						<?php echo $validation->getError('sampul');?>
					</div>
				</div>
			</div>
			<button type="submit" class="btn btn-primary">Edit Data</button>
			</form>
		</div>
	</div>
</div>
<?php echo $this->endSection(); ?>

