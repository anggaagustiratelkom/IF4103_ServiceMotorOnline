<html>

<head>
  <title><?php echo $judul ?></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="<?= base_url(); ?>/assets/js/bootstrap-datepicker.min.js"></script>
  
  <style>
    .center {
      margin: auto;
      width: 100%;
      padding: 10px;
    }
  </style>
</head>
<body style="background-color:#f2f2f2FF; height: 100%;">
<div class="container">
  <div class="col-md-9 mt-5 pt-5 pb-3" style="float:none; margin:0 auto;">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data <strong>berhasil</strong> ditambahkan <?= $this->session->flashdata('alert'); ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="jumbotron">
      <h1>UBAH Data Service</h1>
    </div>
    <div class="center" style="background-color: white;box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.05);">
      <!-- <form action="" style="width:80%; margin:auto; padding: 20px;" method="post"> -->
      <?php foreach($service as $s) {?>
     <?=form_open_multipart('C_Dangdan_Montir/prosesUbahService/'.$s->id_service)?>
     <div class="form-group">
          <label for="nama_customer">Biaya : </label>
          <input type="text" class="form-control" id="biaya" name="biaya" value="<?php echo $s->biaya ?>" require>
        </div>
        <!-- <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button> -->
        <div class="form-group">
          <label for="tanggal_selesai">Tanggal Selesai : </label>
          <input type="text " class="form-control" id="tanggal_selesai" name="tanggal_service" value="<?php echo $s->tanggal_selesai?>" require>
        </div>
        <div class="form-group">
						<select name="status" class="custom-select mb-3">
							<option selected>Service : </option>
							<option value="Proses">Proses</option>
							<option value="Selesai">Selesai</option>
						</select>
				</div>
        <!-- <div class="form-group">
          <label for="password">Harga : </label>
          <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $s->harga ?>" require>
        </div> -->
        <button type="submit" class="btn btn-primary" name="tambahUser">Submit</button>
        <button type="button" class="btn btn-primary" href="<?= base_url("C_Dangdan_Montir");?>" >Back</button>
    <?php }?>
    <!-- </div> -->
  </div>
</div>

<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js'); ?>"></script>
  <script type="text/javascript">
  $(document).on('click', '.browse', function(){
    var file = $(this).parent().parent().parent().find('.file');
    file.trigger('click');
  });
  $(document).on('change', '.file', function(){
    $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
  });
  </script>

</body>

</html>
