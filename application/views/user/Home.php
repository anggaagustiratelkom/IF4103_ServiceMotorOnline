<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

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
  <?php if ($this->session->flashdata('logout')) : ?>
    <div class="col-md-12" style="float:none; margin:0 auto;">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
          Logout Berhasil<?= $this->session->flashdata('logout'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
    </div>
  <?php endif;?>
    <?php if(empty($service)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
    <?php endif; ?>
    
    <section id="testimonials" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h1>SPAREPART TERATAS</h1>
          <!-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p> -->
        </div>
        <div class="owl-carousel testimonials-carousel">
        <?php foreach($spareparts as $s){?>
            <div class="testimonial-item" style="margin-right:20px">
              <img src="<?php echo base_url() .'images/'.$s->gambar ?>"style="width:300px;padding-right:20px;"  alt="">
              <h3><a style="color:black"><?php echo $s->nama?></a></h3>
              <p class="description"><?php echo $s->deskripsi?></p>
              <h3>Harga : Rp <?php echo $s->harga?></h3>
            </div>
        <?php }?>
        </div>

      </div>
    </section>

      <div class="center pt-5 mt-5 pb-5 mb-5" style="background-color: white;width: 100%">
        <form action="" style="width:90%; margin:auto" >
          <div class="form-group">
            <table class="table table-striped">
              <thead>
                <tr>
                <th scope="col">No KTP</th>
                <th scope="col">Nama</th>
                <th scope="col">No Polisi</th>
                <th scope="col">Nama Montir</th>
                <th scope="col">Jenis Daftar</th>
                <th scope="col">Tanggal Service</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Biaya</th>
                <th scope="col">Status</th>
                </tr>
              </thead>
            <?php
              if (!empty($service)) {
                foreach($service as $s){?>
                  <tbody>
                    <tr>
                    <td><?php echo $s->no_ktp?></td>
                    <td><?php echo $s->nama_customer?></td>
                    <td><?php echo $s->nopol?></td>
                    <td><?php echo $s->nama_montir?></td>
                    <td><?php echo $s->jenis_daftar?></td>
                    <td><?php echo $s->tanggal_service?></td>
                    <td><?php echo $s->tanggal_selesai?></td>
                    <td><?php echo $s->biaya?></td>
                    <td><?php echo $s->status?></td>
                    </tr>
                </tbody>
                  <?php } ?>
             <?php } ?>
          </table>
        </form>

        <script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
        <script src="<?= base_url(); ?>assets/lib/superfish/superfish.min.js"></script>
        <script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
        <script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="<?= base_url(); ?>assets/lib/magnific-popup/magnific-popup.min.js"></script>
        <script src="<?= base_url(); ?>assets/lib/sticky/sticky.js"></script>

        <!-- Template Main Javascript File -->
        <script src="<?= base_url(); ?>assets/js/main.js"></script>

</body>
</html>