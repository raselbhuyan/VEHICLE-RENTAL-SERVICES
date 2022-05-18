<?php
include('session.php');
include('data.php');
?>
<html>
<head>
<title>Your Profile Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 style="color: white;text-decoration: underline;text-align: center;background: #1abc9c;font-size: 30px;"><center>VEHICLE RENTAL SERVICES</center></h1>
<div id="profile">
<b id="welcome"><h2>Welcome :</h2> 
<i>
<?php 
if(strcmp($login_session,"Baibhab Biswaranjan")==0)
	echo "<h3>".$login_session."(Admin)</h3>";
else
	"<h3>".$login_session."</h3>";

?></i></b>
<p align="right"><b><a href="logout.php">Log Out</a></b>
<hr color="green">
<?php
	$sql=mysqli_query($conn,"SELECT V_TYPE FROM user_details WHERE USERID='$user_check'");
	$row=mysqli_fetch_array($sql);
	echo $row['V_TYPE'];
?>
<button height="100" width="50">ADD VEHICLE DETAILS</button>
</div>
</body>
</html>