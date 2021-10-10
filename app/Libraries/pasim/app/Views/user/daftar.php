<?php echo $this->extend('layout/template');?>
<?php echo $this->section('content');?>


<section class="ftco-section contact-section" >
	<center>
  <div class="">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                  	<form style="background: lightgrey" class="form-horizontal form-label-left" method="POST" action="/DaftarController/save">

                  		<img src="/images/pasim.png" width="100">
                    <h2><i class="fa fa-bars"><b></i>FORM PENDAFTARAN ONLINE</b></h2>
                   
				
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="nama">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">NIK <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="last-name" name="nik" required="required" class="form-control ">
                            </div>
                          </div>
                          
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Tempat/Tanggal Lahir</label>
                            <div class="col-md-3 col-sm-3 ">
                              <input id="middle-name" class="form-control col" type="text" required="required" name="tempat_lahir">
                            
                            </div>
                             <div class="col-md-3 col-sm-3 ">
                              
                              <input id="middle-name" class="form-control col" type="date" required="required" name="tgl_lahir">
                            </div>
                          </div>
                           <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                             	 <textarea id="birthday" class="date-picker form-control" required="required" type="text" required="required" name="alamat"></textarea>
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
                              <input id="middle-name" class="form-control col" required="required" type="number" name="notel">
                            
                            </div>
                           
                          </div>
                          <div class="form-group row">
                            <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                            <div class="col-md-6 col-sm-6 ">
                              <input id="middle-name" class="form-control col" required="required" type="text" name="email">
                            
                            </div>
                           
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-1 label-align">Nama Ibu Kandung <span class="required"></span>
                            </label>
                            <div class="col-md-6 col-sm-1 ">
                              <input id="birthday" class="date-picker form-control" required="required" type="text" name="ibu">
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
                              <input type="text" id="first-name" required="required" class="form-control" name="sd">
                            </div>
                            <label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Tahun<span class="required"></span>
                            </label>
                            <div class="col-md-2 col-sm-2 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="thn_sd">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SMP <span class="required"></span>
                            </label>
                            <div class="col-md-4 col-sm-4 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="smp">
                            </div>
                            <label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Tahun<span class="required"></span>
                            </label>
                            <div class="col-md-2 col-sm-2 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="thn_smp">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SMA/SMK <span class="required"></span>
                            </label>
                            <div class="col-md-4 col-sm-4 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="sma">
                            </div>
                            <label class="col-form-label col-md-1 col-sm-1 label-align" for="first-name">Tahun<span class="required"></span>
                            </label>
                            <div class="col-md-2 col-sm-2 ">
                              <input type="text" id="first-name" required="required" class="form-control" name="thn_sma">
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
                             <textarea id="birthday" class="date-picker form-control" required="required" type="text" name="catatan"></textarea>
                            </div>
                          </div>
                          
                          <div class="form-group row">
                          	<label class="col-form-label col-md-3 col-sm-1 label-align"><span class="required"></span></label>
           			   		 <div class="col-md-6 col-sm-6">
            				  <button type="submit" class="btn btn-danger">Daftar</button>
          					  </div>
          					</div>
          				<div class="form-group row">
                          
			          </div>
              </form>
                    </div>
</center>
   </section>
<?php echo $this->endSection(); ?>