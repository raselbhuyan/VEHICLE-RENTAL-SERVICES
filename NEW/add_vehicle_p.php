<?php
include('session.php');
include('data.php');
//include('profile1.php');
$v_name=$_GET['field5'];
$user=$_SESSION['login_user'];
$sql=mysqli_query($conn,"SELECT V_TYPE,USERID FROM user_details WHERE USERID='$user'");
$row=mysqli_fetch_array($sql);
$type=$row['V_TYPE'];
//echo $user."<br>".$type; executing
$servername='localhost';
$username='root';
$password=' ';
$dbname='vehicle';
$conn2 = new mysqli($servername, $username, $password, $dbname);
if(!$conn2)
		die ('connection failsed');


//$sql2="INSERT INTO vehicle_details(USERID,V_TYPE,V_NAME) VALUES('$user',$type','$v_name')" ;
//$result=mysqli_fetch_array($sql2);
$result=mysqli_query($conn2,"INSERT INTO vehicledetails (USERID,V_TYPE,V_NAME) 
VALUES('$user','$type','$v_name')");
//echo $result;
if ($result!=NULL) 
{
 ?>
<html>
<body>
	<center>
	<p style="font-size: 20pt; color:#b20b00; ">Vehicle Details entered succesfully!</p>
	<br>
		<img src="happy.png" width="400" height="400">
		<p ><b><a href="profile1.php">Go Back</a></b>
	</center>
</body>
</html>
<?php
}


 

?>