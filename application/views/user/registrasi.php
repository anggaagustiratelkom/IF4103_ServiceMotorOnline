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
      <h1>Registrasi Akun</h1>
    </div>
    <div class="center" style="background-color: white;box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.05);">
      <!-- <form action="" style="width:80%; margin:auto; padding: 20px;" method="post"> -->
      <?php echo form_open_multipart('C_Dangdan_User/tambahUser'); ?>
        <div class="form-group">
          <label for="no_ktp">No KTP:</label>
          <input type="text" class="form-control" id="no_ktp" name="no_ktp" onkeypress="return hanyaAngka(event)">
        </div>
        <div class="form-group">
          <label for="nama_customer">Nama:</label>
          <input type="text" class="form-control" id="nama_customer" name="nama_customer">
        </div>
        <div class="form-group">
          <label for="email_customer">Email:</label>
          <input type="email" class="form-control" id="email_customer" name="email_customer">
        </div>
        <div class="form-group">
          <label for="username_customer">Username:</label>
          <input type="text" class="form-control" id="username_customer" name="username_customer">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
          <label for="jk" class="cols-sm-2 control-label" style="margin: 0px; padding: 0px;">Gender:</label>
            <div class="cols-sm-10">
              <div class="input-group">
                <select name="jk" id="jk" class="form-control">
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
            </div>
        </div>
        <div class="form-group">
          <label for="telpon_customer">Nomor Telpon:</label>
          <input type="text" class="form-control" id="telpon_customer" name="telpon_customer" onkeypress="return hanyaAngka(event)">
        </div>
        <div class="form-group">
          <label for="alamat_customer">Alamat:</label>
          <textarea class="form-control" rows="5" id="alamat_customer" name="alamat_customer"></textarea>
        </div>
         
        
        <!-- </div> -->
        <button type="submit" class="btn btn-primary" name="tambahUser">Submit</button>
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
