<?php
   
   $schedulename=$_POST['schedulename'];


   $connection=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

   if (isset($_POST['suatuyen'])){
   $sql="UPDATE schedule SET schedulename='$schedulename' WHERE scheduleid='$_GET[tid]'";
   
   mysqli_query($connection,$sql);
   

   if(mysqli_query($connection,$sql)){
      header("Location: admin_tuyen.php".$scheduleid); 
   }else{
        echo "Not inserted";
   }
}
?>


