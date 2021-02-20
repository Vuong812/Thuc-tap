<?php
	include('connect.php');
	class Tintuc
	{
		public function update_tt($matin,$tieude,$theloai,$image,$noidung)
		{
			global $conn;
			$sql = "update tintuc set TieuDe='$tieude',TheLoai='$theloai',Image='$image',NoiDung='$noidung' where MaTin='$matin'";
			$run = mysqli_query($conn,$sql);
			return $run;
		}
	}