<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    $msg= "" ;     
    
?>
<?php
$sql_sua_tx="SELECT * FROM driver WHERE driverid='$_GET[txid]' LIMIT 1";
$query_sua_tx= mysqli_query($connection,$sql_sua_tx);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Quản lý vận chuyển</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min1.js"></script> 
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="assets/sweetalert2/sweetalert2.css">
    <script src="assets/sweetalert2/sweetalert2.min.js"></script>
   
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
 
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

   
  </head>
  <style>
   body{
    background-color:#99ccff;
   } 
.center {
  margin: auto;
  width: 50%;
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

    <div class="container" >
    
      <h1 style="text-align: center; font-weight: 700; font-size: 2.75em;">Sửa thông tin tài xế</h1>
      <div class="row">
        <div class="col-md-6 animated center">
        

        <?php 
        while ($row= mysqli_fetch_assoc($query_sua_tx)){
          
          ?>
        <form action="updatetaixe.php?txid=<?php echo $_GET['txid'] ?>" method="POST">
        
        <div class="input-group " >
                  <span class="input-group-addon a"><b>Tên tài xế</b></span>
          <input  style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="drname"  value="<?php echo $row['drname']?>">
        </div>
        <br>
        <div class="input-group " >
                  <span class="input-group-addon a"><b>Giới tính</b></span>
          <input  style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="gioitinh"  value="<?php echo $row['gioitinh']?>">
        </div>

<br>
        <div class="input-group " >
                  <span class="input-group-addon a"><b>Ngày vào làm</b></span>
          <input  style="font-size:20px; font-weight:bold;" id="drjoin" type="text" class="form-control" name="drjoin"  value="<?php echo $row['drjoin']?>">
        
        </div>
       
<br>
        
        <div class="input-group " >
                  <span class="input-group-addon a"><b>Số điện thoại</b></span>
          <input  style="font-size:20px; font-weight:bold;" type="number" class="form-control" name="drmobile"  value="<?php echo $row['drmobile']?>">
        </div>
<br>
        <div class="input-group" >
            <span class="input-group-addon a"><b>Bằng lái xe: </b></span> 
               <input style="font-size:20px; font-weight:bold; height:50px; " class="form-control" name="drlicense" value="<?php echo $row['drlicense']?>">
        </div>
<br>
        <div class="input-group " >
                  <span class="input-group-addon a"><b>Ngày hết hạn</b></span>
          <input  style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="drlicensevalid"  value="<?php echo $row['drlicensevalid']?>">
        </div>
      
        <br>

        <div class="input-group " >
                  <span class="input-group-addon a"><b>Quốc tịch</b></span>
          <input  style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="drnid" value="<?php echo $row['drnid']?>">
        </div>
<br>
        <div class="input-group " >
                  <span class="input-group-addon a"><b>Địa chỉ</b></span>
          <input  style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="draddress"  value="<?php echo $row['draddress']?>">
        </div>
<br>
        <div class="input-group " >
                  <span class="input-group-addon a"><b>Hình ảnh</b></span>
          <input  style="font-size:20px;height:50px; font-weight:bold;" type="file" class="form-control" name="drphoto"  value="<?php echo $row['drphoto']?>">
        </div>
<br>
        <button type ="submit" class="btn btn-success nut" name="suataixe" >Sửa tài xế</button>
      </form>
      <?php 
        }
        ?>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 