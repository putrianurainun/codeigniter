<?php echo $this->extend('layout/admin');?>
<?php echo $this->section('content');?>
<div class="row">
<!-- form input mask -->
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Edit Daftar Online</h2>
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
        <br />
        <form class="form-horizontal form-label-left" method="POST" action="/DaftarController/update/<?php echo $daftar['id']; ?>">

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="nama" value="<?php echo $daftar['nama'] ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIK <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="last-name" name="nik" required="required" value="<?php echo $daftar['nik'] ?>"class="form-control ">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tempat/Tanggal Lahir</label>
                            <div class="col-md-3 col-sm-3 ">
                              <input id="middle-name" class="form-control col" type="text" required="required" name="tempat_lahir" value="<?php echo $daftar['tempat_lahir'] ?>">
                            
                            </div>
                             <div class="col-md-3 col-sm-3 ">
                              
                              <input id="middle-name" class="form-control col" type="date" required="required" name="tgl_lahir" value="<?php echo $daftar['tgl_lahir'] ?>">
                            </div>
                          </div>
                           <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                               <textarea id="birthday" class="date-picker form-control" required="required" type="text" required="required" name="alamat" ><?php echo $daftar['alamat'] ?></textarea>
                            </div>
                           
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Agama <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                               <select id="agama" class="date-picker form-control" required="required" name="agama">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Budha">Budha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Konghucu">Konghucu</option>
                               </select>
                            </div>
                           
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">No Telepon</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" required="required" type="number" name="notel" value="<?php echo $daftar['notel'] ?>">
                            
                            </div>
                           
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" required="required" type="text" name="email" value="<?php echo $daftar['notel'] ?>">
                            
                            </div>
                           
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-1 label-align">Nama Ibu Kandung <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-1 ">
                              <input id="birthday" class="date-picker form-control" required="required" type="text" name="ibu" value="<?php echo $daftar['ibu'] ?>">
                            </div>
                          </div>

                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
                            <div class="col-md-6 col-sm-6 ">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="jk" required="required" value="perempuan" class="join-btn"> &nbsp; Perempuan &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="jk" required="required" value="laki-laki" class="join-btn"> Laki - Laki
                                </label>
                              </div>
                            </div>
                          </div>
                           <h2><i class="fa fa-bars"><b></i>PENDIDIKAN FORMAL</b></h2>
                           <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SD <span class="required"></span>
                            </label>
                            <div class="col-md-4 col-sm-4 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="sd" value="<?php echo $daftar['sd'] ?>">
                            </div>
                            <label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Tahun<span class="required"></span>
                            </label>
                            <div class="col-md-2 col-sm-2 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="thn_sd" value="<?php echo $daftar['thn_sd'] ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SMP <span class="required"></span>
                            </label>
                            <div class="col-md-4 col-sm-4 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="smp" value="<?php echo $daftar['smp'] ?>">
                            </div>
                            <label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Tahun<span class="required"></span>
                            </label>
                            <div class="col-md-2 col-sm-2 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="thn_smp" value="<?php echo $daftar['thn_smp'] ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SMA/SMK <span class="required"></span>
                            </label>
                            <div class="col-md-4 col-sm-4 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="sma" value="<?php echo $daftar['sma'] ?>">
                            </div>
                            <label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Tahun<span class="required"></span>
                            </label>
                            <div class="col-md-2 col-sm-2 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="thn_sma" value="<?php echo $daftar['thn_smp'] ?>">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Status Mahasiswa</label>
                            <div class="col-md-6 col-sm-6 ">
                              <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="status" value="Baru" class="join-btn"> &nbsp; Baru &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-secondary">
                                  <input type="radio" name="status" value="Pindahan" class="join-btn"> Pindahan
                                </label>
                              </div>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                           <label class="col-form-label col-md-3 col-sm-1 label-align">Jurusan<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-1 ">
                              <select id="jurusan" class="date-picker form-control" required="required" name="id_jurusan">
                                <?php foreach ($jurusan as  $value):?>
                                <option value="<?php echo $value['id'] ?>"><?php echo $value['nama_jurusan']; ?></option>
                               <?php endforeach; ?>
                               </select>
                            </div>
                          </div>
                          <div class="form-group row">
                           <label class="col-form-label col-md-3 col-sm-1 label-align">Kelas<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-1 ">
                              <select id="birthday" class="date-picker form-control" required="required" name="kelas">
                                <option value="Pagi">Pagi</option>
                                <option value="Sore">Sore</option>
                                <option value="Karyawan">Karyawan</option>
                                
                               </select>
                            </div>
                          </div>
                          <div class="form-group row">
                           <label class="col-form-label col-md-3 col-sm-1 label-align">Catatan<span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-1 ">
                             <textarea id="birthday" class="date-picker form-control" required="required" type="text" name="catatan" ><?php echo $daftar['catatan'] ?></textarea>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-1 label-align"><span class="required"></span></label>
                       <div class="col-md-6 col-sm-6">
                      <button type="submit" class="btn btn-primary">Edit</button>
                      </div>
                    </div>
                  <div class="form-group row">
                          
                </div>
              </form>
      </div>
    </div>
  </div>
  <!-- /form input mask -->
</div>



<?php echo $this->endSection(); ?>