<html>
    <head>
		<title><?php echo $judul ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
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
			<li class="nav-item dropdown" >
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
        <div class="container mt-5 pt-5 pb-3">
            <div class="jumbotron">
                <h1>Pendaftaran Service</h1>      
                <p>Isi data di bawah untuk melakukan pendaftaran service</p>
          </div>
				<div class="center" style="background-color: white">
					<form action="" style="width:70%; margin:auto" >
						<div class="form-group">
						  <label for="nama">Nama:</label>
						  <input type="text" class="form-control" id="nama" name="nama">
						</div>
						<div class="form-group">
						  <label for="nm_motor">Nama Motor:</label>
						  <input type="text" class="form-control" id="nm_motor" name="nm_motor">
						</div>
						<div class="form-group">
						  <label for="nopol">Nomor Polisi:</label>
						  <input type="text" class="form-control" id="nopol" name="nopol">
						</div>
						<div class="form-group">
							<select name="cars" class="custom-select mb-3">
							  	<option selected>Jenis Motor</option>
							  	<option value="volvo">Matic</option>
							  	<option value="fiat">Bebek</option>
								<option value="fiat">Sport</option>
							</select>
						</div>
						<div class="form-group">
						  <label for="jenis_service">Jenis Service:</label>
						  <input type="text" class="form-control" id="jenis_service" name="jenis_service">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</div>
	</div>
    </body>
</html>