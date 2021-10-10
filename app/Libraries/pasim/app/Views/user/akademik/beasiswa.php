<?php echo $this->extend('layout/template');?>
<?php echo $this->section('content');?>
    <br><br><h2 align="center"><b>BEASISWA</b></h2>
   
     
              <p style="color: black">Merupakan salah satu upaya yang dilakukan oleh UNAS PASIM untuk memotivasi prestasi mahasiswa, berbagai program beasiswa pendidikan diberikan kepada calon mahasiswa yang mendaftar di <b>UNIVERSITAS NASIONAL PASIM</b> dan mahasiswa yang memiliki prestasi Akademik dengan nilai Indeks Prestasi Kumulatif (IPK) minimal 3,50 (tiga koma lima nol).</p>
              <p style="color: black">Beberapa jenis beasiswa yang diberikan diantaranya yaitu : </p>
              
                <table>
                   <?php $a=0; foreach ($beasiswa as $value) : $a++;?>
                  <tr>
                    <td style="color: black"><b><?php echo $a; ?> . <?php echo $value['nama']; ?></b></td>
                  </tr>
                  <tr>
                    <td style="color: black"><?php echo $value['keterangan']; ?></td>
                  </tr>
                <?php endforeach; ?>
                </table>
            </div>
            </div>
          </div>
        </div>
      </section>
       
          

<?php echo $this->endSection(); ?>

 