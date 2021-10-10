<?php echo $this->extend('layout/template');?>
<?php echo $this->section('content');?>
    <!-- <section class="ftco-section contact-section" >
 -->      <div class="container">

              <div class="col-md-6 col-lg-12 pl-lg-5 py-5">
            <div class="row justify-content-start pb-3">
              <div class="col-md-12 heading-section ftco-animate">
          
                <h2 class="mb-2" align="center" ><b>Pengabdian Masyarakat</b></h2>
               <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                         
                          <th>Tahun</th>
                          <th>Kegiatan</th>
                          
                        </tr>
                      </thead>
                      <?php  foreach ($pengabdian as $data): ?>
                      <tbody>
                        <tr>
                         
                          <td><?php echo $data['tahun']; ?></td>
                          <td><?php echo $data['kegiatan']; ?></td>
                          
                        </tr>
                        <?php endforeach; ?>                 
                      </tbody>
                    </table>
              </div>
            </div>
          </div>
        </div>
      </section>
       
          

<?php echo $this->endSection(); ?>

 