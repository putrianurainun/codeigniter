<?php echo $this->extend('layout/template');?>
<?php echo $this->section('content');?>
<section class="ftco-section contact-section" >
  <div class="">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Fakultas Teknik</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#jur1" role="tab" aria-controls="home" aria-selected="true">S1 Teknik Industri</a>
                      </li>
                     
                    </ul>
                    <div class="tab-content" id="myTabContent">
                    
                      <div class="tab-pane fade show active" id="jur1" role="tabpanel" aria-labelledby="home-tab">
             
                    <h2><i class="fa fa-bars"></i>S1 Teknik Industri</h2>
                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Profil Jurusan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Kurikulum</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Visi Misi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#dosen" role="tab" aria-controls="contact" aria-selected="false">Dosen</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#penelitian" role="tab" aria-controls="contact" aria-selected="false">Penelitian</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#informasi" role="tab" aria-controls="contact" aria-selected="false">Informasi Kampus</a>
                      </li>
                    </ul>
                       <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        Teknik Informatika
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th colspan="3">Semester 1</th>
                        </tr>
                        <tr>
                          <th>Kode</th>
                          <th>Mata Kuliah</th>
                          <th>SKS</th>
                        </tr>
                      </thead>
                      <?php foreach ($sem1 as $matkul1): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul1['kode']; ?></td>
                          <td><?php echo $matkul1['nama_matkul']; ?></td>
                          <td><?php echo $matkul1['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                        <thead>
                        <tr>
                          <th colspan="3">Semester 2</th>
                        </tr>
                        <tr>
                          <th>Kode</th>
                          <th>Mata Kuliah</th>
                          <th>SKS</th>
                        </tr>
                      </thead>
                      <?php foreach ($sem2 as $matkul2): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul2['kode']; ?></td>
                          <td><?php echo $matkul2['nama_matkul']; ?></td>
                          <td><?php echo $matkul2['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                        <thead>
                        <tr>
                          <th colspan="3">Semester 3</th>
                        </tr>
                        <tr>
                          <th>Kode</th>
                          <th>Mata Kuliah</th>
                          <th>SKS</th>
                        </tr>
                      </thead>
                      <?php foreach ($sem3 as $matkul3): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul3['kode']; ?></td>
                          <td><?php echo $matkul3['nama_matkul']; ?></td>
                          <td><?php echo $matkul3['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                        <thead>
                        <tr>
                          <th colspan="3">Semester 4</th>
                        </tr>
                        <tr>
                          <th>Kode</th>
                          <th>Mata Kuliah</th>
                          <th>SKS</th>
                        </tr>
                      </thead>
                      <?php foreach ($sem4 as $matkul4): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul4['kode']; ?></td>
                          <td><?php echo $matkul4['nama_matkul']; ?></td>
                          <td><?php echo $matkul4['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                        <thead>
                        <tr>
                          <th colspan="3">Semester 5</th>
                        </tr>
                        <tr>
                          <th>Kode</th>
                          <th>Mata Kuliah</th>
                          <th>SKS</th>
                        </tr>
                      </thead>
                      <?php foreach ($sem5 as $matkul5): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul5['kode']; ?></td>
                          <td><?php echo $matkul5['nama_matkul']; ?></td>
                          <td><?php echo $matkul5['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                        <thead>
                        <tr>
                          <th colspan="3">Semester 6</th>
                        </tr>
                        <tr>
                          <th>Kode</th>
                          <th>Mata Kuliah</th>
                          <th>SKS</th>
                        </tr>
                      </thead>
                      <?php foreach ($sem6 as $matkul6): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul6['kode']; ?></td>
                          <td><?php echo $matkul6['nama_matkul']; ?></td>
                          <td><?php echo $matkul6['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                        <thead>
                        <tr>
                          <th colspan="3">Semester 7</th>
                        </tr>
                        <tr>
                          <th>Kode</th>
                          <th>Mata Kuliah</th>
                          <th>SKS</th>
                        </tr>
                      </thead>
                      <?php foreach ($sem7 as $matkul7): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul7['kode']; ?></td>
                          <td><?php echo $matkul7['nama_matkul']; ?></td>
                          <td><?php echo $matkul7['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                        <thead>
                        <tr>
                          <th colspan="3">Semester 8</th>
                        </tr>
                        <tr>
                          <th>Kode</th>
                          <th>Mata Kuliah</th>
                          <th>SKS</th>
                        </tr>
                      </thead>
                      <?php foreach ($sem8 as $matkul8): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul8['kode']; ?></td>
                          <td><?php echo $matkul8['nama_matkul']; ?></td>
                          <td><?php echo $matkul8['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                      </table>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                       <b>Visi S1 Teknik Industri</b>
                       <p>"Menjadi Program Studi yang unggul pada tahun 2025 di Propinsi Jawa Barat dalam bidang teknik industri yang berbasis pada teknologi informasi"</p>
                       <b>Misi S1 Teknik Industri</b>
                       <p><ol type="1">
                         <li>Menyelenggarakan pendidikan tinggi teknik industri yang bermutu untuk menghasilkan lulusan yang siap pakai di bidang teknik industri dan sistem informasi industri</li>
                         <li>Menyediakan kurikulum bidang Teknik Industri yang mampu memenuhi kebutuhan industri saat ini.</li>
                         <li>Menyediakan sarana dan prasarana yang memadai untuk penyelenggaraan pendidikan dan penelitian bagi dosen dan mahasiswa.</li>
                         <li>Menyelenggarakan pendidikan hard skill bidang sistem informasi produksi dan otomasi proses produksi.</li>
                         <li> Menyelenggarakan kerjasama dengan berbagai pihak untuk menunjang pelaksanakan pendidikan, penelitian dan pengabdian kepada masyarakat, sehingga ilmu dan teknologi yang diberikan selalu mutakhir serta dapat diterapkan secara tepat guna.</li>
                         <li>Memberikan kesempatan kepada anak bangsa yang berpotensi tetapi memiliki keterbatasan biaya untuk melanjutkan pendidikan tinggi di prodi Teknik Industri</li>
                       </ol></p>
                      </div>
                      <div class="tab-pane fade" id="dosen" role="tabpanel" aria-labelledby="contact-tab">
                         <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                        
                          <th>NIDN</th>
                          <th>Nama</th>
                          <th>Gelar</th>
                          <th>Pendidikan</th>
                          <th>Jabatan Akademik</th>
                          
                        </tr>
                      </thead>
                      <?php $a=0 ; foreach ($data as $data): $a++; ?>
                      <tbody>
                        <tr>
                          <td><?php echo $a; ?></td>
                          <td><?php echo $data['nidn']; ?></td>
                          <td><?php echo $data['nama']; ?></td>
                          <td><?php echo $data['gelar']; ?></td>
                          <td><?php echo $data['pendidikan']; ?></td>
                          <td><?php echo $data['akademik']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody></table>
                      </div>

                        <div class="tab-pane fade" id="penelitian" role="tabpanel" aria-labelledby="contact-tab">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                         
                          <th>Tahun</th>
                          <th>Penelitian</th>
                        </tr>
                      </thead>
                      <?php  foreach($data_fakultas as $value): ?>
                      <tbody>
                        <tr>
                          
                          <td><?php echo $value['tahun']; ?></td>
                          <td><?php echo $value['penelitian']; ?></td>
                        </tr><?php endforeach; ?>
                      </tbody>
                    </table>
                      </div>

                      <div class="tab-pane fade" id="informasi" role="tabpanel" aria-labelledby="contact-tab">
                        informasi ti
                      </div>
                    </div>

                      </div>



                      
                    </div>
                  </div>
                </div>
              </div>
      </section>
       
          

<?php echo $this->endSection(); ?>

 