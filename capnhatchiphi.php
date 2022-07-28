<?php
 if(!isset($_SESSION)) 
 { 
     session_start(); 
 } 
 $id= $_GET['id'];
 $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
   
    $msg="";
    
    if(isset($_POST['submit'])){
        
        $ngayve=$_POST['ngayve'];
        $tienxang=$_POST['tienxang'];
        $tiendau=$_POST['tiendau'];
        $chiphikhac=$_POST['chiphikhac'];
        $ghichu=$_POST['ghichu'];
        $noiden=$_POST['noiden'];
        $tongtienchiphi= $tienxang + $tiendau + $chiphikhac;
        $sql= "SELECT * FROM `bookingyc`WHERE bookingyc_id='$_GET[id]'";
        $result=mysqli_query($connection,$sql);
        while($row=mysqli_fetch_assoc($result)){
          $giavexe = (int)$row['giavexe'];
        }
        $tienloi = $giavexe - $tongtienchiphi;
       
        
        if($ngayve >= date("m/d/Y")){
          $insert_d="UPDATE bookingyc SET capnhat='1',ngayve='$ngayve',tienloi='$tienloi' ,tienxang='$tienxang',tiendau='$tiendau',noiden='$noiden',ghichu='$ghichu',chiphikhac='$chiphikhac',tongtienchiphi='$tongtienchiphi' WHERE bookingyc_id='$_GET[id]'";
          //echo $name;
          $res= mysqli_query($connection,$insert_d);
          header("Location: chiphichuyendi.php");
        }else{?>

          <div class="alert alert-warning" style="text-align:center;">
           <strong>Cảnh báo!</strong>Ngày trở về không được nhỏ hơn ngày hiện tại!.
          </div>         
      <?php  }}?>
           
          
          



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

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
  <br>
<a class="btn btn-info nut" href="chiphichuyendi.php">Quay lại</a>

    <div class="container">
                <h1 style="text-align:center;margin:0 0 0 0;">Nhập chi phí</h1>
            <div class="col-md-3"></div>
            
            <div class="col-md-6 animated center">
           <form class="form-horizontal" style="margin:0 0 0 0;"method="post" enctype="multipart/form-data"  >
                    
                   <div class="input-group">
                    <span class="input-group-addon a"><b>Ngày đi</b></span>&ensp;
					<?php 
						$sql1="SELECT * FROM `bookingyc` WHERE bookingyc_id='$id'";
						$result1= mysqli_query($connection,$sql1);
					?>
                    <?php while($row1=mysqli_fetch_assoc($result1)){ ?>
							<td ><?php echo $row1['ngaydi']; ?> 
						
                    </div>
                    <?php } ?>

                    <br>
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Ngày về</b></span>
                      <input style="font-size:20px; font-weight:bold;" id="ngayve" type="text" class="form-control" name="ngayve" required>
                    
                    </div>
                    <br>

                    <div class="input-group">
                      <span class="input-group-addon a"><b>Tiền xăng</b></span>
                      <input style="font-size:20px; font-weight:bold;" type="number" class="form-control"value="0" name="tienxang">
                    </div>
                    <br>


                    <div class="input-group">
                      <span class="input-group-addon a"><b>Tiền dầu</b></span>
                      <input style="font-size:20px; font-weight:bold;" type="number" class="form-control"value="0" name="tiendau">
                    </div>
                    <br>


                    <div class="input-group">
                      <span class="input-group-addon a"><b>Chi phí khác</b></span>
                      <input style="font-size:20px; font-weight:bold;" type="number" class="form-control" value="0" name="chiphikhac">
                    </div>
                    <script>
                      $( function() {
                        $( "#ngaydi" ).datepicker();
                    
                      } ); 
                    </script>
                    <script>
                      $( function() {
                        $( "#ngayve" ).datepicker();
                    
                      } ); 
                    </script>
                 <br>


                    <div class="input-group">
                      <span class="input-group-addon a"><b>Ghi chú</b></span>
                      <textarea style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="ghichu" placeholder="Nhập ghi chú"></textarea>
                      
                      
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Nơi đến</b></span>
                      <input style="font-size:20px; font-weight:bold;" id="noiden" type="text" class="form-control" name="noiden" placeholder="Nhập nơi đến" >
                    </div>
                    <br>
                    
                    <div style="text-align:center;">
                        <input type="submit" name="submit" class="btn btn-success" value="Cập nhật">
                    </div>
                </form>
            </div>
            <div class="col-md-3"></div>
        
    </div>
    

    

</body>
</html>