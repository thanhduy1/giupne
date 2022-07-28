<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    

    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    $msg= "" ;
    
    if(isset($_POST['submit'])){
        $regno= $_POST['vehregno'];
        $veh_type= $_POST['veh_type'];
        $chesisno= $_POST['vehchesis'];
        $brand= $_POST['vehbrand'];
        $color= $_POST['vehcolor'];
        $regdate= $_POST['vehregdate'];
        $description= $_POST['vehdescription'];
        $photo= $_FILES['file']['name'];
        
        //image Upload
    
        move_uploaded_file($_FILES['file']['tmp_name'],"images/".$_FILES['file']['name']); 
        
        $res=false;
        $insert_query="INSERT INTO `vehicle`(`veh_id`, `veh_reg`, `veh_type`, `chesisno`, `brand`, `veh_color`, `veh_regdate`, `veh_description`, `veh_photo`) VALUES ('','$regno','$veh_type','$chesisno','$brand','$color','$regdate','$description','$photo')";
        
        $res= mysqli_query($connection,$insert_query);
            
        if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Thành công!',
                                            'Đã thêm xe vào danh sách!',
                                            'success'
                                            );
				          </script>";
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
		font-size: 1.2em;
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
        .font {

		font-family: "Source Sans Pro", Arial, sans-serif;
	
	}
</style>
<body>  
 <br>
  
  
   <div class="container"> 
 <a class="btn btn-info nut font" style=" font-size:15px; " href="admin_phuongtien.php">DANH SÁCH</a>
    
       
        <h1 style="text-align: center; font-weight: 700; font-size: 50px; line-height: 1.3;margin: 0 0 1em 0;letter-spacing: -0.035em;">Thêm xe</h1></div>
            <div class="row">
            <?php echo $msg; ?>
 
       <div class="col-md-3">
          
       </div>
        <div class="col-md-6 animated center"> 

            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                
                <div class="input-group">
                  <span class="input-group-addon a"><b>Số hiệu xe</b></span>
                  <input  style="font-size:18px; font-weight:bold;" id="vehreg" type="text" class="form-control" name="vehregno" placeholder="Nhập số hiệu xe" required>
                </div>
                <br> 
                
                <div class="input-group">
                  <span class="input-group-addon a"><b>Hãng xe</b></span>
                  <input style="font-size:18px; font-weight:bold;" id="vehbrand" type="text" class="form-control" name="vehbrand" placeholder="Nhập hãng xe" required>
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Kiểu xe</b></span>
                  <input  style="font-size:18px; font-weight:bold;" id="veh_type" type="text" class="form-control" name="veh_type" placeholder="Nhập kiểu xe" required>
                 
                </div>
                <br> 
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Bảng số xe</b></span>
                  <input  style="font-size:18px; font-weight:bold;" id="vehchesis" type="text" class="form-control" name="vehchesis" placeholder="Nhập bảng số xe" required>
                </div>
              
                <br>
                
                <div class="input-group">
                  <span class="input-group-addon a"><b>Màu xe</b></span>
                  <input style="font-size:18px; font-weight:bold;" id="vehcolor" type="text" class="form-control" name="vehcolor" placeholder="Nhập màu xe" required>
                </div>
                <br>
                
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Ngày đăng kí</b></span>
                  <input style="font-size:18px; font-weight:bold;"  id="vehregdate" type="text" class="form-control" name="vehregdate" placeholder="Nhập ngày đăng kí" require>
                </div>
                <br>
     
                 <script>
                      $( function() {
                        $( "#vehregdate" ).datepicker();
                      } );
                </script> 
                 <div class="input-group">
                  <span class="input-group-addon a"><b>Mô tả xe</b></span>
                     <textarea style="font-size:18px; font-weight:bold;" rows="6" type="text" class="form-control" name="vehdescription" placeholder="Nhập mô tả xe" required> </textarea>
                  
                </div>
                <br>

                <div class="input-group">
                  <span class="input-group-addon a" style="height:40px;"><b>Hình ảnh</b></span>
                  <input style="font-size:18px; font-weight:bold;height:40px;"  type="file" class="form-control" name="file" > 

              </div>
                
                <br>
                 
                <div style="text-align:center;">
                <button   type="submit" name="submit" class="btn btn-success nut" >Thêm</button>
                  
                </div>

              </form>   
        </div>  
        <div class="col-md-3"></div>
         
     </div>
         
   
    </div> 
    
     
      
    
</body>
</html>