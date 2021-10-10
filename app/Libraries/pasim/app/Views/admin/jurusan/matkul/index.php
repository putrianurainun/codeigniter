<?php echo $this->extend('layout/admin');?>
<?php echo $this->section('content');?>

          <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Mata Kuliah</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <a href="/MatkulController/create" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Jurusan</th>
                          <th>Kode</th>
                          <th>Mata Kuliah</th>
                          <th>SKS</th>
                          <th>Semester</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php $a=0 ; foreach ($data_jurusan as $data): $a++; ?>
                      <tbody>
                        <tr>
                          <td><?php echo $a; ?></td>
                          <td><?php echo $data['nama_jurusan']; ?></td>
                          <td><?php echo $data['kode']; ?></td>
                          <td><?php echo $data['nama_matkul']; ?></td>
                          <td><?php echo $data['sks']; ?></td>
                          <td><?php echo $data['semester']; ?></td>
                          <td>
              <center>
              <form action="/hapmat/<?php echo $data['id']; ?>" method="post">
              <?php csrf_field(); ?>
              <input type="hidden" name="_method" value="delete">
              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
              <a href="/MatkulController/edit/<?php echo $data['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
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
