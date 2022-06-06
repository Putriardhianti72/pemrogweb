<?php 
session_start();
	if(isset($_SESSION['email'])){
		header("Location: index.php?target=home");
		exit;
	}
	if(isset($_POST['login'])){
		require('database.php');
		$email = $_POST['email'];
		$password = $_POST['password'];
		$queryselect = "SELECT * FROM user WHERE email = '$email' AND password='$password'";
		$hasilselect = mysqli_query($koneksi1, $queryselect);
		if(mysqli_num_rows($hasilselect)){
			echo "Login Berhasil";
			$data = mysqli_fetch_array($hasilselect);
			$_SESSION['email'] = $email;
			$_SESSION['password'] = $password;
			$_SESSION['level'] = $data['level'];
            echo "<a href='cetaksession.php'>cetak session</a>";
			exit;
		}else{
			echo "Email atau Password anda salah";
			echo "<a href='login.php'>Kembali</a>";
		}
	}
?>
