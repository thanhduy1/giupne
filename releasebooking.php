<?php
   
   $id= $_GET['id'];

   $conn=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

    $sql1="SELECT `veh_reg`, `driverid` FROM `booking` WHERE booking_id='$id'";
    $result1=mysqli_query($conn,$sql1);
    $row= mysqli_fetch_assoc($result1);
    $veh_reg=$row['veh_reg']; 
    $driverid=$row['driverid'];
    echo $veh_reg;
    echo $driverid;
    
    
    
   $sql= "UPDATE `booking` SET `finished`='1' WHERE booking_id='$id'";
    //echo $sql;
   $result=mysqli_multi_query($conn,$sql);
   if($result){
       header("Location: admin_dondatxe.php");
   }else{
         echo "Not freed";
   }
   
?>