<?php
 	session_start();
	include "koneksi.php";
	
	$sqlpas = "select * from pasien where username='$_POST[username]' and password='$_POST[password]'";
	$paru = mysqli_query($kon, $sqlpas) or die (mysqli_error($kon));
	$row = mysqli_num_rows($paru);
	$rpas = mysqli_fetch_array($paru);
	if($row > 0){
		$_SESSION["id_user"]=$rpas["id_user"];		
		$_SESSION["namapas"]=$rpas["username"];
		$_SESSION["passpas"]=$rpas["password"];
		$_SESSION["namalengkap"]=$rpas["nm_lengkap"];
		header ("location:index.php");
			}else{
		header ("location:index.php");
	}
?> 