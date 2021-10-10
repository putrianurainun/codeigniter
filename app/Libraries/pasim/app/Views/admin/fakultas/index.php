<?php echo $this->extend('layout/admin');?>
<?php echo $this->section('content');?>

        	<div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Fakultas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <a href="/FakultasController/create" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Fakultas</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php $a=0 ; foreach ($fakultas as $data): $a++; ?>
                      <tbody>
                        <tr>
                          <td><?php echo $a; ?></td>
                          <td><?php echo $data['nama_fakultas']; ?></td>
                       	  <td>
							<center>
							<form action="/hapus/<?php echo $data['id']; ?>" method="post">
							<?php csrf_field(); ?>
							<input type="hidden" name="_method" value="delete">
							<button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
							<a href="/FakultasController/edit/<?php echo $data['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
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
