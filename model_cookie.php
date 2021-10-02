<?php 
$id=$_GET['id'];




setcookie("model", $id, time() +	(10 * 365 * 24 * 60 * 60));

header("location:home");
?>