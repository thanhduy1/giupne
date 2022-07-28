<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    $msg= "" ;     
    
?>
<?php
$sql_sua_l="SELECT * FROM chiphichuyendi WHERE vtbd_id='$_GET[vtbdid]' LIMIT 1";
$query_sua_l= mysqli_query($connection,$sql_sua_l);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

  <a class="btn btn-info nut" href="chiphichuyendi.php">Quay lại</a>
    <div class="container">
    
 <div class="row">
      <div class="col-md-12 center">
        <h1 style="text-align: center;">Nhập lương tài xế</h1>
        <?php 
        while ($row= mysqli_fetch_assoc($query_sua_l)){
          ?>
         
      <form action="updateluong.php?vtbdid=<?php echo $_GET['vtbdid'] ?>" method="POST">
        
        <div class="form-group" style="heigth:37px;">
          <label>Nhập tiền lương</label>
          <input style="font-size:20px; font-weight:bold; " required type="number" class="form-control" name="tienluong"  value="<?php echo $row['tienluong']?>">
        </div>

        

        <button type ="submit" name="sualuong" >Thêm</button>
      </form>
      <?php 
        }
        ?>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 