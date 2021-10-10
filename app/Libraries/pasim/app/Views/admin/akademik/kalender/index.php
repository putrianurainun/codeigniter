<?php echo $this->extend('layout/admin');?>
<?php echo $this->section('content');?>

        	<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kalender Akademik</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <a href="/KalenderController/create" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal Mulai</th>
                          <th>Tanggal Akhir</th>
                          <th>Kegiatan</th>
                          <th>Semester</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php $a=0 ; foreach ($kalender as $data): $a++; ?>
                      <tbody>
                        <tr>
                          <td><?php echo $a; ?></td>
                          <td><?php echo $data['tgl_mulai']; ?></td>
                          <td><?php echo $data['tgl_akhir']; ?></td>
                          <td><?php echo $data['kegiatan']; ?></td>
                          <td><?php echo $data['semester']; ?></td>
                       	  <td>
							<center>
							<form action="/hapkal/<?php echo $data['id']; ?>" method="post">
							<?php csrf_field(); ?>
							<input type="hidden" name="_method" value="delete">
							<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
							<a href="/KalenderController/edit/<?php echo $data['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
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
