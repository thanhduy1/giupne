<?php
   
   $tienluong=$_POST['tienluong'];
   

   $connection=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

   if (isset($_POST['sualuong'])){
   $sql="UPDATE chiphichuyendi SET tienluong='$tienluong' WHERE vtbd_id='$_GET[vtbdid]'";

   mysqli_query($connection,$sql);
   

   if(mysqli_query($connection,$sql)){
      header("Location: chiphichuyendi.php".$vtbd_id); 
   }else{
        echo "Not inserted";
   }
}
?>