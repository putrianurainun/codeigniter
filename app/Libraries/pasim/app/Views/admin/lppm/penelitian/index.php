<?php echo $this->extend('layout/admin');?>
<?php echo $this->section('content');?>

    <div  role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Admin <small>Data Penelitian</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Penelitian <small>Users</small></h2>
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
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      </code>
                    </p>
                    <a href="/PenelitianController/create" class="btn btn-success btn-sm"><i class="fa fa-plus"></i></a>
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Fakultas</th>
                          <th>Tahun</th>
                          <th>Penelitian</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <?php $a=1 ; foreach($data_fakultas as $value): ?>
                      <tbody>
                        <tr>
                          <td><?php echo $a; ?></td>
                          <td><?php echo $value['nama_fakultas']; ?></td>
                          <td><?php echo $value['tahun']; ?></td>
                          <td><?php echo $value['penelitian']; ?></td>
                          <td>
              <center>
              <form action="penelitian/delete/<?php echo $value['id']; ?>" method="post">
              <?php csrf_field(); ?>
              <input type="hidden" name="_method" value="delete">
              <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>

              <a href="/penelitian/edit/<?php echo $value['id']; ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
              </form>
              </center>
               </td>
            </tr>
            <?php  $a++; endforeach; ?>                
                      </tbody>
                    </table>
                  </div>
                  </div>
              </div>
            </div>
                </div>
              </div></div></div></div>
<?php echo $this->endSection(); ?>
