<?php
    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    session_start();

    $driverid= $_GET['txid']; 

    $sql= "SELECT * FROM `driver` WHERE driverid='$driverid'"; 
    //echo $sql;
    $res= mysqli_query($connection,$sql);
    $row= mysqli_fetch_assoc($res);

    
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
    <link rel="stylesheet" href="assets/css/main.css">

</head>
<style>
    body{
        background-color: #99ccff;
    }
    a{
        color: #000000;
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
		
		border-radius: 4px;
		border: 0;
		box-shadow: inset 0 0 0 2px #585858;
		color: #585858 ;
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
<a class="btn btn-info nut" style=" font-size:15px;" href="admin_taixe.php">Danh sách tài xế</a><br>   
        <div class="container" style="margin-top: 20px; margin-bottom: 20px;">


                    <h1 style="text-align: center;">Tài xế: <?php echo $row['drname']; ?></h1>
                    
          
            <div class="col-12 col-md-4">
                   <div class="fb-profile">
                        <img height="350" width="350" class="fb-image-profile thumbnail userpic" src="images/<?php echo $row['drphoto'] ?>" alt="dp"/>
<br>
                        
                      </div>
           </div> 
           
           <div class="col-12 col-md-7">
               <div data-spy="scroll" class="tabbable-panel">
                <div class="tabbable-line">
                 
                  <table class="table" style="background-color:#ffffff;">

        
                    <tr>
                      <th>Họ tên tài xế: </th> <td style="color:#000000;"><?php echo $row['drname']; ?></td>
                    </tr>

                    <tr>
                      <th>Giới tính:</th><td style="color:#000000;">  <?php echo $row['gioitinh']; ?></td>
                      </tr>

                      <tr>
                      <th>Ngày vào làm:</th>  <td style="color:#000000;"><?php echo $row['drjoin']; ?></td>
                      </tr>
                      

                      <tr>
                      <th>Quốc tịch:</th><td style="color:#000000;">  <?php echo $row['drnid']; ?></td>
                      </tr>

                      <tr>
                      <th>Bằng lái xe:</th>  <td style="color:#000000;"><?php echo $row['drlicense']; ?></td>
                      </tr>

                      <tr>
                      <th>Ngày hết hạn:</th><td style="color:#000000;"><?php echo $row['drlicensevalid']; ?></td>
                      </tr>

                      <tr>
                      <th>Số điện thoại:</th><td style="color:#000000;"> <?php echo $row['drmobile']; ?></td>
                      </tr>

                      <tr>
                      <th>Địa chỉ:</th><td style="color:#000000;"><?php echo $row['draddress']; ?></td>
                      <tr>

                        </div>
                      </div>
                    

                    </div>
      </table>
                        <td><a class="btn btn-info nut" style=" font-size:15px;" href="suataixe.php?txid=<?php echo $row['driverid']; ?>">Sửa tài xế</a></td> &ensp;
                        
                        <td><a class="btn btn-danger nut" style=" font-size:15px;" onclick="return confirm('Bạn có chắc muốn xóa tài xế này?')" href="xoataixe.php?driverid=<?php echo $row['driverid']; ?>">Xóa tài xế</a></td>
              </div>
           </div>

      

      </div>
  
</body>
</html>




