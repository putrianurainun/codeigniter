<?php echo $this->extend('layout/template');?>
<?php echo $this->section('content');?>
<section class="ftco-section contact-section" >
  <div class="">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Fakultas Ekonomi</h2>
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
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#jur1" role="tab" aria-controls="home" aria-selected="true">S1 Akuntansi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#jur2" role="tab" aria-controls="profile" aria-selected="false">S1 Manajemen</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                    
                      <div class="tab-pane fade show active" id="jur1" role="tabpanel" aria-labelledby="home-tab">
             
                    <h2><i class="fa fa-bars"></i>S1 Akuntansi</h2>
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
                        profil akuntansi
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
                      <?php foreach ($sem1 as $mk1): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $mk1['kode']; ?></td>
                          <td><?php echo $mk1['nama_matkul']; ?></td>
                          <td><?php echo $mk1['sks']; ?></td>
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
                      <?php foreach ($sem2 as $mk2): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $mk2['kode']; ?></td>
                          <td><?php echo $mk2['nama_matkul']; ?></td>
                          <td><?php echo $mk2['sks']; ?></td>
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
                      <?php foreach ($sem3 as $mk3): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $mk3['kode']; ?></td>
                          <td><?php echo $mk3['nama_matkul']; ?></td>
                          <td><?php echo $mk3['sks']; ?></td>
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
                      <?php foreach ($sem4 as $mk4): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $mk4['kode']; ?></td>
                          <td><?php echo $mk4['nama_matkul']; ?></td>
                          <td><?php echo $mk4['sks']; ?></td>
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
                      <?php foreach ($sem5 as $mk5): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $mk5['kode']; ?></td>
                          <td><?php echo $mk5['nama_matkul']; ?></td>
                          <td><?php echo $mk5['sks']; ?></td>
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
                      <?php foreach ($sem6 as $mk6): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $mk6['kode']; ?></td>
                          <td><?php echo $mk6['nama_matkul']; ?></td>
                          <td><?php echo $mk6['sks']; ?></td>
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
                      <?php foreach ($sem7 as $mk7): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $mk7['kode']; ?></td>
                          <td><?php echo $mk7['nama_matkul']; ?></td>
                          <td><?php echo $mk7['sks']; ?></td>
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
                      <?php foreach ($sem8 as $mk8): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $mk8['kode']; ?></td>
                          <td><?php echo $mk8['nama_matkul']; ?></td>
                          <td><?php echo $mk8['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                      </table>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                       <b>Visi S1 Akuntansi</b>
                       <p>"Program Akuntansi Universitas Nasional Pasim menawarkan dua konsentrasi sebagai pendukung yaitu sistem informasi akuntansi dan internal audit dengan kurikulum 144 sks dan masa tempuh 8 semester atau 4 tahun.</p>
                       <b>Misi S1 Akuntansi"</b>
                       <p><ol type="1">
                         <li>Menjadi program studi manajemen yang berorientasi kemasa depan bertumpu pada upaya penguatan Iman dan Taqwa (IMTAQ) kepada Tuhan Yang Maha Esa.</li>
                         <li>Penguasaan Ilmu Akuntansi Komersial dan Pemerintahan berbasis teknologi informasi dalam era globalisasi.</li>
                         <li>Memiliki jiwa kewirausahaan sehingga menjadi pusat unggulan.</li>
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



                      <div class="tab-pane fade" id="jur2" role="tabpanel" aria-labelledby="profile-tab">
                        
                        
              
                    <h2><i class="fa fa-bars"></i>S1 Manajemen</small></h2>
                <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Profil Jurusan</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile1" role="tab" aria-controls="profile" aria-selected="false">Kurikulum</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact" aria-selected="false">Visi Misi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#dosen1" role="tab" aria-controls="contact" aria-selected="false">Dosen</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#penelitian1" role="tab" aria-controls="contact" aria-selected="false">Penelitian</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#informasi1" role="tab" aria-controls="contact" aria-selected="false">Informasi Kampus</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab">
                        profil manajemen
                      </div>
                      <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab">
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
                      <?php foreach ($semi1 as $matkul1): ?>
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
                      <?php foreach ($semi2 as $matkul2): ?>
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
                      <?php foreach ($semi3 as $matkul3): ?>
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
                      <?php foreach ($semi4 as $matkul4): ?>
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
                      <?php foreach ($semi5 as $matkul5): ?>
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
                      <?php foreach ($semi6 as $matkul6): ?>
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
                      <?php foreach ($semi7 as $matkul7): ?>
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
                      <?php foreach ($semi8 as $matkul8): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul8['kode']; ?></td>
                          <td><?php echo $matkul8['nama_matkul']; ?></td>
                          <td><?php echo $matkul8['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                      </table>
                      </div>
                      <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                        <b>Visi S1 Manajemen</b>
                        <p>"Menghasilkan lulusan yang dapat mengembangkan Small Business yang ditunjang dengan kemampuan di bidang manajemen sumber daya manusia dan manajemen pemasaran yang berbasis pada Sistem Informasi sehingga menjadi pusat keunggulan di tingkat Regional pada tahun 2022."</p>
                        <b>Misi S1 Manajemen</b>
                        <p><ol type="1">
                          Program Studi Manajemen memiliki misi yaitu deskripsi mengenai tugas, kewajiban, tanggung jawab, dan rencana tindakan yang dirumuskan sesuai dengan visi Program Studi Manajemen untuk digunakan dalam pengembangan Tridarma Perguruan Tinggi, dan kami paparkan dengan jelas dan realistik sebagai berikut:
                          <li>Melaksanakan dan memproses peserta didik dalam memahami ilmu manajemen Sumber Daya Manusia dan Manajemen Pemasaran yang sesuai dengan kebutuhan dunia bisnis dan industri.</li>
                          <li>Mengadakan kerjasama dengan beberapa pihak , sehingga materi perkuliahan dapat sesuai dengan kepentingan industri yang terbaru serta mahasiswa dapat menerapkan pada dunia kerja.</li>
                          <li>Menyelenggarakan program penelitian untuk peningkatan kualitas sivitas akademika secara sistematis dan berkelanjutan</li>
                          <li>Menyelenggarakan program Pengabdian kepada Masyarakat (PkM) di bidang manajemen sumber daya manusia dan manajemen sumber daya manusia yang tepat sasaran dan sesuai dengan kebutuhan masyarakat</li>
                          <li>Melaksanakan kegiatan di bidang <b>Small Business</b> sehingga mahasiswa dapat memiliki gambaran menjadi seorang wirausaha yang baik</li>
                        </ol></p>
                      </div>
                      <div class="tab-pane fade" id="dosen1" role="tabpanel" aria-labelledby="contact-tab">
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
                      <?php $a=0 ; foreach ($datama as $data): $a++; ?>
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

                        <div class="tab-pane fade" id="penelitian1" role="tabpanel" aria-labelledby="contact-tab">
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

                      <div class="tab-pane fade" id="informasi1" role="tabpanel" aria-labelledby="contact-tab">
                        xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                            booth letterpress, commodo enim craft beer mlkshk 
                      </div>
                    </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
      </section>
       
          

<?php echo $this->endSection(); ?>

 