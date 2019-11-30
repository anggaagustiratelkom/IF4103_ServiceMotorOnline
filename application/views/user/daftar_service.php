<html>
    <head>
		<title><?php echo $judul ?></title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="<?= base_url(); ?>/assets/js/bootstrap-datepicker.min.js"></script>

  <!-- Bootstrap CSS -->
		<style>
		.center {
		  margin: auto;
		  width: 100%;
		  padding: 10px;
		}
		</style>
    </head>
    <body style="background-color:#f2f2f2FF; height: 100%;">
        <div class="container mt-5 pt-5 pb-3">
            <div class="jumbotron">
                <h1>Pendaftaran Service</h1>      
                <p>Isi data di bawah untuk melakukan pendaftaran service</p>
          </div>
				<div class="center" style="background-color: white">
				
				<?php if(empty($service)) : ?>
					<div class="alert alert-danger" role="alert">
						<?=form_open_multipart('C_Dangdan_User/inputService/') ?>
						<form action="" style="width:70%; margin:auto" >
							<div class="form-group">
							<label for="nopol">Nomor Polisi : </label>
							<input type="text" class="form-control" id="nopol" name="nopol">
							</div>
							<div class="form-group">
							<label for="jenis_service">Jenis Service : </label>
							<input type="text" class="form-control" id="jenis_daftar" name="jenis_daftar">
							</div>
							<div class="form-group">
							<label for="tanggal">Tanggal</label><br>
							<input type="text" name="tanggal_service" class="tanggal" id="tanggal_service">
							</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
					</div>
				<?php endif; ?>

				<?php foreach($service as $s){?>
					<?=form_open_multipart('C_Dangdan_User/inputService/'.$s->nopol) ?>
					<form action="" style="width:70%; margin:auto" >
						<div class="form-group">
						  <label for="nopol">Nomor Polisi : </label>
						  <input type="text" class="form-control" id="nopol" name="nopol" value="<?php echo $s->nopol?>">
						</div>
						<div class="form-group">
						  <label for="jenis_service">Jenis Service : </label>
						  <input type="text" class="form-control" id="jenis_daftar" name="jenis_daftar">
						</div>
						<div class="form-group">
                <label for="tanggal">Tanggal</label>
								<br>
                <input type="text" name="tanggal_service" class="tanggal" id="tanggal_service">
            </div>
						<button type="submit" class="btn btn-primary">Submit</button>
						
				<?php }?>
					</form>
				</div>
	</div>
    </body>
		<script type="text/javascript">
            $(document).ready(function () {
                $('.tanggal').datepicker({
                    format: "yyyy-mm-dd",
                    autoclose:true
                });
            });
        </script>
</html>