<?php echo $this->extend('layout/template');?>
<?php echo $this->section('content');?>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><i class="fa fa-bars"></i>Galeri</h2>
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
                         <table>
                           <?php  foreach($ilkom as $value): ?>
                          
                           
                             <td><img src="/public/uploads/<?php echo $value['foto']?>" width="150"></td>
                          
                           <?php endforeach; ?>
                         </table>
               
                      </div>

                      <div class="tab-pane fade" id="ekonomi" role="tabpanel" aria-labelledby="profile-tab">
                        <table>
                           <?php  foreach($ekonomi as $ekonomi): ?>
                          
                           
                             <td><img src="/public/uploads/<?php echo $ekonomi['foto']?>" width="150"></td>
                          
                           <?php endforeach; ?>
                         </table>

                      </div>

                      <div class="tab-pane fade" id="psikologi" role="tabpanel" aria-labelledby="profile-tab">
                          <table>
                           <?php  foreach($psikologi as $psi): ?>
                          
                           
                             <td><img src="/public/uploads/<?php echo $psi['foto']?>" width="150"></td>
                          
                           <?php endforeach; ?>
                         </table>
                      </div>

                      <div class="tab-pane fade" id="sastra" role="tabpanel" aria-labelledby="profile-tab">
                       <table>
                           <?php  foreach($sastra as $sastra): ?>
                          
                           
                             <td><img src="/public/uploads/<?php echo $sastra['foto']?>" width="150"></td>
                          
                           <?php endforeach; ?>
                         </table>
                      </div>
                     

                     <div class="tab-pane fade" id="teknik" role="tabpanel" aria-labelledby="profile-tab">
                        <table>
                           <?php  foreach($teknik as $teknik): ?>
                          
                           
                             <td><img src="/public/uploads/<?php echo $teknik['foto']?>" width="150"></td>
                          
                           <?php endforeach; ?>
                         </table>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
 
          

<?php echo $this->endSection(); ?>

 