<?php echo $this->extend('layouts/template');?>

<?php echo $this->section('content');?>
<div class="container">
    <div class="row">
      <div class="col">
        <a href="/Komik/create" class="btn btn-primary mt-2"> Tambah Data Komik</a>
        <h1 class="mt-2">Daftar Komik</h1>
        <?php 
          if (session()->getFlashdata('pesan')) :     
         ?>
       <div class="alert alert-succes" role="alert">
         <?php echo session()->getFlashdata('pesan'); ?>
       </div>
     <?php endif; ?>
      </div>
    </div>    
 </div>
<table class="table">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Sampul</th>
      <th scope="col">Judul</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php $a=0;
  	foreach ($komik as $k) :
    $a++;
    ?>
    <tr>
      <th scope="row"><?php echo $a ?></th>
      <td><img src="/image/<?php echo $k['sampul']?>" width="100"></td>
      <td><?php echo $k['judul'];?></td>
      <td><a href="/komik/<?php echo $k['id']; ?>" class="btn btn-success">Detail</a></td>
    </tr>
	<?php endforeach;?>
  </tbody>
</table>
<?php echo $this->endSection();?>