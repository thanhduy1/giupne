<?php
$connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    session_start();

    $sql= "SELECT * FROM `vehicle`";
    $res=mysqli_query($connection,$sql);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Quản lý vận chuyển</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<style>
		body{
			background-color: #99ccff;
		}
		.article{
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
	margin: 0 0px;
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
								<a href="logout.php" style="font-size:20px; font-weight:bold; height:50px;">Đăng xuất</a>
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
							<li><a href="admin.php">Trang chủ</a></li>

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
									<li><a href="admin_phuongtien.php" class="active">Danh sách xe</a></li>
									<li><a href="themphuongtien.php">Thêm xe</a></li>
								</ul>
							</li>

							<li><a href="admin_dondatxe.php">Đơn đặt xe</a></li>

							<li><a href="admin_datxe.php">Đặt xe theo yêu cầu</a> </li>

                            <li><a href="chiphichuyendi.php">Chi tiết chuyến đi</a> </li>

							<li><a href="doanhthu.php">Doanh thu</a> </li>

						</ul>
					</nav>
                    <div id="main">
                    <div class="inner">
                    
					<div class="container">
      <?php
        if(mysqli_num_rows($res)>0){ ?>
    <div  id="myDiv">
      <div class="container">
        
             <div class="col-md-3"></div>
             
                 <div class="page-header">
                    <h1 class="animated tada" style="text-align: center;">Danh sách xe</h1>      
                  </div>  
				  <section class="tiles">
                <?php while($row=mysqli_fetch_assoc($res)) {  ?>
                    <tbody>
                        <tr>
						<td>
							
								<article class="style1">
									<span class="image">
									<img class="article" src="images/<?php echo $row["veh_photo"]; ?>" alt="dp" width=170px; height=250px;>
									</span></td>
                            <td><a style="margin: 0 23px;color: black; font-weight:bold;" href="thongtinphuongtien.php?busid=<?php echo $row["veh_id"]; ?>"> <?php echo $row["chesisno"] ?></a></td>
								</article>
							
                        </tr>
                    </tbody> 
                <?php } }?>
				</section>
             </div>
         
          
      	</div>  
       
   		</div>
    </div> 
    
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    
<script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
     
    </script>
     
            <script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>