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
        <ul class="nav nav-tabs">
          <li class="active"><a href="#settings" data-toggle="tab">Ubah Identitas</a></li>
          <li><a href="#password" data-toggle="tab">Ubah Password</a></li>
        </ul>
        <div class="tab-content">
          <div class="active tab-pane" id="settings">
            <form class="form-horizontal" action="<?php echo base_url('C_Dangdan_User/ubahUser') ?>" method="POST" enctype="multipart/form-data">
            <?php foreach($akun as $a){?>  
              <div class="form-group">
                <label class="col-sm-2 control-label">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Username" name="username_customer" value="<?php echo $a->username_customer?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama Lengkap</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama_customer" value="<?php echo $a->nama_customer; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" placeholder="Email" name="email_customer" value="<?php echo $a->email_customer; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Telp</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Telp" name="telpon_customer" value="<?php echo $a->telpon_customer; ?>">
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Alamat</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" placeholder="Jenis Kelamin" name="alamat_customer" value="<?php echo $a->alamat_customer; ?>">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-check-circle"></i> Simpan</button>
                </div>
              </div>
            <?php }?>
            </form>
          
          </div>
          <div class="tab-pane" id="password">
            <form class="form-horizontal" action="<?php echo base_url('C_Dangdan_User/updpassword') ?>" method="POST">
              <div class="form-group">
                <label for="passLama" class="col-sm-2 control-label">Password Lama</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" placeholder="Password Lama" name="passLama" >
                </div>
              </div>
              <div class="form-group">
                <label for="passBaru" class="col-sm-2 control-label">Password Baru</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" placeholder="Password Baru" name="passBaru">
                </div>
              </div>
              <div class="form-group">
                <label for="passKonf" class="col-sm-2 control-label">Konfirmasi Password</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" placeholder="Konfirmasi Password" name="passKonf">
                </div>
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