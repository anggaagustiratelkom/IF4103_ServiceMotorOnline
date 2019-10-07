<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
    <div style="background:#f5af19;margin:auto;padding-top:30px ">
        <table style="width:100%;margin: auto">
            <tr>
                <td id="header" style="width: 45%"><img src="logo service.png" style="margin: auto;width: 300px "></td>
                <td id="header"style="width: 55%"><h1> Sparepart </h1></td>
                <!-- <p>Isi data di bawah untuk melakukan pendaftaran service</p>  -->
                </tr>
            </table>
    </div>
    <nav class="navbar navbar-expand-sm navbar-dark" style="margin: auto;background: #9b7117;width: 100%">
        <!-- Brand -->
        <img src="dangdanhome.png" style="width: 100px;padding-right: 20px;margin-left: 10px;">
        <a class="navbar-brand" href="#" style="color:black">DANGDAN</a>
  
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-home fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp; Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-shopping-basket fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp; Sparepart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" ><i class="fa fa-motorcycle fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp; Daftar Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-info-circle  fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp;About</a>
          </li>
  
          <!-- Dropdown -->
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              <i class="fa fa-user-circle fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp;Akun
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Login</a>
              <a class="dropdown-item" href="#">Registrasi</a>
            </div>             
          </li>
        </ul>
      </nav>
      <div class="container-fluid ">
        <div class="row my-2">
        <h2>Daftar Sparepart</h2>
        </div>
        <div class="row justify-content-center">
        <div class="card mr-2 mt-2" style="width:400px">
          <img class="card-img-top" src="gambar/ban.jpg" alt="Card image" style="width:390px; height: 300px;">
          <div class="card-body">
            <h4 class="card-title"> Ban tubeless 100/80-17 Front & 140/70-17 Rear</h4>
            <p class="card-text">2 pcs Ban tubeless 100/80-17 Front & 140/70-17 Rear (Hanya Ban Luar, Velg Hanya Contoh Gambar)
                    Lebih tahan lama aman untuk pemakaian dalam keadaan basah maupun kering
                    didesain sporty sesuai dengan area perkotaan yang siap menemani aktivitas harian Anda</p>
            <a href="#" class="btn btn-primary float-right">Lihat lebih lanjut</a>
          </div>
        </div>
        
        <div class="card mr-2 mt-2" style="width:400px">
            <img class="card-img-top" src="gambar/jok-motor.jpg" alt="Card image" style="width:390px%; height: 300px;">
            <div class=" card-body ">
            <h4 class="card-title">Jok Motor beat</h4>
            <p class="card-text">Sebagai seorang pengendara motor , salah satu kenyamanan saat berkendara adalah ketika jok motor terasa nyaman ketika di pakai para pengendara membuat kita nyaman, tidak licin dan penumpang merasa nyaman.</p>
            <a href="#" class="btn btn-primary float-right mt-5">Lihat lebih lanjut</a>
            </div>
        </div>
        <div class="card mr-2 mt-2" style="width:400px">
            <img class="card-img-top" src="gambar/lampu motor.jpg" alt="Card image" style="width:390px%; height: 300px;">
            <div class=" card-body ">
             <h4 class="card-title">Lampu depan beat</h4>
             <p class="card-text">Reflektor lampu depan
                        Dengan auto focus berbahan plastik
                        Untuk diaplikasikan pada motor Beat POP yang berfungsi memberikan penerangan kepada pengendara pada waktu malam hari
                        Rumah lampu buatan Indonesia ini telah bersertifikasi SNI</p>
             <a href="#" class="btn btn-primary float-right mt-4">Lihat lebih lanjut</a>
             </div>
         </div>
         <div class="card mr-2 mt-2" style="width:400px">
                <img class="card-img-top" src="gambar/lampu-sein-kanan-depan-33400k15921.jpg" alt="Card image" style="width:390px%; height: 300px;">
                <div class=" card-body ">
                 <h4 class="card-title">Lampu Sein Kanan Depan – New CB150R StreetFire K15G & CBR 150R</h4>
                 <p class="card-text">Bahan body lampu sein LED Lightech FRE906NER ABS plastik
                        Cahaya lampu sein tipe LED warna orange
                        Lampu sein LED Sequential dengan mekanisme sequence / running led light
                        Bisa digunakan untuk lampu sein depan atau belakang</p>
                 <a href="#" class="btn btn-primary float-right">Lihat lebih lanjut</a>
                 </div>
        </div>
        <div class="card mr-2 mt-2" style="width:400px">
                <img class="card-img-top" src="gambar/Gear.jpg" alt="Card image" style="width:390px%; height: 300px;">
                <div class=" card-body ">
                 <h4 class="card-title">ASPIRA Gear Motor</h4>
                 <p class="card-text">Produk Gear Set ASPIRA lebih kuat karena Gear belakang menggunakan baja karbon (SC45), Tahan Lama karena Gear depan memiliki kekerasan terbaik (HRC60) tidak cepat aus dapat menahan getaran dari putaran mesin, Tangguh karena rantai berkualitas tinggi (HRA80) kuat dan tahan disegala kondisi.</p>
                 <a href="#" class="btn btn-primary float-right mt-2">Lihat lebih lanjut</a>
                 </div>
             </div>
             <div class="card mr-2 mt-2" style="width:400px">
                    <img class="card-img-top" src="gambar/knalpot.jpg" alt="Card image" style="width:390px%; height: 300px;">
                    <div class=" card-body ">
                     <h4 class="card-title">Lampu depan beat</h4>
                     <p class="card-text">Knalpot, pipa untuk mengalirkan gas hasil pembakaran. Peredam suara atau disebut juga muffler, yang berfungsi untuk meredam suara
                            knlpot beat standar asli original honda
                            tersedia berbagai pilihan motor
                            beat esp
                            beat karbu
                            beat f1
                            vario 110 led
                            scopy karbu
                            scopy F1</p>
                     <a href="#" class="btn btn-primary float-right mt-4">Lihat lebih lanjut</a>
                     </div>
                 </div>
        </div> 
        </div>
      </div>
</body>
</html>