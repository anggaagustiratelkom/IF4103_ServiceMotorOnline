<html>

<head>
  <title><?php echo $judul ?></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/navbar.css">
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="bootstrap/js/jquery.min.js"></script> -->
  <style>
    .center {
      margin: auto;
      width: 100%;
      padding: 10px;
    }
  </style>
</head>

<body style="background-color:#f2f2f2FF; height: 100%;">
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Logo</a>

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Sparepart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Daftar Service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          Registrasi
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Registrasi</a>
          <a class="dropdown-item" href="#">Login</a>
        </div>
      </li>
    </ul>
  </nav>
  <div class="col-md-6 mt-5 pt-5 pb-3" style="float:none; margin:0 auto;">
    <div class="jumbotron">
      <h1>Registrasi Akun</h1>
    </div>
    <div class="center" style="background-color: white;box-shadow: 0px 0px 5px 1px rgba(0,0,0,0.05);">
      <form action="" style="width:80%; margin:auto; padding: 20px;">
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="form-group">
          <label for="username">Username:</label>
          <input type="text" class="form-control" id="email" name="username">
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" class="form-control" id="email" name="password">
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="Nomor_Telpon">Nomor Telpon:</label>
          <input type="text" class="form-control" id="hp" name="hp">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat:</label>
          <textarea class="form-control" rows="5" id="alamat"></textarea>
        </div>
        <div class="form-group">
          <!-- Default inline 1-->
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="defaultInline1" name="inlineDefaultRadiosExample">
            <label class="custom-control-label" for="defaultInline1">Laki-laki</label>
          </div>

          <!-- Default inline 2-->
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" class="custom-control-input" id="defaultInline2" name="inlineDefaultRadiosExample">
            <label class="custom-control-label" for="defaultInline2">Perempuan</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</body>

</html>
