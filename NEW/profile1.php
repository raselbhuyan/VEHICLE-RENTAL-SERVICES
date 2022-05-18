<?php
include('session.php');
include('data.php');
?>
<html>
<head>
<title>Your Profile Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body style="background: #F7F7F7;">
<h1 style="color: white;text-decoration: underline;text-align: center;background: #1abc9c;font-size: 30px;"><center>VEHICLE RENTAL SERVICES</center></h1>
<div id="profile">
<b id="welcome"><h2 style="font-size: 20pt; color:#b20b00;">Welcome :</h2> 
<i>
<?php 
$sql=mysqli_query($conn,"SELECT NAME,V_TYPE FROM user_details WHERE USERID='$user_check'");
	$row=mysqli_fetch_array($sql);
	//echo "<h3>".$row["NAME"]."</h3>";

?>
<h3 style="font-size: 20pt; color:#b20b00;"><?php echo $row["NAME"];?></h3>
</i></b>
<p align="right"><b><a href="logout.php">Log Out</a></b>
<hr color="green">
<?php
if($user_check=="baibhab1234")
{
	?>
<a href="user_details.php"><button style="width: 100px; height: 100px;" onMouseOver="this.style.color='black' "onMouseOut="this.style.color='blue'">VIEW USERS DETAILS</button></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="vehicle_details.php"><button style="width: 100px; height: 100px;" onMouseOver="this.style.color='black' "onMouseOut="this.style.color='blue'">VIEW VEHICLE DETAILS</button></a>

<?php
}
else
{
?>
<a href="add_vehicle.html"><button style="width: 100px; height: 100px;" onMouseOver="this.style.color='black' "onMouseOut="this.style.color='blue'">ADD VEHICLE DETAILS</button></a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="rent_vehicle.html"><button style="width: 100px; height: 100px;" onMouseOver="this.style.color='black' "onMouseOut="this.style.color='blue'">TAKE VEHICLE ON RENT</button></a>
<?php
}
?>
</div>
</body>
</html>
