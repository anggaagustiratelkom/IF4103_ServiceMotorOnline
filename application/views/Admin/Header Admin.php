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
    <div class="jumbotron" style="background:#f5af19;margin:auto;padding-top:30px ">
        <table style="width:100%;margin: auto">
            <tr>
                <td id="header" style="width: 45%"><img src="<?= base_url(); ?>Images/logo service.png" style="margin: auto;width: 300px "></td>
                <td id="header"style="width: 55%"><h1> DANGDAN ADMIN</h1></td>
                <!-- <p>Isi data di bawah untuk melakukan pendaftaran service</p>  -->
                </tr>
            </table>
    </div>
    <nav class="navbar navbar-expand-sm navbar-dark justify-content-between" style="background: #9b7117;width:100%">
        <!-- Brand -->
        <ul class = "navbar-nav mr-5 pr-5">
          <img src="<?= base_url(); ?>Images/dangdanhome.png" style="width:100px;padding-right:20px">
          <li class="nav-item">
            <a class="navbar-brand" href="#" style="color:black"><h2>DANGDAN ADMIN</h2></a>
          </li>
        </ul>
        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('C_Dangdan_Admin')?>"><i class="fa fa-user-plus fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp; Montir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('C_Dangdan_Admin/tampilSparepart')?>"><i class="fa fa-plus fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp; Sparepart</a>
          </li>
          
  
          <!-- Dropdown -->
          <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              <i class="fa fa-user-circle fa-1g pull-left" style="padding-right: 7px" aria-hidden="true" ></i>&nbsp;Akun
            </a>
            <div class="dropdown-menu">
              <?php
                  if($this->session->userdata('logged_in')){
                  ?>
                  <a class="dropdown-item  py-3 px-3" href="<?= base_url();?>C_Dangdan_Admin/kelola_akun" class="nav_bar-animate"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Kelola Akun</a>
                  <a class="dropdown-item  py-3 px-3" href="<?= base_url();?>C_Dangdan_Admin/Logout" class="nav_bar-animate"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Logout</a>
                  <?php 
                  }
                  else{
                ?>
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