<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


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
</head><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<body>
            <?php if (empty($montir)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
    <?php endif; ?>

      <div class="center pt-5 mt-5 pb-5 mb-5" style="background-color: white;width: 100%">
        <form action="" style="width:90%; margin:auto" >
          <div class="form-group">
            <table class="table table-striped">
              <thead>
                <tr>
                <th scope="col">No KTP</th>
                <th scope="col">Nama</th>
                <th scope="col">No Polisi</th>
                <th scope="col">Jenis Daftar</th>
                <th scope="col">Tanggal Service</th>
                <th scope="col">Tanggal Selesai</th>
                <th scope="col">Biaya</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                </tr>
              </thead>
            <?php
              if (!empty($montir)) {
                foreach($montir as $m){?>
                  <tbody>
                    <tr>
                    <td><?php echo $m->no_ktp?></td>
                    <td><?php echo $m->nama_customer?></td>
                    <td><?php echo $m->nopol?></td>
                    <td><?php echo $m->jenis_daftar?></td>
                    <td><?php echo $m->tanggal_service?></td>
                    <td><?php echo $m->tanggal_selesai?></td>
                    <td><?php echo $m->biaya?></td>
                    <td><?php echo $m->status?></td>
                    <td class="text">
                            <a href="<?php echo base_url();?>C_Dangdan_Montir/ubahDataService/<?php echo $m->id_service ?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-pencil"></i> Ubah</a>
                        </td> 
                  </tr>
                </tbody>
                  <?php } ?>
             <?php } ?>
          </table>
        </form>
      </div>
</body>
</html>