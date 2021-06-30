<?php
$con=mysqli_connect("localhost","root","","resturant") or die("couldnt connect".mysqli_connect_error());
$tb="create table bill(name varchar(25),type varchar(10),quantity int,prize int)";
$m=mysqli_query($con,$tb);
if($m>0)
echo"success";
else
echo"fail";
mysqli_close($con)
?>