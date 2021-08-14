<?php
include("../connect.php");

$name=$_POST['name'];
$code=$_POST['code'];
$make=$_POST['make'];
$model=$_POST['model'];
$sub_model=$_POST['sub_model'];
$part_type=$_POST['part_type'];
$date=date('Y-m-d');





$stmt = $db->query("SELECT * FROM sub_model WHERE id='$sub_model'");
while ($row = $stmt->fetch())
{ $sub_model_name=$row['name']; }

$sql = "INSERT INTO diagram (name, code, make_id, sub_model, sub_model_id, model_id, part_type) VALUES ('$name', '$code', '$make','$sub_model_name', '$sub_model', '$model', '$part_type')";
if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();

$stmt = $db->query("SELECT * FROM diagram WHERE action='0' ORDER by id DESC limit 0,1");
while ($row = $stmt->fetch())
{ $product_id=$row['id']; }


$file_name = $_FILES['image']['name'];
$file_type = $_FILES['image']['type'];
$file_size = $_FILES['image']['size'];
$temp_name = $_FILES['image']['tmp_name'];

$temp = explode(".", $file_name);
$file_name = "di_".date('ymdhis') . '.' . end($temp);

$upload_to = '../../../images/diagram/';

// checking file size
if ($file_size > 5000000000) {
  $errors[] = 'File size should be less than 500kb.';
}

if (!$file_size) {
  $errors[] = 'File size should be less than 500kb.';
}

if (empty($errors)) {
  $file_uploaded = move_uploaded_file($temp_name, $upload_to . $file_name);

  $sql = "UPDATE diagram
          SET img=?
  		WHERE id=?";
  $q = $db->prepare($sql);
  $q->execute(array($file_name,$product_id));

}




  header("location:../diagram?mg=New record created successfully");


 ?>
