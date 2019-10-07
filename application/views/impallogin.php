<!DOCTYPE html>
<html lang="en">
<head>
	 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- MY CSS -->

    

    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/style.css">
	<title>Registrasi</title>
</head>
<body style="background-color: lightgray">
	<div class="main-content" style="max-width: 300px;background-color: white;margin-top: 80px;margin-left: 500px;height: 300px;margin-bottom: 20px">
	<div class="panel" style="border-color: #FFFF; border: 0px"><br>                    
	<div align="center">  
        <h1>Login</h1>            
    <?php if(validation_errors()) { ?>
                  <div class="alert alert-danger">
                    <?php echo validation_errors(); ?>
                  </div>
                <?php } ?>
                <?php if ($this->session->flashdata('sukses')) : ?>
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Teater <strong>BERHASIL REGISTRASI</strong> <?= $this->session->flashdata('sukses'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>
                <?php if ($this->session->flashdata('gagal')) : ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Data Teater <strong>GAGAL REGISTER</strong> <?= $this->session->flashdata('gagal'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>          
	</div>                    
	<div style="padding-top:80px" class="panel-body">                        
		<form action="<?= site_url('C_validasi/matchUsernamePassword')?>" id="form_login" name="form_login" method="post" class="form-horizontal">                                                  
			<div style="margin-bottom: 25px" class="input-group">                                
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-phone"></i></span>                                
				<input id="login" type="text" class="form-control" name="username" maxlength="20" placeholder="Username" required="">           
			</div>                            
			<div style="margin-bottom: 25px" class="input-group">                                
				<span class="input-group-addon">
					<i class="glyphicon glyphicon-lock"></i></span>                                
				<input id="mpin_login" type="password" class="form-control" name="password" placeholder="Password" maxlength="20" required="">
			</div>                            
				<div style="margin-top:10px" class="form-group">                                
					<!-- Button -->                                
					<div class="col-sm-12 controls">                                    
						<button type="submit" id="btn-login" class="btn btn-success" style="background-color: #005350;margin-left:100px;">Login </button>                                                                    
                    </div>
                    <div class="col-sm-12 controls">                                    
                    <a class="dropdown-item  py-3 px-3" href="<?= base_url();?>C_validasi" class="nav_bar-animate"><span class="fa fa-user"></span>&nbsp;Sign-up</a>                                                                    
                    </div>
                                                  
				</div>                                                        
        </form>        
						</div>
					</div>
				</div>
</form>
</body>
</html>
