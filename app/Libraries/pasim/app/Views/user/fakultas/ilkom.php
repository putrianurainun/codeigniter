<?php echo $this->extend('layout/template');?>
<?php echo $this->section('content');?>
<section class="ftco-section contact-section" >
  <div class="">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Fakultas Ilmu Komputer</h2>
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
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#jur1" role="tab" aria-controls="home" aria-selected="true">S1 Teknik Informatika</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#jur2" role="tab" aria-controls="profile" aria-selected="false">D3 Manajemen Informatika</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                    
                      <div class="tab-pane fade show active" id="jur1" role="tabpanel" aria-labelledby="home-tab">
             
                    <h2><i class="fa fa-bars"></i>S1 Teknik Informatika</small></h2>

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
                      
                      <tbody>
                        <tr>
                          <?php foreach ($sem1 as $matkul): ?>
                          <td><?php echo $matkul['kode']; ?></td>
                          <td><?php echo $matkul['nama_matkul']; ?></td>
                          <td><?php echo $matkul['sks']; ?></td>
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
                      
                      <tbody>
                        <tr>
                          <?php foreach ($sem2 as $matkul2): ?>
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
                       <b>Visi S1 Teknik Informatika</b>
                       <p>"Menjadi pusat tenaga ahli dalam membuat dan mengembangkan industri multimedia dan game dengan teknologi terkini pada tahun 2021"</p>
                       <b>Misi S1 Teknik Informatika</b>
                       <p><ol type="1">
                         <li>Menyiapkan kurikulum dengan komposisi mata kuliah yang mendukung mahasiswa dapat membuat dan mengembangkan industri multimedia dan game.</li>
                         <li>Mengembangkan penelitian dibidang ilmu pembuatan dan pengembangan industri multimedia dan game.(penelitian)</li>
                         <li>Membangun career development center sebagai tempat pusat karir mahasiswa dalam pengembangan karir.</li>
                         <li>Melaksanakan kegiatan pengabdian kepada masyarakat yang dapat meningkatkan motivasi dan kepekaan dosen dan mahasiswa terhadap kebutuhan teknologi ataupun sistem informasi disekitarnya.</li>
                         <li>Menyelenggarakan kerjasama dengan berbagai pihak, sehingga materi pembelajaran dapat disesuaikan dengan kebutuhan industri terkini dan mahasiswa dapat mengimplementasikan hasil belajarnya secara nyata.</li>
                         <li>Memfasilitasi dosen dan mahasiswa untuk mengembangkan kompetensinya dalam bidang Teknologi dan Sistem Informasi baik itu melalui kegitan seminar, workshop, pelatihan, maupun sertifikasi serta lomba-lomba dibidang  terkait.</li>
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
                      <?php $a=0 ; foreach ($data as $dosen): $a++; ?>
                      <tbody>
                        <tr>
                          <td><?php echo $a; ?></td>
                          <td><?php echo $dosen['nidn']; ?></td>
                          <td><?php echo $dosen['nama']; ?></td>
                          <td><?php echo $dosen['gelar']; ?></td>
                          <td><?php echo $dosen['pendidikan']; ?></td>
                          <td><?php echo $dosen['akademik']; ?></td>
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
                        
                        
              
                    <h2><i class="fa fa-bars"></i>D3 Manajemen Informatika</small></h2>
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
                        profl
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
                      <?php foreach ($semi1 as $matku1): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matku1['kode']; ?></td>
                          <td><?php echo $matku1['nama_matkul']; ?></td>
                          <td><?php echo $matku1['sks']; ?></td>
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
                      <?php foreach ($semi2 as $matku2): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matku2['kode']; ?></td>
                          <td><?php echo $matku2['nama_matkul']; ?></td>
                          <td><?php echo $matku2['sks']; ?></td>
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
                      <?php foreach ($semi3 as $matku3): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matku3['kode']; ?></td>
                          <td><?php echo $matku3['nama_matkul']; ?></td>
                          <td><?php echo $matku3['sks']; ?></td>
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
                      <?php foreach ($semi4 as $matku4): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matku4['kode']; ?></td>
                          <td><?php echo $matku4['nama_matkul']; ?></td>
                          <td><?php echo $matku4['sks']; ?></td>
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
                      <?php foreach ($semi5 as $matku5): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matku5['kode']; ?></td>
                          <td><?php echo $matku5['nama_matkul']; ?></td>
                          <td><?php echo $matku5['sks']; ?></td>
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
                      <?php foreach ($semi6 as $matku6): ?>
                      <tbody>
                        <tr>
                         <td><?php echo $matku6['kode']; ?></td>
                          <td><?php echo $matku6['nama_matkul']; ?></td>
                          <td><?php echo $matku6['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody></table>
                      </div>
                      <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                        <b>Visi D3 Manajemen Informatika</b>
                        <p>"Mencetak sumber daya manusia yang dapat bersaing di dunia kerja dalam bidang Sistem Informasi dan mampu menciptakan serta mengelola bisnis dibidang industri startup pada tahun 2021"</p>
                        <b>Misi D3 Manajemen Informatika</b>
                        <p><ol type="1">
                          <li>Menyiapkan kurikulum dengan komposisi mata kuliah yang mendukung untuk dua konsentrasi yaitu sistem informasi dan industri startup sehingga dapat menghasilkan lulusan yang siap kerja dan dapat menciptakan bisnis startup.</li>
                          <li>Mengembangkan penelitian aplikasi mobile, desktop dan web untuk kebutuhan organisasi dan industri.</li>
                          <li>Membangun career development center sebagai tempat pusat karir mahasiswa dalam pengembangan karir yang dapat membantu mahasiswa tingkat akhir untuk mendapatkan pekerjaan.</li>
                          <li>Melaksanakan kegiatan pengabdian masyarakat yang dapat meningkatkan motivasi dan kepekaan dosen dan mahasiswa terhadap kebutuhan teknologi ataupun perangkat lunak disekitarnya.</li>
                          <li>Menyelenggarakan kerjasama dengan berbagai pihak, sehingga materi pembelajaran dapat disesuaikan dengan kebutuhan industri terkini dan mahasiswa dapat mengimplementasikan hasil belajarnya secara nyata.</li>
                          <li>Memfasilitasi dosen dan mahasiswa untuk mengembangkan kompetensinya dalam bidang multimedia dan game baik itu melalui kegiatan seminar, workshop, pelatihan, maupun sertifikasi serta lomba-lomba dibidang terkait.</li>
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
                      <?php $a=0 ; foreach ($datami as $data): $a++; ?>
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
                        informasi
                      </div>
                    </div>
                      </div>
                     
                    </div>
                  </div>
                </div>
              </div>
      </section>
       
          

<?php echo $this->endSection(); ?>

 