<?php
 session_start();
setcookie("user_password", "");
setcookie("user_login", "");
$_SESSION =array();
setcookie("user_login", $name, time() -	(10 * 365 * 24 * 60 * 60));

header("location:../");
 ?>

 
