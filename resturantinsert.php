<html>
<head>
    <style>
        .bg
        {
            background-color:white;
        }
        .dd
        {
            margin:auto;
            width:40%;
            border:1px;
            padding:30px;
            background-color:blue;
            font-style:italic;
        }
    </style>
        <script>
        	function validation()
		{
			            name=document.getElementById("txtname").value;
                    if(name=="")
			{
				window.alert("Please enter name");
				return false;
			}
        </script>
</head>
<body class="bg"><center>
        <center><h1>Receipt</h1></center>
        <DIV CLASS="dd">
	<form action="" method="POST" onsubmit="return validation()">
            Name :<input type="text" name="name" id="txtname" ><br><br> 
          
            Quantity :<input type="text" name="quantity" id="txtquantity" required><br><br>
             
		    Type:<select name="type" required="">
			<option></option>
			<option>tea</option>
			<option>coffee</option>
			<OPTION>chapati</OPTION>
			<option>meals</option>
                        <option>biriyani</option>
                        <option>chicken</option>
                </select><br><br>
               prize:<input type="text" name="value" id="prize"> <br><br>
		<input type="submit" value="Submit" name="btn">&nbsp&nbsp <input type="reset" value="Reset">
        </form></div></center>
</body>
</html>
<?php
$con= mysqli_connect("localhost","root","","resturant") or die("Couldn't connect ot server". mysqli_connect_error());
if(isset($_POST['btn']))
{
    $name=$_POST['name'];
    $quantity=$_POST['quantity'];
    $type=$_POST['type'];
    $prize=$_POST['prize'];
        if($prize>0)
            $quantity=$prize;
        else
            $quantity=0;
    
    $a="insert into bill (name,type,quantity,prize,) 
        values('$name','$type','$quantity','$prize')";
    $x=mysqli_query($con,$a);
    print($x);
    if($x>0)
       echo"<script>alert('success');
       </script>";
       else
        echo"fail";
        mysqli_close($con);
}
?>
