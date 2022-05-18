<?php
   require 'data.php';
   session_start();// Starting Session
// Storing Session
	$user_check=$_SESSION['login_user'];
	$ses_sql=mysqli_query($conn,"select NAME from user_details where USERID='$user_check'");
	$row = mysqli_fetch_array($ses_sql);
	$login_session =$row['NAME'];
	if(!isset($login_session))
	{
		mysql_close($conn); // Closing Connection
		header('Location: homepage.html'); // Redirecting To Home Page
	}
?>