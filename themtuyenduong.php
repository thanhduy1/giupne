<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    $msg= "" ;     


    if(isset($_POST['submit'])){
        
        $schedulename=$_POST['schedulename'];

        
        $res=false;
        $insert_query_tuyen="INSERT INTO `schedule`(`scheduleid`, `schedulename`) VALUES ('','$schedulename')";
        
        $res= mysqli_query($connection,$insert_query_tuyen);
            
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
    if(isset($_POST['themve'])){
        
      $giave=$_POST['giave'];

      
      $res=false;
      $insert_query_ve="INSERT INTO `giave`(`giave_id`, `giave`) VALUES ('','$giave')";
      
      $res= mysqli_query($connection,$insert_query_ve);
          
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
        .a{
  font-size:20px;
}
</style>
<body>  
 <br>
  
 <a class="btn btn-info nut"  href="admin_tuyen.php">Quay về</a>
   <div class="container"> 
    
       
        
          
            <h1 style="text-align: center; font-weight: 700; font-size: 2.75em;">Thêm tuyến đường và giá đặt xe</h1></div>
            <div class="row">
            <?php echo $msg; ?>

      
  
        <div class="col-md-6 animated center" > 

            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"  >
                
                <div class="input-group">
                  <span class="input-group-addon a"><b>Tên tuyến đường</b></span>
                  <input style="font-size:20px; font-weight:bold;" type="text" class="form-control" name="schedulename" placeholder="Nhập tên tuyến đường" required>
                </div>
                <br> 

                 
                
                <div class="input-group">
                <button  class="btn btn-success nut" type="submit" name="submit" >Thêm</button>
                </div>
              </form>   
        </div> 
        
      
     </div>
    
         <div class="row">
         <div class="col-md-6 animated center" > 

          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data"  >
    
          <div class="input-group">
            <span class="input-group-addon a" style="height:50px;"><b>Thêm giá vé</b></span>
          <input style="font-size:20px; font-weight:bold;height:50px;" type="number" class="form-control" name="giave" placeholder="Nhập giá vé" required>
          </div>
         <br> 
          <div class="input-group">
          <button  class="btn btn-success nut" type="submit" name="themve" >Thêm</button>
          </div>
          </form>   
      </div>
</div>

</div> 
    
   
    
</body>
</html>