<?php 
require_once("koneksi.php");


if(isset($_POST['submit'])){

	$email = $_POST['email'];
	$password = $_POST['password'];


	$query = "SELECT * FROM account WHERE email='$email' and password='$password'";

	$valid = mysqli_query($koneksi,$query);

	if(mysqli_num_rows($valid) > 0){

		$akun = mysqli_fetch_assoc($valid);

		if($email == $akun['email'] && $password == $akun['password']){

			$_SESSION['is_login'] = true;
			$_SESSION['email'] = $akun['email'];
			$_SESSION['status'] = $akun['status'];

			header("Location:dashboard.php");

		}else{
			echo "Email atau Password Salah!!";
		}


	}else{
		echo "Email Belum Terdaftar!!";
	}

	

}




 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Tokopedia - Toko Online Murah</title>
</head>
<body>

	<div class="kotak">
		<center>
			<h1>Tokopedia</h1>

			<form action="" method="post">
				<label for="email">Email</label>
				<br>
				<input type="email" name="email" required>
				<br>
				<label for="password">Password</label>
				<br>
				<input type="password" name="password" required>
				<br><br>
				<button type="submit" name="submit">Masuk</button>
			</form>

		</center>
	</div>

</body>
</html>