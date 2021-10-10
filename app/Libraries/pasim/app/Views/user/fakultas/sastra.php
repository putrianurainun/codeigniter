<?php echo $this->extend('layout/template');?>
<?php echo $this->section('content');?>
<section class="ftco-section contact-section" >
  <div class="">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Fakultas Sastra</h2>
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
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#jur1" role="tab" aria-controls="home" aria-selected="true">S1 Sastra Jepang</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#jur2" role="tab" aria-controls="profile" aria-selected="false">D3 Bahasa Inggris</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                    
                      <div class="tab-pane fade show active" id="jur1" role="tabpanel" aria-labelledby="home-tab">
             
                    <h2><i class="fa fa-bars"></i>S1 Sastra Jepang</h2>
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
                        informasi jepang
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
                      <?php foreach ($sem1 as $matkul): ?>
                      <tbody>
                        <tr>
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
                      <?php foreach ($sem2 as $matkul1): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul1['kode']; ?></td>
                          <td><?php echo $matkul1['nama_matkul']; ?></td>
                          <td><?php echo $matkul1['sks']; ?></td>
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
                      <?php foreach ($sem3 as $matkul2): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul2['kode']; ?></td>
                          <td><?php echo $matkul2['nama_matkul']; ?></td>
                          <td><?php echo $matkul2['sks']; ?></td>
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
                      <?php foreach ($sem4 as $matkul3): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul3['kode']; ?></td>
                          <td><?php echo $matkul3['nama_matkul']; ?></td>
                          <td><?php echo $matkul3['sks']; ?></td>
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
                      <?php foreach ($sem5 as $matkul4): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul4['kode']; ?></td>
                          <td><?php echo $matkul4['nama_matkul']; ?></td>
                          <td><?php echo $matkul4['sks']; ?></td>
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
                      <?php foreach ($sem6 as $matkul5): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul5['kode']; ?></td>
                          <td><?php echo $matkul5['nama_matkul']; ?></td>
                          <td><?php echo $matkul5['sks']; ?></td>
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
                      <?php foreach ($sem7 as $matkul6): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul6['kode']; ?></td>
                          <td><?php echo $matkul6['nama_matkul']; ?></td>
                          <td><?php echo $matkul6['sks']; ?></td>
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
                      <?php foreach ($sem8 as $matkul7): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $matkul7['kode']; ?></td>
                          <td><?php echo $matkul7['nama_matkul']; ?></td>
                          <td><?php echo $matkul7['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                      </table>
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                       <b>Visi S1 Sastra Jepang</b>
                       <p>"Menjadi program studi yang menghasilkan lulusan yang memiliki daya saing dalam penguasaan bahasa Jepang di bidang broadcasting dan public speaking dengan didukung kemampuan Bahasa Inggris dan sistem informasi pada tahun 2022."</p>
                       <b>Misi S1 Sastra Jepang</b>
                       <p>
                          Dengan mengacu pada visi Program Studi Sastra Jepang, misi Program Studi Sastra Jepang Universitas Nasional Pasim dideskripsikan dalam tugas, kewajiban dan rencana tindakan yang dirumuskan guna pelaksanaan Tridharma Perguruan Tinggi dengan paparan yang sangat jelas dan realistik sebagai berikut : Dengan mengacu pada visi Program Studi Sastra Jepang Universitas Nasional PASIM Bandung, maka misi Program Studi Sastra Jepang adalah sebagai berikut :
                        <ol type="1">
                         <li>Menyelenggarakan pendidikan untuk meningkatkan daya kompetisi peserta didik dalam penguasaan bahasa Jepang terutama dalam bidang terjemahan, broadcasting dan public speaking dengan dukungan sistem informasi.</li>
                         <li>Melaksanakan penelitian serta aktif dalam berbagai seminar dan workshop dalam bahasa Jepang.</li>
                         <li>Menyelenggarakan Pengabdian kepada Masyarakat (PkM) dalam bidang bahasa dan budaya Jepang secara sistematis dan berkelanjutan.</li>
                         <li>Menjalin kerjasama dengan berbagai instansi dalam penyelenggaraan Tridharma Perguruan Tinggi.</li>
                         <li>Mendidik peserta didik untuk menguasai bahasa jepang sesuai dengan kebutuhan kerja.</li>
                         <li>Meningkatkan daya kompetensi peserta didik dalam menggunakan bahasa jepang dengan cara mengikutsertakan dalam berbagai event, baik tingkat lokal, nasional, maupun internasional.</li>
                         <li>Melaksanakan penelitian dan pengabdian masyarakat untuk memperkaya materi-materi perkuliahan.</li>
                         <li>Mengikutsertakan dosen dalam berbagai macam seminar dan workshop sesuai dengan bidang kepakarannya.</li>
                         <li>Melaksanakan kegiatan yang mendukung peningkatan kemampuan pemahaman bahasa dan budaya asing.</li>
                         <li>Melaksanakan serta menghasilkan lulusan yang beriman, bertaqwa, cerdas mandiri, dan berjiwa kewirausahaan dan dinamis.</li></ol></p>
                         <b>Tujuan S1 Sastra Jepang</b>
                         <p><ol type="1">
                          Tujuan Program Studi Sastra Jepang merupakan hasil rumusan tentang bentuk profil kompetensi yang diharapkan dari lulusan sesuai dengan standard kebutuhan yang diminta dari stakeholders yaitu memenuhi tuntutan kebutuhan bisnis dan industri yang dipaparkan dengan sangat jelas dan sangat realistik sebagai berikut : 
                           <li> Menghasilkan lulusan yang memiliki kompetensi dalam bidang bahasa Jepang dengan keahlian di bidang terjemah lisan dan tulis, broadcast dan public speaking dengan dukungan sistem informasi.</li>
                           <li>Menghasilkan penelitian guna pengembangan pengetahuan dalam bidang bahasa Jepang.</li>
                           <li>Dosen berperan aktif dalam kegiatan seminar, workshop dan pelatihan lainnya yang dapat menunjang pengembangan keahlian bahasa Jepang.</li>
                           <li>Terselenggaranya Pengabdian kepada Masyarakat (PkM) dalam bidang bahasa Jepang sesuai dengan kebutuhan masyarakat.</li>
                           <li>Terjalinnya kerjasama dalam berbagai bidang baik lembaga pemerintahan maupun swasta pada tingkat lokal maupun nasional dalam rangka meningkatkan kualitas pembelajaran dan hasil lulusan.</li>
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
                        
                        
              
                    <h2><i class="fa fa-bars"></i>D3 Bahasa Inggris</small></h2>
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
                        Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher
                            synth. Cosby sweater eu banh mi, qui irure terr.
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
                      <?php foreach ($semi1 as $mk1): ?>
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
                      <?php foreach ($semi2 as $mk2): ?>
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
                      <?php foreach ($semi3 as $mk3): ?>
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
                      <?php foreach ($semi4 as $mk4): ?>
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
                      <?php foreach ($semi5 as $mk5): ?>
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
                      <?php foreach ($semi6 as $mk6): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $mk6['kode']; ?></td>
                          <td><?php echo $mk6['nama_matkul']; ?></td>
                          <td><?php echo $mk6['sks']; ?></td>
                          </tr><?php endforeach; ?>
                        </tbody>
                      </table>
                      </div>
                      <div class="tab-pane fade" id="contact1" role="tabpanel" aria-labelledby="contact-tab">
                       <b>Visi D3 Bahasa Inggris</b>
                       <p>"Menjadi program studi yang berorientasi pada profesionalisme dalam penguasaan Bahasa Inggris dengan dukungan Sistem Informasi dan Broadcasting pada tahun 2022."</p>
                       <p>Penjelasan mengenai visi Program Studi Bahasa Inggris sebagai berikut:</p>
                       <p><ol type="1">
                         <li> Profesionalisme</li>
                            <p>Program studi berupaya untuk menghasilkan lulusan yang memiliki profesionalisme yang direalisasikan melalui berbagai program kegiatan yang terencana berupa seminar, pelatihan, dan praktek kerja lapangan di bidang bahasa Inggris. Salah satu indikator profesionalisme yakni mahasiswa harus mencapai TOEFL score >= 500 secara lokal.</p>
                          <li>Penguasaan Bahasa Inggris</li>
                          <p>Program studi berupaya untuk menghasilkan lulusan yang dibekali ilmu pengetahuan yang kemanfaatnnya bisa diaplikasikan di masyarakat yaitu lulusan memiliki kemampuan dalam bidang Bahasa Inggris yang juga didukung kompetensi di bidang Broadcasting dan Public Speaking yang direalisasikan melalui pelatihan, seminar serta workshop baik di kampus maupun kunjungan ke media televisi untuk melihat secara langsung proses Broadcasting berlangsung sehingga lulusannya dapat bersaing dalam dunia kerja di tingkat nasional.</p>
                          <li>Sistem Informasi</li>
                          <p>Program studi berupaya menghasilkan lulusan yang mampu melakukan penyesuaian terhadap perkembangan zaman yaitu lulusan yang memiliki keahlian dengan didukung sistem informasi melalui mata kuliah berbasis komputer. Program Studi Bahasa Inggris menerapkan kurikulum yang berbasis Sistem Informasi sesuai kebijakan universitas sehingga lulusan mampu selain menguasai Bahasa Inggris juga menguasai Sistem Informasi</p>
                       </ol></p>
                       <b>Misi D3 Bahasa Inggris</b>
                       <p>Program Studi Bahasa Inggris mengemban misi yang berdasar pada bidang pendidikan atau pengajaran, bidang penelitian, dan bidang pengabdian masyarakat (tridharma perguruan tinggi) untuk mencapai dan merealisasikan visi yang diusung oleh Program Studi Bahasa Inggris antara lain:
                       <ol type="1">
                         <li>Mempersiapkan kurikulum dalam penyelenggaraan pendidikan bagi peserta didik untuk menguasai Bahasa Inggris yang didukung dengan kemampuan memanfaatkan Sistem Informasi dan Broadcasting dalam penyelenggaraan pendidikan akademik sesuai dengan kebutuhan kerja.</li>
                         <li>Mengembangkan penelitian untuk menjadi landasan dalam proses pendidikan dan memperkaya materi perkuliahan Bahasa Inggris.</li>
                         <li>Meningkatkan pelaksanaan program pengabdian kepada masyarakat yang diimplementasikan untuk menerapkan ilmu Bahasa Inggris dan melihat dampak kemanfaatannya di masyarakat.</li>
                         <li>Meningkatkan kapabilitas dan kemampuan dosen melalui seminar, pelatihan (workshop), sertifikasi, dan pendidikan ke jenjang yang lebih tinggi.</li>
                         <li>Penyelenggaraan kerjasama yang mencakup instansi dan institusi bertaraf nasional dan internasional.</li>
                         <li>Melakukan kegiatan yang mendukung peningkatan kemampuan pemahaman bahasa, budaya asing yang didukung teknologi terkini dengan mengundang native speaker atau pakar di bidangnya serta mengikuti berbagai event lokal dan nasional</li>
                       </ol></p>
                       <b>Tujuan D3 Bahasa Inggris</b>
                       <p>Program Studi Bahasa Inggris memiliki tujuan yang jelas, realistik, dan terukur serta berdasarkan pada visi misi program studi. Dalam pencapaian visi dan keterlaksanaan misi diharapkan dapat mewujudkan tujuan Program Studi Bahasa Inggris dalam kurun waktu 2017-2022:
                        <ol type="1">
                          <li>Menghasilkan lulusan yang memiliki kompetensi dalam bidang Bahasa Inggris yang didukung dengan kemampuan dalam memanfaatkan Sistem Informasi dan Broadcasting yang siap terserap kerja dan mampu bersaing secara kompetitif di dunia kerja dengan memiliki etika professional.</li>
                          <li>Menghasilkan sumberdaya manusia yang mampu mengembangkan kemampuannya secara inovatif dalam bidang penelitian dan dapat diterapkan di masyarakat.</li>
                          <li>Melaksanakan pengabdian masyarakat dalam bidang Bahasa Inggris agar dapat mengaplikasikan kemanfaatan ilmu yang didapat bagi masyarakat luas.</li>
                          <li>Menghasilkan human resources (sumber daya manusia) yang berkualitas dan mampu mengembangkan kompetensinya.</li>
                          <li>Memperluas bidang kerjasama Program Studi Bahasa Inggris dengan instansi dan intitusi baik dalam ranah Tridarma Perguruan Tinggi maupun career development.</li>
                          <li>Menghasilkan lulusan yang memiliki keahlian berbahasa dan mampu memanfaatkan sistem informasi sesuai perkembangan teknologi di era globalisasi.</li>
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
                      <?php $a=0 ; foreach ($dataing as $data): $a++; ?>
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

 