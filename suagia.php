<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
   

    $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    $msg= "" ;     
    
?>
<?php
$sql_sua_gia="SELECT * FROM giave WHERE giave_id='$_GET[giaid]' LIMIT 1";
$query_sua_gia= mysqli_query($connection,$sql_sua_gia);
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
  <body>

    <div class="container">
    
 
        <div class="col-md-12">
        <h1 style="text-align: center;">Sửa giá</h1>
        <?php 
        while ($row= mysqli_fetch_assoc($query_sua_gia)){
          ?>
        <form action="updategia.php?giaid=<?php echo $_GET['giaid'] ?>" method="POST">
        
        <div class="form-group">
          <label>Giá mới:</label>
          <input style="font-size:20px; font-weight:bold;" required type="text" class="form-control" name="giave"  value="<?php echo $row['giave']?>">
        </div>

        

        <button type ="submit" name="suagia" >Sửa</button>
      </form>
      <?php 
        }
        ?>
        </div>
    
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html> 