<?php
   
   $id= $_GET['driverid'];

   $connection=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
   $sql="DELETE FROM driver WHERE driverid='$id'";
   $result=mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
       header("Location: admin_taixe.php");
   }else{
         echo "Not deleted";
   }
   
?>