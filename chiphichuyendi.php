<?php
    session_start();
	$connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    $sql="SELECT * FROM `bookingyc` WHERE trangthai='1' ORDER BY bookingyc_id DESC";
    $result= mysqli_query($connection,$sql);
 

    
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
		body{
			background-color:#99ccff;
		}
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
    <div id="wrapper" >
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
							<li><a href="admin_datxe.php">Đặt xe theo yêu cầu</a> </li>
                            <li><a href="chiphichuyendi.php"class="active">Chi tiết chuyến đi</a> </li>
							<li><a href="doanhthu.php">Doanh thu</a> </li>

						</ul>
					</nav>
                    <div style="font-size:25px; width:1700px ;" >
                    <div class="row">
           <div class="col-md-12">
			
           <div class="page-header">
                <h1 style="text-align: center;">Cập nhật chi tiết chuyến đi</h1>
			
				<a class="btn btn-info nut" href="danhsachchuyendi.php" style="font-size:22px;">Danh sách các chuyến đi</a>
				
            </div>
			<div>
              <table id="myTable" class="table table-bordered animated " style="background-color:#ffffff;">
			 
			  <br>
                <thead>
                    <th style="text-align:center;">ID</th>
                    <th style="text-align:center;">Tên khách hàng</th>
                    <th style="text-align:center;">Tên tài xế</th>
                    <th style="text-align:center;">Số hiệu xe</th>
                    <th style="text-align:center;">Ngày đi</th>
                    <th style="text-align:center;">Ngày về</th>
                    <th style="text-align:center;">Tổng tiền chi phí</th>

                    <th style="text-align:center;">Chi phí</th>

                    <th style="text-align:center;">Tùy chọn</th>
                </thead>
				
                <tbody>
				<?php while($row=mysqli_fetch_assoc($result)){ ?>
					<?php 
						$sql1="SELECT * FROM `driver` WHERE driverid='$row[taixe]'";
						$result1= mysqli_query($connection,$sql1);

						$sql2="SELECT * FROM `vehicle` WHERE veh_id='$row[sohieuxe]'";
						$result2= mysqli_query($connection,$sql2);
							
					?>
					<tr>
                        <td style="text-align:center;"><?php echo $row['bookingyc_id']; ?> 
                        <td style="text-align:center;"><?php echo $row['tenkhachhang']; ?> 
						<?php while($row1=mysqli_fetch_assoc($result1)){ ?>
							<td style="text-align:center;"><?php echo $row1['drname']; ?> 
						<?php } ?>
                        <?php while($row2=mysqli_fetch_assoc($result2)){ ?>
							<td style="text-align:center;"><?php echo $row2['chesisno']; ?> 
						<?php } ?>
                        <td style="text-align:center;"><?php echo $row['ngaydi']; ?></td>
                        <td style="text-align:center;"><?php echo $row['ngayve']; ?></td>
						<td style="text-align:center;"><?php echo number_format($row['tongtienchiphi']); ?> VNĐ</td>
                        <td style="text-align:center;"><a class="btn btn-info nut" href="xemchiphi.php?id=<?php echo $row['bookingyc_id']; ?>" style="font-size:15px; width:100px;">Xem</a>
                        
						<td>
						<?php if($row['tinhtrangxe']==1){  ?>
						<a style="text-align:center;font-size:15px; width:130px;" class="btn btn-info disabled nut" href="capnhatchiphi.php?id=<?php echo $row['bookingyc_id']; ?>" >Cập nhật</a>
						<?php } else if($row['tinhtrangxe']==0 ) { ?>
						<a style="text-align:center;font-size:15px; width:130px;" class="btn btn-info nut" href="capnhatchiphi.php?id=<?php echo $row['bookingyc_id']; ?>" >Cập nhật</a>
						<?php }  ?>
						
						<?php if($row['tinhtrangxe']==0){  ?>
                        <a style="background-color:silver;text-align:center;font-size:15px; width:100px;" class="btn btn-info disabled nut" href="trove.php?id=<?php echo $row['bookingyc_id']; ?>&idtaixe=<?php echo $row['taixe']; ?>&idxe=<?php echo $row['sohieuxe']; ?>">Trở về</a>
                        <?php } else if($row['tinhtrangxe']==1 ) { ?>
                        <a style="background-color:yellow;text-align:center;font-size:15px; width:100px;" class="btn btn-info nut" href="trove.php?id=<?php echo $row['bookingyc_id']; ?>&idtaixe=<?php echo $row['taixe']; ?>&idxe=<?php echo $row['sohieuxe']; ?>">Trở về</a>
                        <?php }  ?></td>
				</tr>
			
				</tbody>
                    <?php }   ?>
				
			</table>
			</div>
                </div>
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