<?php
   $connection= mysqli_connect("sql6.freemysqlhosting.net","sql6509352","LbZ1nUJxDa","sql6509352");
    session_start();

    $id= $_GET['id'];

    $sql= "UPDATE `tripcost` SET `paid`='1' WHERE booking_id='$id'";
    $result= mysqli_query($connection,$sql);

    if($result){
        header ('Location: admin_dondatxe.php');
    }
?>