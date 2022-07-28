<?php
$server="sql6.freemysqlhosting.net";
$user="sql6509352";
$pass="LbZ1nUJxDa";
$dbname="sql6509352";
$conn=mysqli_connect("$server,$user,$pass,$dbname");
if(!$conn){
die("Connection Failed!.".mysqli_connect_error());
}else{
echo "Connection Established";
}
?>