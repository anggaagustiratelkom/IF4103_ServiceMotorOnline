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
  <div class="col-md-9 mt-5 pt-5 pb-3" style="float:none; margin:0 auto;">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data <strong>berhasil</strong> ditambahkan <?= $this->session->flashdata('alert'); ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="jumbotron">
      <h1>UBAH SPAREPART</h1>
    </div>
    <div class="center" style="background-color: white;box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.05);">
      <!-- <form action="" style="width:80%; margin:auto; padding: 20px;" method="post"> -->
      <?php foreach($spareparts as $s) {?>
     <?=form_open_multipart('C_Dangdan_Admin/proses_ubah/'.$s->id_barang)?>
     <div class="form-group">
          <label for="nama_customer">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $s->nama ?>" require>
        </div>
        <div class="form-group">
          <label for="userfile">Gambar :</label>
          <input type="file" name="userfile" class="file">
        </div>
        <!-- <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button> -->
        <div class="form-group">
          <label for="username_customer">Deskripsi:</label>
          <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $s->deskripsi ?>" require>
        </div>
        <div class="form-group">
          <label for="password">Harga:</label>
          <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $s->harga ?>" require>
        </div>
        <button type="submit" class="btn btn-primary" name="tambahUser">Submit</button>
        <button type="button" class="btn btn-primary" onclick="history.back();">Back</button>
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
