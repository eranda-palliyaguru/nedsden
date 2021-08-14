<?php
include("../connect.php");

$name=$_POST['name'];
$id=$_POST['model'];
$date=date('Y-m-d');

$stmt = $db->query("SELECT * FROM model WHERE id='$id'");
while ($row = $stmt->fetch())
{ $model_name=$row['name']; }

$sql = "INSERT INTO sub_model (name, model_id,model_name, up_date) VALUES ('$name', '$id','$model_name', '$date')";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();

header("location:../sub");
 ?>
