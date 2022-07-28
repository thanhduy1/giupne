<?php
 $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    session_start();
    
    $id= $_GET['id']; 

    $sql= "SELECT * FROM `booking` WHERE booking_id='$id'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    $sql1= "SELECT * FROM `vehicle` WHERE veh_available='0'"; 
    //echo $sql;
    $res1= mysqli_query($connection,$sql1);

    $sql2= "SELECT * FROM `driver` WHERE dr_available='0'"; 
    //echo $sql;
    $res2= mysqli_query($connection,$sql2);
   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý vận chuyển</title>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

  <br>
   <div class="container">
       <div class="row">
          <div class="col-md-3"></div>
           <div class="col-md-6">
              <div class="page-header">
                <h1 style="text-align:center;">Confirm Booking</h1>
                 <?php //echo $msg; ?>
                </div>
                
                
                
                <p><strong>Booking Id: </strong><?php echo $row['booking_id']; ?></p> 
                
               
                <p><strong>Tên khách hàng: </strong><?php echo $row['name']; ?></p> 
                
                
                <p><strong>Ngày đặt: </strong><?php echo $row['req_date']; ?></p> 
                
                
                <p><strong>Giờ đặt: </strong><?php echo $row['req_time']; ?></p> 
                
                
                <p><strong>Tuyến: </strong><?php echo $row['destination']; ?></p> 
                
                
                <p><strong>Email: </strong><?php echo $row['email']; ?></p> 
                
                
                <p><strong>Số điện thoại khách hàng: </strong><?php echo $row['mobile']; ?></p> 
                
                
        <form action="sendmail.php?id=<?php echo $row['booking_id']; ?>" method="post">
                <div class="input-group">
                      <span class="input-group-addon"><b>Chọn xe</b></span>
                        <select class="form-control" name="veh_reg";>
                           <?php
                               while($row1=mysqli_fetch_assoc($res1)) {  ?> 
                            
                            <option><?php echo $row1['veh_reg'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Chọn tài xế</b></span>
                        <select class="form-control" name="driverid">
                           <?php
                               while($row2=mysqli_fetch_assoc($res2)) {  ?> 
                            
                            <option><?php echo $row2['driverid']; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <br>
                   
                    <button class="btn btn-success" type="submit" name="email">Xác nhận</button>
                </form>
           </div>
           <div class="col-md-3"></div>
       </div>
   </div>
    
</body>
</html>