<?php
   
   $drname=$_POST['drname'];
   $gioitinh=$_POST['gioitinh'];
   $drmobile=$_POST['drmobile'];
   $drjoin=$_POST['drjoin'];
   $drlicense=$_POST['drlicense'];
   $drlicensevalid=$_POST['drlicensevalid'];
   $drnid=$_POST['drnid'];
   $draddress=$_POST['draddress'];
   $drphoto=$_POST['drphoto'];

   $connection=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

   if (isset($_POST['suataixe']) && empty($_POST['drphoto'])){
   $sql="UPDATE driver SET drname='$drname',gioitinh='$gioitinh', drjoin='$drjoin',drmobile='$drmobile',drlicense='$drlicense',drnid='$drnid', draddress='$draddress',drlicensevalid='$drlicensevalid' WHERE driverid='$_GET[txid]'";
   
   mysqli_query($connection,$sql);
   

   if(mysqli_query($connection,$sql)){
      header("Location: admin_taixe.php".$driverid); 
   }else{
        echo "Not inserted";
   }
}else{
   $sql="UPDATE driver SET drname='$drname',gioitinh='$gioitinh', drjoin='$drjoin',drmobile='$drmobile',drlicense='$drlicense',drnid='$drnid', draddress='$draddress',drlicensevalid='$drlicensevalid', drphoto='$drphoto' WHERE driverid='$_GET[txid]'";
   
   mysqli_query($connection,$sql);
   

   if(mysqli_query($connection,$sql)){
      header("Location: admin_taixe.php".$driverid); 
   }else{
        echo "Not inserted";
   }
}
?>