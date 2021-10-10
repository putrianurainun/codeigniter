<?php echo $this->extend('layout/admin');?>
<?php echo $this->section('content');?>
<div class="row">
<!-- form input mask -->
  <div class="col-md-12 col-sm-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Edit Kalender</h2>
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
        <form class="form-horizontal form-label-left" method="post" action="/KalenderController/update/<?php echo $kalender['id']; ?>">
          <?php csrf_field(); ?>

          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Mulai</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="date" class="form-control" name="tgl_mulai" value="<?php echo $kalender['tgl_mulai'] ?>" required="" autofocus="" autocomplete="off">
            </div>
          </div>
          
          <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Tanggal Akhir</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="date" class="form-control" name="tgl_akhir" value="<?php echo $kalender['tgl_akhir'] ?>" required="" autofocus="" autocomplete="off">
            </div>
          </div>

         <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Kegiatan</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <input type="text" class="form-control" name="kegiatan" value="<?php echo $kalender['kegiatan'] ?>" required="" autofocus="" autocomplete="off">
            </div>
          </div>  

           <div class="form-group row">
            <label class="control-label col-md-3 col-sm-3 col-xs-3">Semester</label>
            <div class="col-md-9 col-sm-9 col-xs-9">
              <select name="semester">
                <option>Genap</option>
                <option>Ganjil</option>
                <option>Pendek</option>
              </select>
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