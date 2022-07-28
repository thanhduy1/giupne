<?php
    session_start();
    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    $select_query="SELECT * FROM `booking` ORDER BY booking_id DESC";
    $result= mysqli_query($connection,$select_query);
    

    
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
                            <li><a href="admin_dondatxe.php" class="active">Đơn đặt xe</a> </li>
                            <li><a href="admin_datxe.php">Đặt xe theo yêu cầu</a> </li>
                            <li><a href="chiphichuyendi.php">Chi tiết chuyến đi</a> </li>
							<li><a href="doanhthu.php">Doanh thu</a> </li>

						</ul>
					</nav>
                    <div class="container" style="font-size:22px; width:1500px ;padding:10px 10px 10px 10px;">
        <div class="row">
           <div class="col-md-12">
           <div class="page-header">
                <h1 style="text-align: center;">Đơn đặt xe</h1>
            </div>
              <table id="myTable" class="table table-bordered animated " style="background-color:#ffffff;">
                <thead>
                    
                    <th>ID Đặt xe</th>
                    <th>Tên khách hàng</th>
                    
                    <th>Duyệt xe</th>
                    <th>Kiểm tra thông tin</th>
                    <th>Kiểm tra</th>
                    <th>Hoàn thành</th>
                    <th>Hóa đơn</th>
                    <th>Thanh toán</th>
                    <th>Xóa đơn</th>
                    <th>Trạng thái</th>
                    
                </thead>
                
                <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                       
                        <td><?php echo $row['booking_id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                       
                        
                        
                        
                        <?php if($row['confirmation']==0 or $row['finished']==1)  { ?>
                        <td><a class="btn btn-default disabled" href="releasebooking.php?id=<?php echo $row['booking_id']; ?>">Duyệt xe</a></td>
                        <?php } else{ ?>
                        <td><a class="btn btn-default" href="releasebooking.php?id=<?php echo $row['booking_id']; ?>">Duyệt xe</a></td>
                        <?php } ?>
                        
                        <?php if($row['confirmation']=='0'){ ?>
                        <td><a class="btn btn-success" href="confirmbooking.php?id=<?php echo $row['booking_id']; ?>">Kiểm tra thông tin</a></td>
                        <?php } else { ?>
                        <td><a class="btn btn-success disabled" href="confirmbooking.php?id=<?php echo $row['booking_id']; ?>">Kiểm tra thông tin</a></td>
                        <?php } ?>
                        
                        <?php if($row['confirmation']=='0'){ ?>
                        <td>Chưa kiểm tra</td>
                        <?php } else { ?>
                        <td>Đã kiểm tra</td>
                        <?php }  ?>
                        
                        <?php if($row['finished']=='0'){ ?>
                        <td>Chưa duyệt</td>
                        <?php } else { ?>
                        <td>Đã duyệt</td>
                        <?php }  ?>
                        
                        
                        <td>
                        <?php if($row['finished']=='1' and $row['paid']==0 ){  ?>
                        <a class="btn btn-primary" href="bill.php?id=<?php echo $row['booking_id']; ?>">Hóa đơn</a>
                         <?php } else if($row['paid']==1 ) { ?>
                          <a class="btn btn-primary disabled" href="bill.php?id=<?php echo $row['booking_id']; ?>">Hóa đơn</a>
                          <?php }  ?>
                         </td> 
                          


                          <td><a href="confirmpayment.php?id=<?php echo $row['booking_id']; ?>">Xác nhận</a></td>
                          <td><a class="btn btn-danger" href="deletebooking.php?id=<?php echo $row['booking_id']; ?>">Xóa đơn</a></td>
                          <?php if($row['paid']=='0'){ ?>
                        <td>Chưa thanh toán</td>
                        <?php } else { ?>
                        <td>Đã thanh toán</td>
                        <?php }  ?>
                          
                        
                        
                    </tr>
                    

                    <?php }   ?>
                </tbody>
            </table>
            </div>
        </div>
        
        
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