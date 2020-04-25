<?php
	error_reporting(0);
	include 'config/koneksi.php';
	if (isset($_POST['next'])){
		$sql = mysqli_query($con, "INSERT INTO alamat VALUES('$_POST[kp]','$_POST[rt]','$_POST[rw]','$_POST[kel]','$_POST[kec]','$_POST[kotakab]','$_POST[prop]','$_POST[kode]','$_POST[no]','$_POST[email]','$_POST[tinggal]')");
		if ($sql) {
			echo "<script>alert('Berhasil');document.location.href='step-3.php';</script>"; 
		}else{
			echo "<script>alert('Gagal');document.location.href='step-2.php';</script>";
		}
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Alamat Murid
					</span>

					<span class="txt1 p-b-11">
						Kp
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="kp" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						RT
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="rt" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						RW
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="rw" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Kelurahan
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="kel" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Kecamatan
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="kec" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Kota/Kabupaten
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="kotakab" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Provinsi
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="prop" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Kode Pos
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="kode" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						No. Telepon Rumah
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="no" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						E-mail
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="number" name="email" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Tinggal Dengan 
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<select id="tinggal" class="input100" name="tinggal">
							  <option value="" selected="selected" disabled></option>
							  <option value="Orang Tua">Orang Tua</option>
							  <option value="Asrama">Asrama</option>
							  <option value="Saudara">Saudara</option>
							  <option value="Kost">Kost</option>
							  <option value="Teman">Teman</option>
						</select>
						<span class="focus-input100"></span>
					</div>
					

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="next">
							Next
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>