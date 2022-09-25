<?php
$server='localhost';
$user='root';
$pass='';
$conn=mysqli_connect($server,$user,$pass,'mydb');
if($conn->connect_error)
{
    die ("connection failed!");
}
else
{
echo "Connection Created succesfully!!!\n";
}
?>