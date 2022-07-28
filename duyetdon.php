<?php
   
   $id= $_GET['id'];
   $idtaixe= $_GET['idtaixe'];
   $idxe= $_GET['idxe'];

   $conn= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
 if($idtaixe=='32'){
   $sql= "UPDATE `bookingyc` SET `trangthai`='1', `tinhtrangxe`='1' WHERE bookingyc_id='$id'"; 
   $result=mysqli_multi_query($conn,$sql);
   if($result){
    header("Location: admin_datxe.php");
}else{
      echo "Not freed";
}
 } else{
   $sql= "UPDATE `bookingyc` SET `trangthai`='1', `tinhtrangxe`='1' WHERE bookingyc_id='$id'"; 
   $sql1= "UPDATE `driver` SET `trangthaitx`='1' WHERE driverid='$idtaixe'";
   $sql2= "UPDATE `vehicle` SET `trangthaix`='1' WHERE veh_id='$idxe'";
 
   $result=mysqli_multi_query($conn,$sql);
   $result1=mysqli_multi_query($conn,$sql1);
   $result2=mysqli_multi_query($conn,$sql2);
   if($result && $result1 && $result2){
    header("Location: admin_datxe.php");
}else{
      echo "Not freed";
}
 }
   

   
?>