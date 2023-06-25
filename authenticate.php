<?php

include "koneksi.php";

// If the user is not logged in redirect to the login page...
if($_SESSION['level'] !='admin'){
    header("location:login.php");
}

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn, "SELECT* from account where username= '$username' and password ='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	
	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:admin/dashboard.php");

	// cek jika user login sebagai user
	}else if($data['level']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "user";
		header("location:user/dashboard.php");

	}else{
		// alihkan ke halaman login kembali
		header("location:login.php");
	}	
}else{
	header("location:login.php?pesan=gagal");
}

?>
