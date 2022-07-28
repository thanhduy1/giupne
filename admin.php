<?php
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
    } 

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Quản lý vận chuyển</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<style>
		body{
			background-color:#99ccff;
		}

		</style>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
			
				<!-- Header -->
				<header id="header">
					<div class="inner">
					
							<!-- Logo -->
								<a href="admin.php" class="logo">
									<span class="fa fa-car"></span> <span class="title">QUẢN LÝ VẬN CHUYỂN</span>
								</a>

							<!-- Nav -->
								
								<nav>
								<a href="logout.php"  style="font-size:20px; font-weight:bold; height:50px;">Đăng xuất</a>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>
					</div>
				</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="admin.php" class="active">Trang chủ</a></li>
							<li>
							 Tài xế
								<ul>
									<li><a href="admin_taixe.php">Danh sách tài xế</a></li>
									<li><a href="themtaixe.php">Thêm tài xế</a></li>
								</ul>
							</li>

							<li>
							 Phương tiện
								<ul>
									<li><a href="admin_phuongtien.php">Danh sách xe</a></li>
									<li><a href="themphuongtien.php">Thêm xe mới</a></li>
								</ul>
							</li>

							<li><a href="admin_dondatxe.php">Đơn đặt xe</a></li>

							<li><a href="admin_datxe.php">Đặt xe theo yêu cầu</a> </li>
							
                            <li><a href="chiphichuyendi.php">Chi tiết chuyến đi</a> </li>

							<li><a href="doanhthu.php">Doanh thu</a> </li>
						</ul>
					</nav>

				<!-- Main -->
				<marquee direction="left" >
						<div style="color: #000000; font-size:30px;">Chào mừng đến với trang quản lý vận chuyển hành khách!</div> 
						</marquee>
					<div id="main" >
						<div id="carouselExampleIndicators" class="carousel slide" style="width:auto;" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner" >
						    <div class="carousel-item active">
						      <img class="d-block w-100" style="height:600px;" src="images/slider-image-1-1920x700.jpg" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100"style="height:600px;"  src="images/slider-image-2-1920x700.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100"style="height:600px;"  src="images/slider-image-3-1920x700.jpg" alt="Third slide">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>
	</div>
					
	
						
					

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>