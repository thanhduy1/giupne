<?php
    session_start();
    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    $select_query="SELECT * FROM `schedule` ORDER BY scheduleid DESC";
    $res= mysqli_query($connection,$select_query);
    
	$select_query_gia="SELECT * FROM `giave` ORDER BY giave_id DESC";
    $gia= mysqli_query($connection,$select_query_gia);
	
    
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
		<script src="assets/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/noscript.css">
	</head>
	<style>
	.nut{
            -moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		-webkit-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		-ms-transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		transition: background-color 0.2s ease-in-out, color 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
		background-color: transparent;
		border-radius: 4px;
		border: 0;
		box-shadow: inset 0 0 0 2px #585858;
		color: #585858 !important;
		cursor: pointer;
		display: inline-block;
		font-size: 0.8em;
		font-weight: 900;
		height: 3.5em;
		letter-spacing: 0.35em;
		line-height: 3.45em;
		overflow: hidden;
		padding: 0 1.25em 0 1.6em;
		text-align: center;
		text-decoration: none;
		text-overflow: ellipsis;
		text-transform: uppercase;
		white-space: nowrap;
		margin: 0 auto;
        }
		</style>
	<body class="is-preload">
    <div id="wrapper">
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
                                    <li><a href="admin_phuongtien.php">Danh sách xe</a></li>
									<li><a href="themphuongtien.php">Thêm xe</a></li>
								</ul>
							</li>
							<li><a href="admin_dondatxe.php">Đơn đặt xe</a></li>
							<li><a href="admin_tuyen.php" class="active">Tuyến đường và giá đặt xe</a></li>
							<li><a href="admin_datxe.php">Đặt xe theo yêu cầu</a> </li>
                            <li><a href="admin_lichtrinh.php">Lịch trình</a></li>
                            <li><a href="chiphichuyendi.php">Chi tiết chuyến đi</a> </li>


						</ul>
					</nav>
                    <div class="container">
					<?php
        if(mysqli_num_rows($res)>0){ ?>
        <div class="row">
           <div class="col-md-12">
			
           <div class="page-header">
                <h1 style="text-align: center;">Tuyến đường</h1>
				<a class="btn btn-info nut" href="themtuyenduong.php">Thêm tuyến đường và giá đặt xe</a>
				
            </div>
			
              <table id="myTable" class="table table-bordered animated " style="background-color:#ffffff;">
			  
			  <br>
                <thead>
                    
                    <th style="text-align: center;width:50%;">Tên tuyến</th>
					<th style="text-align: center;width:50%;">Tùy chọn</th>
                </thead>
				
				<tbody>
				
				<?php while($row=mysqli_fetch_assoc($res)){ ?>
					<tr>
						<td style="text-align:center;font-size:23px;color:#000000;"><?php echo $row['schedulename']; ?></td>
						<td style="text-align:center;"><a class="btn btn-info nut" href="suatuyen.php?tid=<?php echo $row['scheduleid']; ?>">Sửa</a>
						&emsp;
						<a class="btn btn-danger nut" onclick="return confirm('Bạn muốn xóa tuyến khỏi danh sách?')" href="xoatuyen.php?tid=<?php echo $row['scheduleid']; ?>">Xóa</a>
					</td>
					</tr>
					
				<?php } 
			
			} ?>
				</tbody>
				
			</table>
			<?php
        if(mysqli_num_rows($gia)>0){ ?>
       
        
			
	  
			
              <table id="myTable" class="table table-bordered animated " style="background-color:#ffffff;">
			  
			  <br>
                <thead>
                    
                    <th style="text-align: center;width:50%;">Giá đặt xe</th>
					<th style="text-align: center;width:50%;">Tùy chọn</th>
                </thead>
				
				<tbody>
				
				<?php while($row=mysqli_fetch_assoc($gia)){ ?>
					<tr>
						<td style="text-align:center;font-size:23px;color:#000000;"><?php echo number_format($row['giave']); ?> VNĐ</td>
						<td style="text-align:center;"><a class="btn btn-info nut" href="suagia.php?giaid=<?php echo $row['giave_id']; ?>">Sửa</a>
						&emsp;
						<a class="btn btn-danger nut" onclick="return confirm('Bạn muốn xóa khỏi danh sách?')" href="xoagia.php?giaid=<?php echo $row['giave_id']; ?>">Xóa</a>
					</td>
					</tr>
					
				<?php } 
			
			} ?>
				</tbody>
				
			</table>
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