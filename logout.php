<?php
session_start();//strating the session
// Destroying All Sessions
if(session_destroy())//ending the session
{
// Redirecting To Home Page
header("Location: login.php");
}
?>