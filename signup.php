



<!DOCTYPE HTML>
<html>
	<head>
		<title>Quản lý vận chuyển</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />		
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />
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
<body data-spy="scroll" data-target=".navbar" data-offset="50">  
   
    <br>
    <a class="btn btn-info nut" href="index.php">Quay lại</a>
    <div class="container"> 
    

        <div class="col-md-6 center" > 
           <?php echo $msg; ?>
            <div class="page-header ">
                <h1 style="text-align: center;">Đăng ký</h1>      
          </div> 
            <form class="form-horizontal animated" action="" method="post"> 
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input style="font-size:20px; font-weight:bold; " id="firstname" type="text" class="form-control" name="firstname" placeholder="Họ" required>
                
                <br>
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input style="font-size:20px; font-weight:bold; " id="lastname" type="text" class="form-control" name="lastname" placeholder="Tên" required>
               
                <br>
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input style="font-size:20px; font-weight:bold; " id="email" type="email" class="form-control" name="email" placeholder="Email" required>
               
                <br>
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input style="font-size:20px; font-weight:bold; " id="username" type="text" class="form-control" name="username" placeholder="Tên người dùng"required>
             
                <br>
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input style="font-size:20px; font-weight:bold; " id="password" type="password" class="form-control" name="password" placeholder="Mật khẩu"required>
              
                <br> 
                
                <div  class="input-group" id="blue">
                  <button   type="submit" name="submit" class="btn btn-success">Đăng ký</button> <br>
                 
                </div>

              </form>   
        
 
         
     </div> 
    
    </div> 
    
   
    
</body>
</html>
