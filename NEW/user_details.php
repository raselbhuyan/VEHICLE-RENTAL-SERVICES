<html>
<body style="background: #F7F7F7;">
<h1 style="color: white;text-decoration: underline;text-align: center;background: #1abc9c;font-size: 30px;"><center>VEHICLE RENTAL SERVICES</center></h1>
<p align="right"><b><a href="logout.php">Log Out</a></b>
<p align="left"><b><a href="profile1.php">Go Back</a></b>
<h2 style="background: #2A88AD;
	color: #fff;
	border: 1px solid #257C9E;"><center>DETAILS OF USERS</center></h2>
</body>
</html>
<?php
include 'data.php';
$sql=mysqli_query($conn,"SELECT * FROM user_details");
	
	 while($row=mysqli_fetch_array($sql))
	 {
		 
		if($row['USERID']!="baibhab1234")
		{
		echo "<b>NAME</b>:".$row['NAME'];
		echo "<br><b>USERID</b>:".$row['USERID'];
		echo "<br><b>EMAIL</b>:".$row['EMAIL'];
		echo "<br><b>ADDRESS</b>:".$row['ADDRESS'];
		echo "<br><b>VEHICLE TYPE</b>:".$row['V_TYPE'];
		echo '<hr color="green">';
	 }
	 }
?>
