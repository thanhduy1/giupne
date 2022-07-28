<?php 
    session_start();
    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352"); 
    
    $msg="";
    if(isset($_POST['submit'])){
        $username=mysqli_real_escape_string($connection,strtolower($_POST['username']));
        
        $password=mysqli_real_escape_string($connection,$_POST['password']); 
        
        $login_query="SELECT * FROM `admin` WHERE username='$username' and password='$password'";
        
        $login_res=mysqli_query($connection,$login_query);
        if(mysqli_num_rows($login_res)>0){ 
            $_SESSION['username']=$username;
            header('Location:admin.php');
        } 
        else{
             $msg= '<div class="alert alert-danger alert-dismissable" style="margin-top:30px";>
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>Thất bại!</strong> Đăng nhập không thành công!.
                  </div>';
        }
    }

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Quản lý vận chuyển</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
  <style>
  body{
    background-color:#99ccff;
  }
.container {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px; 
    
    margin-left: auto;
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
</style>
    <body>   
    <br>
    <a class="btn btn-info nut" href="index.php">Quay lại</a>

    <div class="container"> 

      
        <div class="col-md-6 center"> 
          <?php echo $msg; ?>
            <div class="page-header">
                <h1 style="text-align: center;">Đăng nhập người quản lý</h1>      
          </div> 
            <form class="form-horizontal animated " action="" method="post"> 
              
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input style="font-size:25px; color:#000000;" id="username" type="text" class="form-control" name="username" placeholder="Username">
               
                <br>
                
               
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input style="font-size:25px; color:#000000;" id="password" type="password" class="form-control" name="password" placeholder="Password">
               
                <br> 
                
                
                  <button type="submit" name="submit" class="btn btn-success nut">Đăng nhập</button>
                  
                

              </form>   
        </div> 
  
         

    </div> 
</body>
</html>