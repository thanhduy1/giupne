<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 

 $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");


    $msg="";
    
    if(isset($_POST['submit'])){
        $tenkhachhang=$_POST['tenkhachhang'];
        $sodienthoai=$_POST['sodienthoai'];
        $ngaydi=$_POST['ngaydi'];

        $noiden=$_POST['noiden'];
        $taixe=$_POST['taixe'];
        $sohieuxe=$_POST['sohieuxe'];
        $giavexe= $_POST['giavexe'];
        $hinhthuc=$_POST['hinhthuc'];
       
    

       
        if($ngaydi >= date("m/d/Y")){
        $insert_d="INSERT INTO `bookingyc`(`bookingyc_id`,`tenkhachhang`,`sodienthoai`, `noiden`, `taixe`, `sohieuxe`, `giavexe`,`ngaydi`,`hinhthuc`) VALUES ('','$tenkhachhang','$sodienthoai','$noiden','$taixe','$sohieuxe','$giavexe','$ngaydi','$hinhthuc')"; 
        //echo $name;
        $res= mysqli_query($connection,$insert_d);
        header("Location: admin_datxe.php");
      }else{?>
        
        <div class="alert alert-warning" style="text-align:center;">
        <strong>Cảnh báo!</strong>Ngày khởi hành không được nhỏ hơn ngày hiện tại!.
      </div>
       <?php  }} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý vận chuyển</title> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min1.js"></script> 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="assets/sweetalert2/sweetalert2.css">
    <script src="assets/sweetalert2/sweetalert2.min.js"></script>
    <script src="assets/js1/wickedpicker.min.js"></script>
    
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<style>
body{
  background-color: #ccccff;
}
.center {
  margin: auto;
  width: 100%;
  border: 5px solid purple;
  padding: 10px;
  background-color:#ffffff;
}
.a{
  font-size:20px;
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
<body>
<a class="btn btn-info nut" href="admin_datxe.php">Quay lại</a>

    <div class="container">
                <h1 style="text-align:center;">Đặt xe</h1>
           
            <div class="col-md-3"></div>
            
            <div class="col-md-6 animated center">
           <form class="form-horizontal" method="post" enctype="multipart/form-data"  >
                   
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Tên khách hàng</b></span>
                      <input style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="tenkhachhang" planceholder="Nhập tên khách hàng" required>
                    </div>
                    
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Số điện thoại</b></span>
                      <input style="font-size:20px; font-weight:bold;" type="number" class="form-control" name="sodienthoai" placeholder="Nhập số điện thoại" required>
                      
                      
                    </div>
                   
                    <script>
                      $( function() {
                        $( "#ngaydi" ).datepicker();
                        
                      } ); 
                    </script>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Ngày khởi hành</b></span>
                      <input style="font-size:20px; font-weight:bold;" id="ngaydi" type="text" class="form-control" name="ngaydi" placeholder="Nhập ngày đi" required>
                    </div>
                
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Nơi đến</b></span>
                      <input style="font-size:20px; font-weight:bold;" id="noiden" type="text" class="form-control" name="noiden" placeholder="Nhập nơi đến" >
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Tài xế</b></span>
                    <select style="font-size:20px; font-weight:bold; height:50px; " id="taixe" class="form-control" name="taixe" >
                    
                      <?php 
                      $sql_tx="SELECT * FROM driver WHERE trangthaitx='0' ORDER BY driverid ASC";
                      $query_tx= mysqli_query($connection,$sql_tx);
                      while($row_tx= mysqli_fetch_assoc($query_tx)){
                        ?>
                        <option value="<?php echo $row_tx['driverid']?>"><?php echo $row_tx['drname']?></option>
                        <?php
                      }
                      ?>
                    </select>
                    </div>
                    <br>
                    
                    <div class="input-group" >
                      <span class="input-group-addon a"><b>Số hiệu xe</b></span>
                    <select style="font-size:20px; font-weight:bold; height:50px; " id="sohieuxe" class="form-control" name="sohieuxe" required>
                      <?php 
                      $sql_x="SELECT * FROM vehicle WHERE trangthaix='0' ORDER BY veh_id DESC";
                      $query_x= mysqli_query($connection,$sql_x);
                      while($row_x= mysqli_fetch_assoc($query_x)){
                        ?>
                        <option value="<?php echo $row_x['veh_id']?>"><?php echo $row_x['chesisno']?></option>
                        <?php
                      }
                      ?>
                    </select>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Hình Thức thanh toán</b></span>
                      <select  style="font-size:20px; font-weight:bold;"  class="form-control" name="hinhthuc" required>
                      <option>Hợp đồng</option>
                      <option>Tiền mặt</option>
                      <option>Tự lái</option>
                    </select>
                    </div>
                    <br>

                    <div class="input-group" >
                      <span class="input-group-addon a"><b>Giá</b></span>
                      <input style="font-size:20px; font-weight:bold;" type="number" class="form-control" name="giavexe" required>
                      
                    </div>
                    
                   <br>
                    
                    <div style="text-align:center;">
                        <input type="submit" name="submit" class="btn btn-success" value="Thêm">
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        
    </div>
    

    

</body>
</html>