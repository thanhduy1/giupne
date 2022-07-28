<?php

$connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    session_start();
    
    $msg="";
    $id=$_GET['id'];
    
    $query= "SELECT  `username` FROM `booking` WHERE booking_id='$id'";
    $result= mysqli_query($connection,$query);
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
<body>
    <div class="container">
        <br><br>
        
        <div class="row">
           <div class="page-header">
            <h1 style="text-align: center;">Hóa đơn</h1>
            <?php echo $msg; ?>
           
      
          </div> 
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="billaction.php?id=<?php echo $id; ?>" method="post">

                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><b>Tiền đặt xe</b></span>
                      <input type="text" class="form-control" name="tiendatxe" placeholder="Nhập tiền đặt xe">
                    </div>
                    <br>

                    <div class="input-group">
                  <span class="input-group-addon"><b>Nơi xuất phát</b></span>
                  <input type="text" class="form-control" name="noixuatphat" value="Bến xe Trà Vinh" readonly>
                </div>
                <br>

                    <div class="input-group" >
                    <span class="input-group-addon"><b>Nơi đến</b></span>
                    <input type="text" class="form-control" name="noiden" >
</div>
                    <br>

                    <div class="input-group">
                      <span class="input-group-addon"><b>Tổng tiền</b></span>
                      <input type="text" class="form-control" name="total_cost" placeholder="Total Cost">
                    </div>
                    <br>
                    
                     <input type="hidden" name="username" value="<?php echo $row['username']; ?>">
                     
                    <div class="input-group">
                        <input type="submit" name="submit" class="btn btn-success">
                    </div>
                    
                   
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>