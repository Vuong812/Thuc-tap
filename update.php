<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="dangnhap.css"/> 
<link rel="stylesheet" type="text/css" href="responsive.css"/>
<link rel="icon" href="Images/cropped-GiapPham-Main-Favicon-32x32.png"/>
<title>Giap Pham - Chia sẻ kiến thức</title>
</head>

<body>
<div class="container">
<!--HEADER-->
	<div class="logo">
    <a href="Trangchu.php"><img src="Images/Logo.png" width="400px" height="80px" class="logo_left"/></a>
    <a href="#"><img src="Images/HawkHost-banner-top.jpg" style="margin-left:280px" class="logo_right"></a>
    </div>
    <div id="menu">
    	<ul class="main_menu">
            <li><a href="Tintuc.html">TIN TỨC &nabla;</a>
            	<ul class="sub_menu">
                	<li><a href="#">Ô tô</a></li>
                    <li><a href="#">Sức khỏe</a></li>
                    <li><a href="#">Tài chính</a></li>
                </ul>
            </li>
            <li><a href="Lienhe.html">LIÊN HỆ</a></li>
            <li><a href="Add.php">THÊM BÀI VIẾT MỚI</a></li>
        </ul>
    </div>
<!--MAIN-->
<div class="main">
    <h1>SỬA BÀI VIẾT</h1>
    <hr width="100%">
    <form method="post" style="width: 440px; margin-left:210px">
        <div class="wrap">
        <?php	
		   include ('control.php');
		   $matin=$_GET['select'];
		   $tin=new Account();
		   $se_ac=$tin->select_tt($matin);
		   foreach($se_ac as $value)
			{
		?> 
            Mã Tin <input type="text" name="matin" style="margin-left:15px" value="<?php echo $value['MaTin'];?>"/>
            Tiêu Đề <input type="text" name="tieude" style="margin-left:8px" value="<?php echo $value['TieuDe'];?>"/>
            Thể Loại <input type="text" name="theloai" style="margin-left:3px" value="<?php echo $value['TheLoai'];?>"/>
            Ảnh Cũ <input type="text" name="oldimage" value="<?php echo $value['Image'];?>" style="margin-left:13px"/>
            Ảnh Mới <input type="file" name="image" style="margin-left:20px"/>
            Nội Dung <textarea name="noidung" value="<?php echo $value['NoiDung'];?>" style="min-height:70px;min-width:350px"/></textarea>
            <input type="submit" name="ok" value="SỬA"/>
        <?php }?>
        </div>
    </form>
<?php
	include('Up_tt.php');
	if(isset($_POST['ok']))
	{
		$matin=$_POST['matin'];
		$tieude=$_POST['tieude'];
		$theloai=$_POST['theloai'];
		$image=$_POST['image'];
		$noidung=$_POST['noidung'];
		$tin= new Tintuc();
		if(isset($_POST['ok']))
		{
			if(empty($_POST['matin'])||empty($_POST['tieude'])||empty($_POST['theloai'])||empty($_POST['image'])||empty($_POST['noidung']))
			{
				echo"<script>alert('Bạn nhập thếu dữ liệu')</script>";
			}
			else
			{
	
					   $up=$tin->update_tt($matin,$tieude,$theloai,$image,$noidung);
					   echo header('location:Admin.php');
			}
		 }
	 }
?>
</div>
<!--FOOTER-->
 <div class="end">
 	<table>
    	<tr>
        	<td style="padding-bottom:13px" class="td1">
 	<pre>
     <span style="color:#FC0">Giới thiệu</span>
     <span style="color:white">Giap Pham là blog chia sẻ các
     kiến thức giúp tất cả mọi người trang bị
     thêm nhiều kiến thức trong cuộc sống.
     Sự hài lòng của độc giả là niềm
     hạnh phúc của chúng tôi.</span> </pre>
    		</td>
            <td>
            	<ul>
                	<span style="color:#FC0"><p>Liên kết</p></span>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Bản quyền</a></li>
                    <li><a href="#">Điều khoản sử dụng</a></li>
                    <li><a href="#">Bảo mật thông tin</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </td>
            <td style="padding-bottom:70px">
            	<ul>
                	 <span style="color:#FC0"><p>Dịch vụ</p></span>	
                	<li><a href="#">Thiết kế website trọn gói</a></li>
                    <li><a href="#">Cài đặt VPS/Server</a></li>
                </ul>
            </td>
            <td style="padding-bottom:70px">
            	<ul>
                	 <span style="color:#FC0"><p>Liên hệ</p></span>
                    <li><a href="#">contact@giappham.com</a></li>
                    <li><a href="#">Fanpage: Giap Pham</a></li>
                </ul>
            </td>
   		</tr>
    </table>
    <p class="last">Copyright &copy; 2020 <a href="" style="color:white">Giap Pham</a> / <a href="" style="color:white">Sitemap</a></p>
 </div>
</div>
</body>
</html>
