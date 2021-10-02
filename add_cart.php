<?php
 session_start();
 include('connect.php');

$id=$_POST['product'];
$qty=$_POST['qty'];

if (isset($id)) {

 if(isset($_COOKIE["ct"])){
$cookie_data = stripslashes($_COOKIE['ct']);
$cart_data = json_decode($cookie_data, true);
}

$stmt = $db->query("SELECT * FROM products WHERE id='$id' ");
 while ($row = $stmt->fetch())
 { $name=$row['name']; $img=$row['img']; }


$value = array(
  'id' => $id,
  'qty' => $qty,
  'name' => $name,
  'img' => $img,
 );

$cart_data[]= $value;
$item_data = json_encode($cart_data);

 setcookie("ct", $item_data, time() + (65 * 24 * 60 * 60));

 // code...
}

header("location:cart.php?success=1");





  ?>
