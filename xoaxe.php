<?php
   
   $id= $_GET['busid'];

   $connection=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
   $sql="DELETE FROM vehicle WHERE veh_id='$id'";
   $result=mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
       header("Location: admin_phuongtien.php");
   }else{
         echo "Not deleted";
   }
   
?>