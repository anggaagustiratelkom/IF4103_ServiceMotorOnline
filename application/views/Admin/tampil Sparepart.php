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
                Data Film <strong>berhasil</strong> <?= $this->session->flashdata('success'); ?>.
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
                Data Film <strong>berhasil</strong> <?= $this->session->flashdata('update'); ?>.
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
                Data Film <strong>berhasil</strong> <?= $this->session->flashdata('hapus'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-5">
        <div class="col">
            <h3 class="text-center">DAFTAR SPAREPART</h3>
            <?php if (empty($spareparts)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
            <?php endif; ?>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">NAMA SPAREPART</th>
                        <th class="text-center" scope="col">DESKRIPSI</th>
                        <th class="text-center" scope="col">HARGA</th>
                        <th class="text-center" scope="col">GAMBAR</th>
                        <th class="text-center" scope="col">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($spareparts as $s){?>
                    <tr>
                        <td class="text-center"><?php echo $s->nama ?></td>
                        <td class="text-center"><?php echo $s->deskripsi ?></td>
                        <td class="text-center"><?php echo $s->harga ?></td>
                        <td class="text-center"><img src="<?php echo base_url() .'images/'.$s->gambar ?>" alt="" width="200"></td>
                        <td class="text-center">
                            <a href="<?php echo base_url();?>C_Dangdan_Admin/ubahSparepart/<?php echo $s->id_barang ?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
                            <a href="<?php echo base_url();?>C_Dangdan_Admin/hapusSparepart/<?php echo $s->id_barang ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i> Hapus</a>
                        </td>
                    <?php }?>
                    </tr>
                </tbody>
            </table>
            
            <div class="row mt-3">
                <div class="col md-6 text-center mt-5">
                    <a href="<?= base_url(); ?>C_Dangdan_Admin/sparepartAdmin" class="btn btn-primary">Tambah Data Sparepart</a>
                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>  