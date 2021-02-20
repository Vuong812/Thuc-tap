<?php
include("control.php");
$matin=$_GET['del'];
$tin=new Account();
$se_ac=$tin->delete_tt($matin);
if($se_ac) header('location:Admin.php');
else echo "Not delete!";
?>