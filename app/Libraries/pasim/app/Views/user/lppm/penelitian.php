<?php echo $this->extend('layout/template');?>
<?php echo $this->section('content');?>
<section class="ftco-section contact-section" >
  <div class="">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Penelitian</h2>
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
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#ilkom" role="tab" aria-controls="home" aria-selected="true">Ilmu Komputer</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ekonomi" role="tab" aria-controls="profile" aria-selected="false">Ekonomi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ekonomi" role="tab" aria-controls="profile" aria-selected="false">Psikologi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ekonomi" role="tab" aria-controls="profile" aria-selected="false">Sastra</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ekonomi" role="tab" aria-controls="profile" aria-selected="false">Teknik</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                    
                      <div class="tab-pane fade show active" id="ilkom" role="tabpanel" aria-labelledby="home-tab">
                          <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                             <thead>
                                <tr>                        
                                   <th>Tahun</th>
                                   <th>Penelitian</th>
                                 </tr>
                            </thead>
                                <?php  foreach($ilkom as $value): ?>
                             <tbody>
                               <tr>  
                                  <td><?php echo $value['tahun']; ?></td>
                                   <td><?php echo $value['penelitian']; ?></td>
                              </tr><?php endforeach; ?>
                             </tbody>
                           </table>
                      </div>

                      <div class="tab-pane fade" id="ekonomi" role="tabpanel" aria-labelledby="profile-tab">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                             <thead>
                                <tr>                        
                                   <th>Tahun</th>
                                   <th>Penelitian</th>
                                 </tr>
                            </thead>
                                <?php  foreach($ekonomi as $data): ?>
                             <tbody>
                               <tr>  
                                  <td><?php echo $data['tahun']; ?></td>
                                   <td><?php echo $data['penelitian']; ?></td>
                              </tr><?php endforeach; ?>
                             </tbody>
                           </table>
                      </div>

                      <div class="tab-pane fade" id="psikologi" role="tabpanel" aria-labelledby="profile-tab">
                          <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                             <thead>
                                <tr>                        
                                   <th>Tahun</th>
                                   <th>Penelitian</th>
                                 </tr>
                            </thead>
                                <?php  foreach($psikologi as $psi): ?>
                             <tbody>
                               <tr>  
                                  <td><?php echo $psi['tahun']; ?></td>
                                   <td><?php echo $psi['penelitian']; ?></td>
                              </tr><?php endforeach; ?>
                             </tbody>
                           </table>
                      </div>

                      <div class="tab-pane fade" id="sastra" role="tabpanel" aria-labelledby="profile-tab">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                             <thead>
                                <tr>                        
                                   <th>Tahun</th>
                                   <th>Penelitian</th>
                                 </tr>
                            </thead>
                                <?php  foreach($sastra as $data1): ?>
                             <tbody>
                               <tr>  
                                  <td><?php echo $data1['tahun']; ?></td>
                                   <td><?php echo $data1['penelitian']; ?></td>
                              </tr><?php endforeach; ?>
                             </tbody>
                           </table>
                      </div>
                     

                     <div class="tab-pane fade" id="teknik" role="tabpanel" aria-labelledby="profile-tab">
                          <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                             <thead>
                                <tr>                        
                                   <th>Tahun</th>
                                   <th>Penelitian</th>
                                 </tr>
                            </thead>
                                <?php  foreach($teknik as $tkn): ?>
                             <tbody>
                               <tr>  
                                  <td><?php echo $tkn['tahun']; ?></td>
                                   <td><?php echo $tkn['penelitian']; ?></td>
                              </tr><?php endforeach; ?>
                             </tbody>
                           </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      </section>
       
          

<?php echo $this->endSection(); ?>

 