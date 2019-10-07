  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<body style="background-color:#f2f2f2FF;height:100%">
<div class="container" style="height:100%;">
  <div class="row justify-content-md-center">
      <div class="col-md-9 mt-5 pt-5 pb-3" style="background-color:white;height:100%;">
      
            <div class="main-content" style="">
              <div class="panel-heading span_header_white">
                <div class="panel-title" style="color: #000000; font-weight: bold">Registrasi<hr>
                </div>
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
              
                <?php echo form_open('C_validasi/tambahUser'); ?>
                 
                  <div class="form-group">
                  <label for="username" class="cols-sm-2 control-label" style="margin: 0px; padding: 0px;">Username:</label>
                    <div class="cols-sm-10" style="max-width: 300px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                        <input name="username" id="userName" type="text" class="form-control" value="" maxlength="20" placeholder="Username" required>                                
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label" style="margin: 0px; padding: 0px;">Password:</label>
                    <div class="cols-sm-10" style="max-width: 300px;">
                      <div class="input-group">
                        <span class="input-group-addon"><i aria-hidden="true"></i></span>
                        <input name="password" id="username" type="password" class="form-control" value="" maxlength="20" placeholder="Password" required>
                      </div>
                    </div>
                  </div>   
        
                  <div class="div_space"></div>
                  <button type="submit" name="tambahUser"class="btn btn-success btn-md login-button">Register Account</button>
                  <div class="div_space"></div>
                  <div style="font-size: 12px; margin-bottom: 20px">By clicking Register Account, I confirm I have agreed to
                    <a href="gui.term.php?sid=&amp;source=" target="_blank" style="text-decoration: underline">Terms &amp; Condition</a>, and 
                    <a href="gui.privacy.php?sid=&amp;source=" target="_blank" style="text-decoration: underline">Privacy Policy</a> of Cinema XXI.
                  </div>
                <?php echo form_close(); ?>
              </div>
            
              <!--body wrapper end-->
            </div>
            
          
        <!-- </div> -->
      </div>
  </div>
</div>
</body>

