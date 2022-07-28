<?php
 $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM chiphichuyendi WHERE ngaydi LIKE '%".$tukhoa."%'" ;
	$query_pro = mysqli_query($connection,$sql_pro);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>trip Details</title>
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="sweetalert2/sweetalert2.css">
    <script src="sweetalert2/sweetalert2.min.js"></script>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="style.css">

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
<body>
<h3>Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>
<div class="container">
        <div class="row">
             
            <div class="col-md-12">				
					
					<table id="myTable" class="table table-bordered animated">
                <thead>
                    <th style="text-align:center;">ID</th>
                    <th style="text-align:center;">Tên tài xế</th>
                    <th style="text-align:center;">Số hiệu xe</th>
                    <th style="text-align:center;">Ngày đi</th>
                    <th style="text-align:center;">Tuyến đường</th>
                    
					<th style="text-align:center;">Tổng tiền chi phí </th>
					<th style="text-align:center;">Trạng thái</th>
                    
                </thead>
                <tbody>
                    <?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
                
					<tr>
                        <td style="text-align:center;"><?php echo $row['vtbd_id']; ?> 
						<td style="text-align:center;"><?php echo $row['drname']; ?> 
						
                        <td style="text-align:center;"><?php echo $row['veh_reg']; ?></td>
                        <td style="text-align:center;"><?php echo $row['ngaydi']; ?></td>
                        <td style="text-align:center;"><?php echo $row['tuyen']; ?></td>
                        <td style="text-align:center;"><?php echo $row['tongtien'];?></td>
						<td style="text-align:center;">
						<?php if($row['trangthai']==0){
                      		echo '<div>Chưa xác nhận</div>';
                           	}else{
                      		echo '<div>Đã xác nhận</div>';
                          	}   
                           	?>

						</td>
                        </tr>
                        <?php }   ?>
                        </tbody>
                </table>
					
                        </div>
                        </div>
                        </div>
                        </body>
                        </html>