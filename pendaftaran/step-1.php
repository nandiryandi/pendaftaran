<?php
	error_reporting(0);
	include 'config/koneksi.php';
	if (isset($_POST['next'])){
		$sql = mysqli_query($con, "INSERT INTO data_murid VALUES('$_POST[lengkap]','$_POST[panggilan]','$_POST[jk]','$_POST[ttl]','$_POST[agama]','$_POST[cita]','$_POST[hobi]','$_POST[anak]','$_POST[saudara]','$_POST[bb]','$_POST[tb]','$_POST[gol]')");
		if ($sql) {
			echo "<script>alert('Berhasil');document.location.href='step-2.php';</script>"; 
		}else{
			echo "<script>alert('Gagal');document.location.href='step-1.php';</script>";
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
				<form class="login100-form validate-form flex-sb flex-w" method="POST">
					<span class="login100-form-title p-b-32">
						Data Calon Murid
					</span>

					<span class="txt1 p-b-11">
						Nama Lengkap
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="lengkap" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Nama Panggilan
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="panggilan" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Jenis Kelamin
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<select id="jk" class="input100" name="jk">
							<option value="" selected="selected" disabled></option>
  							<option value="laki-laki">Laki-laki</option>
  							<option value="wanita">Wanita</option>
						</select>
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Tempat, Tanggal Lahir
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="ttl" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Agama
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="agama" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Cita-Cita
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="cita" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Hoby
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="hobi" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Anak ke
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="number" name="anak" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Jumlah Saudara
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="number" name="saudara" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Berat Badan (Kg)
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="number" name="bb" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Tinggi Badan (Cm)
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="number" name="tb" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						Golongan Darah
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Belum Terisi">
						<input class="input100" type="text" name="gol" >
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