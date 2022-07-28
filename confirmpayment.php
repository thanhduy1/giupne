<?php

$connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    session_start();
    
    $msg="";
    $id=$_GET['id'];
    
    $query= "SELECT * FROM `tripcost` WHERE booking_id='$id'";
    $query1="UPDATE `booking` SET `paid`='1' WHERE booking_id='$id'";
    //echo $query;
    $result= mysqli_query($connection,$query);
    $result1= mysqli_query($connection,$query1);
    $row= mysqli_fetch_assoc($result);

    //echo $row['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý vận chuyển</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
     <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css"> 
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">
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
</style>
<body>
    <div class="container">
    
        <br><br>
        
        <div class="row">
           
           <a class="btn btn-info" style="background-color:green" href="admin_dondatxe.php">Quay lại</a>
            <h1 style="text-align: center;">Trip Details</h1>
            <?php echo $msg; ?>
           
           
      
        
            <div class="col-md-3"></div>
            <div class="col-md-6 center">
                  <p><strong>Booking Id: </strong><?php echo $row['booking_id']; ?></p>    
                     
                  <p><strong>Tiền đặt xe: </strong><?php echo $row['tiendatxe']; ?></p>    
   
                  <p><strong>Tổng tiền: </strong><?php echo $row['total_cost']; ?></p>
                  
                <form action="confirmpaymentaction.php?id=<?php echo $row['booking_id']; ?>" method="post">
                    <button class="btn btn-success">Xác nhận</button>
                   
                </form> 
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>