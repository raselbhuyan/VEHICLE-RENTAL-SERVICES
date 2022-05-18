<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: homepage.html"); // Redirecting To Home Page
}
?>