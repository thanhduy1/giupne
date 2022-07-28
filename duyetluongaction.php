<?php
   
   $id= $_GET['id'];

   $conn= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
 
   $sql= "UPDATE `chiphichuyendi` SET `trangthai`='1' WHERE vtbd_id='$id'";
    //echo $sql;
   $result=mysqli_multi_query($conn,$sql);
   if($result){
       header("Location: chiphichuyendi.php");
   }else{
         echo "Not freed";
   }
   
?>