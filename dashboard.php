<?php 
require_once ("koneksi.php");

if(!$_SESSION['is_login']){

	header("Location:index.php");
}



if(isset($_POST['logout'])){
	
	session_destroy();
	session_unset();

	header("Location:index.php");
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>
</head>
<body>

	<center>
		<h2>Selamat Datang di Tokopedia</h2>
		<h4>Nikmati Gratis Ongkir</h4>

		<br><br>

		<h5>Email  : <b><?php echo $_SESSION['email']; ?></b></h5>
		<h5>Status : <b><?php echo $_SESSION['status']; ?></b></h5>

		<form action="" method="post">
			<button type="submit" name="logout" onclick="return confirm('Apakah Yakin?');">Logout</button>
		</form>

	</center>

</body>
</html>