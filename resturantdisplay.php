<?php$con=mysqli_connect("localhost","root","","resturant") or die("couldnt connect to server".mysqli_connect_error());
$b="select * from bill";
$p=mysqli_query($con,$b);
if(mysqli_num_rows($p)>0)
{
    echo"<table border='1'><tr><th>";
    echo"name</th><th>quantity</th><th>type</th><th>prize</th></tr>";
    while($row=mysqli_fetch_array($p))
    {
        echo"<tr>";
        echo"<td>",$row['name'],"</td><td>",$row['quantity'],"</td><td>",$row['type'],"</td><td>",$row['prize'],"</td></tr>";
    }
}
mysqli_close($con);
?>