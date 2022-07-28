<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    $msg= "" ;     

$tongtien="";
    if(isset($_POST['submit'])){
        
        $drname=$_POST['drname'];
        $veh_reg=$_POST['veh_reg'];
        $ngaydi=$_POST['ngaydi'];
        $tienxang=$_POST['tienxang'];
        $tiendau=$_POST['tiendau'];
        $chiphiphatsinh=$_POST['chiphiphatsinh'];
        $ghichu=$_POST['ghichu'];
        $tuyen=$_POST['tuyen'];
        $tongtien=$tienxang + $tiendau + $chiphiphatsinh;
        
        $res=false;
        $insert_query="INSERT INTO `chiphichuyendi`(`vtbd_id`, `drname`, `veh_reg`,`ngaydi`, `tienxang`, `tiendau`, `chiphiphatsinh`, `ghichu`,`tuyen`,`tongtien`) VALUES ('','$drname','$veh_reg','$ngaydi','$tienxang','$tiendau','$chiphiphatsinh','$ghichu','$tuyen','$tongtien')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success '
                                            );
				          </script>";
        }
        else{
            die('unsuccessful' .mysqli_error($connection));
        }
        
        
    }
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
    
            
            <h1 style="text-align: center; font-weight: 700; font-size: 2.75em;">Nhập thông tin chuyến đi </h1></div>
            <div class="row">
            <?php echo $msg; ?>


        <div class="col-md-6 animated center" > 

            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"  >
                
            <div class="input-group" >
                      <span class="input-group-addon a"><b>Tên tài xế</b></span>
                    <select style="font-size:20px; font-weight:bold; height:50px; " id="taixe" class="form-control" name="drname" required>
                      <?php 
                      $sql_tx="SELECT * FROM driver ORDER BY driverid DESC";
                      $query_tx= mysqli_query($connection,$sql_tx);
                      while($row_tx= mysqli_fetch_assoc($query_tx)){
                        ?>
                        <option value="<?php echo $row_tx['drname']?>"><?php echo $row_tx['drname']?></option>
                        <?php
                      }
                      ?>
                    </select>
                    </div>
                <br> 
                
                <div class="input-group" >
                      <span class="input-group-addon a"><b>Số hiệu xe</b></span>
                    <select style="font-size:20px; font-weight:bold; height:50px; " id="sohieuxe" class="form-control" name="veh_reg" required>
                      <?php 
                      $sql_x="SELECT * FROM vehicle ORDER BY veh_id DESC";
                      $query_x= mysqli_query($connection,$sql_x);
                      while($row_x= mysqli_fetch_assoc($query_x)){
                        ?>
                        <option value="<?php echo $row_x['veh_reg']?>"><?php echo $row_x['veh_reg']?></option>
                        <?php
                      }
                      ?>
                    </select>
                    </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon a"><b>Ngày đi</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " id="ngaydi" type="text" class="form-control" name="ngaydi" placeholder="Nhập ngày đi" required>
                </div>
                <br>
                
              
                
                 <script>
                      $( function() {
                        $( "#ngaydi" ).datepicker();
                      } );
                </script> 
                
                <div class="input-group" >
                      <span class="input-group-addon a"><b>Tuyến</b></span>
                      <!--<input id="destination" type="text" class="form-control" name="destination" placeholder="Car Destination" required>-->
                    <select  style="font-size:20px; font-weight:bold; height:50px; " id="tuyen" class="form-control" name="tuyen" required>
                      <?php 
                      $sql_tuyen="SELECT * FROM schedule ORDER BY scheduleid DESC";
                      $query_tuyen= mysqli_query($connection,$sql_tuyen);
                      while($row_tuyen= mysqli_fetch_assoc($query_tuyen)){
                        ?>
                        <option value="<?php echo $row_tuyen['schedulename']?>"><?php echo $row_tuyen['schedulename']?></option>
                        <?php
                      }
                      ?>
                      
                    </select>
                    </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon a"><b>Tiền xăng</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px;" type="number" class="form-control" name="tienxang" placeholder="Nhập tiền xăng"  required>
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Tiền dầu</b></span>
                  <input style="font-size:20px; font-weight:bold; height:50px; " type="number" class="form-control" name="tiendau" placeholder="Nhập tiền dầu"  required>
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Chi phí phát sinh</b></span>
                     <input  style="font-size:20px; font-weight:bold; height:50px; " type="number" class="form-control" name="chiphiphatsinh" placeholder="Nhập chi phí phát sinh"  required> </input>
                  
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon a"><b>Ghi chú</b></span>
                     <textarea rows="7" style="font-size:20px; font-weight:bold; height:50px; " type="text" class="form-control" name="ghichu" placeholder="Nhập ghi chú" > </textarea>
                  
                </div>
              
             
      
                <br>
                <div class="input-group">
                <button  style="background-color:#66ff1a; font-weight: bold;" type="submit" name="submit" class="btn btn-success">Thêm</button>

                </div>
              </form>   
        </div>  

   
    </div> 
    
   
    
</body>
</html>