<?php
    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    session_start();

    $sql= "SELECT * FROM `bookingyc`ORDER BY bookingyc_id DESC";
    $result=mysqli_query($connection,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý vận chuyển</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/sweetalert2/sweetalert2.css">
    <script src="assets/sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/noscript.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="animate.css">

	
    
</head>
<style>
    body{
        background-color: #99ccff;
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
                            <li><a href="admin_dondatxe.php" >Đơn đặt xe</a> </li>
                            <li><a href="admin_datxe.php" class="active">Đặt xe theo yêu cầu</a> </li>
                            <li><a href="chiphichuyendi.php">Chi tiết chuyến đi</a> </li>
							<li><a href="doanhthu.php">Doanh thu</a> </li>

						</ul>
					</nav>
        
           <div >
           <div class="page-header">
                <h1 style="text-align: center;">Đơn đặt xe</h1>
                <a class="btn btn-info nut" href="datxeadmin.php">Thêm đơn đặt xe</a>
            </div>
              <table id="myTable" class="table table-bordered animated " style="background-color:#ffffff;">
                <thead>
                    
                    <th style="text-align:center;">ID đơn</th>
                    <th style="text-align:center;">Tên khách hàng</th>
                    <th style="text-align:center;">Ngày và giờ đặt xe</th>
                    <th style="text-align:center;">Tiền đặt xe</th>
                    <th style="text-align:center;">Trạng thái</th>
                    <th style="text-align:center;">Xác nhận thông tin</th>
                    <th style="text-align:center;">Lựa chọn</th>
                </thead>
                
                <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                       
                        <td style="text-align:center; font-size:25px; color:#000000;"><?php echo $row['bookingyc_id']; ?></td>
                        <td style="text-align:center; font-size:25px; color:#000000;"><?php echo $row['tenkhachhang']; ?></td>
                        <td style="text-align:center; font-size:25px; color:#000000;"><?php echo $row['ngaydatxe'];
                            ?></td>
                        <td style="text-align:center; font-size:25px; color:#000000;"><?php echo number_format($row['giavexe']); ?> VNĐ</td>
                        
                        <td style="text-align:center; font-size:25px; color:#000000;">
                        	<?php if($row['trangthai']==0){
                      		echo '<div style="color:red;">Chưa duyệt</div>';
                           	}else{
                      		echo '<div style="color:#009900;">Đã duyệt</div>';
                          	}   
                           	?>
                       </td>
                       <td style="text-align:center; font-size:25px; color:#000000;">
                       <?php if($row['xacnhan']==0){
                      		echo '<div style="color:red;">Chưa xác nhận</div>';
                           	}else{
                      		echo '<div style="color:#009900;">Đã xác nhận</div>';
                          	}   
                           	?>
                       </td>
                        <td style="text-align:center;"><a class="btn btn-info nut"  href="xemhoadon.php?id=<?php echo $row['bookingyc_id']; ?>">Xem thông tin</a>
                       <td> 
                        <?php if($row['trangthai']==0){  ?>
                        <a class="btn btn-info nut" href="suadon.php?id=<?php echo $row['bookingyc_id']; ?>&idtaixe=<?php echo $row['taixe']; ?>&idxe=<?php echo $row['sohieuxe']; ?>">Sửa đơn</a>
                        <?php } else if($row['trangthai']==1 ) { ?>
                        <a class="btn btn-info disabled nut" href="suadon.php?id=<?php echo $row['bookingyc_id']; ?>&idtaixe=<?php echo $row['taixe']; ?>&idxe=<?php echo $row['sohieuxe']; ?>">Sửa đơn</a>
                        <?php }  ?>


                        <?php if($row['trangthai']==0 && $row['xacnhan']==1){  ?>
                        <a class="btn btn-info nut" href="duyetdon.php?id=<?php echo $row['bookingyc_id']; ?>&idtaixe=<?php echo $row['taixe']; ?>&idxe=<?php echo $row['sohieuxe']; ?>">Duyệt xe</a>
                        <?php } else { ?>
                            <a class="btn btn-info disabled nut" href="duyetdon.php?id=<?php echo $row['bookingyc_id']; ?>&idtaixe=<?php echo $row['taixe']; ?>&idxe=<?php echo $row['sohieuxe']; ?>">Duyệt xe</a>
                        <?php }  ?>

                       
                       <a class="btn btn-info nut"style="background-color:#ff4d4d;" href="reset.php?id=<?php echo $row['bookingyc_id']; ?>&idtaixe=<?php echo $row['taixe']; ?>&idxe=<?php echo $row['sohieuxe']; ?>">Reset</a>
                        
                        </td>
                    </tr>
                    

                    <?php }   ?>
                </tbody>
            </table>
            </div>
        
        
        
</body>

<script>
$(document).ready(function(){
    $('$myTable').dataTable();
});
</script>
<script>
$(document).ready(function(){
    $('$myTable').dataTable();
});
</script>
<script>
        window.sr = ScrollReveal();
        sr.reveal('.foo', { duration: 800 });
     
    </script>
     
            <script src="assets/js/jquery.min.js"></script>
			<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/main.js"></script>
</html>