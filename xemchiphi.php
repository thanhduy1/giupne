<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
   $sql="SELECT * FROM bookingyc WHERE bookingyc_id='$id'";
   $result=mysqli_query($conn,$sql);

   $row=mysqli_fetch_assoc($result);
   $idtaixe = $row['taixe'];
   $sql1 = "SELECT * from driver Where driverid ='$idtaixe'";
   $result1=mysqli_query($conn,$sql1);

   $row1=mysqli_fetch_assoc($result1);

   $idxe = $row['sohieuxe'];
   $sql2 = "SELECT * from vehicle Where veh_id ='$idxe'";
   $result2=mysqli_query($conn,$sql2);

   $row2=mysqli_fetch_assoc($result2);
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
  background-color: #ccccff;
}
.center {
  margin: auto;
  width: 50%;
  border: 5px solid purple;
  padding: 10px;
  background-color:#ffffff;
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
    <div class="container">
    
        <br><br>
        
        
           
           <a class="btn btn-info nut" href="chiphichuyendi.php">Quay lại</a>
            <h1 style="text-align: center;">Thông tin chi phí chuyến đi</h1>

</div>
        
            <div class="col-md-3"></div>
        <div class="col-md-6 center">

          
        <table class="table" >
           
          <tr>
            <th >Tên tài xế:</th>
            <td  style="color:#000000;font-weight:bold;"><?php echo $row1['drname']; ?></td>
          </tr>
          <tr>
            <th >Số hiệu xe</th>
            <td  style="color:#000000;font-weight:bold;"><?php echo $row2['chesisno']; ?></td>
          </tr>
          <tr>
            <th >Ngày đi:</th>
            <td  style="color:#000000;font-weight:bold;"><?php echo $row['ngaydi']; ?></td>
          </tr>
          <tr>
            <th >Ngày về:</th>
            <td  style="color:#000000;font-weight:bold;"><?php echo $row['ngayve']; ?></td>
          </tr>
      

          <tr>
            <th >Tiền xăng:</th>
            <td  style="color:#000000;font-weight:bold;"><?php echo number_format($row['tienxang']); ?> VND</td>
        </tr>

        <tr>
            <th >Tiền dầu:</th>
            <td  style="color:#000000;font-weight:bold;"><?php echo number_format($row['tiendau']); ?> VND</td>
        </tr>
        <tr>
            <th >Chi phí khác</th>
            <td  style="color:#000000;font-weight:bold;"><?php echo number_format($row['chiphikhac']); ?> VND</td>
        </tr>
        <tr>
            <th >Nơi đến:</th>
            <td  style="color:#000000;font-weight:bold;"><?php echo $row['noiden']; ?></td>
        </tr>
        <tr>
            <th >Ghi chú:</th>
            <td  style="color:#000000;font-weight:bold;"><?php echo $row['ghichu']; ?></td>
        </tr>
        <tr>
            <th >Tổng tiền chi phí:</th>
            <td  style="color:#000000;font-weight:bold;"><?php echo number_format($row['tongtienchiphi']); ?> VNĐ</td>
        </tr>
        </table>  
        <a class="btn btn-success nut" href="chiphichuyendi.php"<?php echo $row['bookingyc_id']; ?>>Xác nhận</a>
        </div>
      </div>
    </div>








    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 