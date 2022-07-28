<?php
   $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    session_start();

    $msg="";
    
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
       
        $req_date=$_POST['req_date'];
        $req_time=$_POST['req_time'];

        $destination=$_POST['destination'];
        $reason=$_POST['reason'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $username= $_POST['username'];
        
        $insert_query="INSERT INTO `booking`(`booking_id`, `name`,`username` ,  `req_date`, `req_time`, `destination`, `resons`, `email`, `mobile`, `confirmation`, `veh_reg`, `driverid`, `finished`) VALUES ('','$name','$username','$req_date','$req_time','$destination','$reason','$email','$mobile','','','','')"; 
        //echo $name;
   
        $res= mysqli_query($connection,$insert_query);
        
         if($res==true){
            $msg= "<script language='javascript'>
                                       swal(
                                            'Success!',
                                            'Registration Completed!',
                                            'success'
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
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>
    <?php echo $msg;
    ?>
    
    <script>
    
        var timer = setTimeout(function() {
            window.location='user_index.php'
        }, 1000);
    </script>

</body>
</html>
