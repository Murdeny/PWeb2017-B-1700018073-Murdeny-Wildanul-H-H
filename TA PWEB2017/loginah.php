<?php
	$emailinput = $_POST['user'];
	$passwordinput = $_POST['pass'];
	$namafile = "./akun/$emailinput.txt";
	if(file_exists("$namafile")){
		$myfile = fopen("$namafile", "r");
		$nama = fgets($myfile);
		$genre = fgets($myfile);
		$email = fgets($myfile);
		$password = fgets($myfile);
		if ($password == $passwordinput) {
			echo "<script>alert('Login Sebagai : $nama');</script>";
			require 'index.php';
		}
		else {
			echo "<script>alert('Email dan Password Yang Dimasukkan Salah');</script>";
			require 'indexlogin.php';
		}
		fclose($myfile);
	}
	else {
		echo "<script>alert('Email dan Password Yang Dimasukkan Salah');</script>";
		require 'indexlogin.php';
	}

 ?>
