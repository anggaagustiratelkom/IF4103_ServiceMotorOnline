<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <title><?php echo $judul ?></title>

    <style>
        ul li a{
            font-size: 20px;
        }
        nav a{
            padding: 20px;
            height: 100%
        }
        ul li{
            padding: 15px;
        }
        ul li:hover{
            background: #805700;
        }
        @media (max-width: 576px) {
        .wrap-login100 {
            padding-left: 15px;
            padding-right: 15px;
        }
} 
    </style>
</head>
<body>    
      <div class="container-fluid ">
        <div class="jumbotron">
            <h1>Spareparts</h1>
        </div>

        <?php if (empty($spareparts)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>


        <div class="row justify-content-center">
        <?php foreach ($spareparts as $s) { ?>
         <div class="card mr-2 mt-2" style="width:400px">
            <center>
                <img class="card-img-top" src="<?php echo base_url() .'images/'.$s->gambar ?>" alt="Card image" style="margin-left:15px;width:360px; height: 300px;">
                <!-- <img class="card-img-top" src="<?= base_url(); ?>Images/Spareparts/BT17R.png" alt="Card image" style="margin-left:15px;width:360px; height: 300px;"> -->
                <div class="card-body">
                    <h4 class="card-title"><?php echo $s->nama ?></h4>
                    <p class="card-text"><?php echo $s->deskripsi ?></p>
                    <a href="<?= base_url();?>C_Dangdan_User/indexDeskripsiSparepart/<?php echo $s->id_barang?>" class="btn btn-primary float-right">Lihat lebih lanjut</a>
                </div>
            </center>
         </div>
        <?php }?>
        </div> 
        
      </div>
</body>
</html>