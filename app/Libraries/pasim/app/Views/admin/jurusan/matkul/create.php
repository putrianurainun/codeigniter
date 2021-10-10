<?php echo $this->extend('layout/admin');?>
<?php echo $this->section('content');?>
<div class="row">
<!-- form input mask -->
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Tambah Mata Kuliah</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <br />
        <form class="form-horizontal form-label-left" method="post" action="/MatkulController/save">
          <?php csrf_field(); ?>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Jurusan</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <select class="form-control" name="id_jurusan">
                <?php foreach($jurusan as $data): ?>
                <option value="<?php echo $data['id'] ?>"><?php echo $data['nama_jurusan'] ?></option>
               <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Kode</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="kode" required="" autofocus="" autocomplete="off">
            </div>
          </div>
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Mata Kuliah</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="nama_matkul" required="" autofocus="" autocomplete="off">
            </div>
          </div>
          
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">SKS</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="sks" required="" autofocus="" autocomplete="off">
            </div>
          </div>

         <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Semester</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="semester" required="" autofocus="" autocomplete="off">
            </div>
          </div>   
          <div class="ln_solid"></div>

          <div class="form-group row">
            <div class="col-md-9 offset-md-3">
              <button type="reset" class="btn btn-danger">Reset</button>
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- /form input mask -->
</div>



<?php echo $this->endSection(); ?>