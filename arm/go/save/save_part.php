<?php
include("../connect.php");
$id=$_POST['id'];
$name=$_POST['name'];
$part_no=$_POST['part_no'];
$part_no1=$_POST['part_no1'];
$part_no2=$_POST['part_no2'];
$part_no3=$_POST['part_no3'];
$di_part_no=$_POST['di_part_no'];
$about=$_POST['about'];
$date=date('Y-m-d');



$about=str_replace("'"," ",$about);

$stmt = $db->query("SELECT * FROM diagram WHERE id='$id'");
while ($row = $stmt->fetch())
{ $sub_model=$row['sub_model'];
$sub_model_id=$row['sub_model_id'];}

$sql = "INSERT INTO part (name, part_number, diagram_id, sub_model, about, sub_model_id, diagram_part_no,part_number1, part_number2, part_number3) VALUES ('$name', '$part_no', '$id','$sub_model','$about','$sub_model_id','$di_part_no', '$part_no1', '$part_no2', '$part_no3')";
if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
//  echo "Error: " . $sql . "<br>" . $db->error;
}
//$db->close();

$stmt = $db->query("SELECT * FROM part WHERE action='0' ORDER by id DESC limit 0,1");
while ($row = $stmt->fetch())
{ $product_id=$row['id']; }


$file_name = $_FILES['image']['name'];
$file_type = $_FILES['image']['type'];
$file_size = $_FILES['image']['size'];
$temp_name = $_FILES['image']['tmp_name'];

$temp = explode(".", $file_name);
$file_name = "m_".date('ymdhis') . '.' . end($temp);

$upload_to = '../../../images/part/';

// checking file size
if ($file_size > 5000000000) {
  $errors[] = 'File size should be less than 500kb.';
}

if (!$file_size) {
  $errors[] = 'File size should be less than 500kb.';
}

if (empty($errors)) {
  $file_uploaded = move_uploaded_file($temp_name, $upload_to . $file_name);

  $sql = "UPDATE part
          SET img=?
  		WHERE id=?";
  $q = $db->prepare($sql);
  $q->execute(array($file_name,$product_id));

}


  header("location:../diagram_view?id=$id");


 ?>
