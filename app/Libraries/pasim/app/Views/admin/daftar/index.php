<?php echo $this->extend('layout/admin');?>
<?php echo $this->section('content');?>

          <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Daftar Online</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>NIK</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>Agama</th>
                          <th>No Telepon</th>
                          <th>Email</th>
                          <th>Ibu Kandung</th>
                          <th>Jenis Kelamin</th>
                          <th>SD</th>
                          <th>Tahun</th>
                          <th>SMP</th>
                          <th>Tahun</th>
                          <th>SMA/SMK</th>
                          <th>Tahun</th>
                          <th>Status</th>
                          <th>Jurusan Pilihan</th>
                          <th>Kelas</th>
                          <th>Catatan</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php $a=0 ; foreach ($data as $data): $a++; ?>
                      <tbody>
                        <tr>
                          <td><?php echo $a; ?></td>
                          <td><?php echo $data['nama']; ?></td>
                          <td><?php echo $data['nik']; ?></td>
                          <td><?php echo $data['tempat_lahir']; ?></td>
                          <td><?php echo $data['tgl_lahir']; ?></td>
                          <td><?php echo $data['alamat']; ?></td>
                          <td><?php echo $data['agama']; ?></td>
                          <td><?php echo $data['notel']; ?></td>
                          <td><?php echo $data['email']; ?></td>
                          <td><?php echo $data['ibu']; ?></td>
                          <td><?php echo $data['jk']; ?></td>
                          <td><?php echo $data['sd']; ?></td>
                          <td><?php echo $data['thn_sd']; ?></td>
                          <td><?php echo $data['smp']; ?></td>
                          <td><?php echo $data['thn_smp']; ?></td>
                          <td><?php echo $data['sma']; ?></td>
                          <td><?php echo $data['thn_sma']; ?></td>
                          <td><?php echo $data['status']; ?></td>
                          <td><?php echo $data['nama_jurusan']; ?></td>
                          <td><?php echo $data['kelas']; ?></td>
                          <td><?php echo $data['catatan']; ?></td>
                          <td>
              <center>
              <form action="/hapusdaftar/<?php echo $data['id']; ?>" method="post">
              <?php csrf_field(); ?>
              <input type="hidden" name="_method" value="delete">
              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
              <a href="/DaftarController/edit/<?php echo $data['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
              </form>
              </center>
               </td>
            </tr>
            <?php endforeach; ?>                 
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div></div>
<?php echo $this->endSection(); ?>
