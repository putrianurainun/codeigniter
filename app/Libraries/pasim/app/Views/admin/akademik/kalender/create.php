<?php echo $this->extend('layout/admin');?>
<?php echo $this->section('content');?>

<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 ">
		<div class="x_panel">
			<div class="x_title">
				<h2>Tambah Agenda</small></h2>
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
				<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/KalenderController/save" method="post">
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tanggal Mulai <span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="date" id="first-name" required="required" class="form-control " name="tgl_mulai">
						</div>
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tanggal Akhir<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="date" id="first-name" required="required" class="form-control " name="tgl_akhir">
						</div>
						
					</div>

					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Kegiatan<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="first-name" required="required" class="form-control " name="kegiatan">
						</div>
						
					</div>
					
					<div class="item form-group">
						<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Semester<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 ">
							<select name="semester">
								<option>Genap</option>
								<option>Ganjil</option>
								<option>Pendek</option>
							</select>
						</div>
						
					</div>
					<div class="ln_solid"></div>
					<div class="item form-group">
						<div class="col-md-6 col-sm-6 offset-md-3">
							
							<button class="btn btn-primary" type="reset">Reset</button>
							<button type="submit" class="btn btn-success">Submit</button>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>


<?php echo $this->endSection(); ?>