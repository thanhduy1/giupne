<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    $msg= "" ;     
    
?>
<?php
$sql_sua_vt="SELECT * FROM chiphichuyendi WHERE vtbd_id='$_GET[vtbdid]' LIMIT 1";
$query_sua_vt= mysqli_query($connection,$sql_sua_vt);
?>

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
 <br>
 <a class="btn btn-info nut" href="chiphichuyendi.php">Quay lại</a>
  
   <div class="container" > 
    
            
            <h1 style="text-align: center; font-weight: 700; font-size: 2.75em;">Sửa thông tin chuyến đi </h1></div>
            <div class="row">
            <?php echo $msg; ?>

      

        <div class="col-md-6 animated center" > 

        <?php 
        while ($row= mysqli_fetch_assoc($query_sua_vt)){
          ?>
        <form action="updatechiphi.php?vtbdid=<?php echo $_GET['vtbdid'] ?>" method="POST">
                
                <div class="input-group " >
                  <span class="input-group-addon a"><b>Tên tài xế</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " id="drname" type="text" class="form-control" name="drname" value="<?php echo $row['drname']?>">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Số hiệu xe</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " type="text" class="form-control" name="veh_reg" value="<?php echo $row['veh_reg']?>">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon a"><b>Ngày đi</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " id="ngaydi" type="text" class="form-control" name="ngaydi" value="<?php echo $row['ngaydi']?>">
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#ngaydi" ).datepicker();
                      } );
                </script> 
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Tuyến</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " type="text" class="form-control" name="tuyen" value="<?php echo $row['tuyen']?>">
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon a"><b>Tiền xăng</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " type="text" class="form-control" name="tienxang" value="<?php echo $row['tienxang']?>">
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Tiền dầu</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " type="text" class="form-control" name="tiendau" value="<?php echo $row['tiendau']?>">
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Chi phí phát sinh</b></span>
                     <input style="font-size:20px; font-weight:bold; height:50px; " rows="5" type="text" class="form-control" name="chiphiphatsinh" value="<?php echo $row['chiphiphatsinh']?>">
                  
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon a"><b>Ghi chú</b></span>
                     <textarea style="font-size:20px; font-weight:bold; height:50px; " rows="5" type="text" class="form-control" name="ghichu" value="<?php echo $row['ghichu']?>" > </textarea>
                  
                </div>
                
                <br>
             
                
                <button type ="submit" name="suachiphi" >Sửa</button>

                
              </form>  
              <?php 
        }
        ?> 
        </div>  

         
    </div>
    
    </div>
    
</body>
</html>