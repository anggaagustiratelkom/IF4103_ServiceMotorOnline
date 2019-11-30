<html lang="en">
<head>
	<title><?php echo $judul ?></title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  
  <style>
*{
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family:sans-serif;
}

a {
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
	transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
  	color: #a64bf4;
}

h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}

input {
	outline: none;
	border: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
	border-color: transparent !important;
}

button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}

.txt1 {
  font-size: 14px;
  line-height: 1.5;
  color: #666666;
}

.txt2 {
  font-size: 14px;
  line-height: 1.5;
  color: #333333;
  text-transform: uppercase;
}

.bg1 {background-color: #f5af19}
.bg2 {background-color: #f5af19}
.bg3 {background-color: #f5af19}
		
.container-login {
  width: 100%;  
  min-height: 100vh;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  background-repeat: no-repeat;
  background-position: center;
  background-size: cover;
}

.wrap-login {
  width: 500px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
}

.login-form {
  width: 100%;
}

.login-form-title {
  display: block;
  font-size: 39px;
  color: #333333;
  line-height: 1.2;
  text-align: center;
}

.wrap-input {
  width: 100%;
  position: relative;
  border-bottom: 2px solid #d9d9d9;
}

.label-input {
  font-size: 14px;
  color: #333333;
  line-height: 1.5;
  padding-left: 7px;
}

.input {
  font-size: 16px;
  color: #333333;
  line-height: 1.2;

  display: block;
  width: 100%;
  height: 55px;
  background: transparent;
  padding: 0 7px 0 43px;
}


.focus-input {
  position: absolute;
  display: block;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  pointer-events: none;
}

.focus-input::before {
  display: block;
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;
  background: #7f7f7f;
  transition: all 0.4s;
}

.container-login-form-btn {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.wrap-login-form-btn {
  width: 100%;
  display: block;
  position: relative;
  z-index: 1;
  border-radius: 25px;
  overflow: hidden;
  margin: 0 auto;
  box-shadow: 0 5px 30px 0px rgba(3, 216, 222, 0.2);
}



.login-form-btn {
  font-size: 16px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;
  background: #f5af19;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
}

.wrap-login-form-btn:hover .login-form-bgbtn {
  left: 0;
}

.validate-input {
  position: relative;
}
		
@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}

.login-social-item {
  font-size: 25px;
  color: #fff;
  justify-content: center;
  align-items: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin: 5px;
}

.login100-social-item:hover {
  color: #fff;
  background-color: #333333;
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
  <div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      Login Admin <?= $this->session->flashdata('fail'); ?> Username atau Password salah.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  </div>                  
    <div class="container-login" style="background: #f5af19">
          
		<div class="wrap-login" style="padding: 55px">
    <form action="<?= base_url('C_Dangdan_Admin/SigninAdmin')?>" id="form_login" name="form_login" method="post" class="form-horizontal">
      <form class="login-form validate-form">
				<span class="login-form-title" style="padding-bottom: 49px">
					Login Admin
				</span>
				<div class="wrap-input validate-input" style="margin-bottom: 23">
					<span class="label-input">Username</span>
						<input class="input" type="text" name="username_admin" id="username_admin"require="">
				</div>
				<div class="wrap-input validate-input">
					<span class="label-input">Password</span>
					<input class="input" type="password" name="password" id="password" require="">
				</div>
				<div class="text-right" style="padding-top: 8;padding-bottom: 31">
					<a href="#">
						Forget password?
					</a>
				</div>
				<div class="container-login-form-btn">
					<div class="wrap-login-form-btn">
						<div class="login-form-bgbtn"></div>
            <button type="submit" class="login-form-btn">Login</button>
					</div>
				</div>
				
        <div style="margin-left:;padding-top: 55px;">
					<a href="<?= site_url('C_Dangdan_User/login')?>" class="txt2">
            <center>Login User</center>
					</a>
				</div>

        <div style="margin-left:;padding-top: 25px;">
					<a href="<?= site_url('C_Dangdan_Montir/loginMontir')?>" class="txt2">
            <center>Login Montir</center>
					</a>
				</div>

				<div style="padding-top: 55px; padding-left: 165">
				
			
					</a>
				</div>
			</form>
		</div>		
	</div>
</body>
</html>