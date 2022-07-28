<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    $msg= "" ;     
    
?>
<?php
$sql_sua_x="SELECT * FROM vehicle WHERE veh_id='$_GET[xid]' LIMIT 1";
$query_sua_x= mysqli_query($connection,$sql_sua_x);
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

  <h1 style="text-align: center; font-weight: 700; font-size: 2.75em; margin:0 0 0 0;">Sửa thông tin xe</h1>
  <div class="row">
    <div class="col-md-6 animated center">
    

    <?php 
    while ($row= mysqli_fetch_assoc($query_sua_x)){
      ?>
    <form action="updatexe.php?xid=<?php echo $_GET['xid'] ?>" method="POST">
    
    <div class="input-group " >
              <span class="input-group-addon a"><b>Số hiệu xe</b></span>
      <input  style="font-size:20px; font-weight:bold;" required type="text" class="form-control" name="veh_reg"  value="<?php echo $row['veh_reg']?>">
    </div>
    <br>
    <div class="input-group" >
        <span class="input-group-addon a"><b>Hãng xe </b></span> 
           <input style="font-size:20px; font-weight:bold; height:50px; " class="form-control" name="brand" value="<?php echo $row['brand']?>">
    </div>
<br>
    <div class="input-group " >
              <span class="input-group-addon a"><b>Kiểu xe</b></span>
      <input  style="font-size:20px; font-weight:bold;"required type="text" class="form-control" name="veh_type"  value="<?php echo $row['veh_type']?>">
    </div>
<br>
    
    <div class="input-group " >
              <span class="input-group-addon a"><b>Bảng số xe</b></span>
      <input  style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="chesisno"  value="<?php echo $row['chesisno']?>">
    </div>

    <br>

    <div class="input-group " >
              <span class="input-group-addon a"><b>Màu xe</b></span>
      <input  style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="veh_color" value="<?php echo $row['veh_color']?>">
    </div>
<br>
    <div class="input-group " >
              <span class="input-group-addon a"><b>Ngày nhập xe</b></span>
      <input  style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="veh_regdate"  value="<?php echo $row['veh_regdate']?>">
    </div>
<br>
    <div class="input-group " >
              <span class="input-group-addon a"><b>Mô tả xe</b></span>
      <input  style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="veh_description"  value="<?php echo $row['veh_description']?>">
    </div>
<br>
<div class="input-group ">
              <span class="input-group-addon a"><b>Hình ảnh</b></span>
      <input  style="font-size:20px; height: 50px; font-weight:bold;" type="file" class="form-control" name="veh_photo"  value="<?php echo $row['veh_photo']?>">
    </div>
<br>
<div class="input-group" style="text-align:center;">
    <button type ="submit" class="btn btn-success nut" name="suaxe" >Sửa</button>
    </div>
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