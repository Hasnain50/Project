<?php
define('host','localhost');
define('user','root');
define('password','');
define('database','Khareedlo');

// $conn=mysqli_connect('localhost','root','','Khareedlo');
$conn=mysqli_connect(host,user,password,database);
if($conn)
{
//echo "Connected";
}else{
echo "Not connected";
die();
}




?>
