<?php
session_start();
session_destroy();
unset($_session['username']);
$_session['message']="You are now logged out.";
header("location: login.php");
?>