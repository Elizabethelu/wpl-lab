<?php
$con=mysqli_connect("localhost","root","") or die("couldnt connect to server".mysqli_connect_error());
$db="create database resturant";
$q=mysqli_query($con,$db);
if($q>0)
echo"success";
else
echo"fail";
mysqli_close($con);
?>