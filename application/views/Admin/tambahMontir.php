<html>

<head>
  <title><?php echo $judul ?></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
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
  <?php if ($this->session->flashdata('alert')) : ?>
    <div class="col-md-12" style="float:none; margin:0 auto;">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          Registrasi <?= $this->session->flashdata('alert'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this->session->flashdata('fail')) : ?>
    <div class="col-md-12" style="float:none; margin:0 auto;">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          Registrasi <?= $this->session->flashdata('fail'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      </div>
  <?php endif; ?>
    <div class="jumbotron">
      <h1>Registrasi Montir</h1>
    </div>
    <div class="center" style="background-color: white;box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.05);">
      <!-- <form action="" style="width:80%; margin:auto; padding: 20px;" method="post"> -->
      <?php echo form_open_multipart('C_Dangdan_Admin/tambahMontir'); ?>
        <div class="form-group">
          <label for="nip">NIP : </label>
          <input type="text" class="form-control" id="id_montir" name="id_montir" onkeypress="return hanyaAngka(event)">
          <?= form_error('id_montir','<small class="text-danger pl-3">','</small>');?>
        </div>
        <div class="form-group">
          <label for="nama_montir">Nama : </label>
          <input type="text" class="form-control" id="nama_montir" name="nama_montir">
        </div>
        <div class="form-group">
          <label for="alamat_montir">Alamat:</label>
          <textarea class="form-control" rows="5" id="alamat_montir" name="alamat_montir"></textarea>
        </div>
        <div class="form-group">
          <label for="email_montir">Email : </label>
          <input type="email" class="form-control" id="email_montir" name="email_montir">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
          <label for="telpon_montir">Nomor Telpon:</label>
          <input type="text" class="form-control" id="telpon_montir" name="telpon_montir" onkeypress="return hanyaAngka(event)">
        </div>
         
        
        <!-- </div> -->
        <button type="submit" class="btn btn-primary" name="tambahMontir">Submit</button>
      <!-- </form> -->
      <?php echo form_close(); ?>
    <!-- </div> -->
  </div>
</div>
</body>
<script>
		function hanyaAngka(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
	</script>
</html>
