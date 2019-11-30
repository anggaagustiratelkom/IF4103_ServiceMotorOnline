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
     
    <?php if ($this->session->flashdata('success')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data montir <strong>berhasil</strong> <?= $this->session->flashdata('success'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('update')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data montir <strong>berhasil</strong> <?= $this->session->flashdata('update'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('hapus')) : ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data montir <strong>berhasil</strong> <?= $this->session->flashdata('hapus'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">DAFTAR Montir</h3>
            <?php if (empty($montir)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NIP</th>
                        <th class="text-center" scope="col">Nama</th>
                        <th class="text-center" scope="col">Alamat</th>
                        <th class="text-center" scope="col">Email</th>
                        <th class="text-center" scope="col">No.Telpon</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($montir as $m){?>
                    <tr>
                        <td class="text-center"><?php echo $m->nip ?></td>
                        <td class="text-center"><?php echo $m->nama_montir ?></td>
                        <td class="text-center"><?php echo $m->alamat_montir ?></td>
                        <td class="text-center"><?php echo $m->email_montir ?></td>
                        <td class="text-center"><?php echo $m->telpon_montir ?></td>
                        <td class="text-center">
                            <a href="<?php echo base_url();?>C_Dangdan_Admin/hapusmontir/<?php echo $m->nip ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                        </td>
                    <?php }?>
                    </tr>
                </tbody>
            </table>
            
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>C_Dangdan_Admin/registrasiMontir" class="btn btn-primary">Tambah Data montir</a>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>  