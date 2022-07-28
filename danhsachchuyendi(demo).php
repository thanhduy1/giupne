<?php
    session_start();
    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    $select_vt="SELECT * FROM `chiphichuyendi`WHERE trangthai='1' ORDER BY vtbd_id DESC";
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
                    <th style="text-align:center;font-size:22px;">Tuyến đường</th>
					<th style="text-align:center;font-size:22px;">Tổng tiền chi phí </th>
					<th style="text-align:center;font-size:22px;">Trạng thái</th>
                    
                </thead>
                <tbody>
                <?php while($row=mysqli_fetch_assoc($res)){ ?>
					<tr>
                        <td style="text-align:center;"><?php echo $row['vtbd_id']; ?> 
						<td style="text-align:center;"><?php echo $row['drname']; ?> 
						
                        <td style="text-align:center;"><?php echo $row['veh_reg']; ?></td>
                        <td style="text-align:center;"><?php echo $row['ngaydi']; ?></td>
                        <td style="text-align:center;"><?php echo $row['tuyen']; ?></td>
                        <td style="text-align:center;"><?php echo number_format($row['tongtien']);?> VNĐ</td>
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
                        
                <tbody>
<h1 style="text-align: center;font-size:50px; font-weight:bold; height:50px;">Lọc thông tin</h1>
  
                <div class="row">

<form class="form-horizontal" action="danhsachchuyendi.php"method="POST">
<div class="input-group" >
                      <span class="input-group-addon "><b>Tên tài xế</b></span>
                    <select style="font-size:20px; font-weight:bold; height:50px;  width:80%;" id="taixe" class="form-control" name="drname" >
                    <option>--Chọn--</option>
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
             
                  <span class="input-group-addon "><b>Ngày đi</b></span> 
                  <input style="font-size:20px;  font-weight:bold; height:50px; width:80%;" id="ngaydi" type="text" class="form-control" name="ngaydi" placeholder="Nhập ngày đi" > 
                  
                </div>
                <br>
                <div >
                <button style=" font-weight: bold; font-size:1.4rem;" type="submit" name="submit" class="btn btn-info nut">Lọc</button>

                    </div>
                
               <br>
                
                
</form>
</div>
                <div class="row">
<table id="myTable" class="table table-bordered animated" style="background-color:#ffffff;">
                <thead>
                    <th style="text-align:center;font-size:22px;">ID</th>
                    <th style="text-align:center;font-size:22px;">Tên tài xế</th>
                    <th style="text-align:center;font-size:22px;">Số hiệu xe</th>
                    <th style="text-align:center;font-size:22px;">Ngày đi</th>
                    <th style="text-align:center;font-size:22px;">Tuyến đường</th>
					<th style="text-align:center;font-size:22px;">Tổng tiền chi phí </th>
			        <th style="text-align:center;font-size:22px;">Trạng thái</th>
                </thead>

<tbody>
  
    <?php
    if(isset($_POST['submit'])){
        $drname=$_POST['drname'];

        $ngaydi=$_POST['ngaydi'];

        if ($drname != "--Chọn--" && $ngaydi == "" ){
            
            
            $query ="SELECT * FROM chiphichuyendi WHERE trangthai='1' AND drname='$drname'"; 
            $data=mysqli_query($connection,$query)or die('errol');
            if(mysqli_num_rows($data)>0){
                while($row=mysqli_fetch_assoc($data)){
                    $vtbd_id=$row['vtbd_id'];
                    $drname=$row['drname'];
                    $veh_reg=$row['veh_reg'];
                    $ngaydi=$row['ngaydi'];
                    $tuyen=$row['tuyen'];
                    $tongtien=$row['tongtien'];
                    $trangthai=$row['trangthai'];
                    
            ?>
            
            <tr>
            <td style="text-align:center;"><?php echo $vtbd_id;?></td>
            <td style="text-align:center;"><?php echo $drname;?></td>
            <td style="text-align:center;"><?php echo $veh_reg;?></td>
            <td style="text-align:center;"><?php echo $ngaydi;?></td>
            <td style="text-align:center;"><?php echo $tuyen;?></td>
            <td style="text-align:center;"><?php echo number_format($row['tongtien']);?> VNĐ</td>
            <td style="text-align:center;">
                                    <?php if($row['trangthai']==0){
                                          echo '<div>Chưa xác nhận</div>';
                                           }else{
                                          echo '<div>Đã xác nhận</div>';
                                          }   
                                           ?>
            
                                    </td>
            </tr>
            <?php
            }
            }
            else{?> <tr><td>Không có thông tin nào!</td></tr>
            <?php 
                    }
                
        } else if($drname == "--Chọn--" && $ngaydi != ""){
            
            $query ="SELECT * FROM chiphichuyendi WHERE trangthai='1' AND ngaydi='$ngaydi'"; 
            $data=mysqli_query($connection,$query)or die('errol');
            if(mysqli_num_rows($data)>0){
                while($row=mysqli_fetch_assoc($data)){
                    $vtbd_id=$row['vtbd_id'];
                    $drname=$row['drname'];
                    $veh_reg=$row['veh_reg'];
                    $ngaydi=$row['ngaydi'];
                    $tuyen=$row['tuyen'];
                    $tongtien=$row['tongtien'];
                    $trangthai=$row['trangthai'];
                    
            ?>
            
            <tr>
            <td style="text-align:center;"><?php echo $vtbd_id;?></td>
            <td style="text-align:center;"><?php echo $drname;?></td>
            <td style="text-align:center;"><?php echo $veh_reg;?></td>
            <td style="text-align:center;"><?php echo $ngaydi;?></td>
            <td style="text-align:center;"><?php echo $tuyen;?></td>
            <td style="text-align:center;"><?php echo number_format($row['tongtien']);?> VNĐ</td>
            <td style="text-align:center;">
                                    <?php if($row['trangthai']==0){
                                          echo '<div>Chưa xác nhận</div>';
                                           }else{
                                          echo '<div>Đã xác nhận</div>';
                                          }   
                                           ?>
            
                                    </td>
            </tr>
            <?php
            }
            }
            else{?> <tr><td>Không có thông tin nào!</td></tr>
            <?php 
                    }
                }
        
        else if($drname != "--Chọn--" && $ngaydi != ""){
            $query ="SELECT * FROM chiphichuyendi WHERE trangthai='1' AND drname='$drname' and ngaydi='$ngaydi'"; 
            $data=mysqli_query($connection,$query)or die('errol');
            if(mysqli_num_rows($data)>0){
                while($row=mysqli_fetch_assoc($data)){
                    $vtbd_id=$row['vtbd_id'];
                    $drname=$row['drname'];
                    $veh_reg=$row['veh_reg'];
                    $ngaydi=$row['ngaydi'];
                    $tuyen=$row['tuyen'];
                    $tongtien=$row['tongtien'];
                    $trangthai=$row['trangthai'];
                    
            ?>
            
            <tr>
            <td style="text-align:center;"><?php echo $vtbd_id;?></td>
            <td style="text-align:center;"><?php echo $drname;?></td>
            <td style="text-align:center;"><?php echo $veh_reg;?></td>
            <td style="text-align:center;"><?php echo $ngaydi;?></td>
            <td style="text-align:center;"><?php echo $tuyen;?></td>
            <td style="text-align:center;"><?php echo number_format($row['tongtien']);?> VNĐ</td>
            <td style="text-align:center;">
                                    <?php if($row['trangthai']==0){
                                          echo '<div>Chưa xác nhận</div>';
                                           }else{
                                          echo '<div>Đã xác nhận</div>';
                                          }   
                                           ?>
            
                                    </td>
            </tr>
            <?php
            }
            }
            else{?> <tr><td>Không có thông tin nào!</td></tr>
            <?php 
                    }
                }
        


            }
    ?>
</tbody>
</table>
</div>
        </div>
<div>
</div>
</body>
</html>