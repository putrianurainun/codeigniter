<?php echo $this->extend('layout/template');?>
<?php echo $this->section('content');?>
  <!--   <section class="ftco-section contact-section" > -->
      <div class="container">
    <!--     <div class="row d-flex contact-info" align="center">
          <div class="col-md-6 col-lg-8 d-flex">
            <div class="align-self-stretch box p-10 "> -->

              <div class="col-md-6 col-lg-8 pl-lg-5 py-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
          
                <h2 class="mb-2" align="center" ><b>Kalender Akademik</b></h2>
               <table border="1" width="800">
                 <tr>
                   <td align="center" colspan="2"><b>Semester Ganjil</b></td>
                 </tr>
                 <tr>
                   <td align="center" width="300">Tanggal</td>
                   <td align="center">Kegiatan</td>
                 </tr>
                  <?php foreach ($ganjil as $value):?>
                 <tr>
                   <td style="color:black;"><?php echo $value['tgl_mulai']; ?> s/d <?php echo $value['tgl_akhir'];  ?></td>
                   <td style="color:black;"><?php echo $value['kegiatan']; ?></td>
                 </tr>
               <?php endforeach; ?>
                 <tr>
                   <td align="center" colspan="2"><b>Semester Genap</b></td>
                 </tr>
                 <?php foreach ($genap as $value):?>
                 <tr>
                   <td style="color:black;"><?php echo $value['tgl_mulai']; ?> s/d <?php echo $value['tgl_akhir'];  ?></td>
                   <td style="color:black;"><?php echo $value['kegiatan']; ?></td>
                 </tr>
               <?php endforeach; ?>
                 <tr>
                   <td align="center" colspan="2"><b>Semester Pendek</b></td>
                 </tr>
                 <?php foreach ($pendek as $value):?>
                 <tr>
                   <td style="color:black;"><?php echo $value['tgl_mulai']; ?> s/d <?php echo $value['tgl_akhir'];  ?></td>
                   <td style="color:black;"><?php echo $value['kegiatan']; ?></td>
                 </tr>
               <?php endforeach; ?>
               </table>
              </div>
            </div>
          </div>
        </div>
      </section>
       
          

<?php echo $this->endSection(); ?>

 