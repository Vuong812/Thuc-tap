
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
            <li><a href="Tintuc.php">TIN TỨC &nabla;</a>
            	<ul class="sub_menu">
                	<li><a href="#">Ô tô</a></li>
                    <li><a href="#">Sức khỏe</a></li>
                    <li><a href="#">Tài chính</a></li>
                </ul>
            </li>
            <li><a href="Lienhe.php">LIÊN HỆ</a></li>
            <li><a href="dangnhap.php">ĐĂNG NHẬP</a></li>
        </ul>
    </div>
<!--MAIN-->
<div class="main" style="text-align: center">
    <h2 class="c">ĐĂNG NHẬP</h2>
    <hr width="100%">

    <form method="post" class="login-form">
        <div class="tong">
                <div class="row" style="height:45px"><input type="email" name="email" placeholder="email" class="row1"/></div>
                <div class="row"><input type="password" name="pass" placeholder="password" class="row2"/></div>
                <div class="row"><input type="submit" name="ok" value="Đăng nhập" class="row5"/></div>
         <div class="row"><input type="submit" name="yes" value="Bạn chưa có tài khoản ?"  class="row5"/></div>
            </div>
         </div>
    </form>
    <?php 
		include('control.php');
		if(isset($_POST['ok']))
		{
			$us=$_POST['email'];
			$pass=$_POST['pass'];
			$dn=new Account();
			$dn_us=$dn->login_user($us);
			$dn_pass=$dn->login_pass($pass);
			$_SESSION['email']=$us;
			if(empty($us)||empty($pass))
				echo"<script>alert('ban chua nhap du lieu')</script>";
			else
			{
				if($dn_us==0) echo"<script>alert('ban nhap sai email!')</script>";
				else
				{
					if($dn_pass==0) echo"<script>alert('ban nhap sai password!')</script>";
					else						 
					echo header('location:Admin.php');//chuyen trang
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
