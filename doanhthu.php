<?php
  $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    session_start();

    $sql= "SELECT * FROM `bookingyc`WHERE capnhat='1'ORDER BY bookingyc_id DESC";
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
                            <li><a href="admin_datxe.php" >Đặt xe theo yêu cầu</a> </li>
                            <li><a href="chiphichuyendi.php">Chi tiết chuyến đi</a> </li>
							<li><a href="doanhthu.php"class="active">Doanh thu</a> </li>

						</ul>
					</nav>
        
           <div >
            
           <div class="page-header">
                <h1 style="text-align: center;">Doanh thu</h1>
               
            </div>
              <table id="myTable" class="table table-bordered animated " style="background-color:#ffffff;">
                <thead>
                    
                    <th style="text-align:center;">ID đơn</th>
                    <th style="text-align:center;">Ngày đi</th>
                    <th style="text-align:center;">Ngày về</th>
                    
                    <th style="text-align:center;">Tiền đặt xe</th>
                    <th style="text-align:center;">Tổng tiền chi phí</th>
                    <th style="text-align:center;">Tiền thu được</th>
                </thead>
                
                <tbody>
                    <?php while($row=mysqli_fetch_assoc($result)){ ?>
                    <tr>
                       
                        <td style="text-align:center; font-size:25px; color:#000000;"><?php echo $row['bookingyc_id']; ?></td>
                        <td style="text-align:center; font-size:25px; color:#000000;"><?php echo $row['ngaydi']; ?></td>
                        <td style="text-align:center; font-size:25px; color:#000000;"><?php echo $row['ngayve'];?></td>
                        <td style="text-align:center; font-size:25px; color:#000000;"><?php echo number_format($row['giavexe']); ?> VNĐ</td>
                        <td style="text-align:center; font-size:25px; color:#000000;"><?php echo number_format($row['tongtienchiphi']); ?> VNĐ</td>

                        <td style="text-align:center; font-size:25px; color:#000000;"><?php echo number_format($row['tienloi']); ?> VNĐ</td>                          
                    </tr>
                    <?php }   ?>
                </tbody>
            </table>
            </div>
        


            <div class="row">

<form class="form-horizontal" style="margin:0 0 0 0;"action="doanhthu.php"method="POST">
<div class="input-group" >
                      <span class="input-group-addon "><b>Tên tài xế</b></span>
                      <select name="taixe" style="font-size:20px; font-weight:bold; height:50px;  width:80%;" id="taixe" class="form-control" >
                    <option>--Chọn--</option>
                      <?php 
                      $sql_tx="SELECT * FROM driver ORDER BY driverid DESC";
                      $query_tx= mysqli_query($connection,$sql_tx);
                      while($row_tx= mysqli_fetch_assoc($query_tx)){
                        ?>
                        
                        <option value="<?php echo $row_tx['driverid']?>"><?php echo $row_tx['drname']?></option>
                        <?php
                      }
                      ?>
                    </select>
                   
             
                  
                    <span class="input-group-addon "><b>Ngày đi</b></span> 
                  <input style="font-size:20px;  font-weight:bold; height:50px; width:80%;" id="ngaydi" class="form-control" name="ngaydi" placeholder="Nhập ngày đi" > 
                  
                </div>
                <br>
                <div >
                <button style=" font-weight: bold; font-size:1.0rem;" type="submit" name="submit" class="btn btn-info nut">Lọc</button>

                    </div>
                
               <br>
              
</form>
</div>
<div class="row">
<table id="myTable" class="table table-bordered animated" style="background-color:#ffffff;">
                <thead>
                    <th style="text-align:center;font-size:22px;">ID</th>
                    <th style="text-align:center;font-size:22px;">Tên tài xế</th>
                    <th style="text-align:center;font-size:22px;">Số hiệu xe</th>
                    <th style="text-align:center;font-size:22px;">Ngày đi</th>
					<th style="text-align:center;font-size:22px;">Tiền lời </th>
			        <th style="text-align:center;font-size:22px;">Trạng thái</th>
                </thead>

