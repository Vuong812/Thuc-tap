<?php
	$hostname=('localhost');
	$user="root";
	$pass="";
	$db="taikhoan";
	$conn=mysqli_connect($hostname,$user,$pass,$db);
	mysqli_query($conn,'setnames"utf8"')
?>