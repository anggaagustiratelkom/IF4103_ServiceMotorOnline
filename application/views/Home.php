<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <div class="jumbotron" style="background:#f5af19;margin:auto;padding-top:30px ">
        <table style="width:100%;margin: auto">
            <tr>
                <td id="header" style="width: 45%"><img src="<?= base_url(); ?>Images/logo service.png" style="margin: auto;width: 300px "></td>
                <td id="header"style="width: 55%"><h1> DANGDAN</h1></td>
                <!-- <p>Isi data di bawah untuk melakukan pendaftaran service</p>  -->
                </tr>
            </table>
    </div>
    <nav class="navbar navbar-expand-sm navbar-dark" style="margin: auto;background: #9b7117;width: 100%">
        <!-- Brand -->
        <img src="<?= base_url(); ?>Images/dangdanhome.png" style="width: 100px;padding-right: 20px;margin-left: 10px;">
        <a class="navbar-brand" href="#" style="color:black"><h2>DANGDAN</h2></a>
  
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('C_Dangdan')?>"><i class="fa fa-home fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp; Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('C_Dangdan/sparepart')?>"><i class="fa fa-shopping-basket fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp; Sparepart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('C_Dangdan/daftarService')?>" ><i class="fa fa-motorcycle fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp; Daftar Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('C_Dangdan')?>"><i class="fa fa-info-circle  fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp;About</a>
          </li>
  
          <!-- Dropdown -->
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              <i class="fa fa-user-circle fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp;Akun
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?= site_url('C_Dangdan/login')?>">Login</a>
              <a class="dropdown-item" href="<?= site_url('C_Dangdan/registrasi')?>">Registrasi</a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="center pt-5 mt-5 pb-5 mb-5" style="background-color: white;width: 100%">
        <form action="" style="width:90%; margin:auto" >
          <div class="form-group">
            <table class="table table-striped">
              <thead>
                <tr>
                <th scope="col">No KTP</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No Polisi</th>
                <th scope="col">Tanggal Service</th>
                <th scope="col">Biaya</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <td>1234</td>
                <td>a</td>
                <td>Bandung</td>
                <td>D1234FE</td>
                <td>2019-06-21</td>
                <td>200000</td>
                </tr>
            </tbody>
          </table>
        </form>
      </div>
</body>
</html>