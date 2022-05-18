<?php
session_start(); // Starting Session
require 'data.php';
$userid=$_POST["field8"];
$password=$_POST["field7"];
?>
<html>
<body>
<h1 style="color: white;text-decoration: underline;text-align: center;background: #1abc9c;font-size: 30px;"><center>VEHICLE RENTAL SERVICES</center></h1>
<br>
</body>
</html>
<?php
$rs=mysqli_query($conn,"select * from user_details where USERID='$userid' and PASSWORD='$password'");
if(mysqli_num_rows($rs)<1)
	{
		//$found="N";
?>
<html>
<body>
<center>
<img src="error.gif">
<br>
<p style="font-size: 20pt; color:#b20b00;"><b>INCORRECT USERNAME OR PASSWORD</b>
<br>
<a href=signin.html onMouseOver="this.style.color='red' "onMouseOut="this.style.color='blue'">GO BACK</a>
</center>
</body>
</html>
		
<?php	
//echo "Incorrect username or password";
	}
else
{
	$row = mysqli_fetch_array($rs);
	//echo "Welcome, "."<h1><b><em>".$row['NAME']."</b></em></h1>";
	$_SESSION['login_user']=$userid; // Initializing Session
	header("location: profile1.php"); // Redirecting To Other Page
}

?>