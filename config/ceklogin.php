<?php

session_start();

include "koneksi.php";

$username = strip_tags($_POST['username']);
$password = strip_tags (md5($_POST['password']));


$sql = "SELECT * FROM user WHERE BINARY username='".$_POST['username']."' AND BINARY password= md5('".$_POST['password']."')";
$query = mysqli_query($koneksi, $sql);
$login = mysqli_num_rows($query);

if($login == 1){
	$data = mysqli_fetch_assoc($query);
	$_SESSION['auth'] = true;

	// cek jika user login sebagai admin
	if($data['role']=="superadmin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "superadmin";
		// alihkan ke halaman dashboard admin
		header("location:../page/sa");
 
	// cek jika user login sebagai admin
	}else if($data['role']=="admin"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../page/sa");
 
	// cek jika user login sebagai pengurus
	}else if($data['role']=="user"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "user";
		// alihkan ke halaman dashboard pengurus
		header("location:../page/user");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?auth=0");
	}	

}else{
	echo '<script>alert("Username atau password anda salah."); document.location="../login";</script>';
}

