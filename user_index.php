<?php
  
    if(isset($_SESSION['username'])==false)
	
	{
	 
?> 
<!DOCTYPE HTML>
<html>
	<head>
		<title>Quản lý vận chuyển</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css">
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
	</head>

	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
				<header id="header">
					<div class="inner">
					
							<!-- Logo -->

							<a href="user_index.php" class="logo">
									<span class="fa fa-car"></span> <span class="title">QUẢN LÝ VẬN CHUYỂN</span>
									
                                    <a style="margin: 0 20px;" href="logout.php">Đăng xuất</a>
									
							
								</a>
								<a href="mybill.php">Hóa đơn</a>
								&nbsp;
								<a class="btn btn-success" style="text-align: center; font-size:25px;" href="datxe.php">Đặt xe</a>
                                </div> 
								<?php } else { ?> 
									<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
			
				<!-- Header -->
				<header id="header">
					<div class="inner">
					
							<!-- Logo -->
							<a href="user_index.php" class="logo">
									<span class="fa fa-car"></span> <span class="title">QUẢN LÝ VẬN CHUYỂN</span>
                                    <a style="margin: 0 20px;font-size:20px; font-weight:bold; height:50px;" href="signup.php">Đăng ký</a>
                                    <a style="margin: 0 20px;" href="login.php">Đăng nhập</a>
									
								</a>
                                </div>
                                <?php } ?>
					</div>
				</header>
				<!-- Main -->
					<div >
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100"style="height:550px;" src="images/slider-image-1-1920x700.jpg" >
                              <div class="hero-text" style="font-size:50px text-align: center; position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);color: white;">   
                                
                            </div>
						    </div>
						    
						  </div>
						  
						</div>

							<section>
								<h2 style="margin:0 0 0 0;">Liên hệ đặt xe</h2>

								<ul class="alt">
									<li  style="font-size:20px; color:#000000;"><span class="fa fa-envelope-o"></span>kimhieu2407@gmail.com</li>
									<li  style="font-size:20px; color:#000000;"><span class="fa fa-phone"></span> 0383113807</li>
									<li  style="font-size:20px; color:#000000;"><span class="fa fa-map-pin"></span>123A, Quốc lộ 53, huyện Châu Thành, tỉnh Trà Vinh</li>
								</ul>

							</section>

							
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