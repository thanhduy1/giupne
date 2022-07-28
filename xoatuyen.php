<?php
   
   $id= $_GET['tid'];

   $conn=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

   $sql="DELETE FROM `schedule` WHERE scheduleid='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: admin_tuyen.php");
   }else{
         echo "Not deleted";
   }
   
?>
