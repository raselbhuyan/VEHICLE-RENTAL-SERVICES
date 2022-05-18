<?php
require 'data.php';
$name=$_POST["field1"];
$email=$_POST["field2"];
$type=$_POST["field3"];
$addr=$_POST["field4"];
$phone=$_POST["field5"];
$status=$_POST["field6"];
$password=$_POST["field7"];
$userid=$_POST["field8"];

//echo $name." ".$email." ".$type." ".$addr." ".$phone." ".$status;
?>
<html>
<body>
<h1 style="color: white;text-decoration: underline;text-align: center;background: #1abc9c;font-size: 30px;"><center>VEHICLE RENTAL SERVICES</center></h1>
<br>
</body>
</html>
<?php
$duplicate=mysqli_query($conn,"select * from user_details where USERID='$userid'");
if (mysqli_num_rows($duplicate)>0)
{
?>
<html>
<body>

<center>
<img src="error.gif">
<p style="font-size: 20pt; color:#b20b00;">Username already exists
<hr>
<br><a href=signup.html>Go Back</a>
</center>
</body>
</html>



<?php
//echo "<br><a href=signup.html>Go Back</a>";
die (" ");
}
else
{
$sql="INSERT INTO user_details(NAME,USERID,PASSWORD,EMAIL,ADDRESS,PHONE,V_TYPE,STATUS) 
VALUES('$name','$userid','$password','$email','$addr','$phone','$type','$status') ";
$result=mysqli_query($conn,$sql);
}
if ($result!=NULL) 
{
?>
<html>
<body>
<center>
<img src="happy.png">
<p style="font-size: 14pt; color:#b20b00;">New User created successfully
<br>
<a href=signin.html>Go to Sign In page</a>
</center>
</body>
</html>
<?php
    //echo "New User created successfully";
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>