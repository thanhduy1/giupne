<?php
   
   $veh_reg=$_POST['veh_reg'];
   $veh_type=$_POST['veh_type'];
   $chesisno=$_POST['chesisno'];
   $brand=$_POST['brand'];
   $veh_color=$_POST['veh_color'];
   $veh_regdate=$_POST['veh_regdate'];
   $veh_description=$_POST['veh_description'];
   $veh_photo=$_POST['veh_photo'];

   $connection=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

   if (isset($_POST['suaxe']) && empty($_POST['veh_photo'])){
   $sql="UPDATE vehicle SET veh_reg='$veh_reg', veh_type='$veh_type',chesisno='$chesisno',brand='$brand', veh_color='$veh_color', veh_regdate='$veh_regdate', veh_description='$veh_description' WHERE veh_id='$_GET[xid]'";
   
   mysqli_query($connection,$sql);
   

   if(mysqli_query($connection,$sql)){
      header("Location: admin_phuongtien.php?xid=".$veh_id); 
   }else{
        echo "Not inserted";
   }
}else{
   $sql="UPDATE vehicle SET veh_reg='$veh_reg', veh_type='$veh_type',chesisno='$chesisno',brand='$brand', veh_color='$veh_color', veh_regdate='$veh_regdate', veh_description='$veh_description',veh_photo='$veh_photo' WHERE veh_id='$_GET[xid]'";
   mysqli_query($connection,$sql);
   

   if(mysqli_query($connection,$sql)){
      header("Location: admin_phuongtien.php?xid=".$veh_id); 
   }else{
        echo "Not inserted";
   }
}
?>