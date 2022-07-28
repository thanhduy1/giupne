<?php
   
   $id= $_GET['giaid'];

   $conn=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

   $sql="DELETE FROM `giave` WHERE giave_id='$id'";
    echo $sql;
   $result=mysqli_query($conn,$sql);
   if(mysqli_query($conn,$sql)){
       header("Location: admin_tuyen.php");
   }else{
         echo "Not deleted";
   }
   
?>
