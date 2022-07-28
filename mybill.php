<?php 
    if(!isset($_SESSION)) 
    {   
        
        session_start(); 
    } 
    
 

    
    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    $query= "SELECT booking.booking_id, booking.req_date,booking.`ret_date`, booking.`destination`, booking.`veh_reg`, booking.`driverid`, tripcost.tiendatxe,tripcost.total_cost,booking.paid,tripcost.noiden,tripcost.noixuatphat FROM `booking` LEFT JOIN `tripcost`ON booking.username=tripcost.username AND booking.booking_id=tripcost.booking_id ORDER BY booking_id DESC;" ;

    //echo $query;

    $result= mysqli_query($connection,$query);
    
    
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
    
<div class="container" style="font-size:22px; width:1500px ;padding:10px 10px 10px 10px;">
        <div class="row">
           <div class="col-md-12">
           <div class="page-header">
                <h1 style="text-align: center;">Hóa đơn của tôi</h1>
            </div>
              <table id="myTable" class="table table-bordered animated " style="background-color:#ffffff;">
                <thead>
                    <tr>
                        <th>Booking Id</th>
                        <th>Ngày đặt xe</th>
                        
                        <th>Tuyến</th>
                        <th>Số hiệu xe</th>
                        <th>Tài xế</th>
                        <th>Nơi xuất phát</th>
                        <th>Nơi đến</th>
                        
                        <th>Tiền đặt xe</th>
                        <th>Tổng tiền</th>
                        <th>Trạng thái thanh toán</th>
                    </tr>  
                </thead>

                <tbody>
<?php
    while($row=mysqli_fetch_assoc($result)) {
                
?>
                    <tr>
                        <td><?php echo $row['booking_id']; ?></td>
                        <td><?php echo $row['req_date']; ?></td>

                        <td><?php echo $row['destination']; ?></td>
                        <td><?php echo $row['veh_reg'] ?></td>
                        <td><?php echo $row['driverid'] ?></td>
                        <td><?php echo $row['noixuatphat'] ?></td>
                        <td><?php echo $row['noiden'] ?></td>

                        <td><?php echo $row['tiendatxe'] ?></td>
                        <td><?php echo $row['total_cost']; ?></td>
                        
                       <?php if($row['paid']=='0'){ ?>
                        <td>Chưa thanh toán</td>
                        <?php } else { ?>
                        <td>Đã thanh toán</td>
                        <?php }  ?>
                    </tr>                    
                </tbody>
<?php } ?>
            </table>
        </div>
    </div>
</body>
</html>