<?php
	include('connect.php');
	class Account
	{
		public function login_user($email)
		{
			global $conn;
			$sql = "select * from tt where email='$email'";
			$run = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($run);
			return $num;
		}
		public function login_pass($pass)
		{
			global $conn;
			$sql = "select * from tt where pass='$pass'";
			$run = mysqli_query($conn,$sql);
			$num = mysqli_num_rows($run);
			return $num;
		}	
		public function select_tt($matin)
		{
			global $conn;
			$sql="select * from tintuc where MaTin='$matin'";
			$run = mysqli_query($conn,$sql);
			$data=array();
			if($run)
			{
				while($row=mysqli_fetch_array($run))
				{$data[]=$row;}
			}
			return $data;
		}
		 public function Add_tt($matin,$tieude,$theloai,$image,$noidung)
	    {
		    global $conn; 
			$sql="insert into tintuc(MaTin,TieuDe,TheLoai,Image,NoiDung)values('$matin','$tieude','$theloai','$image','$noidung')";
			$run=mysqli_query($conn,$sql);
			return $run;
		 }
		public function delete_tt($matin)
		{
			global $conn;
			$sql = "delete from tintuc where MaTin='$matin'";
			$run = mysqli_query($conn,$sql);
			return $run;
		}
		
		public function select_all()
		{
			global $conn;
			$sql="select * from tintuc";
			$run = mysqli_query($conn,$sql);
			$data=array();
			if($run)
			{
				while($row=mysqli_fetch_array($run))
				{$data[]=$row;}
			}
			return $data;
		}
		
	}
?>