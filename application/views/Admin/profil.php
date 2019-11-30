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
<div class="container">
  <div class="col-md-12">
      <div class="nav-tabs-custom">
        <div class="tab-content">
          <div class="active tab-pane" id="settings">
            <form class="form-horizontal" action="" method="POST" >
               <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Username" value="<?php echo $this->session->userdata('username_admin'); ?>">
                </div>
              </div>
              <div class="form-group">
                <label for="passwordLama" class="col-sm-2 control-label">Password Lama</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" placeholder="Password Lama" name="passwordLama" id="passwordLama">
                </div>
                <?= form_error('passwordLama','<small class="text-danger pl-3">','</small>');?>
              </div>
              <div class="form-group">
                <label for="passwordBaru1" class="col-sm-2 control-label">Password Baru</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" placeholder="Password Baru" name="passwordBaru1" id="passwordBaru1">
                </div>
                <?= form_error('passwordBaru1','<small class="text-danger pl-3">','</small>');?>
              </div>
              <div class="form-group">
                <label for="passwordBaru2" class="col-sm-2 control-label">Konfirmasi Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" placeholder="Konfirmasi Password" name="passwordBaru2" id="passwordBaru2">
                </div>
                <?= form_error('passwordBaru2','<small class="text-danger pl-3">','</small>');?>
              </div>
            </form>
          </div> 
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-check-circle"></i> Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>