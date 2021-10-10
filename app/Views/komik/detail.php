<?php echo $this->extend('layouts/template');?>
 <?php 
 	echo $this->section('content');
  ?>
  <h2 class="mt-2">Detail Komik</h2>
  <div class="card mb-3" style="max-width: 540px;">
  	<div class="row g-0">
  		<div class="col-md-4">
  			<img src="/image/<?php echo $komik['sampul']; ?>" width="150">
  			
  		</div>
  		<div class="col-md-8">
  			<div class="card-body">
  				<h5 class="card-title"><?php echo $komik['judul'];?></h5>
  				<p class="card-text"><b>penulis:</b><?php echo $komik['penulis']; ?></p>
  				 <p class="card-text"><small class="text-muted"><b>Penerbit:</b><?php echo $komik['penerbit']; ?></small></p>
  				 <a href="/Komik/edit/<?php echo $komik['id']; ?>" class="btn btn-warning">Edit</a>
           <!-- <form action="/komik/<?php echo $komik['id']; ?>" method="post" class="d-inline">
            <?php echo csrf_field(); ?>
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">delete</button>
           </form> -->
           <a href="/Komik/delete/<?php echo $komik['id']; ?>" class= "btn btn-danger">Delete</a>
  				 <a href="/Komik">kembali ke daftar komik</a>

  			</div>
  		</div>	
  	</div>
  </div>
</div>
<?php echo $this->endSection(); ?>
