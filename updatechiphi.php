<?php
   
   $ngaydi=$_POST['ngaydi'];
   $tuyen=$_POST['tuyen'];
   $tienxang=$_POST['tienxang'];
   $tiendau=$_POST['tiendau'];
   $chiphiphatsinh=$_POST['chiphiphatsinh'];
   $ghichu=$_POST['ghichu'];
   $tongtien=$chiphiphatsinh + $tiendau + $tienxang;
   $drname=$_POST['drname'];
   $veh_reg=$_POST['veh_reg'];

   $connection=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

   if (isset($_POST['suachiphi'])){
   $sql="UPDATE chiphichuyendi SET ngaydi='$ngaydi', tuyen='$tuyen',tienxang='$tienxang',tiendau='$tiendau', chiphiphatsinh='$chiphiphatsinh',ghichu='$ghichu',tongtien='$tongtien',drname='$drname',veh_reg='$veh_reg' WHERE vtbd_id='$_GET[vtbdid]'";
   
   mysqli_query($connection,$sql);

   if(mysqli_query($connection,$sql)){
      header("Location: chiphichuyendi.php".$vtbdid); 
   }else{
        echo "Not inserted";
   }
}
?>