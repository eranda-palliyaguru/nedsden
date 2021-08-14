<?php session_start();
if(isset($_COOKIE["user_login"])){}else{
if (isset($_SESSION["name"]))
{ } 	header("location:../index.php");}?>
