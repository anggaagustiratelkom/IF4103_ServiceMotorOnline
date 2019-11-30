
<html lang="en">
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

<div class="container mt-5 pt-5 pb-3" style="height:100%;">
  <div class="row justify-content-md-center">
    <div class="col-md-9  pt-4" style="background-color:white;height:100%;">
        <?php if (empty($spareparts)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
        <?php endif; ?>
        <?php foreach ($spareparts as $s) { ?> 
            <div class="row" style="margin:0px; padding:0px;">
                <div>
                    <h2><?php echo $s->nama?></h2>  
                </div>
                <hr width="100%">
            </div>                                  
            <div class="row" style="margin:0px; padding:0px;">   
                <div>
                    <img src="<?php echo base_url() .'images/'.$s->gambar ?>" alt="" style="width:50%; margin-right:10px; margin-bottom: 10px;">
                </div>
            </div>
            <div>
                <strong>Deskripsi : </strong>
                <p><?php echo $s->deskripsi?></p>
                <br>
            </div>
            <div style="margin-bottom: 5px">
                <strong>Harga : <p>Rp. <?php echo $s->harga?></p> </strong>
                
            </div>
            <button type="button" class="btn btn-primary" onclick="history.back();">Kembali</button>   
        </div>
        <?php }?>
        
  </div>
</div>
</body>
</html>