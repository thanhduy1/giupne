<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $id= $_GET['id'];
    $idtaixe= $_GET['idtaixe'];
    $idxe= $_GET['idxe'];
 
    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    $msg= "" ;     
    
?>
<?php
$sql_sua_don="SELECT * FROM bookingyc WHERE bookingyc_id='$_GET[id]' LIMIT 1";
$query_sua_don= mysqli_query($connection,$sql_sua_don);
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
 <a class="btn btn-info nut" href="admin_datxe.php">Quay lại</a>
  
   <div class="container" > 
    
            
            <h1 style="text-align: center; font-weight: 700; font-size: 2.75em; margin: 0 0 0 0;">Sửa thông tin đơn</h1></div>
            <div class="row">
            <?php echo $msg; ?>

      

        <div class="col-md-6 animated center" > 

        <?php 
        while ($row= mysqli_fetch_assoc($query_sua_don)){
          ?>
        <form action="updatedon.php?id=<?php echo $_GET['id'] ?>" method="POST">
                
                <div class="input-group " >
                  <span class="input-group-addon a"><b>Tên khách hàng</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " id="drname" type="text" class="form-control" name="tenkhachhang" value="<?php echo $row['tenkhachhang']?>">
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Số điện thoại</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " type="text" class="form-control" name="sodienthoai" value="<?php echo $row['sodienthoai']?>">
                </div>
                <br> 
                
                
                <div class="input-group">
                  <span class="input-group-addon a"><b>Ngày khởi hành</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " id="ngaydi" type="text" class="form-control" name="ngaydi" value="<?php echo $row['ngaydi']?>">
                </div>
              
              <script>
                      $( function() {
                        $( "#ngaydatxe" ).datepicker();
                      } );
                </script>
                 <script>
                      $( function() {
                        $( "#ngaydi" ).datepicker();
                      } );
                </script> 
                
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon a"><b>Nơi đến</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " type="text" class="form-control" name="noiden" value="<?php echo $row['noiden']?>">
                </div>
                <br>
                
                <div class="input-group" >
                      <span class="input-group-addon a"><b>Tài xế</b></span>
                      
                    <select style="font-size:20px; font-weight:bold; height:50px; " id="taixe" class="form-control" name="taixe" required>
                      <?php 
                      $sql_tx="SELECT * FROM driver WHERE trangthaitx='0'ORDER BY driverid DESC";
                      $query_tx= mysqli_query($connection,$sql_tx);
                      while($row_tx= mysqli_fetch_assoc($query_tx)){
                        ?>
                        <?php 
                        if($row_tx['drname'] == $row['taixe']) {
                            ?>
                        <option value="<?php echo $row_tx['drname']?>"><?php echo $row_tx['drname'];?></option>

                        <?php } else { ?>
                        <option value="<?php echo $row_tx['driverid']?>"><?php echo $row_tx['drname'];?></option>
                        <?php
                        }
                      }
                      ?>
                    </select>
                    </div>
                <br>
                

                <div class="input-group" >
                      <span class="input-group-addon a"><b>Bảng số xe</b></span>
                      
                    <select style="font-size:20px; font-weight:bold; height:50px; " id="sohieuxe" class="form-control" name="sohieuxe" required>
                      <?php 
                      $sql_xe="SELECT * FROM vehicle WHERE trangthaix='0' ORDER BY veh_id DESC";
                      $query_xe= mysqli_query($connection,$sql_xe);
                      while($row_xe= mysqli_fetch_assoc($query_xe)){
                        ?>
                        <?php 
                        if($row_xe['chesisno'] == $row['sohieuxe']) {
                            ?>
                        <option selected value="<?php echo $row_xe['chesisno']?>"><?php echo $row_xe['chesisno'];?></option>

                        <?php } else { ?>
                        <option value="<?php echo $row_xe['veh_id']?>"><?php echo $row_xe['chesisno'];?></option>
                        <?php
                        }
                      }
                      ?>
                    </select>
                    </div>
                    <br>
                    <div class="input-group">
                  <span class="input-group-addon a"><b>Hình thức thanh toán</b></span>
                  <select style="font-size:20px; font-weight:bold; height:50px; " id="hinhthuc" type="number" class="form-control" name="hinhthuc" value="<?php echo $row['hinhthuc']?>">
                  <option></option>
                  <option>Hợp đồng</option>
                      <option>Tiền mặt</option>
                      <option>Tự lái</option>
                    </select>
                </div>
               
                <br>
                <div class="input-group">
                  <span class="input-group-addon a"><b>Giá</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " id="giavexe" type="number" class="form-control" name="giavexe" value="<?php echo $row['giavexe']?>">
                </div>
                <br>
                <div style="text-align:center;">
                <button type ="submit" name="suadon" class="btn btn-success nut">Sửa</button>
                    </div>
                
              </form>  
              <?php 
        }
        ?> 
        </div>  

         
    </div>
    
    </div>
    
</body>
</html>