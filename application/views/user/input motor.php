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
          Data <?= $this->session->flashdata('alert'); ?> dimasukkan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
    </div>
  <?php endif; ?>
  <?php if ($this->session->flashdata('fail')) : ?>
    <div class="col-md-12" style="float:none; margin:0 auto;">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          Data <?= $this->session->flashdata('fail'); ?> dimasukkan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      </div>
  <?php endif; ?>
    <div class="jumbotron">
      <h1>Input Data Motor</h1>
    </div>
    <div class="center" style="background-color: white;box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.05);">
      <!-- <form action="" style="width:80%; margin:auto; padding: 20px;" method="post"> -->
      <?php echo form_open_multipart('C_Dangdan_User/tambahMotor'); ?>
        <div class="form-group">
          <label for="no_ktp">No KTP:</label>
          <input readonly type="text" class="form-control" id="no_ktp" name="no_ktp" value="<?php echo $this->session->userdata('no_ktp');?>">
          <?= form_error('no_ktp','<small class="text-danger pl-3">','</small>');?>
        </div>
        <div class="form-group">
          <label for="nopol">Nomor Polisi:</label>
          <input type="text" class="form-control" id="nopol" name="nopol">
        </div>
        <div class="form-group">
          <label for="nama_motor">Nama Motor:</label>
          <input type="text" class="form-control" id="nama_motor" name="nama_motor">
        </div>
        <div class="form-group">
          <label for="jk" class="cols-sm-2 control-label" style="margin: 0px; padding: 0px;">Jenis Motor:</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <select name="jenis_motor" id="jenis_motor" class="form-control">
                  <option value="Matic">Matic</option>
                  <option value="Sport">Sport</option>
                  <option value="Bebek">Bebek</option>
                </select>
              </div>
            </div>
        </div>
        <div class="form-group">
          <label for="cc">CC:</label>
          <input type="text" class="form-control" id="cc" name="cc" onkeypress="return hanyaAngka(event)">
        </div>
        <div class="form-group">
          <label for="tahun_motor">Tahun Motor:</label>
          <input type="text" class="form-control" id="tahun_motor" name="tahun_motor" onkeypress="return hanyaAngka(event)">
        </div>
        
        <!-- </div> -->
        <button type="submit" class="btn btn-primary" name="tambahMotor">Submit</button>
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
