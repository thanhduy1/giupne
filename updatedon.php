<?php
   
   $tenkhachhang=$_POST['tenkhachhang'];
   $sodienthoai=$_POST['sodienthoai'];
   $ngaydatxe=$_POST['ngaydatxe'];
   $kieuxe=$_POST['kieuxe'];
   $tuyen=$_POST['tuyen'];
   $noiden=$_POST['noiden'];
   $soluong=$_POST['soluong'];
   $taixe=$_POST['taixe'];
   $sohieuxe=$_POST['sohieuxe'];
   $hinhthuc=$_POST['hinhthuc'];
   $giavexe=$_POST['giavexe'];
   $tongtien=$soluong*$giavexe;
   $connection=mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");

   if (isset($_POST['suadon']) && $hinhthuc !=""){
   $sql="UPDATE bookingyc SET tenkhachhang='$tenkhachhang', sodienthoai='$sodienthoai',ngaydatxe='$ngaydatxe',kieuxe='$kieuxe', tuyen='$tuyen',noiden='$noiden',taixe='$taixe',sohieuxe='$sohieuxe',giavexe='$giavexe',soluong='$soluong',hinhthuc='$hinhthuc',tongtien='$tongtien' WHERE bookingyc_id='$_GET[id]'";
   mysqli_query($connection,$sql);
   if(mysqli_query($connection,$sql)){
      header("Location: admin_datxe.php".$id); 
   }else{
        echo "Not inserted";
   }
   }else{
      $sql="UPDATE bookingyc SET tenkhachhang='$tenkhachhang', sodienthoai='$sodienthoai',ngaydatxe='$ngaydatxe',kieuxe='$kieuxe', tuyen='$tuyen',noiden='$noiden',taixe='$taixe',sohieuxe='$sohieuxe',giavexe='$giavexe',soluong='$soluong',tongtien='$tongtien' WHERE bookingyc_id='$_GET[id]'";
      mysqli_query($connection,$sql);
      if(mysqli_query($connection,$sql)){
         header("Location: admin_datxe.php".$id); 
      }else{
           echo "Not inserted";
      }
   
}
?>