<?php
    session_start();
    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    $select_vt="SELECT * FROM `bookingyc`WHERE trangthai='1' ORDER BY bookingyc_id DESC";
    $res= mysqli_query($connection,$select_vt);
    

    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý vận chuyển</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="assets/sweetalert2/sweetalert2.css">
     <script>
                      $( function() {
                        $( "#ngaydi" ).datepicker();
                      } );
                </script>
</head>
<style>
		body{
			background-color:#99ccff;
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
    &ensp;&ensp;<a style=" font-weight: bold; font-size:20px;"href="chiphichuyendi.php"  class="btn btn-info nut">Quay lại</a>
<div class="container" style="margin-right: 20%; margin-left:20%;">

        
<div class="row" >
<h1 style="text-align: center;font-size:50px; font-weight:bold; height:50px;">Danh sách chuyến đi</h1>
<table id="myTable" class="table table-bordered animated" style="background-color:#ffffff;">
                <thead>
                    <th style="text-align:center;font-size:22px;">ID</th>
                    <th style="text-align:center;font-size:22px;">Tên tài xế</th>
                    <th style="text-align:center;font-size:22px;">Số hiệu xe</th>
                    <th style="text-align:center;font-size:22px;">Ngày đi</th>
                    <th style="text-align:center;font-size:22px;">Ngày về</th>
					<th style="text-align:center;font-size:22px;">Tổng tiền chi phí </th>
					
                    
                </thead>
                <tbody>
                <?php while($row=mysqli_fetch_assoc($res)){ ?>
                    <?php 
						$sql1="SELECT * FROM `driver` WHERE driverid='$row[taixe]'";
						$result1= mysqli_query($connection,$sql1);

						$sql2="SELECT * FROM `vehicle` WHERE veh_id='$row[sohieuxe]'";
						$result2= mysqli_query($connection,$sql2);
							
					?>
					<tr>
                        <td style="text-align:center;"><?php echo $row['bookingyc_id']; ?> 
						<?php while($row1=mysqli_fetch_assoc($result1)){ ?>
							<td style="text-align:center;"><?php echo $row1['drname']; ?> 
						<?php } ?>
                        <?php while($row2=mysqli_fetch_assoc($result2)){ ?>
							<td style="text-align:center;"><?php echo $row2['chesisno']; ?> 
						<?php } ?>
                        <td style="text-align:center;"><?php echo $row['ngaydi']; ?></td>
                        <td style="text-align:center;"><?php echo $row['ngayve']; ?></td>
                        <td style="text-align:center;"><?php echo number_format($row['tongtienchiphi']);?> VNĐ</td>
						
                        </tr>
                        <?php }   ?>
                        
                        </tbody>
                        
                </table>
                     
 

</div>
        </div>
<div>
</div>
</body>
</html>