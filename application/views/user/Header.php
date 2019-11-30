<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
    <div class="jumbotron" style="width:100%;background:#f5af19;padding-top:5px ">
      <img class="float-left" src="<?= base_url(); ?>Images/logo service.png" style="width: 300px "></td>
      <center>
        <h1 class="float-center"style="margin-top:60px;margin-right:200px"> DANGDAN</h1>
      </center>  
    </div>
    <nav class="navbar navbar-expand-sm navbar-dark justify-content-between" style="background: #9b7117;width:100%">
        <!-- Brand -->
        <ul class = "navbar-nav mr-5 pr-5">
          <img src="<?= base_url(); ?>Images/dangdanhome.png" style="width:100px;padding-right:20px">
          <li class="nav-item">
            <a class="navbar-brand" href="#" style="color:black"><h2>DANGDAN</h2></a>
          </li>
        </ul>
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('C_Dangdan_User')?>"><i class="fa fa-home fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp; Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('C_Dangdan_User/sparepart')?>"><i class="fa fa-shopping-basket fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp; Sparepart</a>
          </li>
          <?php
                  if($this->session->userdata('logged_in')){
                  ?>
                  <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('C_Dangdan_User/daftarService')?>" ><i class="fa fa-motorcycle fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp; Daftar Service</a>
                  </li>
            <?php
            }
            ?>
  
          <!-- Dropdown -->
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              <i class="fa fa-user-circle fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp;Akun
            </a>
            <div class="dropdown-menu">
              <?php
                  if($this->session->userdata('logged_in')){
                  ?>
                  <a class="dropdown-item  py-3 px-3" href="<?= base_url();?>C_Dangdan_User/inputMotor" class="nav_bar-animate"><span class="glyphicon glyphicon-cog"></span>&nbsp;Input Motor</a>
                  <a class="dropdown-item  py-3 px-3" href="<?= base_url();?>C_Dangdan_User/kelola_akun" class="nav_bar-animate"><span class="glyphicon glyphicon-cog"></span>&nbsp;Kelola Akun</a>
                  
                  <a class="dropdown-item  py-3 px-3" href="<?= base_url();?>C_Dangdan_User/Logout" class="nav_bar-animate"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
                  
                  <?php 
                  }
                  else{
                ?>
              <a class="dropdown-item" href="<?= base_url('C_Dangdan_User/login')?>"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a>
              <a class="dropdown-item" href="<?= base_url('C_Dangdan_User/registrasi')?>"><img src="<?= base_url(); ?>Images/regis.png" style="margin: auto;width: 23px ">&nbsp;Registrasi</a>
              <div class="dropdown-divider"></div>
              <?php
              }
              ?>
            </div>
          </li>
        </ul>
      </nav>
</body>
</html>