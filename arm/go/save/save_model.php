<?php
include("../connect.php");

$name=$_POST['name'];
$id=$_POST['make'];
$date=date('Y-m-d');

$stmt = $db->query("SELECT * FROM make WHERE id='$id'");
while ($row = $stmt->fetch())
{ $make_name=$row['name']; }

$sql = "INSERT INTO model (name, make_id,make_name, up_date) VALUES ('$name', '$id','$make_name', '$date')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();

header("location:../model");
 ?>
