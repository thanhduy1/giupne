<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");


    $username= $_SESSION['username'];
    
    
    $query= "SELECT  `first_name`, `last_name`, `email` FROM `user` WHERE username='$username'";
    $result= mysqli_query($connection,$query);
    
    $row= mysqli_fetch_assoc($result);
    //$name= $row['first_name']." ". $row['last_name'];
   // echo $name;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quản lý vận chuyển</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link rel="stylesheet" href="assets/bootstrap/css/wickedpicker.min.css">
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="assets/sweetalert2/sweetalert2.css">
    <script src="assets/sweetalert2/sweetalert2.min.js"></script>
    
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js1/wickedpicker.min.js"></script>
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
 
    <!-- <link rel="stylesheet" href="assets/css/main.css"> -->
</head>
<style>
    .navbar-fixed-top.scrolled {
   background-color: ghostwhite;
  transition: background-color 200ms linear;
}
.center {
  margin: auto;
  width: 50%;
  border: 5px solid purple;
  padding: 10px;
  background-color:#ffffff;
}
.a{
  font-size:17px;
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
    <div class="container">
        <div class="row">
            <div class="page-header">
                <h1 style="text-align:center;">Đặt xe</h1>

            </div>
            <div class="col-md-3"></div>
            <div class="col-md-6 center">
                <form class="animated" action="bookingaction.php" method="post">
                   
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Tên khách hàng</b></span>
                      <input id="name" type="text" class="form-control" name="name" value="<?php echo $row['first_name']." ". $row['last_name']; ?>"  required>
                    </div>
                    
                    
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Ngày đặt</b></span>
                      <input id="req_date" type="text" class="form-control" name="req_date" placeholder="Nhập ngày đặt" required>
                      <input type="text" name="req_time" id="req_time" class="form-control"/>
                      
                    </div>
                    
                    <script>
                      $( function() {
                        $( "#req_date" ).datepicker();
                        $("#req_time").wickedpicker();
                        
                      } ); 

                    </script> 

                    <script>
                      $( function() {
                        $( "#return_date" ).datepicker();
                        $( "#return_time" ).wickedpicker();
                      } );
                    </script>
                    <br>
                    
                    <div class="input-group" >
                      <span class="input-group-addon a"><b>Tuyến</b></span>
                      <!--<input id="destination" type="text" class="form-control" name="destination" placeholder="Car Destination" required>-->
                    <select id="destination" class="form-control" name="destination" required>
                      <?php 
                      $sql_tuyen="SELECT * FROM schedule ORDER BY scheduleid DESC";
                      $query_tuyen= mysqli_query($connection,$sql_tuyen);
                      while($row_tuyen= mysqli_fetch_assoc($query_tuyen)){
                        ?>
                        <option value="<?php echo $row_tuyen['schedulename']?>"><?php echo $row_tuyen['schedulename']?></option>
                        <?php
                      }
                      ?>
                      
                    </select>
                    </div>
                    <br>
                    

                    
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Ghi chú</b></span>
                      <input id="reason" type="text" class="form-control" name="reason" placeholder="Nhập ghi chú">
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Email</b></span>
                      <input id="email" type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                    <br>
                    
                    <div class="input-group">
                      <span class="input-group-addon a"><b>Số điện thoại</b></span>
                      <input id="mobile" type="text" class="form-control" name="mobile" placeholder="Nhập số điện thoại" required>
                    </div>
                    <br>
                    
                    <input type="hidden" name="username" value="<?php echo $username; ?>">
                    
                    <div class="input-group">
                        <button  style="width:100px; height:50px; font-size:15px;" type="submit" name="submit" class="btn btn-success">Đặt</button>
                    </div>
                     
                    
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    
<script>
    $(function () {
  $(document).scroll(function () {
    var $nav = $(".navbar-fixed-top");
    $a= $(".navbar-fixed-top");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $a.height());
  });
}); 
    
</script>  
</body>
</html>