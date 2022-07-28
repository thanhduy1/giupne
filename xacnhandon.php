<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
 
   $sql= "UPDATE `bookingyc` SET `xacnhan`='1' WHERE bookingyc_id='$id'";
    //echo $sql;
   $result=mysqli_multi_query($conn,$sql);
   if($result){
       header("Location: admin_datxe.php");
   }else{
         echo "Not freed";
   }
   
?>