<tbody>
  
    <?php
    if(isset($_POST['submit'])){
        $taixe=$_POST['taixe'];

        $ngaydi=$_POST['ngaydi'];

        if ($taixe!= "" && $ngaydi == "" ){
            
            $tongtienloi = 0;
            $query ="SELECT * FROM bookingyc WHERE capnhat='1' AND taixe='$taixe'"; 
            $data=mysqli_query($connection,$query)or die('errol');
            if(mysqli_num_rows($data)>0){
                while($row=mysqli_fetch_assoc($data)){
                    $bookingyc_id=$row['bookingyc_id'];
                    $tx=$row['taixe'];
                        $sql_tx="SELECT * FROM driver where driverid='$tx'";
                        $query_tx= mysqli_query($connection,$sql_tx);
                        while($row_tx= mysqli_fetch_assoc($query_tx)){
                            $taixe=$row_tx['drname'];
                        }
                        
                    $sohieuxe=$row['sohieuxe'];
                    $ngaydi=$row['ngaydi'];
                    $tienloi=$row['tienloi'];
                    $tongtienloi = $tongtienloi + $row['tienloi'];
                    $capnhat=$row['capnhat'];
                    
            ?>
            
            <tr>
            <td style="text-align:center;"><?php echo $bookingyc_id;?></td>
            <td style="text-align:center;"><?php echo $taixe;?></td>
            <td style="text-align:center;"><?php echo $sohieuxe;?></td>
            <td style="text-align:center;"><?php echo $ngaydi;?></td>
            <td style="text-align:center;"><?php echo number_format($row['tienloi']);?> VNĐ</td>
            <td style="text-align:center;">
                                    <?php if($row['capnhat']==0){
                                          echo '<div>Chưa xác nhận</div>';
                                           }else{
                                          echo '<div>Đã xác nhận</div>';
                                          }   
                                           ?>
            
                                    </td>
            </tr>

            
            <?php
            } ?>
            <p style="font-size: 30px; margin: 0 0 0 0;">Tổng tiền: <?php echo number_format($tongtienloi) ?> VNĐ</p>

            <?php }
            else{?> <tr><td>Không có thông tin nào!</td></tr>
            <?php 
                    }
                
        } else if($taixe == "--Chọn--" && $ngaydi != ""){
            $tongtienloi = 0;
            
            $query ="SELECT * FROM bookingyc WHERE capnhat='1' AND ngaydi='$ngaydi'"; 
            $data=mysqli_query($connection,$query)or die('errol');
            if(mysqli_num_rows($data)>0){
                while($row=mysqli_fetch_assoc($data)){
                    $bookingyc_id=$row['bookingyc_id'];
                    $tx=$row['taixe'];
                        $sql_tx="SELECT * FROM driver where driverid='$tx'";
                        $query_tx= mysqli_query($connection,$sql_tx);
                        while($row_tx= mysqli_fetch_assoc($query_tx)){
                            $taixe=$row_tx['drname'];
                        }
                        
                    $sohieuxe=$row['sohieuxe'];
                    $ngaydi=$row['ngaydi'];
                    $tienloi=$row['tienloi'];
                    $tongtienloi=$tongtienloi + $row['tienloi'];
                    $capnhat=$row['capnhat'];
                    
            ?>
            
            <tr>
            <td style="text-align:center;"><?php echo $bookingyc_id;?></td>
            <td style="text-align:center;"><?php echo $taixe;?></td>
            <td style="text-align:center;"><?php echo $sohieuxe;?></td>
            <td style="text-align:center;"><?php echo $ngaydi;?></td>
            <td style="text-align:center;"><?php echo number_format($row['tienloi']);?> VNĐ</td>
            <td style="text-align:center;">
                                    <?php if($row['capnhat']==0){
                                          echo '<div>Chưa xác nhận</div>';
                                           }else{
                                          echo '<div>Đã xác nhận</div>';
                                          }   
                                           ?>
            
                                    </td>
        <?php
            } ?>
            <p style="font-size: 30px; margin: 0 0 0 0;">Tổng tiền: <?php echo number_format($tongtienloi) ?> VNĐ</p>
            <?php
            }
            else{?> <tr><td>Không có thông tin nào!</td></tr>
            <?php 
                }
    }else if($taixe != "--Chọn--" && $ngaydi != ""){
            $query ="SELECT * FROM bookingyc WHERE capnhat='1' AND taixe='$taixe' and ngaydi='$ngaydi'"; 
            $data=mysqli_query($connection,$query)or die('errol');
            $tongtienloi = 0;
            if(mysqli_num_rows($data)>0){
                while($row=mysqli_fetch_assoc($data)){
                    $bookingyc_id=$row['bookingyc_id'];
                    $tx=$row['taixe'];
                        $sql_tx="SELECT * FROM driver where driverid='$tx'";
                        $query_tx= mysqli_query($connection,$sql_tx);
                        while($row_tx= mysqli_fetch_assoc($query_tx)){
                            $taixe=$row_tx['drname'];
                        }
                        
                    $sohieuxe=$row['sohieuxe'];
                    $ngaydi=$row['ngaydi'];
                    
                    $tienloi=$row['tienloi'];
                    $tongtienloi = $tongtienloi + $row['tienloi'];
                    $capnhat=$row['capnhat'];
                   

            ?>
            
            <tr>
                <td style="text-align:center;"><?php echo $bookingyc_id;?></td>
                <td style="text-align:center;"><?php echo $taixe;?></td>
                <td style="text-align:center;"><?php echo $sohieuxe;?></td>
                <td style="text-align:center;"><?php echo $ngaydi;?></td>
                
                <td style="text-align:center;"><?php echo number_format($row['tienloi']);?> VNĐ</td>
                <td style="text-align:center;">
                                        <?php if($row['capnhat']==0){
                                            echo '<div>Chưa xác nhận</div>';
                                            }else{
                                            echo '<div>Đã xác nhận</div>';
                                            }   
                                            ?>
                </td>

            </tr>
            <?php
            } ?>
            <p style="font-size: 30px; margin: 0 0 0 0;">Tổng tiền: <?php echo number_format($tongtienloi) ?> VNĐ</p>
            <?php
            }
            }
            else{?> <tr><td>Không có thông tin nào!</td></tr>
            <?php 
                    }
                }
        


            
    ?>
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